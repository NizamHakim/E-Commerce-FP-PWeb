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
                'item_category_id' => '1',
                'price' => '600000',
                'description' => 'Indulge in this luxurious moisturizing cream for soft and supple skin.',
                'image' => 'images/beauty/beauty_1.jpg',
                'stock' => '100',
            ],
            // Beauty 2
            [
                'name' => 'Radiant Skin Serum',
                'item_category_id' => '1',
                'price' => '750000',
                'description' => 'Achieve a radiant complexion with our advanced skin serum.',
                'image' => 'images/beauty/beauty_2.jpg',
                'stock' => '150',
            ],
            // Beauty 3
            [
                'name' => 'Natural Rosewater Toner',
                'item_category_id' => '1',
                'price' => '300000',
                'description' => 'Refresh and tone your skin with our natural rosewater toner.',
                'image' => 'images/beauty/beauty_3.jpg',
                'stock' => '120',
            ],
            // Beauty 4
            [
                'name' => 'Anti-Aging Night Cream',
                'item_category_id' => '1',
                'price' => '900000',
                'description' => 'Reduce fine lines and wrinkles with our nourishing anti-aging night cream.',
                'image' => 'images/beauty/beauty_4.jpg',
                'stock' => '80',
            ],
            // Beauty 5
            [
                'name' => 'Glowing Skin Elixir',
                'item_category_id' => '1',
                'price' => '450000',
                'description' => 'Experience a natural glow with our specially formulated skin elixir.',
                'image' => 'images/beauty/beauty_5.jpg',
                'stock' => '90',
            ],
            // Beauty 6
            [
                'name' => 'Hydrating Facial Mask',
                'item_category_id' => '1',
                'price' => '375000',
                'description' => 'Revitalize your skin with our hydrating facial mask for a spa-like experience.',
                'image' => 'images/beauty/beauty_6.jpg',
                'stock' => '110',
            ],

            // ELECTRONIC
            // electronic 1
            [
                'name' => 'Samsung Galaxy S21',
                'item_category_id' => '2',
                'price' => '12000000',
                'description' => 'Experience the latest features with our flagship Samsung Galaxy S21 smartphone.',
                'image' => 'images/electronic/electronic_1.jpg',
                'stock' => '50',
            ],
            // electronic 2
            [
                'name' => 'Ultra HD Smart TV',
                'item_category_id' => '2',
                'price' => '13500000',
                'description' => 'Immerse yourself in stunning visuals with our ultra HD smart TV.',
                'image' => 'images/electronic/electronic_2.jpg',
                'stock' => '30',
            ],
            // electronic 3
            [
                'name' => 'Wireless Noise-Canceling Headphones',
                'item_category_id' => '2',
                'price' => '2250000',
                'description' => 'Enjoy crystal-clear audio with our wireless noise-canceling headphones.',
                'image' => 'images/electronic/electronic_3.jpg',
                'stock' => '100',
            ],
            // electronic 4
            [
                'name' => 'Gaming Laptop Pro',
                'item_category_id' => '2',
                'price' => '19500000',
                'description' => 'Level up your gaming experience with our powerful gaming laptop pro.',
                'image' => 'images/electronic/electronic_4.jpg',
                'stock' => '20',
            ],
            // electronic 5
            [
                'name' => 'Smart Home Security Camera',
                'item_category_id' => '2',
                'price' => '1200000',
                'description' => 'Monitor your home with our smart home security camera for peace of mind.',
                'image' => 'images/electronic/electronic_5.jpg',
                'stock' => '75',
            ],
            // electronic 6
            [
                'name' => 'Bluetooth Wireless Earbuds',
                'item_category_id' => '2',
                'price' => '600000',
                'description' => 'Enjoy the freedom of wireless audio with our Bluetooth earbuds.',
                'image' => 'images/electronic/electronic_6.jpg',
                'stock' => '60',
            ],

            // FASHION
            // fashion 1
            [
                'name' => 'Stylish Denim Jacket',
                'item_category_id' => '3',
                'price' => '1200000',
                'description' => 'Upgrade your style with our trendy denim jacket.',
                'image' => 'images/fashion/fashion_1.jpg',
                'stock' => '30',
            ],
            // fashion 2
            [
                'name' => 'Elegant Cocktail Dress',
                'item_category_id' => '3',
                'price' => '1950000',
                'description' => 'Make a statement with our elegant cocktail dress for special occasions.',
                'image' => 'images/fashion/fashion_2.jpg',
                'stock' => '20',
            ],
            // fashion 3
            [
                'name' => 'Classic Leather Handbag',
                'item_category_id' => '3',
                'price' => '750000',
                'description' => 'Complete your look with our classic leather handbag.',
                'image' => 'images/fashion/fashion_3.jpg',
                'stock' => '50',
            ],
            // fashion 4
            [
                'name' => 'Formal Men\'s Suit',
                'item_category_id' => '3',
                'price' => '3000000',
                'description' => 'Look sharp and sophisticated in our formal men\'s suit.',
                'image' => 'images/fashion/fashion_4.jpg',
                'stock' => '25',
            ],
            // fashion 5
            [
                'name' => 'Comfortable Sneakers',
                'item_category_id' => '3',
                'price' => '900000',
                'description' => 'Stay comfortable and stylish with our trendy sneakers.',
                'image' => 'images/fashion/fashion_5.jpg',
                'stock' => '40',
            ],
            // fashion 6
            [
                'name' => 'Chic Sunglasses',
                'item_category_id' => '3',
                'price' => '450000',
                'description' => 'Shield your eyes with our chic sunglasses for a fashionable look.',
                'image' => 'images/fashion/fashion_6.jpg',
                'stock' => '35',
            ],

            // HOME & KITCHEN
            // home kitchen 1
            [
                'name' => 'Stainless Steel Cookware Set',
                'item_category_id' => '4',
                'price' => '2250000',
                'description' => 'Upgrade your kitchen with our durable stainless steel cookware set.',
                'image' => 'images/home-kitchen/home_kitchen_1.jpg',
                'stock' => '40',
            ],
            // home kitchen 2
            [
                'name' => 'Cozy Throw Blanket',
                'item_category_id' => '4',
                'price' => '450000',
                'description' => 'Stay warm and stylish with our cozy throw blanket for chilly evenings.',
                'image' => 'images/home-kitchen/home_kitchen_2.jpg',
                'stock' => '60',
            ],
            // home kitchen 3
            [
                'name' => 'Smart Coffee Maker',
                'item_category_id' => '4',
                'price' => '1200000',
                'description' => 'Brew your favorite coffee with our smart coffee maker with programmable features.',
                'image' => 'images/home-kitchen/home_kitchen_3.jpg',
                'stock' => '30',
            ],
            // home kitchen 4
            [
                'name' => 'Elegant Dining Set',
                'item_category_id' => '4',
                'price' => '3750000',
                'description' => 'Dine in style with our elegant dining set for a sophisticated dining experience.',
                'image' => 'images/home-kitchen/home_kitchen_4.jpg',
                'stock' => '20',
            ],
            // home kitchen 5
            [
                'name' => 'Soft Microfiber Bed Sheets',
                'item_category_id' => '4',
                'price' => '600000',
                'description' => 'Experience luxurious comfort with our soft microfiber bed sheets.',
                'image' => 'images/home-kitchen/home_kitchen_5.jpg',
                'stock' => '50',
            ],
            // home kitchen 6
            [
                'name' => 'Robotic Vacuum Cleaner',
                'item_category_id' => '4',
                'price' => '3000000',
                'description' => 'Keep your home clean effortlessly with our advanced robotic vacuum cleaner.',
                'image' => 'images/home-kitchen/home_kitchen_6.jpg',
                'stock' => '25',
            ],

            // PET SUPPLIES
            // pet supplies 1
            [
                'name' => 'Interactive Cat Toy',
                'item_category_id' => '5',
                'price' => '300000',
                'description' => 'Entertain your cat with our interactive toy for hours of fun.',
                'image' => 'images/pet-supplies/pet_supplies_1.jpg',
                'stock' => '50',
            ],
            // pet supplies 2
            [
                'name' => 'Premium Dog Food',
                'item_category_id' => '5',
                'price' => '450000',
                'description' => 'Provide your dog with the finest nutrition using our premium dog food.',
                'image' => 'images/pet-supplies/pet_supplies_2.jpg',
                'stock' => '40',
            ],
            // pet supplies 3
            [
                'name' => 'Cozy Pet Bed',
                'item_category_id' => '5',
                'price' => '750000',
                'description' => 'Give your pet a comfortable place to rest with our cozy pet bed.',
                'image' => 'images/pet-supplies/pet_supplies_3.jpg',
                'stock' => '30',
            ],
            // pet supplies 4
            [
                'name' => 'Automatic Pet Feeder',
                'item_category_id' => '5',
                'price' => '1200000',
                'description' => 'Schedule regular meals for your pet with our automatic pet feeder.',
                'image' => 'images/pet-supplies/pet_supplies_4.jpg',
                'stock' => '25',
            ],
            // pet supplies 5
            [
                'name' => 'Cat Grooming Kit',
                'item_category_id' => '5',
                'price' => '525000',
                'description' => 'Keep your cat looking sharp with our comprehensive cat grooming kit.',
                'image' => 'images/pet-supplies/pet_supplies_5.jpg',
                'stock' => '35',
            ],
            // pet supplies 6
            [
                'name' => 'Durable Dog Leash',
                'item_category_id' => '5',
                'price' => '225000',
                'description' => 'Take your dog for a walk with our durable and stylish dog leash.',
                'image' => 'images/pet-supplies/pet_supplies_6.jpg',
                'stock' => '60',
            ],

            // SPORTS
            // sports 1
            [
                'name' => 'Tennis Racket Set',
                'item_category_id' => '6',
                'price' => '1350000',
                'description' => 'Ace your game with our high-quality tennis racket set.',
                'image' => 'images/sports/sports_1.jpg',
                'stock' => '30',
            ],
            // sports 2
            [
                'name' => 'Adjustable Dumbbell Set',
                'item_category_id' => '6',
                'price' => '3000000',
                'description' => 'Build strength with our adjustable dumbbell set for home workouts.',
                'image' => 'images/sports/sports_2.jpg',
                'stock' => '20',
            ],
            // sports 3
            [
                'name' => 'Soccer Ball',
                'item_category_id' => '6',
                'price' => '375000',
                'description' => 'Kick off your soccer game with our durable and reliable soccer ball.',
                'image' => 'images/sports/sports_3.jpg',
                'stock' => '40',
            ],
            // sports 4
            [
                'name' => 'Running Shoes',
                'item_category_id' => '6',
                'price' => '900000',
                'description' => 'Hit the track with our comfortable and supportive running shoes.',
                'image' => 'images/sports/sports_4.jpg',
                'stock' => '25',
            ],
            // sports 5
            [
                'name' => 'Fitness Resistance Bands Set',
                'item_category_id' => '6',
                'price' => '450000',
                'description' => 'Enhance your workout with our versatile fitness resistance bands set.',
                'image' => 'images/sports/sports_5.jpg',
                'stock' => '50',
            ],
            // sports 6
            [
                'name' => 'Portable Basketball Hoop',
                'item_category_id' => '6',
                'price' => '1950000',
                'description' => 'Practice your slam dunk with our portable basketball hoop for indoor or outdoor use.',
                'image' => 'images/sports/sports_6.jpg',
                'stock' => '35',
            ],
        ];

        foreach ($data as $value) {
            Item::create($value);
        }
    }
}
