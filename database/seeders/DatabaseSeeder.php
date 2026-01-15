<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gateway;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('12345678'),
        // ]);
        
        // if (Gateway::count() == 0)
        // {
        //     $gateways = [
        //         [
        //             'name' => 'PayPal',
        //             'slug' => 'paypal',
        //             'image' => 'paypal.png',
        //             'credentials' => ['key_one' => '', 'key_two' => '', 'mode' => 'sandbox'],
        //             'status' => 1
        //         ],
        //         [
        //             'name' => 'Stripe',
        //             'slug' => 'stripe',
        //             'image' => 'stripe.png',
        //             'credentials' => ['key_one' => '', 'key_two' => '', 'mode' => 'test'],
        //             'status' => 1
        //         ],
        //         [
        //             'name' => 'SSLCommerz',
        //             'slug' => 'sslcommerz',
        //             'image' => 'sslcommerz.png',
        //             'credentials' => ['key_one' => '', 'key_two' => '', 'mode' => 'sandbox'],
        //             'status' => 1
        //         ],
        //         [
        //             'name' => 'Razorpay',
        //             'slug' => 'razorpay',
        //             'image' => 'razorpay.png',
        //             'credentials' => ['key_one' => '', 'key_two' => '', 'mode' => 'test'],
        //             'status' => 0
        //         ],
        //         [
        //             'name' => 'Cash On Delivery',
        //             'slug' => 'cash-on-delivery',
        //             'image' => 'cod.png',
        //             'credentials' => ['key_one' => 'N/A', 'key_two' => 'N/A', 'mode' => 'live'],
        //             'status' => 1
        //         ]
        //     ];

        //     foreach ($gateways as $gateway) {
        //         Gateway::create($gateway);
        //     }
        // }
    }
}
