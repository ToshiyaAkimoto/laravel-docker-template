<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content'); // 追加
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
//マイグレーションファイルを使うことで、学習リソースの削減と作業状況の共有が楽になる！
//・SQLを知らなくてもPHPでテーブル操作ができる！
//・マイグレーションファイルをGitで共有することで、開発者全員が同じテーブルを作成することができる！