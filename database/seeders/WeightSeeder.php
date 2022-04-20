<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Weight;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Weight::create([
            'user_id'   => 1,
            'amount'    => 245,
            'date'      => '2021-10-09'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 249,
            'date'      => '2021-10-07'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 251,
            'date'      => '2021-09-24'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 253,
            'date'      => '2021-09-11'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 257,
            'date'      => '2021-08-31'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 266,
            'date'      => '2021-08-25'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 249,
            'date'      => '2021-05-05'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 259,
            'date'      => '2021-03-17'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 247,
            'date'      => '2021-01-06'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 261,
            'date'      => '2020-11-19'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 256,
            'date'      => '2020-08-22'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 266,
            'date'      => '2020-07-24'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 267,
            'date'      => '2020-06-03'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 272,
            'date'      => '2020-04-23'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 280,
            'date'      => '2020-03-16'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 288,
            'date'      => '2020-02-13'
        ]);

        Weight::create([
            'user_id'   => 1,
            'amount'    => 296,
            'date'      => '2020-01-06'
        ]);

    }
}
