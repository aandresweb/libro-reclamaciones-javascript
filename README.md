# Libro de reclamaciones 
### Usage and installation
Clone the repository
```bash
git clone https://github.com/aandresweb/libro-reclamaciones-javascript
```
Search the ***"app/Mail.php"*** file and change the username, password and host to send mails
```php
//Server settings
$mail->SMTPDebug = 0;                                               // Enable verbose debug output
$mail->isSMTP();                                                    // Set mailer to use SMTP
$mail->Host       = 'mail.host.com';                                // Specify main and backup SMTP servers
$mail->SMTPAuth   = true;                                           // Enable SMTP authentication
$mail->Username   = 'example@mail.com';                             // SMTP username
$mail->Password   = "password";                                     // SMTP password
$mail->SMTPSecure = 'tls';                                          // Enable TLS encryption, `ssl` also accepted
$mail->Port       = 26;                                             // TCP port to connect to

//Recipients
$mail->setFrom('example@mail.com', $_POST['company_name'] . " WEB");
```

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

Also remember to change the public recaptcha key changing the value of ***data-sitekey*** attribute in "***src/index.html***" file in 140 line
```html
    <div class="g-recaptcha d-flex justify-content-center" data-sitekey="###">
```

Run the following script to install **package.json** dependencies
```bash
npm i
```
Run the following script to install **composer.json** dependencies
```bash
composer i
```
Finally run the following script to bundle your files using webpack
```bash
npx webpack
```
### Deployment

To deploy the website you must upload the following files and folders
 - index.html
 - bundle.js
 - app
 - vendor
