<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="empty">
    <h1>Please leave us a feedback</h1>
        <a href="/">Home</a> |
        <a href="about">About</a> |
        <a href="contact">Contact</a> | 
        <a href="signup2">Signup</a>
    </div>
  <div class='wholetext'>
<h1>Put your Feedback </h1>

<form method="post" action="{{url('signup')}}">
@csrf
  <label for="name">Your Name:</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="email">Email:</label><br>
  <input type="email" id="emailup" name="email" value=""><br>
  <label for="text">Your Comments:</label><br>
  <textarea name="message" id="message" style='width: 200px, height: 600px;'></textarea><br>
  <button type="submit">Submit</button>
</form>
</div>
</body>
</html>