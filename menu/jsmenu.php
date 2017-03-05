<link rel="stylesheet" type="text/css" href="menu/style.css">
<style>
	.mainnav li {
		width: 50px;
		display: inline;
	}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="menu/my.magicline.1.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".mainnav").my_magicline();
	}); 
</script>

<div class="login">
	<a href = "Join.php">Join Free</a><span> | </span>

	<?php
//display a login option if the Session is logged out, or logout option if Session is logged in.
if(!empty($_SESSION['LoggedIn']))
{
if($_SESSION['LoggedIn'] ==TRUE)
{
	?>
	<a href="Logout.php">Logout</a>
	<?php }
}
else{
	?>

	<a href = "Login.php">Login</a>
	<?php
}
	?>
</div>

<div class="entirebody">
	<ul class="mainnav" style="width:950px">
		<li >
			<a title="" href="Mains.php">Mains</a>
		</li>
		<li>
			<a title="" href="Salads.php">Salads</a>
		</li>
		<li>
			<a title="" href="Soups.php">Soups</a>
		</li>
		<li>
			<a title="" href="Sides.php">Sides</a>
		</li>
		<li>
			<a title="" href="Desserts.php">Desserts</a>
		</li>
		<li>
			<a title="" href="Submit.php">Submit Recipe</a>
		</li>
	</ul>
</div>
