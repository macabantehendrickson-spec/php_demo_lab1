<!-- PHP code  with variables -->
<?php include 'pure_php.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT BA 3101</title>
</head>
<body>
    <a href="next_page.php">Next Page</a>
    <a href="example2.php">Example 2</a>
    <!--<h1>Helloo world</h1>-->
    <!--<?php echo "<h1>Hello World</h1>"; ?>-->


    <h2>Username: <?php echo $username; ?></h2>
    <h2>User ID: <?php echo $user_id; ?></h2>       
    
    <button type="button" onclick="greetUser()">Greet User</button>

    <script>
        var username = "<?php echo $username; ?>";
        var userId = "<?php echo $user_id; ?>";
        var password = "<?php echo $password; ?>";
        var programmingLanguage = "<?php echo $programming_language; ?>";

        
    function greetUser() {
        alert("Hello " + username + ", Your User ID is " + userId + ". Your password is " + password + ". You are learning " + programmingLanguage );
    }
      
    </script>

</body>
</html>