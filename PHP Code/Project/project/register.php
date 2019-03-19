<?php require 'header.php'; ?>

<form action="loginController.php" method="post">
    <input type="hidden" name="type" value="register">

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="form-group">
        <label for="password_confirm">Please confirm your password</label>
        <input type="password" name="password_confirm" id="password_confirm">
    </div>

    <input type="submit" value="Sign-up">
</form>

<?php require 'footer.php'; ?>

