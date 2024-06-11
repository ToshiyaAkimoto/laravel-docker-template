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

        return view('todo.index');//view('todo.index') は resources/views/ に配置されている index.blade.php のことを指している
    }
}
