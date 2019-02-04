<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $links = [
            'https://aomine.nibbleframe.com' => 'Aomine Daiki',
            'https://www.nibbleframe.com' => 'NibbleFrame'
        ];
        $students = [
            'student_1' => [
                'name' => 'aomine',
                'age' => 18,
                'height' => 1.65
            ],
            'student_2' => [
                'name' => 'Walter',
                'age' => 20,
                'height' => 1.68
            ],
            'student_3' => [
                'name' => 'Alexander',
                'age' => 19,
                'height' => 1.70
            ],
            'student_4' => [
                'name' => 'Pozo',
                'age' => 20,
                'height' => 1.71
            ],
            'student_5' => [
                'name' => 'Roque',
                'age' => 19,
                'height' => 1.66
            ]
        ];
        $teacher = 'no hay, no existe';

        return view('welcome', [
            'links' => $links,
            'students' => $students,
            'teacher' => $teacher
        ]);
    }
    public function aomine(){
        return view('aomine');
    }
}
