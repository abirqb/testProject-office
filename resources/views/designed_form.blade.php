<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
<h1>Sign Up</h1>
<u><h2>Required fields to be submitted-</h2></u>

<form class="clone" method="post" action="{{url('data-submit')}}">
@csrf
 <label for="fname">First name:</label><br>
 <input type="text" id="fname" name="fname" value=""><br>
 <label for="lname">Last name:</label><br>
 <input type="text" id="lname" name="lname" value=""><br>
 <label for="phn">Phone Number:</label><br>
 <input type="text" id="phn" name="phn" value=""><br>
 <label for="email">Email:</label><br>
 <input type="email" id="email" name="email" value=""><br>
 <label for="dob">Date of Birth:</label><br>
 <input type="date" id="dob" name="dob" value=""><br>
 <label for="pass">Password:</label><br>
 <input type="password" id="pass" name="pass" value=""><br><br>
 <button type="submit">Submit</button>
</form
</body>
</html>