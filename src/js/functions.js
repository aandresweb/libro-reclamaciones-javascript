const setColorInBanner = (color) => {
    let banner_title = document.getElementById('banner-title');
    banner_title.style.background = color;
}
const setLogo = (url) => {
    let logo_img = document.getElementById('logo-img');
    logo_img.src = url
}
const setColorInFormElements = (color) => {
    let inputs = document.getElementsByClassName('input');
    for(let input of inputs){
        input.style.borderColor = `${color}6b`;
    }
    let labels = document.getElementsByClassName('label');
    for(let label of labels){
        label.style.color = color;
    }
    let titles = document.getElementsByClassName('title-group');
    for(let title of titles){
        title.style.color = color
    }
    let selects = document.getElementsByClassName('select');
    for(let select of selects){
        select.style.borderColor = `${color}6b`;
    }
    let buttons = document.getElementsByClassName('button');
    for(let button of buttons){
        button.style.background = color
    }
}
const setCompanyName = (company) =>{
    let banner_company = document.getElementById('banner-company');
    banner_company.innerText = company;
    let company_name = document.getElementById('company-name');
    company_name.value = company;
}
const setCurrentDate = () => {
    let banner_date = document.getElementById('banner-date');
    banner_date.innerText = getCurrentDate();
}
const clearErrors = () => {
    let errors = document.getElementsByClassName('error');
    for(let error of errors){
        error.innerText = '';
    }
}
const renderErrors = (errors) => {
    for(let [key, error] of Object.entries(errors)){
        // document.getElementsByName(key)[0].classList.add('error');
        document.getElementById(`error_${key}`).innerText = error;
    }
}
const getCurrentDate = () => {
    let today = new Date();
    let dd = String(today.getDate()).padStart(2, '0');
    let mm = String(today.getMonth() + 1).padStart(2, '0'); 
    let yyyy = today.getFullYear();

    return today = dd + '/' +  mm + '/' + yyyy;
}
const setUrls = (url) => {
    let back_button = document.getElementById('back-button');
    back_button.href = url;
    let logo_img_button = document.getElementById('logo-img-button');
    logo_img_button.href = url;
}
const setFavicon = (url) => {
    let favicon = document.getElementById('favicon');
    favicon.href = url;
}
const setEmailRecipient = (email) => {
    let email_recipient = document.getElementById('email-recipient');
    email_recipient.value = email;
}


export default {
    setColorInBanner,
    setLogo,
    setColorInFormElements,
    setCompanyName,
    setCurrentDate,
    clearErrors,
    renderErrors,
    setUrls,
    setEmailRecipient,
    setFavicon,
}