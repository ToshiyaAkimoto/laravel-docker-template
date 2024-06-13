<?php

namespace App\Http\Controllers;

use App\Todo;//Appフォルダ内のTodoファイルを使用する
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $inputs = $request->all(); // 変更
        dd($inputs); // 追記

        // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
        $todo = new Todo();
        $todo->user_id = Auth::id();//攻撃者のユーザIDを保存
        // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
        $todo->fill($inputs); // fill()によって、$todo->連想配列のキー=連想配列のバリューを自動的に行ってくれる ただし、fillableで許可しているものだけ
        // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
        $todo->save();
        return redirect()->route('todo.index');
    }

}