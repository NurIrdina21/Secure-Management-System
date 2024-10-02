<?php
session_start();

include("connection.php");
include("function.php");

// Encryption and Decryption functions
$key = 'qkwjdiw239&&jdafweihbrhnan&^%$ggdnawhd4njshjwuuO';

function encrypt($data) {
    global $key;
    $encryption_key = base64_decode($key);
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

function decrypt($data) {
    global $key;
    $encryption_key = base64_decode($key);
    list($encrypted_data, $iv) = array_pad(explode('::', base64_decode($data), 2),2,null);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}

// Function to save login history
function saveLoginHistory($userId, $surname, $password) {
    global $con;
    $date = date("Y-m-d H:i:s");
    $encrypted_password = encrypt($password);
    // Vulnerable query with string concatenation
    $query = "INSERT INTO login_history (user_id, surname, confirmpass, login_date, login_time) VALUES ('$userId', '$surname', '$encrypted_password', '$date', '$date')";
    mysqli_query($con, $query);
}

// Function to suspend user
function suspendUserAccount($userId) {
    global $con;
    // Vulnerable query with string concatenation
    $query = "UPDATE employee SET is_suspended = 1 WHERE user_id = $userId";
    mysqli_query($con, $query);
}

// Function to give user only 3 login attempts
function incrementFailedLoginAttempts($userId) {
    global $con;
    $maxFailedAttempts = 3;
    // Vulnerable query with string concatenation
    $query = "UPDATE employee SET failed_login_attempts = failed_login_attempts + 1 WHERE user_id = $userId";
    mysqli_query($con, $query);
    $user_data = getUserDataByUserId($userId);
    if ($user_data['failed_login_attempts'] >= $maxFailedAttempts) {
        suspendUserAccount($userId);
        echo "1 Your account is suspended. Please contact support";
        header("Location: employee login.php");
        exit;
    }
}

// Function to get user given user_id
function getUserDataByUserId($userId) {
    global $con;
    // Vulnerable query with string concatenation
    $query = "SELECT * FROM employee WHERE user_id = $userId";
    $result = mysqli_query($con, $query);
    return mysqli_fetch_assoc($result);
}

// If form is submitted
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $surname = $_POST['surname'];
    $password = $_POST['confirmpass'];

    if(!empty($surname) && !empty($password))
    {
        // Vulnerable query with string concatenation
        $query = "SELECT * FROM employee WHERE surname = '$surname' LIMIT 1";
        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);

            // Check if user is suspended
            if ($user_data['is_suspended'] == 1) {
                echo "Your account is suspended. Please contact support";
                header("Location: employee login.php");
                exit;
            }

            // Decrypt the password stored in the database
            $decrypted_password = decrypt($user_data['confirmpass']);

            // Debugging: Check the decrypted password and the entered password
            echo "Decrypted password: " . $decrypted_password . "<br>";
            echo "Entered password: " . $password . "<br>";

            // Check if the entered password matches the decrypted password
            if($password === $decrypted_password)
            {
                // Save login history
                $userId = $user_data['user_id'];
                saveLoginHistory($userId, $surname, $password);

                // Vulnerable query with string concatenation
                $query = "UPDATE employee SET failed_login_attempts = 0 WHERE surname = '$surname'";
                mysqli_query($con, $query);

                $_SESSION['user_id'] = $userId;
                header("location: employee homepage.php");
                die;
            }
            else
            {
                incrementFailedLoginAttempts($user_data['user_id']);
                echo "Incorrect password!";
            }
        }
        else
        {
            echo "User not found!";
        }
    }
    else
    {
        echo "Please enter both surname and password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial;
            background: #f1f1f1;
        }
        .content {
            margin: auto;
        }
        .responsive {
            max-width: 1500px;
            margin: auto;
            float: center;
        }
        .responsive1 {
            max-width: 750px;
            margin: auto;
        }
        .header {
            padding: 30px;
            text-align: center;
            background: white;
        }
        .header h1 {
            font-size: 50px;
        }
        .topnav {
            overflow: hidden;
            background-color: #7bcbf3;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
        .topnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .topnav a:hover {
            background-color: white;
            color: #FF914D;
        }
        .centercolumn {
            float: center;
            width: 100%;
        }
        .fakeimg {
            background-color: #DADADA;
            width: 50%;
            padding: 20px;
            text-align: center;
            margin: auto;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            text-align: center;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .footer {
            padding: 20px;
            text-align: center;
            background: #dd
