<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize user input
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validate and sanitize form data
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $phone = sanitize_input($_POST["phone"]);
    $requestType = sanitize_input($_POST["request_type"]);
    $message = sanitize_input($_POST["message"]);

    // Perform server-side validation
    $errors = array();

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($phone)) {
        $errors[] = "Phone is required.";
    } elseif (!preg_match("/^[0-9]+$/", $phone)) {
        $errors[] = "Invalid phone number.";
    }

    if (empty($requestType)) {
        $errors[] = "Please specify your request.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If there are errors, store them in session and redirect back to the form page
    if (!empty($errors)) {
        $_SESSION["form_errors"] = $errors;
        header("Location: form_page.php");
        exit;
    }

    // If all data is valid, proceed with additional processing or email sending

    // For this example, we'll set a success message in session and redirect back to the form page
    $_SESSION["form_success"] = "Form submitted successfully!";
    header("Location: form_page.php");
    exit;
} else {
    // If the form is not submitted through POST, redirect or handle the situation accordingly.
    $_SESSION["form_errors"] = array("Form submission error!");
    header("Location: form_page.php");
    exit;
}
?>
