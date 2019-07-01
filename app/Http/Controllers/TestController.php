<?php

namespace App\Http\Controllers;

use DB;

class TestController extends Controller
{
    public function test1()
    {
        return utf8_encode(phpinfo());
    }

    //添加方法
    public function add()
    {
        //定义关联操作的表
        $db = DB::table('member');
        //同时插入多行，返回bool类型
        $result = $db->insert([
            [
                'name'  => '马冬梅',
                'age'   => '13',
                'email' => 'madongmei@qq.com',
            ],
            [
                'name'  => '马春梅',
                'age'   => '16',
                'email' => 'machunmei@qq.com',
            ],
        ]);
        //插入单行,返回插入的ID
        $result = $db->insertGetId([
            'name'  => '马梅梅',
            'age'   => '15',
            'email' => 'mameimei@qq.com',

        ]);
        dd($result);
    }

    public function del()
    {
        echo "delete";
    }

    public function update()
    {
        $db = DB::table('member');
        // $result=$db->where('id','=','3')->update([
        //     'name'=>'张三丰',
        // ]);
        $result = $db->where('id', '=', '4')->increment('age', 2);
        dd($result);
    }

    public function select()
    {
        $db   = DB::table('member');
        $data = $db->offset(0)->limit(2)->get();
        dd($data);
        // foreach ($data as $key => $value) {
        //     echo "{$value->id},{$value->name},{$value->email}<br/>";
        // }
    }

    public function test3()
    {
        //当前时间
        $date = date('Y-m-d H:i:s', time());
        //获取今天的星期
        $day  = date('N');
        $time = strtotime('+1 month');
        return view('home.test.test3', compact('date', 'day', 'time'));
    }

    public function test4()
    {
        $db   = DB::table('member');
        $data = $db->get();
        return view('home.test.test4',compact('data'));
    }

    public function test5(){
        return view('home.test.test5');
    }

    //展示基础表单
    public function test6(){
        return view('home.test.test6');
    }

    public function test7(){
        return '请求提交成功';
    }
}
