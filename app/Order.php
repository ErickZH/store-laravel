<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['shopping_cart_id', 'total', 'guide_number', 'email', 'line1', 'line2', 'city', 'postal_code', 'country_code', 'state', 'recipient_name'];
	
    public static function createFromPayPalResponse($paypalResponse, $shopping_cart)
    {

    	$payer = $paypalResponse->payer;

    	$orderData = (array) $payer->payer_info->shipping_address;

    	$orderData['email'] = $payer->payer_info->email;
    	$orderData['total'] = $shopping_cart->amountInCents();
    	$orderData['shopping_cart_id'] = $shopping_cart->id;


    	return Order::create($orderData);
    }
}
