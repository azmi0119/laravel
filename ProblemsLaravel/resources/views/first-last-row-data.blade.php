<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>First Last Row Data</title>
</head>
<body>
	<center>
		<h3>Show First and Last Data<hr></h3>
		<table>
			<thead>
				<th>Subject</th>
				<th>Created At</th>
				<th>Updated At</th>
			</thead>
			<tbody>
				@foreach($data as $value)
				<tr>
					@if($loop->even)
						<td>{{ $value->id }}</td>
						<td>{{ $value->subject }}</td>
						<td>{{ $value->created_at }}</td>
						<td>{{ $value->updated_at }}</td>
					@endif
				</tr>
				@endforeach
			</tbody>
		</table>
		<p>conditional '@class' </p>
		@php
		    $isActive = false;
		    $hasError = true;
		@endphp
		<p>@class([
			'p-4',
			'font-bold' => $isActive,
			'text-gray-500' => ! $isActive,
			'bg-red' => $hasError,
		])</p>
		<span class="p-4 text-gray-500 bg-red"></span>
	</center>
</body>
</html>