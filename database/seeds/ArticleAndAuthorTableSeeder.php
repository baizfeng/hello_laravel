<?php

use Illuminate\Database\Seeder;

class ArticleAndAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //文章表
        DB::table('article')->insert([
            [
                'article_name' => '我是一颗小草',
                'author_id'    => 2,
            ],
            [
                'article_name' => '我是一棵大树',
                'author_id'    => 1,
            ],
            [
                'article_name' => '我是一条小河',
                'author_id'    => 3,
            ],
        ]);
        //作者表
        DB::table('author')->insert([
            [
                'author_name' => '大毛',
            ],
            [
                'author_name' => '二毛',
            ],
            [
                'author_name' => '三毛',
            ],
        ]);
    }
}
