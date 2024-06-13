<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';//MySQLとの連携用 テーブルはtodosテーブルを使用する

    protected $fillable = [//->fillによってModelに代入可能なプロパティを記載する　これ以外の値は代入されない
        'content',
    ];
}
