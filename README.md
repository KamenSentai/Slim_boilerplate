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
- Run `npm install` to install front-end depedencies
- Run `composer install` to install back-end depedencies
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

## License
- This repository is under MIT license

## Author
- [Alain Cao Van Truong](www.alain-caovantruong.fr)