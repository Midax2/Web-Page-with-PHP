<div class="nav">
    <a class="niema" href="logout">Wylogowanie</a>
</div>
<div class="nav">
    <span class="niema"><?php
             $db = get_db();
             $names = iterator_to_array($db->login->find());
             foreach ($names as $name) {
                 echo $name['login'];

             }
?>
    </span>
</div>
