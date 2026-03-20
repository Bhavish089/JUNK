<?php

session_start();

$error = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];

$active_form = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : "";
}


function isActiveForm($forName, $activeForm) {
    return $forName === $activeForm ? 'active' : '';
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="form-box <?= isActiveForm('login', $active_form) ?>" id="login-form">
            <form action="login_register.php" method="post">
                <h2>Login</h2>
                <?=  showError($error['login']); ?>
                <label for="Email">Email</label>
                <input type="email" name="email" id="Email" placeholder="Enter your email" required>
                <label for="Password">Password</label>
                <input type="password" name="password" id="Password" placeholder="Enter your password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showFormreg()">Register</a></p>
            </form>
        </div>
        
        <div class="form-box <?= isActiveForm('register', $active_form) ?>" id="register-form">            
            <form action="login_register.php" method="post">
                <h2>Register</h2>
                <?=  showError($error['register']); ?>
                <label for="name">UserName</label>
                <input type="text" name="name" id="name" placeholder="Enter your username" required>
                
                <label for="Email">Email</label>
                <input type="email" name="email" id="Email" placeholder="Enter your email" required>
                
                <label for="Password">Password</label>
                <input type="password" name="password" id="Password" placeholder="Enter your password" required>

                <label for="role">Role</label>
                <select name="role" id="role" required>
                    <option value="">Select your role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>

                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="showFormlog()">Login</a></p>
            </form>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>