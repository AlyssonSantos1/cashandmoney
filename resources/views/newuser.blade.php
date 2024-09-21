<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Client</title>
</head>
<body>
    <form action="{ route('newclient.php') }" method="POST">
    @csrf
    <label for="">New register</label>
    <input type="text" placeholder="Put of the client name" name="client_name">
    <br> <br>
    <label for="">$$$</label>
    <input type="number" placeholder="=Insert of Value" name="deposit_value">
    <br> <br>
    
   

</form>

</body>
</html>
