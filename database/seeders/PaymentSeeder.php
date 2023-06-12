<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use Carbon\carbon;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment=Payment::create([
        'user_id'=>1,
        'rejistration_id'=>1,
        'price'=>10000,
        'date_price'=>Carbon::parse('2023-3-1'),

        ]);

        $payment=Payment::create([
            'user_id'=>2,
            'rejistration_id'=>2,
            'price'=>110000,
            'date_price'=>Carbon::parse('2023-3-8'),

            ]);

        $payment=Payment::create([
                'user_id'=>3,
                'rejistration_id'=>3,
                'price'=>160000,
                'date_price'=>Carbon::parse('2023-3-9'),

                ]);


    }
}
