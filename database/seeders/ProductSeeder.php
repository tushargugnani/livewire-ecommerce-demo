<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    

    public function run()
    {
        $products = [
            [
                'title' => 'Sony ZX-110',
                'price' => '14.25',
                'link' =>  'https://amzn.to/3udpeNl',
                'meta' => ["color" => 'dark', "brand" => 'sony', "connection_type" => 'wired', "type" => 'overhead', "rating" => '4.6'],
            ],
            [
                'title' => 'Apple Airpods Pro',
                'price' => '249',
                'link' =>  'https://amzn.to/34eYwJT',
                'meta' => ["color" => 'white', "brand" => 'apple', "connection_type" => 'wireless', "type" => 'earbuds', "rating" => '4.8'],
                'image' => 'apple-airpods-pro.jpg'
            ],
            [
                'title' => 'Noot Kids K11',
                'price' => '14.99',
                'link' =>  'https://amzn.to/3fMfogy',
                'meta' => ["color" => 'blue', "brand" => 'noot', "connection_type" => 'wired', "type" => 'overhead', "rating" => '4.9'],
                'image' => 'noots-k11-kids.jpg'
            ],
            [
                'title' => 'Apple Airpods',
                'price' => '79.99',
                'link' =>  'https://amzn.to/3oNUyRL',
                'meta' => ["color" => 'white', "brand" => 'apple', "connection_type" => 'wireless', "type" => 'earbuds', "rating" => '4.4'],
                'image' => 'apple-airpods.jpg'
            ],
            [
                'title' => 'Tozo T6 Earbuds',
                'price' => '35.87',
                'link' =>  'https://amzn.to/3wzkkfw',
                'meta' => ["color" => 'green', "brand" => 'tozo', "connection_type" => 'wireless', "type" => 'earbuds', "rating" => '2.4'],
                'image' => 'tozo-t6-green.jpg'
            ],
            [
                'title' => 'Tozo T10 Earbuds',
                'price' => '27.87',
                'link' =>  'https://amzn.to/3oLhql4',
                'meta' => ["color" => 'orange', "brand" => 'tozo', "connection_type" => 'wireless', "type" => 'earbuds', "rating" => '3.6'],
                'image' => 'tozo-10-orange.jpg'
            ],
            [
                'title' => 'Cowin E7',
                'price' => '59.99',
                'link' =>  'https://amzn.to/3wA9C8a',
                'meta' => ["color" => 'red', "brand" => 'Cowin', "connection_type" => 'wireless', "type" => 'overhead', "rating" => '4.4'],
                'image' => 'cowin-red.jpg'
            ],
            [
                'title' => 'Cowin E7',
                'price' => '59.99',
                'link' =>  'https://amzn.to/3oOw0Z0',
                'meta' => ["color" => 'purple', "brand" => 'Cowin', "connection_type" => 'wireless', "type" => 'overhead', "rating" => '4.2'],
                'image' => 'cowin-purple.jpg'
            ],
            [
                'title' => 'Cowin E7',
                'price' => '59.99',
                'link' =>  'https://amzn.to/3vm29cH',
                'meta' => ["color" => 'yellow', "brand" => 'Cowin', "connection_type" => 'wireless', "type" => 'overhead', "rating" => '4.2'],
                'image' => 'cowin-yellow.jpg'
            ],
            [
                'title' => 'Beats Earbuds',
                'price' => '35.63',
                'link' =>  'https://amzn.to/3ujye3J',
                'meta' => ["color" => 'black', "brand" => 'beats', "connection_type" => 'wireless', "type" => 'earbuds', "rating" => '3.3'],
                'image' => 'beats-earbuds.jpg'
            ],
            [
                'title' => 'Beats Solo3',
                'price' => '170.49',
                'link' =>  'https://amzn.to/3udWy72',
                'meta' => ["color" => 'yellow', "brand" => 'beats', "connection_type" => 'wireless', "type" => 'overhead', "rating" => '4.3'],
                'image' => 'beats-solo3-yellow.jpg'
            ],
            [
                'title' => 'Samsung Galaxy Buds',
                'price' => '179.99',
                'link' =>  'https://amzn.to/3vji6jW',
                'meta' => ["color" => 'purple', "brand" => 'samsung', "connection_type" => 'wireless', "type" => 'earbuds', "rating" => '4.8'],
                'image' => 'samsung-galaxy-buds.jpg'
            ],
            [
                'title' => 'Noot Kids K11',
                'price' => '13.99',
                'link' =>  'https://amzn.to/3fMfogy',
                'meta' => ["color" => 'green', "brand" => 'noot', "connection_type" => 'wired', "type" => 'overhead', "rating" => '4.9'],
                'image' => 'noots-k11-kids-green.jpg'
            ],
            [
                'title' => 'Bose SoundSport',
                'price' => '99.00',
                'link' =>  'https://amzn.to/2SrB75n',
                'meta' => ["color" => 'cyan', "brand" => 'bose', "connection_type" => 'wireless', "type" => 'earbuds', "rating" => '4.9'],
                'image' => 'bose-soundsport.jpg'
            ],
            [
                'title' => 'Panasonic Lightweight',
                'price' => '6.99',
                'link' =>  'https://amzn.to/2SrB75n',
                'meta' => ["color" => 'dark', "brand" => 'panasonic', "connection_type" => 'wired', "type" => 'overhead', "rating" => '2.8'],
                'image' => 'panasonic-headphone.jpg'
            ],
            [
                'title' => 'Amazon Basics In-Ear',
                'price' => '10.99',
                'link' =>  'https://amzn.to/2SrB75n',
                'meta' => ["color" => 'pink', "brand" => 'amazon-basics', "connection_type" => 'wired', "type" => 'earphones', "rating" => '4.8'],
                'image' => 'amazon-basics-inear.jpg'
            ],
        ];

        foreach($products as $product){
            $productAdded = new Product();
            $productAdded->title = $product['title'];
            $productAdded->price = $product['price'];
            $productAdded->link = $product['link'];
            $productAdded->meta = $product['meta']; // This should trigger the cast
            $productAdded->save();

            // Generate a unique image URL based on the product name
            $imageUrl = $this->generateImageUrl($product['title']);

            // Add the image to the media collection
            $productAdded->addMediaFromUrl($imageUrl)
                ->preservingOriginal()
                ->toMediaCollection('images');
        }

        
    }

    private function generateImageUrl($productName)
    {
        $seed = crc32($productName);
        return "https://picsum.photos/seed/{$seed}/640/480";
    }
}