<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WithDraw</title>
</head>
<body>
    <form action="{{route('withdraw')}}" method="POST">
        @csrf

    <input type="number" name="withdraw">
    <input type="submit"  value="withdraw">




    </form>
    
</body>
</html>