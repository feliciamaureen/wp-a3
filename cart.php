<!DOCTYPE html>

<?php
    session_start();    
    include ('tools.php');

    $id=$_POST['id'];
    $qty=$_POST['qty'];
    $_SESSION['cart'][$id]['qty']=$_POST['qty'];

    if (isset($_POST['qty'], $_POST['id'])) 
    {
        $id=$_POST['id'];
        $qty=$_POST['qty'];
        $_SESSION['cart'][$id]['qty']=$_POST['qty'];
    }

    if (isset($_POST['cancel'])) 
    {
        unset($_SESSION['cart']);
        header("Location: products.php");
    }
        
    topModule('cart')
?>


    <main>
     <div id="bodycontent">
    <div id="mainbodycontent" style="height:100%">

        <div id="cartbody">
        <p2>
            <?php
                echo "<ul>";
                foreach ($_SESSION['cart'] as $key => $product) {
                //echo "<li>".$key. " - ".$product["qty"]. "</li>";
                var_dump($product);
                }
            ?>

            <br>
            <br>
        </p2>
    <a href="checkout.php">
    <div class="blackbutton">
        <p>Go to Checkout</p>
    </div>
    </a>
  
    <a href="products.php">
    <div class="blackbutton">
        <p>Continue Shopping</p>
    </div>
    </a>

    <form method="post"> <button type="submit" name="cancel"> Cancel</button></form>
        </div>

    </div>

    </div>
    </main>

    <?php
    endModule('footer');
    ?>
