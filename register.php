<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"Library");
	$query = "insert into users values(null,'$_POST[name]'
	,'$_POST[email]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Registration successfully")
	window.location.href = "admin/login.php";
</script>