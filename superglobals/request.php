<html>
    <body>
        <!-- create a form and let the processing be done in the same form -->
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            Name: <input type="text" name="name">
            <input type="submit">
        </form>

        <!-- php file to process the form: collect data when submitted -->
        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
          
            // define avriable name to hold submitted data
            $name = $_REQUEST["name"];

            // echo something if form is empy
            if(empty($name)) {
                echo "Name is empty";
            }
            else {
                echo "Your name is: " . $name;
            }
        }
        ?>
    </body>
</html>