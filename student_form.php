<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JavaScript Tutorial</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/common.css'>
    <script src='js/jquery-3.6.0.min.js'></script>
</head>
<body>
    <form action="student.php" method="post">
        <label for="fname">First name:</label>
        <input type="text" class="input-text" id="fname" name="firstname"><br><br>

        <label for="hoky">
        <input type="checkbox" name="hoky1" id="hoky"> Hoky
        </label>    

        <input type="checkbox" name="khokho" id="khokho"> Khokho
        <br><br>
        


        <label for="lname">Last name:</label>
        <input type="text" class="input-text" id="lname" name="lname"><br><br>

        <label for="age">Age</label>
        <input type="text" class="input-text" id="age"  name="age"><br><br>
        
        <input type="submit" value="Submit BTN">
    </form>

    <script>
        $("p").hide();
        $(".test").hide()
        $(".test2").show()
    </script>
    
</body>
</html>