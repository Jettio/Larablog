<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $cName = 'Без категории';
        $categories[] = [
            'title' => $cName
        ];

        for ($i = 1; $i <= 10; $i++) {
            $cName = 'Категория №'.$i;

            $categories[] = [
              'title' => $cName
            ];
        }

        $tags = [];

        $cTags = 'Без тега';
        $tags[] = [
            'title' => $cTags
        ];

        for ($i = 1; $i <= 10; $i++) {
            $cTags = 'Тэг №'.$i;

            $tags[] = [
                'title' => $cTags
            ];
        }

        DB::table('blog_categories')->insert($categories);
        DB::table('blog_tags')->insert($tags);
    }

}
