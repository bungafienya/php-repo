<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>FORMULIR DIRI</h2>

<div class="container">
    <form action="process.php" method="POST">
        <input type="text" name="firstname" placeholder="Firstname" required><br>
        <input type="text" name="lastname" placeholder="Lastname" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <textarea name="address" placeholder="Address" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
