<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <form action="" method="post">
        <?php echo $message; ?>
        <input type="text" name="inputText"/>
        <input type="submit" name="SubmitButton"/>
    </form>
    
    <?php 
    $message = "";
    if(isset($_POST["SubmitButton"])){
        $input = $_POST["inputText"];
        $message = "Success! You entered: ".$input;
    }
    ?>
    
</body>    
</html>






