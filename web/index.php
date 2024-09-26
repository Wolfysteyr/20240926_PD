<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
    <h1>Piesakies webināram!</h1>

    <script src="js/app.js"></script>
</head>
<body>
    <div  class="formstuff">
        <form action="confirmation.php" method="post">
            <label for="name">Vārds: </label>
            <input type="text" name="name" id="name"><br><br>

            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email"><br><br>

            <label for="select1">Izvēlēties līmeni</label>
            <select name="select1" id="select1">
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
            </select>

        
        <br>
        <label for="">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label><br>
        <label for="drone">Jā</label>
        <input type="radio" name="drone" id="r1">
        <label for="drone">Nē</label>
        <input type="radio" name="drone" id="r2">
        
        <br>
        
        <input type="submit" value="Pieteikties">
        </form>

    </div>

    <br>

    <a href="blog.php">Blogs</a>
</body>
<footer>
    <hr>
    <h1>Jau reģistrējušies: </h1>
    <?php 
        $registered = array(
            array("name" => "Maksims", "email" => "mc@gmail.com", "level" => "Advanced"),
            array("name" => "Daniils", "email" => "dk@icloud.com", "level" => "Intermediate"),
            array("name" => "Jeff", "email" => "beazos@amazon.com", "level" => "Beginner"),
        );
        
        foreach($registered as $arr){
            echo ("Vārds: " . $arr['name'] . ", Email: " . $arr['email'] . ", Līmenis: " . $arr['level']);
            echo ("<br> <br>");
        }


    ?>


</footer>
</html>