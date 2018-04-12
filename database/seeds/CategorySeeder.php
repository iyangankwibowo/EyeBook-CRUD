<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create
        ([
            'name' => 'Private',
            'slug' => str_slug('private')
        ]);

        Category::create
        ([
            'name' => 'News',
            'slug' => str_slug('news')
        ]);

        category::create
        ([
            'name' => 'Information',
            'slug' => str_slug('information')
        ]);

        category::create
        ([
            'name' => 'Other',
            'slug' => str_slug('other')
        ]);
    }
}
