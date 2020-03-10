<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => "Zola Cloth",
                'slug' => "zola-cloth",
                'type' => "Baju",
                'description' => "Baju enak tidak panas",
                'price' => "150",
                'quantity' => "100",
            ],
            [
                'name' => "Celana Ketat",
                'slug' => "celana-ketat",
                'type' => "Celana",
                'description' => "Celana ketat tidak longgar",
                'price' => "250",
                'quantity' => "50",
            ]
        ];
        DB::table('products')->insert($data);
    }
}
