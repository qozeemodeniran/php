<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <!-- form processing -->
    <?php 
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
    $name = $email = $website = $comment = $gender = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                $nameErr = "Only letters and white space allowed";
            }
        }
        
        if(empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        
        if(empty($_POST["url"])) {
            $website = "";
        } else {
            $$website = test_input($_POST["url"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
            }
          
        }
        
        if(empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }
        
        if(empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
    ?>
    <br><br>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Name: <br><input type="text" name="name" id="" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>

        Email: <br><input type="email" name="email" id="" value="<?php echo $email;?>"> 
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>

        Website: <br><input type="url" name="url" id="" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>

        Comment: <br>
        <textarea name="comment" id="" cols="40" rows="5"><?php echo $comment;?></textarea><br><br>

        Gender: <span class="error">* <?php echo $genderErr;?> </span> <br><br>
        <input type="radio" name="gender" value="female"
        <?php if(isset($gender) && $gender=="female") echo "checked"; ?>>Female <br><br>

        <input type="radio" name="gender" value="male"
        <?php if(isset($gender) && $gender=="male") echo "checked"; ?>>Male <br><br>

        <input type="radio" name="gender" value="other"
        <?php if(isset($gender) && $gender=="other") echo "checked"; ?>>Other<br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <br><br>
    <!-- echo submitted formdata -->
    <?php 
        echo "Below are your submitted data <br><br>"; 
        echo "Name: $name";
        echo "<br><br>";
        echo "Email: $email";
        echo "<br><br>"; 
        echo "Website: $website";
        echo "<br><br>"; 
        echo "Comment: $comment";
        echo "<br><br>";
        echo "Gender: $gender";
        echo "<br><br>";
    ?>
</body>
</html>