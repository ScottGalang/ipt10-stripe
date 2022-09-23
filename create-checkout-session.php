<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LgIK1FYR3xnpUHW5rXR2a3bHNIPbeVnrXnDa1DdwVmuTyLc5Jy4mSvTsstUm2EWxaVo3yK9CroGM7wZptByBAFB00Xu346Kro');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242/public';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => '{{PRICE_ID}}',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);