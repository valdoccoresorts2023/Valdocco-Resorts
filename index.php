<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Valdocco Resorts - Iniciar Sesion</title>
<link rel="shortcut icon" href="./assets/VRpequeño.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
       <LINK REL=StyleSheet HREF="/css/style2.css" TYPE="text/css" MEDIA=screen>
        <body background="./img/Backkg.jpg";>
<br><br>
        <style>
*--------------login-------------------
* {
   box-sizing: border-box;
   font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
   font-size: 16px;
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
}

body {
   background-color: #000000;
   background-size: cover;
   height: 97vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.login {
   width: 300px;
   background-color:#F7D358;
   box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
   margin: 100px auto;
}
.login h1 {
   text-align: center;
   color: #e30e38;
   font-size: 24px;
   padding: 20px 0 20px 0;
   border-bottom: 1px solid #dee0e4;
}
.login form {
   display: flex;
   flex-wrap: wrap;
   justify-content: center;
   padding-top:10px;
}
.login form label {
   display: flex;
   justify-content: center;
   align-items: center;
   width: 35px;
   height: 40px;
   background-color: #000000;
   color: #F7D358;
}
.login form input[type="password"], .login form input[type="text"] {
   width: 210px;
   height: 40px;
   border: 1px solid #dee0e4;
   margin-bottom: 10px;
   padding: 0 15px;
}
.login form input[type="submit"] {
   width: 100%;
   padding: 15px;
 margin-top: 20px;
   background-color: #000000;
   border: 0;
   cursor: pointer;
   font-weight: bold;
   color: #F7D358;
   transition: background-color 0.2s;
}
.login form input[type="submit"]:hover {
 background-color: #000000;
   transition: background-color 0.2s;
}
        </style>
</head>

<body>
<!-- F12 OFF -->
<script type="text/javascript">
$(document).keydown(function (event) {
    if (event.keyCode == 123) {
        return false;
    }});
</script>

<!-- BOTON DERECHO OFF -->
<script type="text/javascript">
    document.oncontextmenu = function(){return false;}
</script>

<!-- CONTROL + U OFF -->
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey &&
            (e.keyCode === 85 )) {
            return false;}};
</script>

<div class="login">
   <div align=center>
<br>
<h3>Iniciar Sesion</h3>
</div>
<form action="autentica.php" method="post">
<label for="username"><i class="fas fa-user"></i></label>
       <span class="nav-text">
        <input type="text" name="username" placeholder="Ingrese su Correo electronico " id="username" size="10" minlength="12" required>
       </span>
<label for="password"><i class="fas fa-lock"></i></label>
       <span class="nav-text">
            <input type="password" name="password" placeholder="Password" id="password" size="10" minlength="6" required>
       </span>
<input type="submit" value="Login" onkeypress="return event.keyCode!=13">
</form>
            </div>
  </body>
</html>