<h2>Updating Info</h2>
<form action="/field2" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}"><br>
    <input type="text" name="name" value="{{$data['name']}}"><br>
    <input type="text" name="email" value="{{$data['email']}}"><br>
    <input type="text" name="password" value="{{$data['password']}}"><br>
    <button>Submit</button>
</form>