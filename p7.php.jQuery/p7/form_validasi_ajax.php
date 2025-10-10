<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi dengan jQuery dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Validasi dengan jQuery dan AJAX</h1>
    <form id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <div id="hasil"></div>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah submit default
            
            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            if (nama === "") {
                $("#nama-error").text("Nama harus diisi");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            if (valid) {
                var formData = $(this).serialize();
                $.ajax({
                    url: "proses_validasi.php",
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