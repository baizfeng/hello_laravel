<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function test1()
    {
        return utf8_encode(phpinfo());
    }

    public function add()
    {
        echo "add";
    }

    public function del()
    {
        echo "delete";
    }

    public function update()
    {
        echo "update";
    }

    public function select()
    {
        echo "select";
    }
}
