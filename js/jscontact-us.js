// ==========================================================================
// Contact Us JavaScript
// ==========================================================================

//Out of hours IT Support Drop Down Function
$(document).ready(function() {
    $('.Ofh-button').click(function(e) {
        var oftDropDown = $('.ofh-it-support-hidden, .ofh-it-support-active');
        
        // If it's hidden, make it active, and vice versa
        if (oftDropDown.hasClass('ofh-it-support-hidden')) {
            oftDropDown.removeClass('ofh-it-support-hidden').addClass('ofh-it-support-active');
        } else if (oftDropDown.hasClass('ofh-it-support-active')) {
            oftDropDown.removeClass('ofh-it-support-active').addClass('ofh-it-support-hidden');
        }
        
        e.stopPropagation(); 
    });
});

// Contact Us Form Validation

// // Email validator 
// const $form_TelNo = $('#telephone'); 
// let isValidTelNo = ()=> /^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test($form_TelNo.val());
// const $form_EmailAddress = $('#email');
// let isValidEmailAddress = ()=> /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($form_EmailAddress.val());

// // Checks if fields are empty in form elements
// function validateForm() {
//   let nameForm = document.forms["contactForm"]["name"].value;
//   let phonenumberForm = document.forms["contactForm"]["telephone"].value;
//   let emailaddressForm = document.forms["contactForm"]["email"].value;
//   let messageForm = document.forms["contactForm"]["message"].value;

//   if (nameForm == "") {
//     alert("First Name must be filled out");
//     return false;
//   } else if (phonenumberForm == "") {
//     alert("Phone number must be filled out");
//    return false;
//   } else if (!isValidTelNo()) {
//     alert("Not a valid telephone number");
//     return false;
//   } else if (emailaddressForm == "") {
//     alert("Email Address must be filled out");
//    return false; 
//   } else if (!isValidEmailAddress()) {
//     alert("Not a valid email address");
//     return false;
//   } else if (messageForm == "") {
//     alert("Message must be filled out");
//    return false;
//   } else {
//     return true;
//   }
// }

// Email validator 
const $form_TelNo = $('#telephone'); 
let isValidTelNo = ()=> /^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test($form_TelNo.val());
const $form_EmailAddress = $('#email');
let isValidEmailAddress = ()=> /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($form_EmailAddress.val());

// Checks if fields are empty in form elements
function validateForm() {
  let isValid = true;

  // Get the form fields
  let nameForm = document.forms["contactForm"]["name"];
  let phonenumberForm = document.forms["contactForm"]["telephone"];
  let emailaddressForm = document.forms["contactForm"]["email"];
  let messageForm = document.forms["contactForm"]["message"];

  // Reset all previous errors
  $('.form-control').removeClass('has-error');

  // Validate Name
  if (nameForm.value == "") {
    $(nameForm).addClass('has-error');
    isValid = false;
  }

  // Validate Phone Number
  if (phonenumberForm.value == "") {
    $(phonenumberForm).addClass('has-error');
    isValid = false;
  } else if (!isValidTelNo()) {
    $(phonenumberForm).addClass('has-error');
    isValid = false;
  }

  // Validate Email Address
  if (emailaddressForm.value == "") {
    $(emailaddressForm).addClass('has-error');
    isValid = false;
  } else if (!isValidEmailAddress()) {
    $(emailaddressForm).addClass('has-error');
    isValid = false;
  }

  // Validate Message
  if (messageForm.value == "") {
    $(messageForm).addClass('has-error');
    isValid = false;
  }

  // Return if the form is valid or not
  return isValid;
}

// // Prevents the page from refreshing when you click on the submit button
const $submitBtn = $('#submitBtn');

$submitBtn.on('click', function(event){
   if (validateForm() ) {
     alert('Form Submitted')
    $('#contact-form')[0].reset();
    //document.getElementsByClassName(".form").reset();
   } else
  event.preventDefault();
});