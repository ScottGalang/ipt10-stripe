<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIK1FYR3xnpUHW5rXR2a3bHNIPbeVnrXnDa1DdwVmuTyLc5Jy4mSvTsstUm2EWxaVo3yK9CroGM7wZptByBAFB00Xu346Kro'
);
$result = $stripe->products->retrieve(
  'prod_MP7V7f9YEIKPCY',
  []
);
var_dump($result);