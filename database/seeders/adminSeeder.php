<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Halil', 'Melike'];
        foreach ($names as $name){
            DB::table('admins')->insert([
                'name' => $name,
                'password' => bcrypt(123456)
            ]);
        }
    }
}
