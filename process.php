<?php
include 'user.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new user(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['phone'],
        $_POST['address']
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="process.php" method="POST">
        <input type="text" name="firstname" value="<?= $_POST['firstname'] ?>"><br>
        <input type="text" name="lastname" value="<?= $_POST['lastname'] ?>"><br>
        <input type="text" name="phone" value="<?= $_POST['phone'] ?>"><br>
        <textarea name="address"><?= $_POST['address'] ?></textarea><br>
        <button type="submit">Submit</button>
    </form>

    <div class="result">
        <p><?= $user->getData(); ?></p>
    </div>
</div>

</body>
</html>