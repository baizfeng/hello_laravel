<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper', function (Blueprint $table) {
            //自增的主键ID
            $table->bigIncrements('id');
            //试卷名称，唯一，varchar(100)，不为空
            $table->string('paper_name','100')->notNull()->unique();
            //试卷总分,整形数字,tinyint，默认为100
            $table->tinyInteger('total_score')->default(100);
            //试卷开始考试时间，时间戳类型(整形int)
            $table->integer('start_time')->nullable();
            //考试时间长度，单位分钟，整型tinyint
            $table->tinyInteger('duration');
            //试卷是否启用状态，1标识启用，2标识禁用，默认为1，tinyint类型
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
}
