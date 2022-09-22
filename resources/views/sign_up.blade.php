<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <div class='wholetext'>
<h1>Put your Feedback </h1>

<form method="post" action="{{url('data-submit')}}">
@csrf
  <label for="name">Your Name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="email">Email:</label><br>
  <input type="text" id="lname" name="lname" value=""><br>
  <label for="text">Your Comments:</label><br>
  <textarea name="message" style='width: 200px, height: 600px;'></textarea><br>
  <button type="submit">Submit</button>
</form>
</div>
</body>
</html>