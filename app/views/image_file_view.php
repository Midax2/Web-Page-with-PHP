<form action="upload" method="post" enctype="multipart/form-data">
            <label for="plik">Wybierz plik</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
            <br/>
            <label for="watermark">Podaj watermark</label>
            <input type="text" name="watermark" id="watermark" required />
            <br />
            <label for="autor">Podaj autora</label>
            <input type="text" name="autor" id="autor" required />
            <br />
            <label for="tytul">Podaj tytuł</label>
            <input type="text" name="tytul" id="tytul" required />
            <br />
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <div id="Galeria_div" class="galeria3">
            <?php
            $db = get_db();
            foreach ($data[0] as $file) {
                echo '<figure><a href="Uploads/Watermark/mark_'.$file.'"><img class="normal" src="Uploads/Mini/mini_'.$file.'"></a><figcaption>';
                $image = $db->images->findOne(['name' => $file]);
                echo 'autor: '.$image['autor'].' <br>tytuł: '.$image['tytul'];
                echo '</figcaption></figure>';
            }
            foreach ($data[3] as $error) {
                if ($error == "size") {
                    echo '<script>alert("File is too large")</script>';
                }
                else if ($error == "type") {
                    echo '<script>alert("File should be .jpg or .png type")</script>';
                }
            }
            ?>
        </div>
<form method="post" action="gallery&<?php if ($data[1] <= 2) echo strval($data[2]+1)."_"; else echo strval($data[1]-1)."_"; ?>">
    <input type="submit" value="previous" />
</form>
<form method="post" action="gallery&<?php if($data[1] == 2) echo strval($data[1]+1)."_"; else if ($data[1] > $data[2]) echo "2_"; else echo strval($data[1]+1)."_"; ?>">
    <input type="submit" value="next" />
</form>
<a href="search">Wyszukaj zdjęcie</a>