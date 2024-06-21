<?php

namespace App\Http\Controllers;

use App\Todo;//Appフォルダ内のTodoファイルを使用する
use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $todo; // 追記

    public function index()
    {
        $todoList = $this->todo->all();//DBのtodosテーブル内のデータを取得 all()によって、todoで指定したテーブルの全データを取得している

        return view('todo.index', ['todoList' => $todoList]);//view('todo.index') は resources/views/ に配置されている index.blade.php のことを指している
    //view関数の第二引数の連想配列は、[blade内での変数名 => 代入したい値]を意味します。
    }

    public function create()
    {
    // TODO: 第1引数を指定
    return view('todo.create'); // このページを表示する
    }

    public function store(Request $request)
    {
//C:\Users\banga\Desktop\GizTech作業\Laravel\src\vendor\laravel\framework\src\Illuminate\Http内にある、Request.phpを参照する

        $inputs = $request->all(); // 変更
        //dd($inputs); // 追記

        // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
        //$todo->user_id = Auth::id();//攻撃者(入力者)のユーザIDを保存
        // 2. Todoインスタンスのカラム名のプロパティに保存したい値を代入
        $this->todo->fill($inputs); // 変更 // fill()によって、$todo->連想配列のキー=連想配列のバリューを自動的に行ってくれる ただし、fillableで許可しているものだけ
        // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
        $this->todo->save(); // 変更
        return redirect()->route('todo.index');
    }
    public function show($id)
    {
        $todo = $this->todo->find($id);//idが一致するデータを取得している
        return view('todo.show', ['todo' => $todo]); // 追記
    }
    public function __construct(Todo $todo)
    {
        $this->todo = $todo; // 追記
    }

    public function edit($id)
    {
    // TODO: 編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
    $todo = $this->todo->find($id);
    return view('todo.edit', ['todo' => $todo]); // 追記
    }

    public function update(Request $request, $id) // 第1引数: リクエスト情報の取得　第2引数: ルートパラメータの取得
{
    // TODO: リクエストされた値を取得
    $inputs = $request->all();
    $todo = $this->todo->find($id);
    $todo->fill($inputs)->save();
    return redirect()->route('todo.show', $todo->id); // 追記
}
}