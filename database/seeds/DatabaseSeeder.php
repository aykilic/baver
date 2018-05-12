<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
         $this->call(fisturuTableSeeder::class);
        $this->call(dovizTableSeeder::class);
        $this->call(birimTableSeeder::class);
        $this->call(durumTableSeeder::class);
         Model::reguard();
    }

}
