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
    <div class="formstuff">
        <form method="post">
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
        </for>

        
        <br>
        <label for="">Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</label><br>
        <label for="drone">Jā</label>
        <input type="radio" name="drone" id="r1">
        <label for="drone">Nē</label>
        <input type="radio" name="drone" id="r2">
        
        <br>
        
        <input type="submit" value="Pieteikties">

    </div>

    <br>

    <a href="blog.php">Blogs</a>
</body>
</html>