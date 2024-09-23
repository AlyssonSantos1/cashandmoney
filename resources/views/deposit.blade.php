<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>savings</title>
</head>
<body>
    <form action="{{ route('savings') }}" method="post">
        @csrf

        <input type="number" name="deposit">
        <input type="submit"  value="deposit">
    </form>
</body>
</html>
