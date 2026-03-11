<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Course</th>
</tr>

@foreach($students as $student)
<tr>
<td>{{ $student['id'] }}</td>
<td>{{ $student['name'] }}</td>
<td>{{ $student['course'] }}</td>
</tr>
@endforeach

</table>