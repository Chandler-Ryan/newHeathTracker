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
            'steps' => 7600
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
            'steps' => 4251
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:47:00',
                'distance' => 14
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-25',
            'weight' => 299,
            'systolic' => 123,
            'diastolic' => 78,
            'resting_heartrate' => 46,
            'bloodsugar' => 100,
            'steps' => 10295
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Walk',
                'duration' => '00:15:00',
                'distance' => 0.8
            ],
            [
                'type' => 'Indoor Run',
                'duration' => '00:51:00',
                'distance' => 3.54
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-26',
            'weight' => 301,
            'systolic' => 127,
            'diastolic' => 79,
            'resting_heartrate' => 48,
            'bloodsugar' => 99,
            'steps' => 3616
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:37:00',
                'distance' => 12
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-27',
            'weight' => 299,
            'systolic' => 128,
            'diastolic' => 82,
            'resting_heartrate' => 48,
            'bloodsugar' => 92,
            'steps' => 10295
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Walk',
                'duration' => '00:15:00',
                'distance' => 0.8
            ],
            [
                'type' => 'Indoor Run',
                'duration' => '00:51:00',
                'distance' => 3.54
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-28',
            'weight' => 296,
            'systolic' => 130,
            'diastolic' => 83,
            'resting_heartrate' => 46,
            'bloodsugar' => 93,
            'steps' => 2949
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:40:00',
                'distance' => 12
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-29',
            'weight' => 294,
            'systolic' => 127,
            'diastolic' => 87,
            'resting_heartrate' => 48,
            'bloodsugar' => 98,
            'steps' => 13821
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Walk',
                'duration' => '00:15:00',
                'distance' => 0.8
            ],
            [
                'type' => 'Indoor Run',
                'duration' => '00:47:00',
                'distance' => 3.1
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-04-30',
            'weight' => 296,
            'systolic' => 137,
            'diastolic' => 88,
            'resting_heartrate' => 52,
            'steps' => 4716
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:31:00',
                'distance' => 8
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-05-01',
            'weight' => 298,
            'systolic' => 126,
            'diastolic' => 82,
            'resting_heartrate' => 52,
            'bloodsugar' => 109,
            'steps' => 5004
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:30:00',
                'distance' => 8
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-05-02',
            'weight' => 300,
            'systolic' => 125,
            'diastolic' => 80,
            'resting_heartrate' => 47,
            'bloodsugar' => 95,
            'steps' => 19325
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Walk',
                'duration' => '00:15:00',
                'distance' => 0.8
            ],
            [
                'type' => 'Indoor Run',
                'duration' => '01:19:00',
                'distance' => 5.14
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-05-03',
            'weight' => 297,
            'systolic' => 131,
            'diastolic' => 87,
            'resting_heartrate' => 48,
            'bloodsugar' => 86,
            'steps' => 4351
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:30:00',
                'distance' => 8
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-05-04',
            'weight' => 295,
            'systolic' => 124,
            'diastolic' => 79,
            'resting_heartrate' => 47,
            'bloodsugar' => 118,
            'steps' => 20215
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Walk',
                'duration' => '00:15:00',
                'distance' => 0.81
            ],
            [
                'type' => 'Indoor Run',
                'duration' => '01:21:00',
                'distance' => 5.13
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-05-05',
            'weight' => 296,
            'systolic' => 124,
            'diastolic' => 82,
            'resting_heartrate' => 49,
            'bloodsugar' => 110,
            'steps' => 3420
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Bike',
                'duration' => '00:30:00',
                'distance' => 8
            ]
        ]);
        $record = DailyRecord::create([
            'user_id' => 1,
            'record_date' => '2022-05-06',
            'weight' => 300,
            'systolic' => 132,
            'diastolic' => 76,
            'resting_heartrate' => 51,
            'bloodsugar' => 114,
            'steps' => 7964
        ]);
        $record->workouts()->createMany([
            [
                'type' => 'Indoor Run',
                'duration' => '00:45:00',
                'distance' => 3.30
            ]
        ]);
    }
}
