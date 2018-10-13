<!DOCTYPE html>
<?php
session_start();
include ('tools.php');


topModule('product')
?>

<?php
  if (isset($_SESSION['user']))
  echo "<p>Logged in as {$_SESSION['user']['fname']}</p>";
?>

    <main>
        <div class="row">
            
        <div class="column">
            <img src="../a3/images/einar.jpg" alt="halden3" style="width:100%">
        </div>
            
        <div class="column">
            <div class = productname>
                <h1>Einar</h1>
                <h2>AU $65.00</h2>
                <p>Body: Magohany - Natural Oak</p>
                <p>Rattan Back Detailing: Peel 4.5 mm Borobudur - Black Nature</p>
                <p>Cushion: Belize - 141 Vanilla</p>
                <p>Dimensions: 55.5 x 59.5 x 80 cm</p>
                
            </div>
            
            <div class="qty">
            <button class="minus-btn" type="button" name="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</button>
            
            <input form="product" type="number" name="qty" value="1" min="1" max="10" id="ordernumber">
            
            <button class="plus-btn" type="button" name="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
        </div>
        
        <a href="cart.php">
         <button form="product" type="submit" class="cartbutton">Add to cart</button>
        </a>

        </div>
            </div>

      </main>

    <?php
    endModule('footer');
    ?>