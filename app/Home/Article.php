<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //定义模型关联的数据表
    protected $table = 'article';
    //定义主键
    protected $primaryKey = 'id';
    //定义禁止操作时间
    public $timestamps = false;

    //模型的关联操作：关联作者模型(一对一)
    public function author()
    {
        return $this->hasOne('App\Home\Author', 'id', 'author_id');
    }

    //模型的关联操作：关联作者模型(一对多)
    public function comment()
    {
        return $this->hasMany('App\Home\Comment', 'article_id', 'id');
    }
}
