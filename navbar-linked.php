<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        require 'navbar.php'; echo "<br>";
        // readfile("navbar.php"); //php file handling
        $myfile = fopen("navbar.php", "r") or die("Unable to open file!");
        while(!feof($myfile)){
            echo fgetc($myfile);
        }
        // echo fread($myfile,filesize("navbar.php"));
        // echo fgetc($myfile);
        // fclose($myfile);

        ?>
    </div>
<!-- 
    <form action="post">
        <label for="firstname">Firstname</label> <br>
        <input type="text" name="firstname">

        <button>Submit</button>
    </form>
    <div>
    </div> -->
</body>
</html>