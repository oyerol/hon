<?php
require 'config1.php';

function alertMessage($message) {
    echo "<div class='alert alert-warning'>" .$_SESSION['message'] . "</div>";
       unset($_SESSION['message']); // Clear the message after displaying it
}

function redirect($url, $message) {
    $_SESSION['message'] = $message;
    header("Location: ". $url);
    exit();
}

if (isset($_POST['loginbtn'])) {
    // Sanitize and validate input
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    if ($email && $password) {
        // Prepare SQL statement to prevent SQL injection
        $query = "SELECT * FROM user WHERE email=? LIMIT 1";
        if ($stmt = mysqli_prepare($conn, $query)) {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Verify password
                    if ($password == $row['password']){
                        // Set session variables
                        $_SESSION['auth'] = true;
                        $_SESSION['loggedInUser'] = [
                            'email' => $row['email'],
                            'name' => $row['firstname']
                        ];
                      

                        // Redirect to dashboard
                        redirect('users/user.php', 'Logged in successfully');
                    } else {
                       return redirect('login.php', 'Invalid email or password');
                    }
                } else {
                    return redirect('login.php', 'user doesnt exit');
                }
            } else {
                redirect('login.php', 'Something went wrong');
            }
            mysqli_stmt_close($stmt);
        } else {
            redirect('login.php', 'Something went wrong');
        }
    } else {
        return redirect('login.php', 'All fields are mandatory');
    }
}


?>
