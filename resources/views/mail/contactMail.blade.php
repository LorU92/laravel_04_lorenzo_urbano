<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail di risposta</title>
</head>
<body>
    
<h1>CIAO, {{$username}} </h1>
<h3>Grazie di averci contattato</h3>
<p>Questi sono i tuoi dati:</p>
<ul>
    <li>email: {{$useremail}}</li>
    <li>messaggio: {{$usermessage}}</li>
</ul>
</body>
</html>