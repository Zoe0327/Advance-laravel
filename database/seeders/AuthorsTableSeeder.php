<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
  * Run the database seeds.
  *
  * @return void
  */
    public function run()
    {
        Author::factory()->count(3)->create();
    //$param = [
    //    'name' => 'tony',
    //    'age' => 35,
    //    'nationality' => 'American'
    //];
    //DB::table('authors')->insert($param);
    //$param = [
    //    'name' => 'jack',
    //    'age' => 20,
    //    'nationality' => 'British'
    //];
    //DB::table('authors')->insert($param);
    //$param = [
    //    'name' => 'sara',
    //    'age' => 45,
    //    'nationality' => 'Egyptian'
    //];
    //DB::table('authors')->insert($param);
    //$param = [
    //    'name' => 'saly',
    //    'age' => 31,
    //    'nationality' => 'Chinese'
    //];
    //DB::table('authors')->insert($param);
    }
}
