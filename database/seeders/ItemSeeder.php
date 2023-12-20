<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Item::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            // BEAUTY
            // Beauty 1
            [
                'name' => 'Luxurious Moisturizing Cream',
                'category_id' => '1',
                'price' => '39.99',
                'description' => 'Indulge in this luxurious moisturizing cream for soft and supple skin.',
                'image' => '',
                'stock' => '100',
            ],
            // Beauty 2
            [
                'name' => 'Radiant Skin Serum',
                'category_id' => '1',
                'price' => '49.99',
                'description' => 'Achieve a radiant complexion with our advanced skin serum.',
                'image' => '',
                'stock' => '150',
            ],
            // Beauty 3
            [
                'name' => 'Natural Rosewater Toner',
                'category_id' => '1',
                'price' => '19.99',
                'description' => 'Refresh and tone your skin with our natural rosewater toner.',
                'image' => '',
                'stock' => '120',
            ],
            // Beauty 4
            [
                'name' => 'Anti-Aging Night Cream',
                'category_id' => '1',
                'price' => '59.99',
                'description' => 'Reduce fine lines and wrinkles with our nourishing anti-aging night cream.',
                'image' => '',
                'stock' => '80',
            ],
            // Beauty 5
            [
                'name' => 'Glowing Skin Elixir',
                'category_id' => '1',
                'price' => '29.99',
                'description' => 'Experience a natural glow with our specially formulated skin elixir.',
                'image' => '',
                'stock' => '90',
            ],
            // Beauty 6
            [
                'name' => 'Hydrating Facial Mask',
                'category_id' => '1',
                'price' => '24.99',
                'description' => 'Revitalize your skin with our hydrating facial mask for a spa-like experience.',
                'image' => '',
                'stock' => '110',
            ],

            // ELECTRONIC
            // electronic 1
            [
                'name' => 'Samsung Galaxy S21',
                'category_id' => '2',
                'price' => '799.99',
                'description' => 'Experience the latest features with our flagship Samsung Galaxy S21 smartphone.',
                'image' => '',
                'stock' => '50',
            ],
            // electronic 2
            [
                'name' => 'Ultra HD Smart TV',
                'category_id' => '2',
                'price' => '899.99',
                'description' => 'Immerse yourself in stunning visuals with our ultra HD smart TV.',
                'image' => '',
                'stock' => '30',
            ],
            // electronic 3
            [
                'name' => 'Wireless Noise-Canceling Headphones',
                'category_id' => '2',
                'price' => '149.99',
                'description' => 'Enjoy crystal-clear audio with our wireless noise-canceling headphones.',
                'image' => '',
                'stock' => '100',
            ],
            // electronic 4
            [
                'name' => 'Gaming Laptop Pro',
                'category_id' => '2',
                'price' => '1299.99',
                'description' => 'Level up your gaming experience with our powerful gaming laptop pro.',
                'image' => '',
                'stock' => '20',
            ],
            // electronic 5
            [
                'name' => 'Smart Home Security Camera',
                'category_id' => '2',
                'price' => '79.99',
                'description' => 'Monitor your home with our smart home security camera for peace of mind.',
                'image' => '',
                'stock' => '75',
            ],
            // electronic 6
            [
                'name' => 'Bluetooth Wireless Earbuds',
                'category_id' => '2',
                'price' => '39.99',
                'description' => 'Enjoy the freedom of wireless audio with our Bluetooth earbuds.',
                'image' => '',
                'stock' => '60',
            ],

            // FASHION
            // fashion 1
            [
                'name' => 'Stylish Denim Jacket',
                'category_id' => '3',
                'price' => '79.99',
                'description' => 'Upgrade your style with our trendy denim jacket.',
                'image' => '',
                'stock' => '30',
            ],
            // fashion 2
            [
                'name' => 'Elegant Cocktail Dress',
                'category_id' => '3',
                'price' => '129.99',
                'description' => 'Make a statement with our elegant cocktail dress for special occasions.',
                'image' => '',
                'stock' => '20',
            ],
            // fashion 3
            [
                'name' => 'Classic Leather Handbag',
                'category_id' => '3',
                'price' => '49.99',
                'description' => 'Complete your look with our classic leather handbag.',
                'image' => '',
                'stock' => '50',
            ],
            // fashion 4
            [
                'name' => 'Formal Men\'s Suit',
                'category_id' => '3',
                'price' => '199.99',
                'description' => 'Look sharp and sophisticated in our formal men\'s suit.',
                'image' => '',
                'stock' => '25',
            ],
            // fashion 5
            [
                'name' => 'Comfortable Sneakers',
                'category_id' => '3',
                'price' => '59.99',
                'description' => 'Stay comfortable and stylish with our trendy sneakers.',
                'image' => '',
                'stock' => '40',
            ],
            // fashion 6
            [
                'name' => 'Chic Sunglasses',
                'category_id' => '3',
                'price' => '29.99',
                'description' => 'Shield your eyes with our chic sunglasses for a fashionable look.',
                'image' => '',
                'stock' => '35',
            ],

            // HOME & KITCHEN
            // home kitchen 1
            [
                'name' => 'Stainless Steel Cookware Set',
                'category_id' => '4',
                'price' => '149.99',
                'description' => 'Upgrade your kitchen with our durable stainless steel cookware set.',
                'image' => '',
                'stock' => '40',
            ],
            // home kitchen 2
            [
                'name' => 'Cozy Throw Blanket',
                'category_id' => '4',
                'price' => '29.99',
                'description' => 'Stay warm and stylish with our cozy throw blanket for chilly evenings.',
                'image' => '',
                'stock' => '60',
            ],
            // home kitchen 3
            [
                'name' => 'Smart Coffee Maker',
                'category_id' => '4',
                'price' => '79.99',
                'description' => 'Brew your favorite coffee with our smart coffee maker with programmable features.',
                'image' => '',
                'stock' => '30',
            ],
            // home kitchen 4
            [
                'name' => 'Elegant Dining Set',
                'category_id' => '4',
                'price' => '249.99',
                'description' => 'Dine in style with our elegant dining set for a sophisticated dining experience.',
                'image' => '',
                'stock' => '20',
            ],
            // home kitchen 5
            [
                'name' => 'Soft Microfiber Bed Sheets',
                'category_id' => '4',
                'price' => '39.99',
                'description' => 'Experience luxurious comfort with our soft microfiber bed sheets.',
                'image' => '',
                'stock' => '50',
            ],
            // home kitchen 6
            [
                'name' => 'Robotic Vacuum Cleaner',
                'category_id' => '4',
                'price' => '199.99',
                'description' => 'Keep your home clean effortlessly with our advanced robotic vacuum cleaner.',
                'image' => '',
                'stock' => '25',
            ],

            // PET SUPPLIES
            // pet supplies 1
            [
                'name' => 'Interactive Cat Toy',
                'category_id' => '5',
                'price' => '19.99',
                'description' => 'Entertain your cat with our interactive toy for hours of fun.',
                'image' => '',
                'stock' => '50',
            ],
            // pet supplies 2
            [
                'name' => 'Premium Dog Food',
                'category_id' => '5',
                'price' => '29.99',
                'description' => 'Provide your dog with the finest nutrition using our premium dog food.',
                'image' => '',
                'stock' => '40',
            ],
            // pet supplies 3
            [
                'name' => 'Cozy Pet Bed',
                'category_id' => '5',
                'price' => '49.99',
                'description' => 'Give your pet a comfortable place to rest with our cozy pet bed.',
                'image' => '',
                'stock' => '30',
            ],
            // pet supplies 4
            [
                'name' => 'Automatic Pet Feeder',
                'category_id' => '5',
                'price' => '79.99',
                'description' => 'Schedule regular meals for your pet with our automatic pet feeder.',
                'image' => '',
                'stock' => '25',
            ],
            // pet supplies 5
            [
                'name' => 'Cat Grooming Kit',
                'category_id' => '5',
                'price' => '34.99',
                'description' => 'Keep your cat looking sharp with our comprehensive cat grooming kit.',
                'image' => '',
                'stock' => '35',
            ],
            // pet supplies 6
            [
                'name' => 'Durable Dog Leash',
                'category_id' => '5',
                'price' => '14.99',
                'description' => 'Take your dog for a walk with our durable and stylish dog leash.',
                'image' => '',
                'stock' => '60',
            ],

            // SPORTS
            // sports 1
            [
                'name' => 'Tennis Racket Set',
                'category_id' => '6',
                'price' => '89.99',
                'description' => 'Ace your game with our high-quality tennis racket set.',
                'image' => '',
                'stock' => '30',
            ],
            // sports 2
            [
                'name' => 'Adjustable Dumbbell Set',
                'category_id' => '6',
                'price' => '199.99',
                'description' => 'Build strength with our adjustable dumbbell set for home workouts.',
                'image' => '',
                'stock' => '20',
            ],
            // sports 3
            [
                'name' => 'Soccer Ball',
                'category_id' => '6',
                'price' => '24.99',
                'description' => 'Kick off your soccer game with our durable and reliable soccer ball.',
                'image' => '',
                'stock' => '40',
            ],
            // sports 4
            [
                'name' => 'Running Shoes',
                'category_id' => '6',
                'price' => '59.99',
                'description' => 'Hit the track with our comfortable and supportive running shoes.',
                'image' => '',
                'stock' => '25',
            ],
            // sports 5
            [
                'name' => 'Fitness Resistance Bands Set',
                'category_id' => '6',
                'price' => '29.99',
                'description' => 'Enhance your workout with our versatile fitness resistance bands set.',
                'image' => '',
                'stock' => '50',
            ],
            // sports 6
            [
                'name' => 'Portable Basketball Hoop',
                'category_id' => '6',
                'price' => '129.99',
                'description' => 'Practice your slam dunk with our portable basketball hoop for indoor or outdoor use.',
                'image' => '',
                'stock' => '35',
            ],
        ];

        foreach ($data as $value) {
            Item::create($value);
        }
    }
}
