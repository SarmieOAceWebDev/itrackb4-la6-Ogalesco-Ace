@extends('layouts.app')
@section('title', 'Create Subject')
@section('content')



<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="h4 mb-0">Create Subject</h2>
        </div>
        <div class="card-body">
<form method="POST" action="{{ route('subjects.store') }}">
    @csrf
    <div class="mb-3">
        <label for="code" class="form-label">Subject Code</label>
    <input type="text" class="form-control" id="code" name="code" required>
       
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Subject Name</label>
        <input type="text" class="form-control" id="subject" name="subject" required>
    </div>
    <div class="mb-3">
        <label for="units" class="form-label">Units</label>
        <input type="number" class="form-control" id="units" name="units" required>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" name="category" required>
            <option value="">Select a category</option>
            <option value="Core">Core</option>
            <option value="Elective">Elective</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Create Subject</button>
</form> 
        


@endsection
