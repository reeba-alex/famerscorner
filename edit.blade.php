<form method="post" action="{{route('student.update',$students->id)}}">
	@method('PATCH')
	@csrf
	<div class="form-group">
		<label for="name">
		Name:</label>
		<input type="text" name="name" value="{{$students->name}}">
		<label for="price">
		Course:</label>
		<input type="text" name="course" value="{{$students->course}}">
		<label for="all">
		Mobile:</label>
		<input type="text" name="no" value="{{$students->no}}">
		<button type="submit">UPDATE</button>
		</form>