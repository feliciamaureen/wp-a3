<!DOCTYPE html>
<?php
	session_start();
	if(isset($_GET['logout']))
	{
		unset($_SESSION['user']);
	}
?>
<html>
	<head>
        <meta charset="utf-8">
        <title>Assignment 3</title>
    
        <!-- Keep wireframe.css for debugging, add your css to style.css -->
        <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
        <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
        <script src='../wireframe.js'></script>
    </head>
	
    <body>
    
    <header>
      <div><img src='../a2/images/horizontallogo.png' alt='horizontallogo' /></div>
    </header>
        
		<main>
			<article>
				<p>
					<span>
						<?php 
							if(isset($_SESSION['user']))
							{
								echo 'You are succesfully logged in as <span class= "blue">'.$_SESSION['user'].'</span>';
							}
							else if(!isset($_SESSION['user']))
                            {
								echo 'You are not logged in.';
							}
						?>
					</span>
				</p>
				
                <fieldset>
					<legend>Please Login to view</legend>
					<form method="post" action="index.php">
						<label>Name</label><input type="text" name="name"><br><br>
						<label>Password</label><input type="password" name="password"><br><br>
				        <input type="submit" name="login" value="Login">
					</form>
				</fieldset>
			</article>				
		</main>
	</body>
</html>



