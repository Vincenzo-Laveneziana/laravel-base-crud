<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Sample data

       /*  $products = [
            
            [
                'img' => 'https://hd2.tudocdn.net/877862?w=142&h=304',
                'marca' => 'Google',
                'nome' => 'Pixel 4 XL',
                'genere' => 'Smartphone',
                'descrizione' => 'Google Pixel 4 XL è uno degli smartphone Android più avanzati e complet',
                'prezzo' => '615',
            ],
            [
                'img' => 'https://hd2.tudocdn.net/871032?w=150&h=304',
                'marca' => 'Apple',
                'nome' => 'iPhone 11 Pro Max',
                'genere' => 'Smartphone',
                'descrizione' => 'Apple iPhone 11 Pro Max è uno degli smartphone iOS più avanzati e completi che ci siano in circolazione.',
                'prezzo' => '1015',
            ]
        ];

        foreach ($products as $product) {
            $newProdutc = new Product();
            $newProdutc->fill($product);
            $newProdutc->save();
        } */


    }
}
