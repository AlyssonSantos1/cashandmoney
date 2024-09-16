<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<title>Welcome to the Paradise Bank</title>

    <style>
        body{         
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-position: center;
            background: rgb(185,199,197);     
            

        }
    
        .input{
            background-color: palevioletred;
            border-radius: 0px;
            color: black;
            font-size: 15px;
            background-position: center;
            
        }

        
        
    </style>

    
    <form action="newuser.php" method="POST">

        
        <label for="">Option1</label>
        <input class="input" type="submit" name="submit" value="Withdraw">
        <br><br>
        <label for="">Option2</label>
        <input class="input" type="submit" name="submit" value="Deposit">
        <br><br><br>

        <button type="submit">Send</button>



    </form>
    
    
</body>
</html>