import os
import re

backup_dir = '_legacy_php_backup'
src_app_dir = 'src/app'

files_to_convert = [
    ('index.php', 'page.tsx'),
    ('about.php', 'about/page.tsx'),
    ('services.php', 'services/page.tsx'),
    ('contact.php', 'contact/page.tsx'),
    ('auto-dialer.php', 'auto-dialer/page.tsx'),
    ('call-center.php', 'call-center/page.tsx'),
    ('did-numbers.php', 'did-numbers/page.tsx'),
    ('hosted-pbx.php', 'hosted-pbx/page.tsx'),
    ('retail-voice.php', 'retail-voice/page.tsx'),
    ('wholesale.php', 'wholesale/page.tsx'),
]

globals_css_path = os.path.join(src_app_dir, 'globals.css')

def convert_html_to_jsx(html):
    # Basic class to className
    html = html.replace('class=', 'className=')
    # Simple self closing tags
    html = re.sub(r'<img([^>]*?)(?<!/)>', r'<img\1 />', html)
    html = re.sub(r'<input([^>]*?)(?<!/)>', r'<input\1 />', html)
    html = re.sub(r'<br([^>]*?)(?<!/)>', r'<br\1 />', html)
    html = re.sub(r'<hr([^>]*?)(?<!/)>', r'<hr\1 />', html)
    # Style attribute to object (very naive, usually fails, so we will use a regex if needed, but the original used style="...")
    # Actually, a better way is to use a regex to convert style="key: value; key2: value2;" to style={{ key: 'value', key2: 'value2' }}
    # But since that's hard, let's just do a basic replace for the common ones.
    
    def style_replacer(match):
        style_str = match.group(1)
        styles = []
        for prop in style_str.split(';'):
            prop = prop.strip()
            if not prop: continue
            if ':' not in prop: continue
            k, v = prop.split(':', 1)
            k = k.strip()
            v = v.strip()
            # camelCase the key
            k = re.sub(r'-([a-z])', lambda m: m.group(1).upper(), k)
            styles.append(f"{k}: '{v}'")
        return 'style={{ ' + ', '.join(styles) + ' }}'
        
    html = re.sub(r'style="([^"]*)"', style_replacer, html)
    
    # Replace <a href="some.php"> with <Link href="/some">
    def link_replacer(match):
        attrs = match.group(1)
        href_match = re.search(r'href="([^"]+)"', attrs)
        if href_match:
            href = href_match.group(1)
            if href.endswith('.php'):
                if href == 'index.php': href = '/'
                else: href = '/' + href[:-4]
            attrs = attrs.replace(href_match.group(0), f'href="{href}"')
        return f'<Link{attrs}>'

    html = re.sub(r'<a([^>]*)>', link_replacer, html)
    html = html.replace('</a>', '</Link>')
    
    # Fix html comments
    html = re.sub(r'<!--(.*?)-->', r'{/* \1 */}', html)
    
    return html

all_styles = []

for php_file, out_path in files_to_convert:
    in_file = os.path.join(backup_dir, php_file)
    if not os.path.exists(in_file):
        continue
    
    with open(in_file, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
        
    # Extract style
    style_match = re.search(r'<style>(.*?)</style>', content, re.DOTALL)
    if style_match:
        all_styles.append(f"/* Styles from {php_file} */\n" + style_match.group(1).strip() + "\n")
        
    # Extract body content between NAVBAR and FOOTER
    # We will just look for everything after </nav> and before <footer>
    # since we already extracted Navbar and Footer.
    body_match = re.search(r'</nav>(.*?)<!-- FOOTER -->', content, re.DOTALL)
    if not body_match:
        body_match = re.search(r'</nav>(.*?)<footer>', content, re.DOTALL)
        
    if body_match:
        inner_html = body_match.group(1).strip()
    else:
        # Fallback if no nav/footer
        inner_html = ""
        
    # Remove <script src="...bootstrap..."></script>
    inner_html = re.sub(r'<script.*?</script>', '', inner_html, flags=re.DOTALL)
    
    jsx = convert_html_to_jsx(inner_html)
    
    # Wrap in React component
    page_code = f"""import Link from 'next/link';
import type {{ Metadata }} from 'next';

export const metadata: Metadata = {{
  title: 'First Step Technology - {php_file.replace('.php', '').replace('-', ' ').title()}',
}};

export default function Page() {{
  return (
    <main>
      {jsx}
    </main>
  );
}}
"""
    
    out_file = os.path.join(src_app_dir, out_path)
    os.makedirs(os.path.dirname(out_file), exist_ok=True)
    with open(out_file, 'w', encoding='utf-8') as f:
        f.write(page_code)
        
# Append styles
if all_styles:
    with open(globals_css_path, 'a', encoding='utf-8') as f:
        f.write("\n\n" + "\n".join(all_styles))

print("Conversion complete!")
