<?php
use App\InvTypes;
use Illuminate\Database\Seeder;

class InvTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        InvTypes::truncate();

        $faker = \Faker\Factory::create();

        for($i=1;$i<20;$i++){
            InvTypes::create([
                'code'=>'code'.'-'.$i,
                'name'=>$faker->name, 
                'userid'=>1,
            ]);
        }
    }
}
