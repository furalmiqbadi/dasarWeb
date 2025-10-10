<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HTML Injection Aman + Validasi Email</title>
</head>
<body>
    <form method="post" action="">
        Masukkan teks: <input type="text" name="input"><br><br>
        Masukkan email: <input type="text" name="email"><br><br>
        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 4.1
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "<p>Input aman: $input</p>";

        // 4.2
        $email = $_POST['email'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            echo "<p>Email tidak valid!</p>";
        }
    }
    ?>
</body>
</html>
