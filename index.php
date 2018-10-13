<!DOCTYPE html>

<?php
	session_start();
	if(isset($_GET['logout']))
	{
		unset($_SESSION['user']);
	}
    
    include ('tools.php');
    topModule('index')
?>
    <?php
    if (isset($_SESSION['user']))
    echo "<p>Logged in as {$_SESSION['user']['fname']}</p>";
    ?>

    <main>
      <!--main banner-->
        <section id="showcase">
		<div class="container">
			<h1>Feel At Home, Anywhere
			</h1>
		</div>
	   </section>
        
       <!--about-->
        <div class="box-2">
			<h1>About Us</h1>
            <p><strong>We believe a piece of great furniture can welcome you like a long lost relative.</strong></p>
			<p>Be it in a fancy five star hotel, a cool swag hostel or just a charming little cafe, we want to make sure that everyone will feel that they’re welcome. That they belong.</p>
            <p>At Pineapple we aim to accomplish that through our wide selection of relaxing furniture. Go ahead and welcome your guests in style by providing the comfort and warmth of their own home. Even if it is their first time visiting, you know for sure it won’t be their last.</p>
            <p>After 5 years as a subdivision of <strong>INDOSURYA MAHAKAM and UNIVERSAL FURNITURE INDUSTRIES</strong>, Pineapple is born as a new independent entity, specifically founded to handle and cater to local project needs. This enables <strong>INDOSURYA and UNIVERSAL</strong> to regain their focus as exporting companies.</p>
		</div>
    </main>

    <?php
    endModule('footer');
    ?>

