<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        $profileData = [
            'name' => 'Andri Adi Saputra',
            'birthplace' => 'Yogyakarta',
            'birthdate' => '26 Mei 2005',
            'gender' => 'Laki-laki',
            'phone' => '083120390171',
            'email' => 'andriadisaputra85@gmail.com',
            'status' => 'Mahasiswa Sistem Informasi',
            'photo' => asset('public/andri-profile.jpg') // Path ke foto
        ];

        $education = [
            ['institution' => 'Sistem Informasi - Mahasiswa', 'status' => 'Sedang menempuh', 'year' => '2023 - Sekarang'],
            ['institution' => 'SMA N 1 Pajangan', 'status' => 'Lulus', 'year' => '2020 - 2023'],
            ['institution' => 'SMP Muhammadiyah Sewon', 'status' => 'Lulus', 'year' => '2017 - 2020'],
            ['institution' => 'SD N Sambungan', 'status' => 'Lulus', 'year' => '2011 - 2017']
        ];

        $skills = [
            'technical' => [
                ['name' => 'HTML', 'level' => 85, 'color' => 'blue'],
                ['name' => 'CSS', 'level' => 80, 'color' => 'green'],
                ['name' => 'PHP', 'level' => 70, 'color' => 'yellow'],
                ['name' => 'Laravel', 'level' => 50, 'color' => 'red'],
                ['name' => 'JavaScript', 'level' => 45, 'color' => 'purple'],
                ['name' => 'MySQL', 'level' => 70, 'color' => 'indigo']
            ],
            'soft_skills' => [
                ['name' => 'Problem Solving', 'level' => 75, 'color' => 'pink'],
                ['name' => 'Teamwork', 'level' => 80, 'color' => 'teal'],
                ['name' => 'Communication', 'level' => 70, 'color' => 'orange']
            ]
        ];

        $projects = [
            ['name' => 'Website Portfolio Pribadi', 'description' => 'Membangun website portfolio menggunakan HTML, CSS, dan PHP native', 'tech' => 'HTML, CSS, PHP'],
            ['name' => 'Sistem Informasi Inventory', 'description' => 'Mengembangkan sistem inventory sederhana menggunakan framework Laravel', 'tech' => 'Laravel, MySQL, Bootstrap'],
            ['name' => 'Web Company Profile', 'description' => 'Membuat website company profile untuk UMKM lokal', 'tech' => 'HTML, CSS, JavaScript']
        ];

        return view('cv.index', compact('profileData', 'education', 'skills', 'projects'));
    }
}
