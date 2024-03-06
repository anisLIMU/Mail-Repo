<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Login</title>
    <style>form{text-align: center; margin-top:3% ; background-attachment: fixed; &:hover{color:red}}
    
    </style>
</head>
<body>
    <form method="POST" action="{{route('admin.login')}}">
        @csrf
        <h2>admin Login</h2>
        <input type="email" name="email" placeholder="Enter email" style="border-radius: 20px; padding: 5px; margin:4px; width:15%" autofocus><br>
        <input type="password" onload="60" name="password" placeholder="Enter password" style="border-radius: 20px ;padding: 5px ; margin:4px ;width:15%" autofocus><br>
        <a href="{{route('showforgetPassword')}}">forget password?</a>
        <input type="submit"  style="border-radius: 10px ;padding: 5px ; margin-left:10px; background-color: rgb(104, 185, 23); color:aliceblue" value="Log in">
     </form>
</body>
</html>