<?php require 'header.php'; ?>

<form action="logincontroller.php" method="post">
    <input type="hidden" name="type" value="login">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <input type="submit" value="login">
</form>

<?php require 'footer.php'; ?>
