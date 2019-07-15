<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            [
                'comment'    => '很不错的文章，赞',
                'article_id' => 2,
            ],
            [
                'comment'    => '这篇文章对我很有帮助',
                'article_id' => 1,
            ],
            [
                'comment'    => '学习了，谢谢',
                'article_id' => 2,
            ],
            [
                'comment'    => '写的很有深度',
                'article_id' => 3,
            ],
        ]);
    }
}
