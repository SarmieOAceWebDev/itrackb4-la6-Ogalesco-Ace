@extends('layouts.app')
@section('title', 'Filtered Subjects')
@section('content')

    <h2>Filtered Subjects</h2>

    @if ($value)
        <p>Active filter: <strong>{{ $value }}</strong></p>
    @else
        <p>All subjects are shown.</p>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Subject Code</th>
                <th>Subject Title</th>
                <th>Units</th>
                <th>Category</th>
            </tr>
        </thead>

        <tbody>
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
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        There are no subjects available at the moment.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <a href="{{ route('subjects.index') }}" class="btn btn-secondary">
        Back to Subject List
    </a>
@endsection