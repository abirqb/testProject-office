<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>User Records</h1>
<table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>ID</td>
        <td>Password</td>
        <td>Action</td>
    </tr>
    @foreach($new as $new) 
    <tr>
        <td>{{$new['name']}}</td>
        <td>{{$new['email']}}</td>
        <td>{{$new['id']}}</td>
        <td>{{$new['password']}}</td>   
        <td>
            <a href="{{url('delete' .$new['id'])}}">Delete</a>
            <a href="{{url('edit/' .$new['id'])}}">Edit</a>
        </td>
    </tr>
    @endforeach
</table><br>
<a href="field">Add User</a>
</body>
</html>