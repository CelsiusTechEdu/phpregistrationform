<html lang="en">
<head>
    <title> Registration</title>
<h3>
    Registration Form
</h3>    
</head>
<body>
    <form method="POST" action="user_data.php">
        <label for="name">
            Name: <input type="text" name="name">
        </label> <br>

        <label for="email">
            Email: <input type="email" name="email">
        </label> <br>

        <label for="date of birth">
            Date of Birth: <input type="date" value="2018-07-22" name="calendar"> 
        </label> <br>  

        <label for="gender">
            Gender: <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female<br>
        </label> <br> 

        <label for="country">  
            Country: <input type="country" name="country">
        </label> <br>
    <button> Submit </button>       

    </form>  
</body>  
</html>