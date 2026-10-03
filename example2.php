<html lang="t1">
<head>
    <meta charset="UTF-8">
    <title>Form validation sample</title>

</head>
<body>
    <?php if (!empty($message)): ?>
        <p style="color: blue;"><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST" action="" onsubmit="return validateForm()">
        <label for=""email>Email Addres: </label>
        <input type="text" id="email" name="email">
        <button type="submit">Submit</button>

    </form>

    <script>
        function validateForm(){
            Let emailInput = document.getElementById("email").value;

            if (emailInput.trim() === ""){
                alert("All Fields are Required")
                return false;

            }
            return true;
        }
    </script>
</body>
</html>