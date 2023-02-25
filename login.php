<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="container">
    <div class="wrapper">
        <h1>Sign in</h1>
        <form action="connect_retrieve.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br><br>
    <div class="term">
    <input type="checkbox" id="checkbox">
    <label for="checkbox">I agree to all the terms and conditions</label>
</div>
    <input type="submit" value="Submit">
    <a href="signup.php" id="signup-link">Don't have an account? Create one now!</a>
  </form>

<!-- <button>Sign in</button> -->
<div class="member">
    Create a account<a href="signup.php"> Sign Up Here</a>
</div>
    </div>
</div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js%22%3E</script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js%22%3E</script>
</body>
</html>