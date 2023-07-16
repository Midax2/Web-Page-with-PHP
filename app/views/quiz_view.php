<!DOCTYPE html>
<html lang="PL">
<head>
    <link rel='stylesheet' href='Files/styles_info.css'>
    <link rel='stylesheet' href='Files/styles_all.css'>
    <link rel='stylesheet' href='Files/styles_quiz.css'>
    <title>Quiz o Japonii</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Files/form.js"></script>
	<script src="Files/jquery-3.6.1.js"></script>
    <script src="Files/jquery-ui.min.js"></script>
    <script src="Files/Scroll.js"></script>
    <script>
	var availableTags = [
                "Momo-taro",
                "Urashima Taro",
                "Genji monogatari",
                "Yata-no Kagami",
                "Fujiwara",
                "Toshi-densetsu",
                "Gozu",
                "Inokashira",
                "Kunekune",
                "Kitsune",
                "Yukionna",
                "Oni",
                "Yokai",
                "Tanuki",
                "Tsukomogami",
                "Kibutsu",
                "Izanagi",
                "Izanami",
                "Amaterasu",
                "Tsukiyomi",
                "Shichi-fukujin",
                "Shintai"
            ];
        $(function () {
            $("#poprawnie").dialog({
                autoOpen: false,
                show: {
                    effect: "blind",
                    duration: 1000
                },
                hide: {
                    effect: "explode",
                    duration: 1000
                }
            });

            $("#opener").on("click", function () {
                $("#poprawnie").dialog("open");
            });
        });
        $(function () {
            $("#Genji").autocomplete({
                source: availableTags
            });
        });
        $(function () {
            $("#Shintai").autocomplete({
                source: availableTags
            });
        });
    </script>
</head>
<body>
    <?php include "menu_view.php"?>
    <article>
        <header>
            Quiz
        </header>
        <div>
            <h2 style="text-align: center;">
                Odpowiedź na pytania i sprawdź swoją wiedzę
            </h2>
        </div>
        <div>
            <form id="forma" method="post" action="action.php">
                <ol>
                    <li>
                        Bogini słońca w mitologii japońskiej jest...
                        <select id="Amaterasu">
                            <option id="Wybierz odpowiedź" value="0">Wybierz odpowiedź</option>
                            <option id="Tsukiyomi" value="1">Tsukiyomi</option>
                            <option id="Tanuki" value="2">Tanuki</option>
                            <option id="Amaterasu" value="3">Amaterasu</option>
                            <option id="Kitsune" value="4">Kitsune</option>
                        </select>
                    </li>
                    <li>
                        Jakiego koloru mogą być Oni? <br> (Jest więcej niż jedna prawidłowa odpowiedż)
                        <br>
                        <input type="checkbox" name="Red" id="Red" value="Red">Czerwonego
                        <input type="checkbox" name="Green" id="Green" value="Green">Zielonego
                        <input type="checkbox" name="Black" id="Black" value="Black">Czarnego
                        <input type="checkbox" name="Blue" id="Blue" value="Blue">Niebieskiego
                    </li>
                    <li>
                        <label for="Shintai">Jak nazywają się przedmioty, w których przebywa bóstwo?</label>
                        <input type="text" id="Shintai" name="Shintai">
                    </li>
                    <li>
                        Ile bogów szczęścia jest w mitologii japońskiej?
                        <select id="Happy">
                            <option id="Wybierz odpowiedź" value="0">Wybierz odpowiedź</option>
                            <option id="12" value="1">12</option>
                            <option id="4" value="2">4</option>
                            <option id="6" value="3">6</option>
                            <option id="1" value="4">1</option>
                            <option id="7" value="5">7</option>
                        </select>
                    </li>
                    <li>
                        Kitsune jest demonem ... <br>
                        <input class="none_button" type="radio" name="Kitsune" id="None2" value="None2" checked>
                        <input type="radio" name="Kitsune" id="Lis" value="Lis">
                        <label for="Lis">Lisy</label>
                        <br>
                        <input type="radio" name="Kitsune" id="Wilk" value="Wilk">
                        <label for="Wilk">Wilka</label>
                    </li>
                    <li>
                        Za pierwszą, nowoczesną powieść uważa się ...
                        <input id="Genji" type="text" name="Genji" value="">
                    </li>
                    <li>
                        Jakim zwierzęciem jest tanuki?
                        <br>
                        <input type="checkbox" name="Cat" id="Cat" value="Cat">Kot
                        <input type="checkbox" name="Raccoon" id="Raccoon" value="Raccoon">Jenot
                        <input type="checkbox" name="Bear" id="Bear" value="Bear">Niedźwiedź
                        <input type="checkbox" name="Dog" id="Dog" value="Dog">Pies
                    </li>
                    <li>
                        Czy smok występuje w mitologii japońskiej?
                        <br>
                        <input class="none_button" type="radio" name="Smok" id="None1" value="None1" checked>
                        <input type="radio" name="Smok" id="Tak" value="Tak">
                        <label for="Tak">Tak</label>
                        <br>
                        <input type="radio" name="Smok" id="Nie" value="Nie">
                        <label for="Nie">Nie</label>
                    </li>
                </ol>
                <textarea rows="3" cols="50">
                    Uwagi dotyczące quiz'u można zostawić tu
                </textarea>
                <br>
                <input onclick="save()" id="opener" class="sub_res" value="zapisz podejście">
                <input onclick="ile_pkt()" class="sub_res" type="submit" value="submit">
                <input onclick="erase()" class="sub_res" type="reset" value="reset">
            </form>
        </div>
        <div id="poprawnie" title="Poprawność zapisywania danych">
        </div>
        <script>
            const para_pop = document.createElement("p");
            para_pop.innerHTML = "Dane zostały poprawnie zapisane";
            document.getElementById("poprawnie").appendChild(para_pop);
        </script>
        <div>
            <h2>
                Twoje rezultaty
            </h2>
            <div class="delete" id="delet1">
                Ta zawartość działa tylko wtedy, kiedy włączony jest JavaScript
            </div>
            <div id="Rez">
            </div>
            <script>
				var pkt = sessionStorage.getItem("Punkty");
				if (pkt < 0) pkt = 0;
                const para_last = document.createElement("p");
                para_last.innerHTML = "Personal last: " + pkt;
                document.getElementById("Rez").appendChild(para_last);
                localStorage.setItem("PersonalLast", pkt);
            </script>
        </div>
        <div>
            <h2>
                Schemat punktowania
            </h2>
            <div style="padding: 1vw">
                <table>
                    <tr>
                        <th class="nr">Nr. pytania</th>
                        <th>Punkty</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>1pkt</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2pkt (1pkt za każdy prawidłowy)</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td colspan="2">Do zdobycia: 15</td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <h2>
                Odpowiedzi
            </h2>
            <div class="delete" id="delet2">
                Odpowiedzi są dostępne tylko wtedy, kiedy włączony jest JavaScript
            </div>
            <div id="odp_h" class="none_odp">
                Kliknij, by zobaczyć odpowiedzi <br>
                <input onclick="pokaz_odp()" type="button" id="pokaz" value="pokaż zawartość">
                <div id="odpowiedzi" class="none_odp">
                    <ol>
                        <li>
                            Amaterasu
                        </li>
                        <li>
                            Czerwonego i niebieskiego
                        </li>
                        <li>
                            Shintai
                        </li>
                        <li>
                            Jest 7 bogów szczęścia
                        </li>
                        <li>
                            Lisy
                        </li>
                        <li>
                            Genji monogatari
                        </li>
                        <li>
                            Jenot
                        </li>
                        <li>
                            Tak
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </article>
    <a href="#top">
        <svg class="border">
            <circle cx="4vw" cy="4vw" r="2.5vw" fill="pink" />
            <text x="2.8vw" y="3.6vw" class="top">Go to</text>
            <text x="2.4vw" y="4.8vw" class="top">the top</text>
        </svg>
    </a>
    <footer>
        <p>Autor: Dmytro Dzhusov. Temat: Moje hobby</p>
        <p>Rok: 2022. WETI Informatyka</p>
    </footer>
</body>
</html>