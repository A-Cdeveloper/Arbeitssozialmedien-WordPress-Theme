# Arbeitssozialmedien WordPress Theme

A modern WordPress theme built with Bootstrap 5.3.8, Sass, and best practices for accessibility and SEO.

## 📋 Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Development](#development)
- [Project Structure](#project-structure)
- [Customization](#customization)
- [Browser Support](#browser-support)
- [License](#license)

## ✨ Features

- **Bootstrap 5.3.8** - Latest Bootstrap framework with custom configuration
- **Sass/SCSS** - Modular CSS architecture
- **Semantic HTML5** - Proper use of `<article>`, `<section>`, `<aside>`, `<nav>`, `<figure>`
- **WCAG Accessibility** - ARIA labels, semantic markup, screen reader support
- **ACF Integration** - Advanced Custom Fields support for flexible content
- **Custom Grid System** - 30-column grid with custom breakpoints
- **PrintFriendly Support** - PDF and print functionality
- **Responsive Design** - Mobile-first approach
- **WordPress Best Practices** - Clean, maintainable code structure

## 🔧 Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher
- Node.js 14+ and npm (for development)
- Advanced Custom Fields (ACF) Pro/Free plugin (optional but recommended)
- PrintFriendly plugin (optional)

## 📦 Installation

1.  Upload the theme folder to `/wp-content/themes/`
2.  Activate the theme through the 'Appearance' menu in WordPress
3.  Install required plugins:
    - Advanced Custom Fields (ACF)
    - PrintFriendly (for PDF functionality)
4.  Configure ACF fields as needed
5.  Install dependencies (for development):

## 🚀 Development

### Setting Up Development Environment

Navigate to theme directory:

Install dependencies:

### Available NPM Scripts

**Watch Sass files** (auto-compile on save):

**Build CSS with autoprefixer**:

**Compile main stylesheet** (compressed):

**Compile Bootstrap stylesheet** (compressed):

### SCSS Structure

```
scss/
├── style.scss          # Main stylesheet entry point
├── bootstrap.scss      # Bootstrap custom build with overrides
└── _main.scss          # Custom styles and components
```

### Custom Bootstrap Configuration

Bootstrap variables are customized in `scss/bootstrap.scss`:

- **Primary Color**: `#007BD1`
- **Secondary Color**: `#FCFCE8`
- **Custom Grid**: 30 columns
- **Custom Breakpoints**:
  - xs: 0
  - sm: 375px
  - md: 480px
  - lg: 600px
  - xl: 768px
  - xxl: 980px

## 📁 Project Structure

```
arbeitssozialmed/
├── scss/
│   ├── style.scss          # Main SCSS file
│   ├── bootstrap.scss      # Bootstrap customization
│   └── _main.scss          # Theme custom styles
├── loop-templates/
│   ├── content.php         # Main content template
│   └── content-none.php   # No content found template
├── global-templates/
│   ├── logo.php            # Logo component
│   ├── navbar.php          # Navigation menu
│   └── meta-menu.php       # Meta menu
├── functions.php           # Theme functions and setup
├── header.php              # Header template
├── footer.php              # Footer template
├── front-page.php          # Front page template
├── page.php                # Page template
├── index.php               # Index template
├── 404.php                 # 404 error page
├── style.css               # Compiled main stylesheet
├── bootstrap.css           # Compiled Bootstrap stylesheet
└── package.json            # NPM dependencies
```

## 🎨 Customization

### Custom Colors

Edit variables in `scss/bootstrap.scss`:

```
$primary: #007bd1;
$secondary: #fcfce8;
```

### Custom Grid System

The theme uses a 30-column grid system. Configure in `scss/bootstrap.scss`:

```
$grid-columns: 30;
$grid-gutter-width: 0;
```

### Logo

- Logo can be set via ACF Options page (`General Settings`)
- Fallback: `images/logo_kompetenzzentrum_01.png`
- File: `global-templates/logo.php`

### Navigation

- Main menu location: `main_menu`
- Meta menu location: `meta_menu`
- Uses Bootstrap 5 navbar component

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- IE11+ (with polyfills if needed)

## ♿ Accessibility Features

- Semantic HTML5 elements
- ARIA labels and roles
- Screen reader friendly
- Keyboard navigation support
- WCAG 2.1 AA compliance ready

## 📝 Content Structure

The theme uses ACF for flexible content:

- `main_headline` - Main page heading
- `content_blocks` - Repeater field with:
  - `headline` - Section heading
  - `content` - Section content (WYSIWYG)

## 🔌 Required Plugins

### Recommended Plugins

1.  **Advanced Custom Fields** - For flexible content management
2.  **PrintFriendly** - For PDF and print functionality

## 📄 License

GNU General Public License v2 or later

## 👤 Author

**E-SEO TEAM**

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

## 📞 Support

For support, please open an issue or contact the theme maintainers.

---

**Version:** 1.0.0  
**Last Updated:** 2025

```
npm run build:bootstrap
```

```
npm run build:css
```

```
npm run prefix:css
```

```
npm run watch:sass
```

```
npm install
```

```
cd wp-content/themes/arbeitssozialmed
```

```
npm install
```
