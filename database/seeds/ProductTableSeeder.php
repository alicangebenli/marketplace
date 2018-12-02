<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        /*
        
       for ($i=0;$i<50;$i++){
           DB::table('products')->insert([
               "title" => $faker->name,
               "content" => $faker->text(50),
               "price"=>$faker->numberBetween(5,100),
               "tag"=>$faker->text(10),
               "category_id"=>$faker->numberBetween(1,10),
               "created_at" => Carbon::now(),
               "updated_at"=> Carbon::now()
               
           ]);
       }
       */
        
    }
}
