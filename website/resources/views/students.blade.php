@foreach ($students as $student)
<ul>
<li>
  ID:{{$student['id']}}
  Name:{{$student['name']}}
</li>
</ul>

@endforeach
