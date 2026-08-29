<!DOCTYPE html>
<html>
<head>
    <title>Subject Details</title>
</head>
<body>
    <h1>Subject Details</h1>
    <p><strong>ID:</strong> {{ $subject['id'] }}</p>
    <p><strong>Subject Code:</strong> {{ $subject['code'] }}</p>
    <p><strong>Subject Title:</strong> {{ $subject['title'] }}</p>
    <p><strong>Units:</strong> {{ $subject['units'] }}</p>
    <p><strong>Category:</strong> {{ $subject['category'] }}</p>
    <p>Prepared by: Ace Sarmiento ogalesco</p>
    <p>
        <a href="{{ route('subjects.index') }}">Back to Subject List</a>
    </p>

</body>
</html>