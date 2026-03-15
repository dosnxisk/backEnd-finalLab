<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['code' => 'BSIT',   'name' => 'BS Information Technology',        'department' => 'CCS',  'units' => 180, 'max_slots' => 60],
            ['code' => 'BSCS',   'name' => 'BS Computer Science',               'department' => 'CCS',  'units' => 180, 'max_slots' => 50],
            ['code' => 'BSIS',   'name' => 'BS Information Systems',            'department' => 'CCS',  'units' => 180, 'max_slots' => 45],
            ['code' => 'BSCE',   'name' => 'BS Civil Engineering',              'department' => 'CEA',  'units' => 200, 'max_slots' => 40],
            ['code' => 'BSEE',   'name' => 'BS Electrical Engineering',         'department' => 'CEA',  'units' => 200, 'max_slots' => 35],
            ['code' => 'BSME',   'name' => 'BS Mechanical Engineering',         'department' => 'CEA',  'units' => 200, 'max_slots' => 35],
            ['code' => 'BSARCH', 'name' => 'BS Architecture',                   'department' => 'CEA',  'units' => 210, 'max_slots' => 30],
            ['code' => 'BSED',   'name' => 'BS Education',                      'department' => 'CED',  'units' => 160, 'max_slots' => 55],
            ['code' => 'BEED',   'name' => 'BS Elementary Education',           'department' => 'CED',  'units' => 160, 'max_slots' => 50],
            ['code' => 'BSN',    'name' => 'BS Nursing',                        'department' => 'CHM',  'units' => 190, 'max_slots' => 60],
            ['code' => 'BSMT',   'name' => 'BS Medical Technology',             'department' => 'CHM',  'units' => 185, 'max_slots' => 40],
            ['code' => 'BSND',   'name' => 'BS Nutrition and Dietetics',        'department' => 'CHM',  'units' => 170, 'max_slots' => 35],
            ['code' => 'BSFT',   'name' => 'BS Food Technology',                'department' => 'CHM',  'units' => 170, 'max_slots' => 35],
            ['code' => 'BSA',    'name' => 'BS Accountancy',                    'department' => 'CBA',  'units' => 175, 'max_slots' => 55],
            ['code' => 'BSBA',   'name' => 'BS Business Administration',        'department' => 'CBA',  'units' => 160, 'max_slots' => 60],
            ['code' => 'BSHRM',  'name' => 'BS Hotel and Restaurant Management','department' => 'CBA',  'units' => 165, 'max_slots' => 45],
            ['code' => 'BSTM',   'name' => 'BS Tourism Management',             'department' => 'CBA',  'units' => 160, 'max_slots' => 40],
            ['code' => 'BSCrim', 'name' => 'BS Criminology',                    'department' => 'CCJ',  'units' => 170, 'max_slots' => 50],
            ['code' => 'BSPSY',  'name' => 'BS Psychology',                     'department' => 'CASE', 'units' => 155, 'max_slots' => 45],
            ['code' => 'BSSW',   'name' => 'BS Social Work',                    'department' => 'CASE', 'units' => 155, 'max_slots' => 40],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}