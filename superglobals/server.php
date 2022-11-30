<?php 
// outputs the current file directory (plus: the file name)
echo $_SERVER['PHP_SELF']; 
echo "<br>";

// outputs the server host
echo $_SERVER['SERVER_NAME'];
echo "<br>";

// outputs the server host
echo $_SERVER['HTTP_HOST'];
echo "<br>";

// outputs the compltete url of current page (minus the file name)
echo $_SERVER['HTTP_REFERER'];
echo "<br>";

// outputs information about machine been used
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

// outputs current page's directory
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

// outputs the CGI of the serve
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";

// outputs the IP of the server
echo $_SERVER['SERVER_ADDR'];
echo "<br>";

// outputs the server id string
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";

// outputs remote addr of the page viewer
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

// outputs the server port
echo $_SERVER['SERVER_PORT'];
echo "<br>";

// outputs the server version and virtual host name 
echo $_SERVER['SERVER_SIGNATURE'];
echo "<br>";

// outputs the  URI OF CURRENT PAGE
echo $_SERVER['SCRIPT_URI'];
echo "<br>";
?>