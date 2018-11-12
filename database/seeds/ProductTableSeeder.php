<?php
use App\Products;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Products::truncate();

        $faker = \Faker\Factory::create();

        for($i=1;$i<20;$i++){
            Products::create([
                'code'=>'code'.'-'.$i,
                'name'=>$faker->name, 
                'product'=>1,
                'category'=>1,
                'userid'=>1,
            ]);
        }
    }
}
