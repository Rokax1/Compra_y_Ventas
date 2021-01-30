<?php

use Illuminate\Database\Seeder;

class UserProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Modelos\Users_Products::class,50)->create();
    }
}
