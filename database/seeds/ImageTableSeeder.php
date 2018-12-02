<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1;$i<51;$i++){
            DB::table('images')->insert([
                "url"=>"1535916618-irlandadan-ornek-olacak-orman-kampanyasi-0712171200-l2.jpg",
                "imageable_type"=>"App\Product",
                "imageable_id"=>$i,
                "is_first"=>1
            ]);
        }
    }
}
