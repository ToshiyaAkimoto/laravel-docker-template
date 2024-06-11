<?php

namespace App\Http\Controllers;

use App\Todo;//Appフォルダ内のTodoファイルを使用する

use Illuminate\Http\Request;//

class TodoController extends Controller
{
    public function index()
    {
        $todo = new Todo();//クラスを実行(TodoはApp\Todoにある) todosテーブルを使用する
        $todoList = $todo->all();//DBのtodosテーブル内のデータを取得

        return view('todo.index', ['todoList' => $todoList]);//view('todo.index') は resources/views/ に配置されている index.blade.php のことを指している
    //view関数の第二引数の連想配列は、[blade内での変数名 => 代入したい値]を意味します。
    }

    public function create()
    {
    // TODO: 第1引数を指定
    return view('todo.create'); // 追記
    }

}