<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void 何の影響も及ぼさないらしい…
     */
    public function run()/*TodoSeederにあるクラスを実行するための関数*/
    {
        $this->call([//呼び出す
            TodoSeeder::class,//DBとの連携テスト用 TodoSeederの中にあるクラスを呼び出す(→テストデータがDBに登録される)
        ]);
    }
}
