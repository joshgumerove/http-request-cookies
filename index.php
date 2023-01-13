<?php
    // putting names into variables (just cleaner)
    $name = "username";
    $value = "Wally Warthogsss";
    // set our cookie - this will only be done when first response is sent to the browser
    setcookie($name, $value);
    // checking if first response has cookie set
    if(!isset($_COOKIE[$name])) {
        // on first page reload, this will run
        echo "Cookie named '" . $name . "' is not yet set!";
    } else {
        // on second refresh, this will run
        echo "Cookie '" . $name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$name];
    }
?>

<!-- $_COOKIE superglobal varialbe used to retrieve coookie values from a request -->
<!-- 1. a browser requests a file from a server -->
<!-- 2. server will send a Set-Cookie header to the browser with arbitrary key-value pair -->
<!-- 3. the browser will store the cookie -->
<!-- 4. the browser will send the cookie values back to the server on each future request -->
<body>
    <h1>Using Cookies to send HTTP data</h1>
</body>