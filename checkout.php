<!DOCTYPE html>

<?php

include ('tools.php');

topModule('checkout');

$nameError ="";
    if(isset($_POST['submit'])){
        if (empty($_POST["fullname"])) {
            $nameError = "Name is required";
        } else {
            $fullname = test_input($_POST["name"]);
            // check name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
                $nameError = "Only letters and white space allowed";
            }
        }
    }
    
    //validate email
    /*if (!empty($_POST['fullname']) && ($_POST['email'], FILTER_VALIDATE_EMAIL)
    {
        echo '<span style="color:red">That is not a valid URL!</span>';
    }*/
?>



    <main>
        
    <section id="collectionname">
			<h1>CHECKOUT</h1>
	    </section>     
        
    <div class="row"> 
        <h1>Billing Information</h1>
        <form class = "billing" action="receipt.php" method='post'>
           Full Name: <input type = 'text' name="fullname" placeholder="Full Name" ><span class="error">*<?php echo $nameError;?></span>
            
           E-mail: <input type = 'text' name="email" placeholder="name@example.com" required>
           Address: <input type = 'text' name="address" placeholder="123 Street Name" required>
            <div class="row">
              <div class="col-50">
                  City: <input type = 'text' name="city" placeholder="city" required>
                  State: <input type = 'text' name="state" placeholder="State" required>
                  Zip Code: <input type = 'text' name="zip" placeholder="12345" required>
              </div>
            </div>
           
            <h1>Payment Details</h1>
             Name on Card: <input type = 'text' name="cardname" placeholder="Full Name" required>
             Credit Card Number: <input type = 'text' name="ccnum" placeholder="1111-2222-3333-444" required>
             Card Expiry Month: <input type = 'text' name="expmonth" placeholder="Month" required>
             <div class="row">
             Card Expiry Year: <input type = 'text' name="exp year" placeholder="year" required>
             CVV: <input type = 'text' name="cvv" placeholder="123" required>
            </div>
            
            <button type="submit" class = "button">
            Proceed to Checkout
            </button>
        </form>
    </div>
        
        
        
    
        
    </main>

    <?php
    endModule('footer');
    ?>