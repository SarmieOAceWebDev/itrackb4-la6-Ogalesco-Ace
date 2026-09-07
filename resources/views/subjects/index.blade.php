@extends('layouts.app')
@section('title', 'Subject List')
@section('content')

    <h2>Subject List</h2>
    <table class="table table-bordered table-striped">
        <tr>
            <th>#</th>
            <th>Subject Code</th>
            <th>Subject Title</th>
            <th>Units</th>
            <th>Category</th>
            <th>Status</th>


        </tr>

        @forelse ($subjects as $subject)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>
                <a href="{{ route('subjects.show', $subject['id']) }}">
                    {{ $subject['code'] }}
                </a>
            </td>
            <td>{{ $subject['title'] }}</td>
            <td>{{ $subject['units'] }}</td>
            <td>{{ $subject['category'] }}</td>
            <td>
                @if ($subject['category'] === 'Project')
                    <strong>Project Subject</strong>
                @else
                    Regular Subject
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">
                there are No subjects available at the moment.
            </td>
        </tr>
        @endforelse

    </table>

@endsection


