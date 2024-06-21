<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // 追記
//C:\Users\banga\Desktop\GizTech作業\Laravel\src\vendor\laravel\framework\src\Illuminate\Database\Eloquent　にあるデータ

class Todo extends Model
{
    use SoftDeletes; // 追記　トレイトを利用し、SoftDeletesとして設定されているプロパティ・メソッドを実行できるようにして、論理削除をできるようにしている
    protected $table = 'todos';//MySQLとの連携用 テーブルはtodosテーブルを使用する
    protected $fillable = [//->fillによってModelに代入可能なプロパティを記載する　これ以外の値は代入されない
        'content',
    ];
}
