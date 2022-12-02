<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Login Ice Cream Shop</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if(session()->get('success')) : ?>
            <p style="color: green; font-size: small;"><?= session()->get('success') ?></p>
        <?php endif; ?>
        <h3>Have an account?</h3>
        <form action="/" method="post">
            <input type="text" name="username" placeholder="username" required><br>
            <input type="text" name="password" placeholder="password" required><br>
            <?php if(isset($validation)) : ?>
                <?= $validation->listErrors() ?>
            <?php endif; ?>
            <button name="Sign_In" value="Sign In" style="background-color: rgb(177, 138, 144);">Sign In</button>
        </form>
    </div>
</body>
</html>