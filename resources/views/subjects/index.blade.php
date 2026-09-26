@extends('layouts.app')
@section('title', 'Subject List')
@section('content')



 @if ($subjects == 'all')
    <p> All Subjects</p>

 @else 
  <strong>Project Subject</strong>

 @endif



<h3>Filter by Code</h3>
<a href="{{ route('subjects.index') }}" >All</a> 
<a href="{{ route('subjects.index', ['code' => 'CAP102' ]) }}">CAP102</a>
<a href="{{ route('subjects.index', ['code' => 'ITPI333']) }}">ITPI333</a>
<a href="{{ route('subjects.index', ['code' => 'ITPI441']) }}">ITPI441</a>
<a href="{{ route('subjects.index', ['code' => 'ITRACKB4']) }}">ITRACKB4</a>
<a href="{{ route('subjects.index', ['code' => 'ITTRACKB3']) }}">ITTRACKB3</a>
<a href="{{ route('subjects.index', ['code' => 'ITEL301']) }}">ITEL301 </a>


<h3>Filter by Units</h3>
<a href="{{ route('subjects.index', [ 'units' => 'all']) }}">All</a>
<a href="{{ route('subjects.index', [ 'units' => '2']) }}">2 Units</a>
<a href="{{ route('subjects.index', [ 'units' => '3']) }}">3 Units</a>




<a href="{{ route('subjects.index') }}">
    Clear Filters
</a>






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
               
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">
                No subjects available at the moment.
            </td>
        </tr>
        @endforelse

    </table>

@endsection


