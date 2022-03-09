<?php include_once __DIR__ . "/function.php"; ?>

<html>

<head></head>

<body>

    <form action="<?php echo url("registerhander.php"); ?>" method="post">
        Name<input type="text" name="name" /><br /><br />
        Email<input type="email" name="email" /><br /><br />
        <input type="submit" value="Register" name="save">

    </form>
</body>


</html>