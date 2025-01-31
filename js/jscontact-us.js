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
//let isValidTelNo = ()=> /^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test($form_TelNo.val());
const $form_EmailAddress = $('#email');
//let isValidEmailAddress = ()=> /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($form_EmailAddress.val());

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
  }

  // Validate Email Address
  if (emailaddressForm.value == "") {
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

// // // Prevents the page from refreshing when you click on the submit button
// const $submitBtn = $('#submitBtn');

// $submitBtn.on('click', function(event){
//    if (validateForm() ) {
//      alert('Form Submitted')
//     $('#contact-form')[0].reset();
//     //document.getElementsByClassName(".form").reset();
//    } else
//   event.preventDefault();
// });

// Prevents the page from refreshing when you click on the submit button
// const $submitBtn = $('#submitBtn');

// $submitBtn.on('click', function(event) {
//    // Check if the form is valid
//    if (validateForm()) {
//      // Allow form submission to trigger the PHP validation
//      $('#contact-form').submit();
//    } else {
//      // Prevent form submission if JavaScript validation fails
//      event.preventDefault();
//    }
// });

// Listen for the submit button click
const $submitBtn = $('#submitBtn');

$submitBtn.on('click', function(event) {
  // First, run JavaScript form validation
  if (validateForm()) {
    // If the form is valid, prevent the default form submission
    event.preventDefault();

    // Gather the form data
    const formData = $('#contact-form').serialize(); // Serializes the form fields into a query string

    $.ajax({
        url: 'inc/contactform.php', // Make sure this path is correct
        type: 'POST',
        data: formData, // Send the serialized form data
        success: function(response) {
          // Log the response for debugging
          console.log(response);
      
          // Check if the response was successful
          if (response.success) {
            // If PHP validation is successful
            alert('Form submitted successfully!');
            $('#contact-form')[0].reset(); // Reset the form fields
          } else {
            // If there are errors, display them using the displayErrors function
            //displayErrors(response.errors);
          }
        },
        error: function(xhr, status, error) {
          // Handle any errors that occur during the AJAX request
          console.error('Error occurred:', error);
          alert('An error occurred while submitting the form.');
        }
      });
  } else {
    // If JS validation fails, prevent form submission
    event.preventDefault();
  }

   // Function to display errors returned by PHP
 function displayErrors(errors) {
     $('.form-control').removeClass('alert-danger-active'); // Reset previous errors
  
     // Check if errors are returned for each field and add the 'has-error' class
     if (errors.name) {
       $('#name').addClass('alert-danger-active');
     }
     if (errors.email) {
       $('#email').addClass('alert-danger-active');
     }
    if (errors.telephone) {
       $('#telephone').addClass('alert-danger-active');
     }
    if (errors.message) {
       $('#message').addClass('alert-danger-active');
     }
  
     // Create HTML to display the error messages
     let errorHtml = '';
     for (const field in errors) {
       errorHtml += `<p>${errors[field]}</p>`;
     }
  
     // Display the errors in the alert-danger div
    $('.alert-danger').html(errorHtml).show();
   }
});

// // Function to display errors returned by PHP
// function displayErrors(errors) {
//   $('.form-control').removeClass('has-error'); // Reset previous errors
//   if (errors.name) $('#name').addClass('has-error');
//   if (errors.email) $('#email').addClass('has-error');
//   if (errors.telephone) $('#telephone').addClass('has-error');
//   if (errors.message) $('#message').addClass('has-error');
//   // Display PHP errors (if any)
//   let errorHtml = '';
//   for (const field in errors) {
//     errorHtml += `<p>${errors[field]}</p>`;
//   }
//   $('.alert-danger').html(errorHtml).show(); // Show the error alert
// }