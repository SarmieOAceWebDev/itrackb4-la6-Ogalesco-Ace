<!DOCTYPE html>
<html>
<head>
    <title>Subjects </title>
</head>
<body>
    <h1> Subject List</h1>
     <p>Ace Sarmiento Ogalesco</p>
    <table border="1" cellpadding="10">
        <tr>
            <th>Subject Code</th>
            <th>Subject Title</th>
            <th>Units</th>
        </tr>
        @foreach ($subjects as $subject)
        <tr>
          <th>{{ $subject['code'] }}</th>
            <th>{{ $subject['title'] }}</th>
            <th>{{ $subject['units'] }}</th>
        </tr>
        @endforeach
    </table>
</body>
</html>
