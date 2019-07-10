<?php

use Illuminate\Database\Seeder;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //定义数组
        $data = [
            [
                'paper_name' => '期末考试数学',
                'start_time' => strtotime('+7days'),
                'duration'   => '120',
            ],
            [
                'paper_name' => '期末考试英语',
                'start_time' => strtotime('+7days'),
                'duration'   => '120',
            ],
            [
                'paper_name' => '期末考试理综',
                'start_time' => strtotime('+7days'),
                'duration'   => '120',
            ],
        ];
        //写入数据
        DB::table('paper')->insert($data);
    }
}
