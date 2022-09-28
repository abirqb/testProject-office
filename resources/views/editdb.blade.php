<h2>Updating Records</h2>
<form action="" method="POST">
@csrf
<input type="text" name="fname" value="{{$hold['fname']}}">First Name<br>
<input type="text" name="lname" value="{{$hold['lname']}}">Last Name<br>
<input type="text" name="phone" value="{{$hold['phone']}}">Phone<br>
<input type="text" name="email" value="{{$hold['email']}}">Email<br>
<input type="text" name="birth" value="{{$hold['birth']}}">Date of Birth<br>
<input type="text" name="password" value="{{$hold['password']}}">Password<br><br>

<button type="submit">Submit</button>
</form>
<button onclick="document.location='/dblist'">Back</button> 