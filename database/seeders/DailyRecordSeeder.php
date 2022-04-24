<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DailyRecord;
use App\Models\Workout;

class DailyRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-18',
            'weight' => 302,
            'systolic' => 150,
            'diastolic' => 90,
            'resting_heartrate' => 57,
            'steps' => 10166
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Walk',
                'duration' => '00:30:00',
                'distance' => 1.67
            ],
            [
                'type' => 'Indoor Run',
                'duration' => '00:20:00',
                'distance' => 1.16
            ]
        ]);

        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-19',
            'weight' => 299,
            'systolic' => 146,
            'diastolic' => 90,
            'resting_heartrate' => 54,
            'steps' => 2627
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:44:00',
                'distance' => 12
            ]
        ]);

        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-20',
            'weight' => 298,
            'systolic' => 136,
            'diastolic' => 88,
            'resting_heartrate' => 51,
            'steps' => 10311
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Walk',
                'duration' => '00:30:00',
                'distance' => 1.72
            ],
            [
                'type' => 'Indoor Run',
                'duration' => '00:35:00',
                'distance' => 2.18
            ]
        ]);

        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-21',
            'weight' => 296,
            'systolic' => 129,
            'diastolic' => 87,
            'resting_heartrate' => 57,
            'steps' => 5418
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:55:00',
                'distance' => 15
            ]
        ]);

        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-22',
            'weight' => 294,
            'systolic' => 125,
            'diastolic' => 83,
            'resting_heartrate' => 52,
            'steps' => 10295
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Walk',
                'duration' => '00:20:00',
                'distance' => 1.1
            ],
            [
                'type' => 'Indoor Run',
                'duration' => '00:45:00',
                'distance' => 2.88
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-23',
            'weight' => 295,
            'systolic' => 118,
            'diastolic' => 80,
            'resting_heartrate' => 48,
            'steps' => 7130
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:38:00',
                'distance' => 10
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-24',
            'weight' => 295,
            'systolic' => 124,
            'diastolic' => 71,
            'resting_heartrate' => 55,
            'bloodsugar' => 97,
            'steps' => 7130
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:47:00',
                'distance' => 14
            ]
        ]);

    }
}
