UIkit.util.ready(_ => {
    // Coupons Modal Link
    let menuItems1 = document.getElementsByClassName('coupons-modal-link');
    for (let menuItem1 of menuItems1) {
        menuItem1.addEventListener('click', e => {
            e.preventDefault();
            UIkit.modal('#coupons-modal').show(); 
        });
    }
    
    // Services Modal Link
    let menuItems2 = document.getElementsByClassName('services-modal-link');
    for (let menuItem2 of menuItems2) {
        menuItem2.addEventListener('click', e => {
            e.preventDefault();
            UIkit.modal('#services-modal').show(); 
        });
    }
    
    // About Us Modal Link
    let menuItems3 = document.getElementsByClassName('about-us-modal-link');
    for (let menuItem3 of menuItems3) {
        menuItem3.addEventListener('click', e => {
            e.preventDefault();
            UIkit.modal('#about-us-modal').show(); 
        });
    }
        // and so on…
        // repeat these blocks for as many modals as you have
});

function heightChange() {
    document.querySelector('iframe').style.height = "100%";
 }


// add uikit form classes to gravity forms  
    jQuery(document).ready(function () {      
    jQuery('.gform_wrapper form').addClass('uk-form');  
    jQuery('.gform_wrapper fieldset').addClass('uk-fieldset');  
    jQuery('.gform_wrapper legend').addClass('uk-legend');  
    jQuery('.gform_wrapper input').addClass('uk-input'); 
    jQuery('.gf_coupon_code input[type="text"]').addClass('uk-width-1-1');
    jQuery('.ginput_stripe_creditcard input[type="text"]').addClass('uk-input');
    jQuery('#input_4_7_1').addClass('uk-input'); 
    jQuery('.gform_wrapper select').addClass('uk-select');  
    jQuery('.gform_wrapper textarea').addClass('uk-textarea'); 
    jQuery('.gform_wrapper input[type="radio"]').addClass('uk-radio');  
    jQuery('.gform_wrapper input[type="checkbox"]').addClass('uk-checkbox');
    jQuery('.gfield_description').addClass('uk-text-uppercase uk-text-emphasis'); 
    jQuery('.gform_wrapper input[type="submit"]').addClass('uk-button uk-button-secondary uk-width-auto uk-button-mobile');
    jQuery('.gform_wrapper input[type="button"]').addClass('uk-button uk-button-primary uk-width-auto uk-button-mobile');
}); 

// add uikit form classes to acfe forms  
    jQuery(document).ready(function () {      
    jQuery('.acfe-form form').addClass('uk-form');  
    jQuery('.acfe-form fieldset').addClass('uk-fieldset');  
    jQuery('.acfe-form legend').addClass('uk-legend');  
    jQuery('.acfe-form input').addClass('uk-input');  
    jQuery('.acfe-form select').addClass('uk-select');  
    jQuery('.acfe-form textarea').addClass('uk-textarea');
    jQuery('.acfe-form input[type="radio"]').addClass('uk-radio');  
    jQuery('.acfe-form input[type="checkbox"]').addClass('uk-checkbox');
    jQuery('.acfe-form input[type="range"]').addClass('uk-range');
    jQuery('.acfe-form p').addClass('uk-text-small uk-text-uppercase uk-text-emphasis'); 
    jQuery('.acfe-form label').addClass('uk-text-uppercase uk-text-primary');
    jQuery('.acfe-form input[type="number"]').prop("pattern", '[0-9]*');
    jQuery('.acfe-form input[type="submit"]').addClass('uk-button uk-button-primary uk-width-auto');
}); 

// add uikit form classes to favorites button 
    jQuery(document).ready(function () {      
    jQuery('.simplefavorite-button').addClass('uk-button uk-button-danger uk-width-1-1 uk-margin-remove-top');
    jQuery('.simplefavorite-button.preset').addClass('uk-button uk-button-danger uk-width-1-1 uk-margin-remove-top');
    jQuery('.simplefavorite-button has-count').addClass('uk-button uk-button-danger uk-width-1-1 uk-margin-remove-top');
}); 