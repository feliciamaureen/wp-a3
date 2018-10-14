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
                var_dump($product);
                }
            ?>

            <br>
            <br>
        </p2>
            

    <a href="checkout.php">
    <button class="button">Proceed to Checkout
    </button>
    </a>
  
    <a href="products.php">
    <button class="button">Continue Shopping
    </button>
    </a>

    <form method="post"> <button type="submit" name="cancel"> Cancel</button></form>
        </div>

    </div>

    </div>
    </main>

    <?php
    endModule('footer');
    ?>
