![OA_Logo-01](https://github.com/Oraco-Dev/wp_template_theme/assets/134240689/bf5bb655-e019-4dd4-a156-dd2a17382c6d)

ORACO TEMPLATE WORDPRESS THEME - DO NOT OVERRIDE REPO TEMPALTE UNLESS ADDING BASE CONFIGURATION

TO START NEW THEME CLONE INTO REPO AND - CHANGE REPO SO WHEN YOU ADD ONTO THEME AND PUSH CHANGES YOUR PUSHING IT INTO A PRIVATE CLIENT REPO.

GIT CLONE https://github.com/Oraco-Dev/wp_template_theme/

## Webpack 5 WordPress Theme Boilerplate

Provides a boilerplate WordPress theme that features a webpack 5 build for CSS/SASS and JavaScript. The webpack configuration is defined in the [webpack.config.js](./webpack.config.js), and the compiled assets are included in the WordPress theme via code in the [functions.php](./functions.php).

## Development

After deploying and enabling the theme on a WordPress instance (see _Deploying the Theme_ section below), install the theme dependencies by running the following command in the theme root (e.g. `/wp-content/themes/wp-barebones-theme-webpack5-sass`):

```
npm install
```

## Build

Various build commands are available that execute the webpack 5 builds:

- `npm run build` - development webpack build (`webpack --mode development`).
- `npm run dist` - production webpack build, with code minification enabled (`webpack --mode production`).
- `npm run watch` - development watch command.

## Deploying the Theme

This theme can be downloaded and deployed into a WordPress instance's themes directory (i.e. `/wp-content/themes`). Once the theme is deployed, run the build commands (`npm install` and `npm run dist`) to install and build the JavaScript and CSS.
