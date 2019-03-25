<?php require 'header.php'; ?>

<form action="loginController.php" method="post">
    <input type="hidden" name="type" value="register">

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit" value="Sign-up">
</form>

<?php require 'footer.php'; ?>

