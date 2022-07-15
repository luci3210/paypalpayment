<?php


namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            'usd',
            'php',
            'eur',
        ];

        foreach($currencies as $currency) {

            Currency::create([
                'iso' => $currency, 
            ]);
        }
    }
}
