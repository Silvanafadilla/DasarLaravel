<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PostsTableSeeder::class);
        // $this->call(SiswaTableSeeder::class);
        // $this->call(BiodataTableSeeder::class);
        // // $this->call(UsersTableSeeder::class);
        $this->call(KaosSeeder::class);
        factory(App\Tabungan::class, 100)->create();
        factory(App\Customer::class, 1000)->create();
    }
}
