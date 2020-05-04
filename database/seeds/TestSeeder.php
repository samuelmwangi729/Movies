<?php

use Illuminate\Database\Seeder;
use App\User;
use App\CatSubscriber;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'samuel mwangi',
            'email' =>'samuelmwangi729@gmail.com',
            'password'=>Hash::make('12345678')
        ]);
        CatSubscriber::create([
            'Subscriber'=>'samuelmwangi729@gmail.com',
            'Category'=>'Education'
        ]);
    }
}
