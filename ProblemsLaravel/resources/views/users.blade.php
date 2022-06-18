<!DOCTYPE html>
<html>
<head>
    <title>Laravel Next Previous Link Button Pagination</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body> 
   
<div class="container">
    <h1>Laravel Next Previous Link Button Pagination</h1>
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
        </tr>
        @endforeach
    </table>
   
    {{ $users->links() }}
</div>
   
</body>
</html>