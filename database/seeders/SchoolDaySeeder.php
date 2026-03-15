<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SchoolDay;
use Carbon\Carbon;

class SchoolDaySeeder extends Seeder
{
    public function run(): void
    {
        $holidays = [
            '2024-08-26' => 'National Heroes Day',
            '2024-11-01' => 'All Saints Day',
            '2024-11-02' => 'All Souls Day',
            '2024-12-08' => 'Feast of the Immaculate Conception',
            '2024-12-25' => 'Christmas Day',
            '2024-12-30' => 'Rizal Day',
            '2025-01-01' => 'New Year\'s Day',
            '2025-04-09' => 'Araw ng Kagitingan',
            '2025-04-17' => 'Maundy Thursday',
            '2025-04-18' => 'Good Friday',
            '2025-05-01' => 'Labor Day',
            '2025-06-12' => 'Independence Day',
        ];

        $events = [
            '2024-09-15' => 'University Foundation Day',
            '2024-10-31' => 'Halloween Program',
            '2024-12-20' => 'Christmas Party',
            '2025-02-14' => 'Valentine Event',
            '2025-03-01' => 'Sports Fest',
        ];

        $start = Carbon::create(2024, 8, 1);
        $end   = Carbon::create(2025, 5, 31);

        while ($start->lte($end)) {
            $dateStr = $start->toDateString();

            if (!$start->isWeekend()) {
                if (isset($holidays[$dateStr])) {
                    $type  = 'Holiday';
                    $label = $holidays[$dateStr];
                    $count = 0;
                } elseif (isset($events[$dateStr])) {
                    $type  = 'Event';
                    $label = $events[$dateStr];
                    $count = rand(200, 400);
                } else {
                    $type  = 'Class';
                    $label = null;
                    $count = rand(380, 500);
                }

                SchoolDay::create([
                    'date'             => $dateStr,
                    'type'             => $type,
                    'label'            => $label,
                    'attendance_count' => $count,
                ]);
            }

            $start->addDay();
        }
    }
}