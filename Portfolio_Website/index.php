<?php 
    session_start();
    // Define login credentials
    $correct_username = 'stan';
    $correct_password = 'eindproject';

    // Excluded IP for dev purposes
    $excludedIp = "62.163.124.120"; 
    
    if ($_SERVER['REMOTE_ADDR'] == $excludedIp) {
        // Redirect to 'Home' page
        $_SESSION['logged_in'] = true;
        header("location: pages/aboutMe.php");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get post values
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];
        
        // Check login credentials
        if (strtolower($input_username) === $correct_username && $input_password === $correct_password) {
            // Redirect to 'Home' page
            $_SESSION['logged_in'] = true;
            header('Location: pages/aboutMe.php');
            exit();
        } else {
            $error_message = "Ongeldige gebruikersnaam of wachtwoord!";
        }
    }
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>
        <?php
            // Show error message if set 
            if (isset($error_message)) : ?>
            <p><?php echo $error_message; ?></p>
        <?php endif; ?>
        <style>
            form {
                width: 300px;
                margin: 50px auto;
                background-color: #f9f9f9;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            }
            label {
                display: block;
                margin-bottom: 5px;
            }
            input[type="text"], input[type="password"] {
                width: calc(100% - 12px);
                padding: 6px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            input[type="submit"] {
                background-color: #007bff;
                color: #fff;
                cursor: pointer;
                padding: 8px 12px;
                border: none;
                border-radius: 3px;
            }
            input[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>
        <!-- Login form -->
        <form method="post" action="">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username">

            <label for="password">Wachtwoord:</label>
            <input type="password" id="password" name="password"><br><br>

            <input type="submit" value="Login">
        </form>
    </body>
</html>
