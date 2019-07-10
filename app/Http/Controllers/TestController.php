<?php

namespace App\Http\Controllers;

use App\Home\Member;
use DB;
use Illuminate\Http\Request;
use Input;

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
        return view('home.test.test4', compact('data'));
    }

    public function test5()
    {
        return view('home.test.test5');
    }

    //展示基础表单
    public function test6()
    {
        return view('home.test.test6');
    }

    public function test7()
    {
        return '请求提交成功';
    }

    public function test8(Request $request)
    {
        //实例化模型，将表和类映射关联起来
        $model = new Member();
        // //给属性赋值,将字段与类的属性映射起来
        // $model->name  = '毛泽东';
        // $model->age   = '83';
        // $model->email = 'maozedong@qq.com';
        // $result       = $model->save();
        // dd($result);
        // 方法二
        $result = $model->create($request->all());
        dd($request);
    }

    public function test9()
    {
        $data = Member::where('id', '>', '4')->get()->toArray();
        dd($data);
    }

    public function test10()
    {
        $data        = Member::find(5);
        $data->email = 'shabi@qq.com';
        $result      = $data->save();
        dd($result);
    }

    public function test11()
    {
        $data = Member::find(5);
        dd($data->delete());
    }

    public function test12(Request $request)
    {
        if (Input::method() == 'POST') {
            $this->validate($request, [
                'name'  => 'required|min:6|max:15',
                'age'   => 'required|integer|min:1|max:100',
                'email' => 'required|email',
                'captcha'=>'required|captcha'
            ]);
        } else {
            return view('home.test.test12');
        }
    }

    public function test14(Request $request)
    {
        if (Input::method() == 'POST') {
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                $path = md5(time() . rand(100000, 999999)) . '.' . $request->file('avatar')->getClientOriginalExtension();
                $request->file('avatar')->move('./uploads', $path);
                //获取全部数据
                $data = $request->all();
                //将路径添加至数组中
                $data['avatar'] = './uploads/' . $path;
                $result         = Member::create($data);
                dd($result);
            } else {
                echo "6666";
            }
        } else {
            return view('home.test.test14');
        }
    }

    public function test15()
    {
        $data = Member::paginate(2);
        return view('home.test.test15',compact('data'));
    }
}
