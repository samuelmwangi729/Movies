<?php

use Illuminate\Database\Seeder;
use App\User;
use App\CatSubscriber;
use App\PhoneUser;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'=>'samuel mwangi',
        //     'email' =>'samuelmwangi729@gmail.com',
        //     'password'=>Hash::make('P!@#four5sam')
        // ]);
        CatSubscriber::create([
            'Subscriber'=>'sam@sam.comx',
            'Category'=>'Science and Tech'
        ]);
        // PhoneUser::create([
        //     'email'=>'samuelmwangi729@gmail.com',
        //     'password'=>sha1('P!@#four5sam')
        // ]);
    }
}
