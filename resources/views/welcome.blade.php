


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<x-header />
</head>
<body>
<h1>HELLO PEEYUSH</h1>

<a href="{{URL::to('about')}}">About</a>
<a href="{{URL::to('contact')}}">Contact</a>

<br/>
Current URL : {{URL::current()}}


<br/>
Current FULL URL : {{URL::full()}}
<br/>
Previous URL : {{URL::previous()}}
</body>
</html>