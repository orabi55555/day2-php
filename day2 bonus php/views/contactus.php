<html>

<head>
    <title> contact form </title>
</head>

<body>
    <h3> Login form</h3>
    <div id="after_submit">
      <php 
      ?>
    </div>
    <form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">

    
        <div class="row">
            <label class="required" for="email">Your email:</label><br />
            <input id="email" class="input" name="email" type="text" value="<?= remember_variable("email") ?>"
                size="30" /><br />
        </div>

        <div class="row">
            <label class="required" for="name">Your password:</label><br />
            <input id="password" class="input" name="password" type="password" value="<?= remember_variable("password") ?>"
                size="30" /><br />

        </div>
        

        <input id="submit" name="submit" type="submit" value="Login" />
        <input id="clear" name="clear" type="reset" value="clear form" />

    </form>
</body>

</html>