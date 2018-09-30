<?php 
session_start();
error_reporting(0);
		$user = array(
				"user" => "dayana",
				"pass" => "dayana"
			);

if(isset($_POST['submit'])){
	if($_POST['username']==$user['user']&&$_POST['password']==$user['pass']) {

		$_SESSION["username"] = $_POST['username'];
		echo "Anda Berhasil Log In, $_POST[username]!";

	} else {
		display_login_form();
		echo '<p> Username Atau Password Salah</p>';
	}
}
else {
	display_login_form();
}
function display_login_form(){ ?>
	<form action ="proses.php" method='POST'>
		<h1><center> Form Log In </center></h1>
		<center><label for="username"> Username : </label></center>
		<center><input type="text" name="username" id="username"></center>
		<br><br>
		<center><label for="password"> Password : </label></center>
		<center><input type="password" name="password" id="password"></center>
		<br><br>
		<center><input type="submit" name="submit" value="Log In"></center>
	</form>
<?php 
}
 ?>
