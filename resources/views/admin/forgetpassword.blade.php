<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget password</title>
    <style>form{text-align: center; margin-top:6% ; background-attachment: fixed; &:hover{color:red}}
    
    </style>
</head>
<body>
    <form method="POST" action="{{route('Forget.password')}}">
        @csrf
        <h2>Forget password</h2>
        <input type="email" name="email" placeholder="Enter email" style="border-radius: 20px; padding: 5px; margin:4px; width:15%"  autofocus><br>
        <input type="submit"  style="border-radius: 10px ;padding: 5px ; margin-left:10px; background-color: rgb(104, 185, 23); color:aliceblue" value="Send">
     </form>
</body>
</html>