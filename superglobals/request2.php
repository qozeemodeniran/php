<html>
    <body>
        <form action="<?php $_SERVER["PHP_SELF"]; /** this makes form to be processed in the same file */ ?>" method="post">
            Name: <input type="text" name="fullname"> <br>
            Major: <input type="text" name="major"> <br>
            Age: <input type="text" name="age"> <br>
            <input type="submit">
        </form>

        <!-- create php script to process the form -->
        <?php 

            // check if form request method is post
            if($_SERVER["REQUEST_METHOD"] == "POST") {

                // get the form values and store them in variables
                $name = $_REQUEST["fullname"];
                $major = $_REQUEST["major"];
                $age = $_REQUEST["age"];

                // check if form is empty: if empty, tell user that form is empty, else output user input
                if(empty($name && $major && $age)) {
                    echo "<p style='color: red;' >One or more fields is empty</p>";
                }
                else {
                    echo "Your information is as follows: <br>";
                    echo "Name: " . $name . "<br>";
                    echo "Major: " . $major . "<br>";
                    echo "Age: " . $age . "<br>";
                }
            }
        ?>
    </body>
</html>