<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
     function generateOwnId()
    {
        $rand="BM".rand(1000000,9999999);
        $count=User::where('own_id',$rand)->count();
        while($count>0)
        {
            $rand="BM".rand(1000000,9999999);
            $count=User::where('own_id',$rand)->count();
        }

        return $rand;
    }
    public function run(): void
    {
        for($i=0;$i<100;$i++)
        {
            $faker=Faker::create();
            $user=new User();
            $user->name=$faker->name;
            $user->email=$faker->email;
            $user->password=Hash::make('12345678');
            $user->parent_id="BM0000000";
            $user->own_id=$this->generateOwnId();
            $user->sponsor_id="BM0000000";
            $user->position="Right";
            $user->save();
        }


    }
}
