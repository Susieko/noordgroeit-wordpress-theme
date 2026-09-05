# NoordgroeiT + NoordbuiTen WordPress Theme

Custom WordPress theme for [Stichting NoordgroeiT](https://noordgroeit.nl/), a Tilburg-Noord community organisation. The site brings NoordgroeiT and its initiative NoordbuiTen together in one responsive website focused on local initiatives, activities, volunteering, collaboration and transparency.

Developed by **Susan Aben**.

## What this project demonstrates

- Custom WordPress theme development with PHP
- Responsive layouts with plain CSS
- Vanilla JavaScript interactions and motion
- Custom post types for agenda items and vacancies
- Custom WordPress admin fields for agenda date, time and location
- Custom contact form handling with nonce validation, sanitisation and a honeypot field
- MailPoet newsletter integration
- Accessible navigation, skip links and reduced-motion support
- Image lazy-loading and page-specific asset loading
- Performance and accessibility optimisation during production QA

The live homepage reached **100 / 100 / 100 / 100** in desktop Lighthouse for Performance, Accessibility, Best Practices and SEO during the final QA pass.

## Project structure

```text
.
├── assets/
│   ├── css/
│   │   ├── pages/
│   │   │   └── home.css
│   │   ├── source/
│   │   │   └── ... modular inner-page CSS
│   │   └── responsive.css
│   ├── images/
│   └── js/
│       ├── source/
│       │   └── ... modular JavaScript
│       └── site.js
├── tools/
│   ├── build-css.php
│   └── build-js.php
├── front-page.php
├── functions.php
├── header.php
├── footer.php
├── page-*.php
├── single-*.php
└── style.css
```

## CSS workflow

The homepage has its own stylesheet because its layout and components are substantially different from the inner pages:

```text
assets/css/pages/home.css
```

Inner-page CSS is maintained as readable source modules in:

```text
assets/css/source/
```

WordPress loads the generated root `style.css`. Rebuild it from the theme directory with:

```bash
php tools/build-css.php
```

The build script only concatenates the source files in an explicit order; it has no external dependencies.

## JavaScript workflow

JavaScript is maintained by feature/page in:

```text
assets/js/source/
```

WordPress loads the generated bundle:

```text
assets/js/site.js
```

Rebuild it with:

```bash
php tools/build-js.php
```

Again, this is a small dependency-free concatenation step rather than a framework or package-based build system.

## WordPress setup

This repository contains the **theme**, not WordPress core, the production database or uploaded CMS content.

To run it locally:

1. Install WordPress locally.
2. Copy the theme into `wp-content/themes/noordgroeit-merged`.
3. Activate the theme in WordPress.
4. Create the pages used by the templates and assign the matching page templates where necessary.
5. Set a static homepage that uses `front-page.php`.
6. Save the permalink settings once after creating the custom post types/pages.

### Plugin integrations

- **MailPoet** is used for the newsletter form in the footer.
- **TranslatePress** is supported by the language switcher when installed; the theme falls back gracefully when it is not active.

The custom contact form uses WordPress `wp_mail()`, so local or production mail delivery depends on the WordPress/hosting mail configuration.

## Content types

### Agenda

The theme registers the `agenda_item` custom post type. Agenda entries support:

- title
- editor content
- excerpt
- featured image
- date
- time
- location

Individual agenda items use `/activiteit/...` permalinks.

### Vacancies

Vacancies use a custom `vacature` post type and a dedicated vacancies overview page.

### News

Regular WordPress posts are presented as news items with custom overview and single-post layouts.

## Accessibility and motion

Motion is progressive enhancement. JavaScript-driven reveals respect `prefers-reduced-motion`, and content remains accessible when animation support is unavailable.

The theme also includes:

- semantic landmarks
- keyboard-accessible navigation
- visible focus states
- skip navigation
- ARIA state handling for the mobile menu and submenus
- responsive layouts for desktop, tablet and mobile

## Notes

Branding, photography and partner logos in this repository belong to NoordgroeiT, NoordbuiTen and their respective owners. They are included as project assets and are not offered as reusable stock material.
