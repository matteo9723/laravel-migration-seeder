<?php
use Faker\Generator as Faker ;
use App\Package;
use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i= 0;$i <100;$i++){
            $new_package = new Package();
            $new_package->city  = $faker->city();
            $new_package->state = $faker->state();
            $new_package->price = $faker->numberBetween(100,1000);
            $new_package->description = $faker->text(200);
            $new_package->save();
        }



    }
}
