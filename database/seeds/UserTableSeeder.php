<?php

/**
 * Created by PhpStorm.
 * User: mirkoxo
 * Date: 30-09-15
 * Time: 05:42 PM
 */

Use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        \DB::table('users')->insert(array(

            'name'      =>  'Mirko',
            'email'     =>  'mirko@enbi.cl',
            'password'  =>  \Hash::make('secret')
        ));
    }
}