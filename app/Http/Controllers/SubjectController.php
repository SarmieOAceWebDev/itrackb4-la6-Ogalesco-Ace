<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private function subjects()
    {
        return [
            1 => ['id' => 1, 'code' => 'CAP102', 'title' => 'Capstone Project 2', 'units' => 3.0, 'category' => 'Project'],
            2 => ['id' => 2, 'code' => 'ITPI333', 'title' => 'Information Assurance and Security 2', 'units' => 2.0, 'category' => 'Major'],
            3 => ['id' => 3, 'code' => 'ITPI441', 'title' => 'Systems Administration and Maintenance', 'units' => 2.0, 'category' => 'Major'],
            4 => ['id' => 4, 'code' => 'ITRACKB4', 'title' => 'Web Systems and Technologies: Web Programming 2', 'units' => 2.0, 'category' => 'Major'],
            5 => ['id' => 5, 'code' => 'ITTRACKB3', 'title' => 'Web Systems and Technologies: Web Programming 1', 'units' => 2.0, 'category' => 'Major'],
            6 => ['id' => 6, 'code' => 'ITEL301', 'title' => 'Professional Elective', 'units' => 3.0, 'category' => 'Elective']
        ];
    }

    public function index()
    {
        $subjects = $this->subjects();

        return view('subjects.index', ['subjects' => $subjects]);
    }

    public function featured()
    {
        $subjects = $this->subjects();

        $subject = $subjects[1];

        return view('subjects.show', ['subject' => $subject]);
    }

    public function filter($value = null)
    {
        $subjects = $this->subjects();

        if ($value !== null) {
            $filteredSubjects = [];

            foreach ($subjects as $subject) {
                if ($subject['category'] === $value) {
                    $filteredSubjects[] = $subject;
                }
            }

            $subjects = $filteredSubjects;
        }

        return view('subjects.filter', [
            'subjects' => $subjects,
            'value' => $value
        ]);
    }

    public function show($id)
    {
        $subjects = $this->subjects();

        if (!isset($subjects[$id])) {
            abort(404);
        }

        $subject = $subjects[$id];

        return view('subjects.show', ['subject' => $subject]);
    }
}