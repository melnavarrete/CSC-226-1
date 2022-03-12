<!DOCTYPE html>
<html>
    <body>
        <?php
            $student = "Melanie Navarrete";
            $credits = 15;
            echo "Welcome,to the student information program";
            echo "<br />";
            echo "student name";
            echo "<br />";
            var_dump($student);
            echo "<br />";
            echo "number of credits";
            echo "<br />";
            var_dump($credits);
            echo "<br />";
            if($credits>=12)  {
                echo "Full Time Student";
            } else {
                echo "Part Time Student";
            }
            echo"<br />";
            echo $_SERVER['PHP_SELF'];
            echo "<br />";
            echo $_SERVER['SERVER_NAME'];
            echo "<br />";
            echo $_SERVER['HTTP_HOST'];
            echo "<br />";
            echo $_SERVER['HTTP_REFERER'];
            echo "<br />";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br />";
            echo $_SERVER['SCRIPT_NAME'];
        ?>
    </body>
</html>
