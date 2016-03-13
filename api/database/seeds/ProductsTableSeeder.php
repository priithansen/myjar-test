<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $products = [
            [
                'name' => '1 Month',
                'interest_per_day_pct' => 0.0080,
                'days_min' => 1,
                'days_max' => 30,
                'color' => 'blue',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => '2 Months',
                'interest_per_day_pct' => 0.0077,
                'days_min' => 60,
                'days_max' => 60,
                'color' => 'green',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'name' => '3 Months',
                'interest_per_day_pct' => 0.0075,
                'days_min' => 90,
                'days_max' => 90,
                'color' => 'yellow',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]
        ];

        DB::table('products')->insert($products);
    }
}
