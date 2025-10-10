<!DOCTYPE html>
<html>
<head>
    <title>Validasi Password dengan jQuery dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Validasi Password</h1>
    <form id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>
    
    <div id="hasil"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault();
            var password = $("#password").val();
            var valid = true;

            if (password.length < 8) {
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }

            if (valid) {
                var formData = $(this).serialize();
                $.ajax({
                    url: "proses_validasi_password.php",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#hasil").html(response);
                    }
                });
            }
        });
    });
    </script>
</body>
</html>