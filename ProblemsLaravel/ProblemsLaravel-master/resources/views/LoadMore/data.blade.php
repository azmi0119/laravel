<thead class="thead-dark">
	<tr>
		<th scope="col">ID</th>
		<th scope="col">NAME</th>
		<th scope="col">EMAIL</th>
		<th scope="col">COLLAGE</th>
		<th scope="col">COURSE</th>
		<th scope="col" colspan="2">Acation</th>
	</tr>
</thead>
<tbody>
	@foreach($liveData as $value)
	<tr>
		<th scope="row">{{ $value->id }}</th>
		<td>{{ $value->name }}</td>
		<td>{{ $value->email }}</td>
		<td>{{ $value->collage }}</td>
		<td>{{ $value->course }}</td>
		<td>
			<button class="btn btn-primary">Edit</button>
			<button class="deleteRecord btn btn-danger" data-id="{{ $value->id }}" >Delete</button>
		</td>
	</tr>
	@endforeach
</tbody>