<?php /** @var array $errors */ ?>
<?php /** @var \App\Data\UserDTO $data */ ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Framework</title>
</head>
<body>
<h1>Login page</h1>

<?php //foreach ($errors as $error): ?>
<!--    <span style="color: red">--><?//= $error ?><!--</span>-->
<!--    <br>-->
<?php //endforeach; ?>

<form method="post">
    <label>
        Username: <input type="text" name="username"/>
    </label>
    <br>
    <label>
        Password: <input type="password" name="password"/>
    </label>
    <br>
    <input type="submit" name="login" value="Login"/>
</form>
</body>
</html>
