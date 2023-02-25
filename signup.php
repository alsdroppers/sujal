<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

</head>
<body>
    <div class="container">
    <div class="wrapper">
        <h1>Sign Up</h1>
        <form action="connect_insert.php" id="signup-form" method="post">
  <label for="username">Username:</label>
  <input type="text" id="uname" name="user" required>
  <br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <br>
  <label for="phone">Phone Number:</label>
  <input type="text" id="phone" name="phone" required>
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="pass" required>
  <br>
  <label for="passwordConfirm">Confirm Password:</label>
  <input type="password" id="passwordConfirm" required>
  <br>
  <div class="term">
    <input type="checkbox" id="checkbox">
    <label for="checkbox">I agree to all the terms and conditions</label>
</div>
  <input type="submit" id="signup-button" value="Sign Up" name="signup">
  <script src="validate.js"></script>
</form>

<div class="member">
    I have already a account<a href="login.php"> Sign in</a>
</div>
    </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>