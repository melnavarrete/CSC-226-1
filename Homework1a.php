//Melanie Navarrete CSC 226
<!DOCTYPE html>
<html>
    <body>
    <?php              //starting php code
        $name = "Melanie Navarrete";  //declaring name and credit variables
        $credits = 15;
        $gpa= 0.0;
        var_dump($name);    //showing name and type
        echo "<br>";    //newline
        var_dump($credits);     //showing number of credits
        echo "<br>";
        var_dump($gpa);     //showing gpa though unknown
        echo "<br>";
        echo "Welcome";     //welcoming user
        echo $name;         //showing name
        echo "<br>";
        if($credits>=12)    //if credits 12 or more full time print full time
            echo "Full Time Student";
        else
            echo "Part Time Student";   //if less than 12 part time
        echo "<br>";
        echo $_SERVER['PHP_SELF'];  //to show name and path of current file
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];  //shows server name
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];     //shows host address
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];   //shows the address of the webpag
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];   //shows you the browser/program running
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];   //shows the file that is running
        echo "<br>";
    ?>
</html>
//git hub uploaded to //https://github.com/melnavarrete/CSC-226-1/blob/83533406b75011b38137b93a6646467c3f6c19b3/Homework1.php