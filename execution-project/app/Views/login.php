<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <meta name="description" content="Responsive Image Gallery">
    <meta name="author" content="Tim Wells">
  
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
            <input type="text" name="email" placeholder="email" required><br>
            <input type="text" name="password" placeholder="password" required><br>
            <?php if(isset($validation)) : ?>
                <?= $validation->listErrors() ?>
            <?php endif; ?>
            <button type="submit">Login</button>
            <p>
                Don't have an account yet? <a href="/register">Click here</a> to register
            </p>
        </form>
    </div>
</body>
</html>