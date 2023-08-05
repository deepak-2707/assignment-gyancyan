<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>Hello <span style="font-size: 1.17em;"><b>{{$name}}</b></span> <br> Greeting from GrayCyan, </p>

    <p>This is a verification mail of your registration of GrayCyan. Please <a href="{{route('verify-mail',base64_encode($email))}}">verify</a> </p>
</body>
</html>
