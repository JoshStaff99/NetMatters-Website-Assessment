<?php
require_once 'connection.php';

header('Content-Type: application/json');

// $form_TelNo = $_POST['telephone'];  // Assuming the telephone input is coming from a POST request
// $form_EmailAddress = $_POST['email'];  // Assuming the email input is coming from a POST request

// // Telephone validation
// function isValidTelNo($form_TelNo) {
//     return preg_match('/^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $form_TelNo);
// }

// // Email validation
// function isValidEmailAddress($form_EmailAddress) {
//     return preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $form_EmailAddress);
// }

// // Define variables and initialize with empty values
// $name = $company = $email = $telephone = $message = "";
// $nameErr = $companyErr = $emailErr = $telephoneErr = $messageErr = $checkboxErr = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Name validation
//     if (empty($_POST["name"])) {
//         $nameErr = "Name is required";
//     } else {
//         $name = clean_input($_POST["name"]);
//     }

//     // Company validation (optional field)
//     if (!empty($_POST["company"])) {
//         $company = clean_input($_POST["company"]);
//     }

//     // Email validation using the isValidEmailAddress function
//     if (empty($_POST["email"])) {
//         $emailErr = "Email is required";
//     } else {
//         $email = clean_input($_POST["email"]);
//         if (!isValidEmailAddress($email)) {
//             $emailErr = "Invalid email format";
//         }
//     }

//     // Telephone validation using the isValidTelNo function
//     if (empty($_POST["telephone"])) {
//         $telephoneErr = "Telephone number is required";
//     } else {
//         $telephone = clean_input($_POST["telephone"]);
//         if (!isValidTelNo($telephone)) {
//             $telephoneErr = "Invalid telephone number format";
//         }
//     }

//     // Message validation
//     if (empty($_POST["message"])) {
//         $messageErr = "Message is required";
//     } else {
//         $message = clean_input($_POST["message"]);
//     }

//     // Checkbox validation (if needed for marketing consent)
//     if (empty($_POST["checkbox"])) {
//         $checkboxErr = "You must agree to receive marketing information";
//     }

//     // If no errors, process the form (e.g., save to database or send email)
//     if (empty($nameErr) && empty($emailErr) && empty($telephoneErr) && empty($messageErr) && empty($checkboxErr)) {
//         // Process form (e.g., save to database or send email)
//         echo "Form submitted successfully!";
//         // You can perform further actions like sending an email here.
//     }
// }

// // Function to sanitize input
// function clean_input($data) {
//     return htmlspecialchars(stripslashes(trim($data)));
// }

// // Function to validate telephone number
// function isValidTelNo($form_TelNo) {
//     return preg_match('/^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $form_TelNo);
// }

// // Function to validate email address
// function isValidEmailAddress($form_EmailAddress) {
//     return preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $form_EmailAddress);
// }


// // Define variables and initialize with empty values
// $name = $company = $email = $telephone = $message = "";
// $nameErr = $companyErr = $emailErr = $telephoneErr = $messageErr = $checkboxErr = "";

// // Initialize a flag to track if there are any errors
// $hasErrors = false;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Name validation
//     if (empty($_POST["name"])) {
//         $nameErr = "Name is required";
//         $hasErrors = true;
//     } else {
//         $name = clean_input($_POST["name"]);
//     }

//     // Company validation (optional field)
//     if (!empty($_POST["company"])) {
//         $company = clean_input($_POST["company"]);
//     }

//     // Email validation using the isValidEmailAddress function
//     if (empty($_POST["email"])) {
//         $emailErr = "Email is required";
//         $hasErrors = true;
//     } else {
//         $email = clean_input($_POST["email"]);
//         if (!isValidEmailAddress($email)) {
//             $emailErr = "Invalid email format";
//             $hasErrors = true;
//         }
//     }

//     // Telephone validation using the isValidTelNo function
//     if (empty($_POST["telephone"])) {
//         $telephoneErr = "Telephone number is required";
//         $hasErrors = true;
//     } else {
//         $telephone = clean_input($_POST["telephone"]);
//         if (!isValidTelNo($telephone)) {
//             $telephoneErr = "Invalid telephone number format";
//             $hasErrors = true;
//         }
//     }

//     // Message validation
//     if (empty($_POST["message"])) {
//         $messageErr = "Message is required";
//         $hasErrors = true;
//     } else {
//         $message = clean_input($_POST["message"]);
//     }

//     // Checkbox validation (if needed for marketing consent)
//     if (empty($_POST["checkbox"])) {
//         $checkboxErr = "You must agree to receive marketing information";
//         $hasErrors = true;
//     }

//     // If no errors, process the form (e.g., save to database or send email)
//     if (!$hasErrors) {
//         // Process form (e.g., save to database or send email)
//         echo "Form submitted successfully!";
//         // You can perform further actions like sending an email here.
//     }
// }

// // Function to sanitize input
// function clean_input($data) {
//     return htmlspecialchars(stripslashes(trim($data)));
// }

// // Function to validate telephone number
// function isValidTelNo($form_TelNo) {
//     return preg_match('/^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $form_TelNo);
// }

// // Function to validate email address
// function isValidEmailAddress($form_EmailAddress) {
//     return preg_match('/^[^\s@]+@[^\s@]+\.[^\s@]+$/', $form_EmailAddress);
// }

// // Initialize variables and error flags
// $errors = [];
// $hasErrors = false;

// // Check if the form is submitted via POST
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // Validate name
//   if (empty($_POST["name"])) {
//     $errors['name'] = "Name is required";
//     $hasErrors = true;
//   } else {
//     $name = clean_input($_POST["name"]);
//   }

//   // Validate email
//   if (empty($_POST["email"])) {
//     $errors['email'] = "Email is required";
//     $hasErrors = true;
//   } else {
//     $email = clean_input($_POST["email"]);
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $errors['email'] = "Invalid email format";
//       $hasErrors = true;
//     }
//   }

//   // Validate telephone number
//   if (empty($_POST["telephone"])) {
//     $errors['telephone'] = "Telephone number is required";
//     $hasErrors = true;
//   } else {
//     $telephone = clean_input($_POST["telephone"]);
//     // Example validation for telephone (use the same regex you had)
//     if (!preg_match('/^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $telephone)) {
//       $errors['telephone'] = "Invalid telephone number format";
//       $hasErrors = true;
//     }
//   }

//   // Validate message
//   if (empty($_POST["message"])) {
//     $errors['message'] = "Message is required";
//     $hasErrors = true;
//   } else {
//     $message = clean_input($_POST["message"]);
//   }

//   // If there are no errors, process the form
//   if (!$hasErrors) {
//     // You can perform further actions like sending an email or saving to a database here
//     // For now, let's return a success response
//     echo json_encode(['success' => true]);
//   } else {
//     // If there are errors, return the errors in JSON format
//     echo json_encode(['success' => false, 'errors' => $errors]);
//   }
// }

// Initialize variables and error flags
$errors = [];
$hasErrors = false;

// Function to sanitize input
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $errors['name'] = "Name is required";
        $hasErrors = true;
    } else {
        $name = clean_input($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required";
        $hasErrors = true;
    } else {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
            $hasErrors = true;
        }
    }

    // Validate telephone number
    if (empty($_POST["telephone"])) {
        $errors['telephone'] = "Telephone number is required";
        $hasErrors = true;
    } else {
        $telephone = clean_input($_POST["telephone"]);
        // Example validation for telephone (use the same regex you had)
        if (!preg_match('/^\+?[0-9]{0,3}[-\s\.]?\(?[0-9]{3}\)?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/', $telephone)) {
            $errors['telephone'] = "Invalid telephone number format";
            $hasErrors = true;
        }
    }

    // // Validate message
    // if (empty($_POST["message"])) {
    //     $errors['message'] = "Message is required";
    //     $hasErrors = true;
    // } else {
    //     $message = clean_input($_POST["message"]);
    // }

    // // If there are no errors, process the form
    // if (!$hasErrors) {
    //     // You can perform further actions like sending an email or saving to a database here
    //     // For now, let's return a success response
    //     echo json_encode(['success' => true]);
    // } else {
    //     // If there are errors, return the errors in JSON format
    //     echo json_encode(['success' => false, 'errors' => $errors]);
    // }

      // If there are no errors, insert the data into the database
      if (!$hasErrors) {
        try {
            // Prepare SQL insert statement
            $stmt = $pdo->prepare("INSERT INTO contact_form (name, email, telephone, message) VALUES (:name, :email, :telephone, :message)");

            // Bind parameters to the prepared statement
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':message', $message);

            // Execute the insert query
            $stmt->execute();

            // Return success response in JSON format
            echo json_encode(['success' => true]);
        } catch (PDOException $e) {
            // Handle database error
            echo json_encode(['success' => false, 'error' => 'Database error: ' . $e->getMessage()]);
        }
    } else {
        // If there are validation errors, return the errors in JSON format
        echo json_encode(['success' => false, 'errors' => $errors]);
    }
}