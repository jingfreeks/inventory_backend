<?php
use App\Categories;

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
        Categories::truncate();

        $faker = \Faker\Factory::create();

        for($i=0;$i<20;$i++){
            Categories::create([
                'code'=>'code'.'-'.$i,
                'name'=>$faker->name, 
                'userid'=>1,
            ]);
        }
    }
}
