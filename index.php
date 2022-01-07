<?php

// PHP Codes
$name = 'suhail';
$greeting = "สวัสดีครับ {$_GET['name']}";

?>

<!-- Greeting -->
<h1><?php echo "<h1>$greeting</h1>"; ?></h1>

<!-- Write a form -->
<!-- Is able to enter name -->
<form action="/" method="GET">
    <input type="text" placeholder="Enter a name" name="name">
    <button>Submit</button>
</form>
