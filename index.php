<!-- another links, scripts and title-->
<title>Login</title>
<link rel="stylesheet" type="text/css" href="/static/css/login_style.css">
<?php

require_once("templates/header.php");

?>


<div class="div_login ">
	<form class="form_login" method="post" action="#">
		<input type="text" name="login" placeholder="Логин" class="form-control"><br>
		<input type="password" name="password" placeholder="Пароль" class="form-control"><br>
		<input type="submit" name="sub" value = "Войти" class="form-control">
	</form>
</div>



<?php

require_once("templates/footer.php");

?>

