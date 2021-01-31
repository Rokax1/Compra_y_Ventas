<?php

use Illuminate\Database\Seeder;

class ProductUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Modelos\ProductUser::class,100)->create();
    }
}
