<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentPlatform;

class PaymentPlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'PayPal',
            'image' => 'img/paymentplatform/paypal.png',
        ]);

        PaymentPlatform::create([
            'name' => 'Stripe',
            'image' => 'img/paymentplatform/stripe.png',
        ]);
    }
}
