<?php 
require_once(__ROOT__ . "view/View.php");
require_once(__ROOT__ . "controller/Controller.php");
require_once(__ROOT__ . "controller/checkoutController.php");

class CheckoutView extends View
{
  public function output(){
    $str='
    <section class="container">

    <form   action="checkout.php?action=checkout" method="POST" >

            <div class="input-box">
                <label>Address</label>
                <input type="text" name="address"  required />  
                <span class="error"><?php echo $addressErr; ?></span>

            </div>
            <div class="input-box">
                <label>Card Num</label>
                <input type="text" name="card_num"  required />
                <span class="error"><?php echo $cardNumErr; ?></span>

            </div>
            
            <div class="input-box">
                <label>Expiring date</label>
                <input type="date" name="exp_date"  required />
                <span class="error"><?php echo $dateErr; ?></span>
            </div>

            <div class="input-box">
                <label>CVC</label>
                <input type="text" name="cvc"  required />
                <span class="error"><?php echo $cvcErr; ?></span>
            </div>

            </div>
            </div>


            <button input type="submit" name="check" value="Submit">Checkout</button>
        </form>
    </section>

';
return $str;

    }
	}

