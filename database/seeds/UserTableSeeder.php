<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        //
//       for ($i=0;$i<100;$i++){
//           DB::table('users')->insert([
//               'realname' => $faker->name,
//               'name' => $faker->text(10),
//               'email'=> $faker->unique()->safeEmail,
//               'password' =>bcrypt($faker->text(10)),
//           ]);
//       }
        DB::table('users')->insert([
               'realname' => $faker->name,
               'name' => $faker->text(10),
               'email'=> "csforumtk@hotmail.com",
               'password' =>bcrypt("asd123"),
        ]);
    }
}
