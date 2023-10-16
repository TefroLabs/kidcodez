<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head section content here -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Log In - Tivo - SaaS App HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <a class="navbar-brand logo-text page-scroll" href="index.html"><em>Kids<u>Codez</u></em></a>

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a>  -->
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#header">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#features">FEATURES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#details">DETAILS</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="index.html#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#pricing">PRICING</a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm" href="log-in.html">Get Stated</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <!-- Add your header and navigation if needed -->
    
    <!-- Display the form -->
    <div class="form-container">
        <form id="logInForm" data-toggle="validator" data-focus="false" action="process_form.php" method="post">
            <!-- Add your form fields and elements here -->
            <div class="form-container">
                        <form action="php/process_form.php" method="post" id="logInForm" data-toggle="validator" data-focus="false" onsubmit="return validateForm()">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="lemail" name="name" required>
                                <label class="label-control" for="lemail">Enter your Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="lpassword" name="email" required>
                                <label class="label-control" for="lpassword">Enter your Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                    
                            <div class="form-group">
                                <input type="tel" class="form-control-input" id="lphone" name="phone" required>
                                <label class="label-control" for="lphone">Enter your Phone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                    
                            <div class="form-group">
                                <select class="form-control-select" id="pselect" name="request_type" required>
                                    <option class="select-option" value="" disabled selected>Please specify your request</option>
                                    <option class="select-option" value="free_class">Request for Free 1hr Section</option>
                                    <option class="select-option" value="online_tuition">Request for Online Tuition</option>
                                    <option class="select-option" value="home_tuition">Request for Home Tuition</option>
                                    <option class="select-option" value="other">Other</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                    
                            <div class="form-group">
                                <textarea class="form-control-textarea" id="message" rows="5" name="message" required></textarea>
                                <label class="label-control" for="message">Write your message</label>
                                <div class="help-block with-errors"></div>
                            </div>
            <!-- ... Existing form fields ... -->

            <div class="form-group">
                <button type="submit" class="form-control-submit-button">Send Message</button>
            </div>
            <div class="form-message">
                <?php
                // Display success message if exists
                if (isset($_SESSION["form_success"])) {
                    echo '<div class="success-message">' . $_SESSION["form_success"] . '</div>';
                    unset($_SESSION["form_success"]); // Clear the success message from session
                }

                // Display error messages if exist
                if (isset($_SESSION["form_errors"])) {
                    foreach ($_SESSION["form_errors"] as $error) {
                        echo '<div class="error-message">' . $error . '</div>';
                    }
                    unset($_SESSION["form_errors"]); // Clear the error messages from session
                }
                ?>
            </div>
        </form>
    </div>

    <!-- Add your footer if needed -->
</body>
</html>
