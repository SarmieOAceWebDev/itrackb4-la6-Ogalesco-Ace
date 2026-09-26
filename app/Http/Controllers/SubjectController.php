<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
   
        $code = $request->query('code', 'all');
        $units = $request->query('units', 'all');
        $all = $this ->subjects();

        if ($code === 'all')
            {
                $subjects = $all;
            }else{
                $subjects = [];
                foreach ($all as $id => $subject) {
                    if ($subject['code'] === $code) {
                        $subjects[$id] = $subject;
                    }
                }
            }
      if ($units === 'all') {
            $subjects = $subjects;
        } else {
            $filteredSubjects = [];
            foreach ($subjects as $id => $subject) {
                if ($subject['units'] == (float)$units) {
                    $filteredSubjects[$id] = $subject;
                }
            }
            $subjects = $filteredSubjects;
        }


        return view('subjects.index', [
            'subjects' => $subjects,
            'code' => $code,
            'units' => $units,
           
        ]);
            
    }



    /**     
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $subjects = $this->subjects();

        if (!isset($subjects[$id])) {
            abort(404);
        }
        $subject = $subjects[$id];
        return view('subjects.show', ['subject' => $subject]);

       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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


   private function subjects()
{
    return [
        1 => ['id' => 1, 'code' => 'CAP102', 'title' => 'Capstone Project 2', 'units' => 3.0, 'category' => 'Project', 'status' => 'Active'],
        2 => ['id' => 2, 'code' => 'ITPI333', 'title' => 'Information Assurance and Security 2', 'units' => 2.0, 'category' => 'Major', 'status' => 'Active'],
        3 => ['id' => 3, 'code' => 'ITPI441', 'title' => 'Systems Administration and Maintenance', 'units' => 2.0, 'category' => 'Major', 'status' => 'Active'],
        4 => ['id' => 4, 'code' => 'ITRACKB4', 'title' => 'Web Systems and Technologies: Web Programming 2', 'units' => 2.0, 'category' => 'Major', 'status' => 'Active'],
        5 => ['id' => 5, 'code' => 'ITTRACKB3', 'title' => 'Web Systems and Technologies: Web Programming 1', 'units' => 2.0, 'category' => 'Major', 'status' => 'Active'],
        6 => ['id' => 6, 'code' => 'ITEL301', 'title' => 'Professional Elective', 'units' => 3.0, 'category' => 'Elective', 'status' => 'Drop']
    ];

}

}
