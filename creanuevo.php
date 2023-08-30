<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>INGRESO NUEVO USUARIO</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
   	    <LINK REL=StyleSheet HREF="/css/style2.css" TYPE="text/css" MEDIA=screen>
		   <body background="./img/Backkg.jpg";>

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
   height:200px
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
		<div class="login">
    	    <div align='center'>
    			<br>
    			<h3>Nuevo Usuario</h3>
    		</div>
				
            <form action="revisanuevo.php" method="post">
				<!--Nombre Usuario-->
				<label for="nombre"><i class="fas fa-user"></i></label>
	    		<input type="text" id="nombre" name="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre y Apellido " required>
	        
				<!--email-->
       			<label for="username"><i class="fas fa-user"></i></label>
	    		<input type="text" id="username" name="username" placeholder="Correo electronico " required>
	   
        		<!--Nombre clave-->
       			<label for="password"><i class="fas fa-lock"></i></label>
	        	<input type="password" id="password" name="password" placeholder="Password"  required>
	    
				 <input type="submit" value="ACEPTAR">
			</form>
        </div>


</body>

</html>

