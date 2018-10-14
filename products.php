<!DOCTYPE html>

<?php
session_start();
include ('tools.php');

$products = FileToArray();
foreach($products as $id=>$details)
{
    echo '<div class="product">';
    echo $details['id'].'<br>';
    echo $details['name'].'<br>';
    echo $details['desc'].'<br>';
    echo $details['price'].'<br>';
    echo '</div>';
}


//$prod1 = $products[0];
//echo $prod1;
//$prod1details = explode($prod1)
  //  echo $prod1details;


topModule('products')
?>

<?php

if (isset($_SESSION['user']))
  echo "<p>Logged in as {$_SESSION['user']['fname']}</p>";
?>

    <main>
      <section id="collectionname">
			<h1>WOOD & RATTAN</h1>
	    </section>
        
        <div class="row"> 
            <div class="column">
                <a href='../a3/product.php?'>
                        <img src="../a3/images/einar.jpg" alt="einar" style="width:100%">
                    
                </a>    
                <div class="desc"> Einar
                    <?php  
                        echo $name['Einar'];
                    ?>
                </div>
            </div>
         
            <div class="column">
            <img src="../a3/images/clavo.jpg" alt="clavo" style="width:100%">
            <div class="desc"> Clavo
                    <?php  
                        foreach ($products as $product) {
                            $product = explode(" ", $product);
                             echo $product;
                        }
                    ?>
                </div>
            </div>
        </div>
        
        <section id="collectionname">
			<h1>WOVEN RATTAN</h1>
	    </section>
        
        
    <div class="row">
            
        <div class="column">
            <img src="../a3/images/cadiz.jpg" alt="cadiz" style="width:100%">
            <div class="desc"> Cadiz
                    <?php  
                        foreach ($products as $lineIndex) {
                            echo $linewords;
                            $lineWords = explode(" ", $line);
                           
                        }
                    ?>
                </div>
        </div>
            
        <div class="column">
            <img src="../a3/images/evelyn.jpg" alt="evelynz" style="width:100%">

            <div class="desc"> Evelyn
                    <?php  
                        foreach ($products as $lineIndex) {
                            $lineWords = explode(" ", $line);
                             echo $linewords;
                        }
                    ?>
                </div>
        </div>
    </div>
    </main>

    <?php preShow($products); ?>

    <?php
    endModule('footer');
    ?>