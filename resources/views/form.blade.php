<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
       <form action="{{route('fromdata')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter value"><br>
        <button type="submit">sumit</button>
       </form>
    </div>
</body>
</html>