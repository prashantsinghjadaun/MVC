<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>
</head>
<body>

<h1>Student Table</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
    </tr>

    @php
    $students = [
        ['id' => 1, 'name' => 'Rahul', 'course' => 'B.Tech'],
        ['id' => 2, 'name' => 'Prashant', 'course' => 'MVC']
    ];
    @endphp

    @foreach($students as $student)
    <tr>
        <td>{{ $student['id'] }}</td>
        <td>{{ $student['name'] }}</td>
        <td>{{ $student['course'] }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>