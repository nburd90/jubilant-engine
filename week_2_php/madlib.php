<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div name="form">
        <form action="" method="post"/>
            Color: <input type="text" name="color"/><br>
            Plural Noun:  <input type="text" name="pluralNoun"/><br>
            Celebrity: <input type="text" name="celebrity"/><br>
            <input type="submit" value="submit">
        </form>
        <br><br>
    <?php 
        $color = $_POST["color"];
        $pluralNoun = $_POST["pluralNoun"];
        $celebrity =$_POST ["celebrity"];
        
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>
    </div>
</body>
</html>