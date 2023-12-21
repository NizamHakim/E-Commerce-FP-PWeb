<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ItemCategory::truncate();
        Schema::enableForeignKeyConstraints();

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
