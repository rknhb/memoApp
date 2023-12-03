<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Memo;

class MemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memo')->delete();

        Memo::create([
            'title' => '12/13 laravel勉強', 'content' => 'データの読み取りと追加'
        ]);

        Memo::create([
            'title' => '12/6 laravel勉強', 'content' => 'viewの表示'
        ]);
    }
}