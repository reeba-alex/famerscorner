<table>
	<thead>
		<tr>
		 <td>ID</td>
		 <td>Name</td>
		 <td>Course</td>
		<td>Mobile</td>
		</tr>
	</thead>
		<tbody>
			@foreach($studentsdetails as $student)
			<tr>
				<td>{{$student->id}}</td>
				<td>{{$student->name}}</td>
				<td>{{$student->course}}</td>
				<td>{{$student->no}}</td>
			
			<td>
				<a href="{{route('student.edit',$student->id)}}">Edit</a>
				</td>
				
				<td> 	
				<form action="{{route('student.destroy',$student->id)}}" method="post">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
				</form>
				</td>
				</tr>
			@endforeach
		</tbody>
</table>