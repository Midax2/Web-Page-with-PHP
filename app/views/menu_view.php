<nav>
    <a href="main" class="link">
        <div class="logo button">
            <img class="button" src="Images/Logo.png" alt="Logo" />
        </div>

        <div class="logo nazwa">
            <p class="text_nazwa">Mity Japonii w pigułce</p>
        </div>
    </a>
    <div id="home">
        <p class="menu_drop">Menu</p>
        <div class="drop">
            <a href="main">Strona główna</a>
            <a href="gods">Bogowie</a>
            <a href="yokai">Yokai</a>
            <a href="tales">Powieści</a>
            <a href="gallery">Galeria</a>
            <a href="quiz">Quiz</a>
        </div>
    </div>
    <?php
        $db = get_db();
        $names_db = $db->login->find();
        $names = iterator_to_array($names_db);
        if (count($names) == 0) {
            include "notlogin_view.php";
        }
        else
            include "login_view.php";
    ?>
</nav>