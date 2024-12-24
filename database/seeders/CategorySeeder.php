<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $nbCategories = 3;
        for($i = 1; $i <= $nbCategories;  ++$i)
        {
            $title = "Categorie {$i} ";
            $titleForSlug = str_replace('ie', 'y', $title) ;
            $slug = Str::slug($titleForSlug);
            Category::create(['title' => $title, 'slug'=> $slug]);
        }
    }
}
