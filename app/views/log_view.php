<!DOCTYPE html>
<html>
<body>
    <?php
    foreach ($data as $info) {
        if ($info == "fail") {
            echo '<script>alert("Logowanie nie udało się. Dane są niepoprawne.")</script>';
        }
        else if ($info == "success") {
            echo '<script>alert("Logowanie udało się")</script>';
        }
    }
    ?>
    <form method="post" action="signin">
        <label for="login">Login:</label>
        <input type="text" name="login" />
        <br /><br />
        <label for="password">Password:</label>
        <input type="password" name="password" />
        <br /><br />
        <input type="submit" value="Submit" />
        <input type="reset" value="Reset" />
    </form>
    <a href="main">Strona główna</a>
</body>
</html>