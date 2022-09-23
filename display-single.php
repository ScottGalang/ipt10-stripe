<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIK1FYR3xnpUHW5rXR2a3bHNIPbeVnrXnDa1DdwVmuTyLc5Jy4mSvTsstUm2EWxaVo3yK9CroGM7wZptByBAFB00Xu346Kro'
);
$product = $stripe->products->retrieve(
	'prod_MP88ia4b9nrj8G',
	[]
);
$price = $stripe->prices->retrieve('price_1LgJrlFYR3xnpUHWox1ribVk',[]);
#echo '<pre>';
#var_dump($product);
#var_dump($price);
#echo '</pre>';

?><!DOCTYPE html>
<html>
  <head>
    <title>Buy</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </head>
  <body>
    <section>
      <div class="product">
        <img src="<?php echo array_pop($product->images); ?>" alt="<?php echo $product->name; ?>" />
        <div class="description">
          <h3><?php echo $product->name; ?></h3>
          <p><?php echo $product->description; ?></p>
          <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
        </div>
      </div>
      <form action="/create-checkout-session.php" method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    </section>
  </body>
</html>