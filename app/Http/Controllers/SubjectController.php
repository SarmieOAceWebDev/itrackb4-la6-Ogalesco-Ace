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
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'code' => 'required|string|max:10',
            'subject' => 'required|string|max:50',
            'units' => 'required|numeric|min:1|max:2',
            'category' => 'required|string|max:50',
        ]);


        $subjects = $this->subjects();
        $id =max(array_keys($subjects)) + 1;

        $subjects[$id] = [
            'code' => $validated['code'],
            'subject' => $validated['subject'],
            'units' => (float)$validated['units'],
            'category' => $validated['category'],
        ];

        $this->saveSubjects($subjects);

        return redirect()->route('subjects.index')->with('success', 'Subject added successfully.');


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
        return view('subjects.show', ['subject' => $subject, 'id' => $id]);

       
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
    $path = storage_path('app/subjects.json');
    return json_decode(file_get_contents($path), true);
    
}

private function saveSubjects($subjects)
{
   
    file_put_contents(
        storage_path('app/subjects.json'),
        json_encode($subjects, JSON_PRETTY_PRINT)
    );
    
   
}

}

