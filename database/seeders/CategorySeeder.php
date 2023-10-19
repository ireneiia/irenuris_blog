<?php

namespace Database\Seeders;

use App\Models\Dashboard\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ejecutarla php artisan db:seed
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        for($i=0;$i<20;$i++){
            Category::create([
                'titulo' => "Categoria $i",
                'url' => "categoria-$i"
            ]);
        }
    }
}
