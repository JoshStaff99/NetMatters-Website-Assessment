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

const $form_TelNo = $('#telephone'); 
const $form_EmailAddress = $('#email');

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
      
          // Check if the response was successful (PHP validation passed)
          if (response.success) {
            // Display a success message in the alert container
            displaySuccessMessage('Your message has been sent successfully!');

            // Reset the form fields
            $('#contact-form')[0].reset(); 
          } else {
            // If there are errors, display them using the displayErrors function
            displayErrors(response.errors);
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

});

// Function to display errors returned by PHP
function displayErrors(errors) {
  $('#alert').hide(); // Hide previous error messages

  $('.form-control').removeClass('has-error'); // Reset previous errors

  // Check if errors are returned for each field and add the 'has-error' class
  if (errors.name) {
    $('#name').addClass('has-error');
  }
  if (errors.email) {
    $('#email').addClass('has-error');
  }
  if (errors.telephone) {
    $('#telephone').addClass('has-error');
  }
  if (errors.message) {
    $('#message').addClass('has-error');
  }

  // Create HTML to display the error messages
  let errorHtml = '';
  for (const field in errors) {
    errorHtml += `<p class="alert-danger-active">${errors[field]}</p>`;
  }

  // Display the errors in the alert-danger div
  $('#alert').html(errorHtml).show();
}

// Function to display a success message
function displaySuccessMessage(message) {
  // Hide any previous messages
  $('.alert.alert-danger-hidden').hide();

  // Show the success message in the alert-danger div
  $('.alert.alert-danger-hidden').removeClass('alert-danger-hidden').addClass('alert alert-success').html(message).show();
}