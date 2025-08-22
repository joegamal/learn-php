
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
    <form method="post">
        <label for="text">email</label>
        <input type="text" name="pop">
        <button type="submit">Submit</button>
    </form>

</body>
</html>

<?php

    $regex = "/^[a-zA-Z\s]+$/";

    if(isset($_POST['pop']) ) {
        $input = $_POST['pop'];
        if(preg_match($regex, $input)){
            echo "<span style='color:green'>passed</span>";
        }else{
            echo "<span style='color:red'>not passed</span>";
        }

        echo "<p>You entered $input</p>";
    }

    
    ?>

<pre>
    ^   start 
    $   end
    [] rules to apply on single cahracter
    +   apply for all in the direction ->
    \s  allow white spaces
    \d  allow all digits
    .   allow all
    \.  allow dot
    {5}  apply for the next 5 cahrs
    {2, 5}  apply for the next two to five characters
</pre>