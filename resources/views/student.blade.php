@if(count($students) > 0)

    <p>Students available</p>

    @foreach($students as $student)
        <p>{{ $student['name'] }}</p>
    @endforeach

@else
    <p>No students found</p>
@endif