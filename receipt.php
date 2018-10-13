<!DOCTYPE html>

<?php
	session_start();
	if(isset($_GET['logout']))
	{
		unset($_SESSION['user']);
	}
    
    include ('tools.php');
?>
<html>
    
    <head>
    <meta charset="utf-8">
    <title><?php $title ?></title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="../a3/css/style.css">
    <script src='../wireframe.js'></script>
  </head>
      <body>
          
    <header>
      <div><a href="../a3/index.php"><img src='../a3/images/horizontallogo.png' alt='horizontallogo' /></a></div>
    </header>
    

    <main>
      <section id="collectionname">
			<h1>ORDER SUMMARY</h1>
	    </section>
    </main>
        <div class="box-2">
            <p>Customer Name: <?php echo $_POST['fullname']; ?> </p>
            <p>Email: <?php echo $_POST['email']; ?> </p>
            <p>Address: <?php echo $_POST['address']; ?> </p>
            <p>City: <?php echo $_POST['city']; ?> </p>
            <p>State: <?php echo $_POST['state']; ?> </p>
            <p>Zip: <?php echo $_POST['zip']; ?> </p>
        </div>

   
  </body>
</html>
