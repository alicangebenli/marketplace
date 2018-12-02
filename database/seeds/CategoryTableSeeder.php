<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        //
        for ($i=0;$i<15;$i++){
            DB::table('categories')->insert([
                'title'=>$faker->text(10),
                'content'=>$faker->text(100),
                'slug'=>$faker->unique()->slug,
                'rel'=>0
            ]);
        }
    }
}
