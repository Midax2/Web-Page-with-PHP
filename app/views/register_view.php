<!DOCTYPE html>
<html>
<body>
    <?php
    foreach ($data as $info) {
                if ($info == "exist") {
                    echo '<script>alert("Użytkownik z takim loginem jest już zarejestrowany")</script>';
                }
                else if ($info == "pass") {
                    echo '<script>alert("Podane hasła są różne")</script>';
                }
                else if ($info == "success") {
                    echo '<script>alert("Rejestracja udała się")</script>';
                }
            }
    ?>
    <form method="post" action="signup">
        <label for="email">Adres email:</label>
        <input type="text" name="email" />
        <br /><br />
        <label for="login">Login:</label>
        <input type="text" name="login" />
        <br /><br />
        <label for="password">Password:</label>
        <input type="password" name="password" />
        <br /><br />
        <label for="repeat">Repeat password</label>
        <input type="password" name="repeat" />
        <br /><br />
        <input type="submit" value="Submit" />
        <input type="reset" value="Reset" />
    </form>
    <a href="main">Strona główna</a>
</body>
</html>