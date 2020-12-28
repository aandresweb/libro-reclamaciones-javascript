import '../css/app.css';
import functions from "./functions.js";
import * as Validator from 'validatorjs';
import serialize from 'form-serialize';
import axios from 'axios';
  
/**************************************************************
!**************** SETTING URL'S AND COLORS ********************
***************************************************************/

const MAIN_COLOR        =       '#000';
const COMPANY_NAME      =       'Ejemplo';
const MAIN_URL          =       'http://aandresweb.com';
const LOGO_URL          =       'https://aandresweb.com/img/logo-lentes.png';
const FAVICON_URL       =       'https://aandresweb.com/img/logo-lentes.png';
const EMAIL_RECIPIENT   =       'example@mail.com';
const RECAPTCHA_SECRET  =       '###';

window.onload = () => {
    functions.setColorInFormElements(MAIN_COLOR);
    functions.setColorInBanner(MAIN_COLOR);
    functions.setCompanyName(COMPANY_NAME);
    functions.setCurrentDate();
    functions.setLogo(LOGO_URL);
    functions.setUrls(MAIN_URL);
    functions.setEmailRecipient(EMAIL_RECIPIENT);
    functions.setFavicon(FAVICON_URL);
}

const form_reclamaciones = document.getElementById('form-reclamaciones');
const reload = document.getElementById('reload');
reload.addEventListener('click', function(e){
    e.preventDefault();
    location.reload();
});
form_reclamaciones.addEventListener('submit', function(e){
    e.preventDefault();
    functions.clearErrors();
    let rules = {
        nombre: 'required',
        apellido_paterno : 'required',
        apellido_materno: 'required',
        tipo_documento: 'required',
        numero_documento: 'required|integer',
        tipo_reclamante: 'required',
        ruc: 'integer',
        tipo: 'required',
        telf_cel: 'required|integer',
        email: 'required|email',
        direccion: 'required',
        descripcion: 'required',
        detalle: 'required',
        policies_check: 'accepted',
    };
    let customMessages = {
        required: 'El campo es obligatorio',
        email: 'El campo debe ser un email válido',
        accepted: 'Este campo debe ser aceptado',
        integer: 'Este campos solo acepta números'
    }
    
    let form_serialize      = serialize(form_reclamaciones, { hash: true })
    let validate            = new Validator(form_serialize, rules, customMessages);
    let validateStatus      = validate.passes();
    let validateErrors      = validate.errors.all();

    if(!validateStatus){
        functions.renderErrors(validateErrors);
    }
    else{
        let data = `${serialize(form_reclamaciones)}&secret_key=${RECAPTCHA_SECRET}`;
        axios.post('app/Mail.php', data)
             .then(res => {
                 console.log(res.data);
                 if(res.data.success)
                 {
                    form_reclamaciones.style.display = 'none';
                    document.getElementById('response').style.display = 'block';
                 }
                 else{
                    alert(res.data.message);
                 }
             });
    }
    
});
