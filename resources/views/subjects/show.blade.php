@extends('layouts.app')
@section('title', $subject['subject'])
@section('content')
    <h2 class="mb-3">{{ $subject['subject'] }}</h2>

    <div class="card">
        <div class="card-body">
    <p><strong>ID:</strong> {{ $id }}</p>
    <p><strong>Subject Code:</strong> {{ $subject['code'] }}</p>
    <p><strong>Subject Title:</strong> {{ $subject['subject'] }}</p>
    <p><strong>Units:</strong> {{ $subject['units'] }}</p>
    <p><strong>Category:</strong> {{ $subject['category'] }}</p>
    <p><a href="{{ route('subjects.index') }}">Back to Subject List</a> </p>
@endsection