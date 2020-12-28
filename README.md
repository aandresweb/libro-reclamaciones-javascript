# Libro de reclamaciones 
### Usage

Search the ***"src/js/app.js"*** file and change the value of the following constants to configure the identity of the page
```javascript
const MAIN_COLOR        =       '#000';
const COMPANY_NAME      =       'Ejemplo';
const MAIN_URL          =       'http://aandresweb.com';
const LOGO_URL          =       'https://aandresweb.com/img/logo-lentes.png';
const FAVICON_URL       =       'https://aandresweb.com/img/logo-lentes.png';
const EMAIL_RECIPIENT   =       'example@mail.com';
const RECAPTCHA_SECRET  =       '###';
```

Also remember to change the public recaptcha key in "***src/index.html***" file in 139 line
```html
<div class="mb-3 text-center">
    <div class="g-recaptcha d-flex justify-content-center" data-sitekey="###">
</div>
```

Run the following script to install ***package.json** dependencies
```bash
npm i
```
Run the following script to install **composer.json** dependencies
```bash
composer i
```
