<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'beauty', 'electronic', 'fashion', 'home & kitchen', 'pet supplies', 'sports',
        ];

        foreach ($data as $value) {
            ItemCategory::insert([
                'name' => $value
            ]);
        }
    }
}
