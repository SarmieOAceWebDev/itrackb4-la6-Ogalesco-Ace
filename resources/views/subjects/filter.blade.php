<!DOCTYPE html>
<html>
<head>
    <title>Filtered Subjects</title>
</head>
<body>

    <h1>Filtered Subjects</h1>

    @if ($value)
        <p>Active filter: {{ $value }}</p>
    @else
        <p>All subjects are shown.</p>
    @endif

    <p>Prepared by: Ace Sarmiento Ogalesco</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Subject Code</th>
            <th>Subject Title</th>
            <th>Units</th>
            <th>Category</th>
        </tr>

        @foreach ($subjects as $subject)
        <tr>
            <td>{{ $subject['code'] }}</td>
            <td>{{ $subject['title'] }}</td>
            <td>{{ $subject['units'] }}</td>
            <td>{{ $subject['category'] }}</td>
        </tr>
        @endforeach

    </table>

    <br>

    <a href="{{ route('subjects.index') }}">
        Back to Subject List
    </a>

</body>
</html>