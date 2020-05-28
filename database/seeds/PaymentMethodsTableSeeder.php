<?php

use App\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([ "name" => "Apple Pay" ]);
        PaymentMethod::create([ "name" => "Stripe" ]);
        PaymentMethod::create([ "name" => "PayPal" ]);
    }
}
