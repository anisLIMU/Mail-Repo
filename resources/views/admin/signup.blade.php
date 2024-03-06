<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Registration</title>
    <style>form{text-align: center; margin-top:3% ; background-attachment: fixed;}</style>
</head>
<body>
    <form method="POST" action="{{route('admin.signup')}}">
        @csrf
        <h2>Customer Registration</h2>
        <input type="text" name="name" placeholder="Enter your name" style="border-radius: 20px; padding: 5px; margin:4px; width:15%" autofocus><br>
        <input type="email" name="email" placeholder="Enter email" style="border-radius: 20px; padding: 5px; margin:4px; width:15%" autofocus><br>
        <input type="password" name="password" placeholder="Enter password" style="border-radius: 20px; padding: 5px; margin:4px; width:15%" autofocus><br>
        <input type="password" name="password_confirmation" placeholder="Enter password confirmation" style="border-radius: 20px; padding: 5px; margin:4px; width:15%" autofocus><br>
        <input type="submit" style="border-radius: 10px ;padding: 5px ; margin-left:10px; background-color: rgb(97, 175, 19); color:aliceblue">
    </form>
</body>
</html>