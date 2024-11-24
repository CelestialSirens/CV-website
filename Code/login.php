<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login  </title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/lxw0sve.css">
    <link rel="stylesheet" href="Css/styles.css">
    <link rel="stylesheet" href="Css/colours.css">
    <!--  Add Favicon code here and different font apis      -->
</head>
<body id="loginPage">
<div class="log-box">
    <span class="LoginBorderLine"></span>
    <form method="post" action="php/signin.php">
        <h2>Sign in</h2>
        <div class="inputBox">
            <input type="text" required="required" name="username" placeholder="Username" />


        </div>
        <div class="inputBox">
            <input type="password" required="required" name="password" placeholder="Password"/>


        </div>
        <div class="extraLogInfo">
            <a href="index.php">← Home</a>
        </div>
        <input type="submit" value="Login" id="login-BTN" />
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>