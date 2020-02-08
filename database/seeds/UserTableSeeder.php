<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
                'name' => 'tsuruta yoshihiro',
                'email' => 'tsuruta_yoshihiro@gmail.com',
                'password' => 'tsurutayoshihiro'
            ];
            DB::table('users')->insert($param);
    }
}
