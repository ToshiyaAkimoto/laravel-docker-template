<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';//MySQLとの連携用 テーブルはtodosテーブルを使用する
}
