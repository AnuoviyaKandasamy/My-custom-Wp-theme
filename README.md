# Custom WordPress Theme – Assignment Submission

## 🔧 Installation Steps
1. Download or clone the theme folder.
2. Copy the `custom-wp-theme` folder into `wp-content/themes/` directory.
3. Go to WordPress admin → Appearance → Themes → Activate “Custom WP Theme”.
4. Create a page called **Home** and set it as Static Front Page from Settings → Reading.

---

## 🧩 Custom Post Types Used

### 1. **Testimonials**
- Registered via `register_post_type()` in `functions.php`.
- Supports: Title, Content, Featured Image.
- Displayed on homepage via `template-parts/testimonials.php`.

---

## 🚀 Performance Optimizations
- All images use `loading="lazy"` attribute.
- CSS & JS are properly enqueued via `functions.php` using `wp_enqueue_style()` and `wp_enqueue_script()`.
- Responsive design using media queries.
- Lightweight theme structure for fast load times.

---

## 📁 File Structure Overview

custom-wp-theme/ ├── front-page.php ├── header.php ├── footer.php ├── functions.php ├── style.css   │ ├── script.js/ │ └── images/  ├── index.php  └── README.md

---

## 📱 Responsive Design
- Mobile, tablet, and desktop responsive layout.
- All sections adapt to screen size using Flexbox & media queries.

---

## ✨ Bonus (If Applicable)
- SEO-friendly tags used (heading hierarchy, alt text for images).
- CTA section with button linking to contact page.

---

Thank you! 🙌



