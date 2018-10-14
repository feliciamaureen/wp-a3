<?php

function preShow( $arr, $returnAsString=false ) {
         $ret  = '<pre>' . print_r($arr, true) . '</pre>';
         if ($returnAsString)
           return $ret;
         else
echo $ret; }
?>

<?php
function topModule($header) {
    ?>
<!DOCTYPE html>
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

    <nav id="navbar">
		<div class="container">
			<ul>
                <li><a href="../a3/login.php">Logout</a></li>
                <li><a href="../a3/checkout.php">Checkout</a>
                </li>
                <li><a href="../a3/cart.php">My Cart</a></li>
                <li><a href="../a3/products.php">Products</a></li>
                <li><a href="../a3/index.php">Home</a></li>
			</ul>
		</div>
    </nav

    <?php } ?>
        
<?php
function endModule($footer) {
    ?>
        <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Natalie Muhar (s3602994), Felicia Maureen (s3667181) and group name here.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your <a href='pproducts.csv'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
       
      </footer>

    <?php } ?>        
        
 
<?php
function fileToArray()
{
$products = array();
$products = fopen("products.txt","r");
if (($headings = fgetcsv($products, 0, "\t")) !== false) { 
    while ( $cells = fgetcsv($products, 0, "\t") ) { 
        for ($x=1; $x<count($cells); $x++) 
            $pumps[$cells[0]][$headings[$x]]=$cells[$x]; 
    }
}
return $products;

$prod1 = $products[0];
echo $prod1;
$prod1details = explode($prod1)
    echo $prod1details;
}      
?>

