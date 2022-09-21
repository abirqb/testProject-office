<h1>Sign Up</h1>


<h2>Text input fields</h2>

<form method="post" action="{{url('data-submit')}}">
@csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="">
  <button type="submit">Submit</button>
</form