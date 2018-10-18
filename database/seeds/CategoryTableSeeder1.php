<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::truncate();

        $faker = \Faker\Factory::create();

        for($i=0;$i<20;$i++){
            Category::create([
                'code'=>$faker->countrycode,
                'name'=>$faker->country, 
            ]);
        }
    }
}
