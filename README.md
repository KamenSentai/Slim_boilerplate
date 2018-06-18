# Slim Framwork template

## Description
- Template using Slim Framework for back-end and some front-end tools

## Technologies
- PHP
- Twig
- Stylus
- ES6 JavaScript

## Tools
- Slim
- Gulp
- Babel
- ESLint
- CSScomb

## Features
- SMACSS
- MVC
- Namespaces
- Routing
- Database

## Usage
- Run `npm install` to install front-end dependencies
- Run `composer install` to install back-end dependencies
- Run `gulp` to start editing the project

## Edit
- Directory
    - Edit the value of `path.project` in `gulpfile.js`
    - Update the depth of folders of `depth` in `gulpfile.js`
- Namespaces
    - Change the namespaces used for the project in `composer.json`
    - Run `composer update`

## System
- Change the variable `DB_PORT` in `includes/settings/config.php`
    - Set `8889` for Mac
    - Set `3306` for Windows
- Change the key `browser` in the watch task in `gulpfile.js`
    - Set `Google Chrome` for Mac
    - Set `Chrome` for Windows

## Composition
- Front-end in `build/`
- Back-end in `includes/`
- Export in `public/`
- Configuration in `config/`
- `node_modules/` generated on running `npm install`
- `vendor/` generated on running `composer install`
- `public/` generated on running `gulp`
- Some suggestions
    - `database/` at the root for JSON and SQL files
    - `assets/` contains any front file but styles and scripts
- Task runner depends on this composition
- Any composition change requires the task runner checkout
```
┌─ README.md
├─ LICENSE
├─ .gitignore
├─ composer.json
├─ composer.lock
├─ package.json
├─ package-lock.json
├─ gulpfile.js
├─ .babelrc
├─ config
├─ node_modules/
├─ vendor/
├─ database/
├─ build/
│   ├─ assets/
│   │   ├─ audios/
│   │   ├─ favicons/
│   │   ├─ fonts/
│   │   ├─ images/
│   │   ├─ videos/
│   │   └─ ...
│   ├─ styles/
│   │   ├─ app.styl
│   │   ├─ bases/
│   │   ├─ layouts/
│   │   ├─ modules/
│   │   └─ tools/
│   └─ scripts/
│       ├─ app.js
│       ├─ libs/
│       └─ components/
├─ includes/
│   ├─ index.php
│   ├─ .htaccess
│   ├─ controllers/
│   ├─ models/
│   ├─ routes/
│   │   ├─ page.php
│   │   └─ routing.php
│   ├─ settings/
│   │   ├─ config.php
│   │   ├─ setup.php
│   │   └─ container.php
│   └─ views/
│       ├─ index.twig
│       ├─ pages/
│       ├─ partials/
│       └─ layouts/
└─ public/
```

## License
- This repository is under MIT license

## Author
- [Alain Cao Van Truong](https://www.alain-caovantruong.fr)