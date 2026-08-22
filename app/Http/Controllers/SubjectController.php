<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = [
            ['code' => 'CAP102','title' => 'Capstone Project 2','units' => 3.0],
            ['code' => 'ITPI333','title' => 'Information Assurance and Security 2','units' => 2.0],
            ['code' => 'ITPI441','title' => 'Systems Administration and Maintenance','units' => 2.0],
            ['code' => 'ITRACKB4','title' => 'Web Systems and Technologies: Web Programming 2', 'units' => 2.0],
            ['code' => 'ITTRACKB3', 'title' => 'Web Systems and Technologies: Web Programming 1',  'units' => 2.0]
        ];
        

        return view('subjects.index', ['subjects' => $subjects]);
    }
}

