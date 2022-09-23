<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIK1FYR3xnpUHW5rXR2a3bHNIPbeVnrXnDa1DdwVmuTyLc5Jy4mSvTsstUm2EWxaVo3yK9CroGM7wZptByBAFB00Xu346Kro'
);
$result = $stripe->products->delete(
  'prod_MP7Tu88Phn6dxg',
  []
);
var_dump($result);