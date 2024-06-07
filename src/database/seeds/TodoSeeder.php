<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();//todosテーブルのすべてのデータを削除する(開発者間のテストデータに差異が生じないようにするため)
        $testData = [
            [
                'content' => 'PHP Appセクションを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Laravel Lessonを終える',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('todos')->insert($testData); // DBのtodosテーブルに対し、変数testDataを挿入する
        //DB::table()：tableメソッドの引数のテーブルを操作するための準備
        //insert()：引数のデータをテーブルに投入するINSERT文を実行する
    }
}
