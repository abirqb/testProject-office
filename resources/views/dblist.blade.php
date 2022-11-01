<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data from DB</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <h1>Database Records</h1>
    <table border = "1">
        <tr>
            <td>ID</td>
            <td>First-Name</td>
            <td>Last-Name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Date of Birth</td>
            <td>Password</td>
        </tr>
        @foreach($new as $new)
        <tr>
            <td>{{$new['id']}}</td>
            <td>{{$new['fname']}}</td>
            <td>{{$new['lname']}}</td>
            <td>{{$new['phone']}}</td>
            <td>{{$new['email']}}</td>
            <td>{{$new['birth']}}</td>
            <td>{{$new['password']}}</td>
            <td><a href="{{url('delete/'.$new['id'])}}">Delete</a></td>
            <td><a href="{{url('edit/' .$new['id'])}}">Edit</a></td>
        </tr>
        @endforeach
    </table>

    <br><br>
    <button onclick="document.location='/signup2'">Add New Record</button> <br>
    <button onclick="document.location='/'">Back to Home</button> 
    <button onclick="document.location='/dblist'">Refesh</button> 
</body>
</html>