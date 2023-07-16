<!DOCTYPE html>
<html lang="PL">
<head>
    <link rel='stylesheet' href='Files/styles_main.css' />
    <link rel='stylesheet' href='Files/styles_all.css' />
    <title>Mitologia Japonii</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="Files/jquery-3.6.1.js"></script>
    <script src="Files/jquery-ui.min.js"></script>
    <script src="Files/Scroll.js"></script>
    <script src="Files/All.js"></script>
</head>
<body>
    <?php include "menu_view.php"?>
	<header>
		<p class="text_gl">Mitologia Japonii</p>
	</header>
	<div id="linki">
		<a href="gods" target="_blank">
			<figure>
				<img src="Images/Gods.jpg" alt="Gods">
				<figcaption class="text_bok">Bogowie</figcaption>
			</figure>
		</a>
		<a href="yokai" target="_blank">
			<figure>
				<img src="Images/Yokai.png" alt="Yokai">
				<figcaption class="text_bok">Yokai</figcaption>
			</figure>
		</a>
		<a href="tales" target="_blank">
			<figure>
				<img src="Images/Tales.jpg" alt="Tales">
				<figcaption class="text_bok">Opowieści</figcaption>
			</figure>
		</a>
	</div>
	<article>
		<h1 style="text-align: center; font-family: cursive; font-size: 3vw;">Trochę historii</h1>
		<hr>
		<p style="text-align: center; font-family: monospace; font-size: 1vw">
			Do VI wieku n.e. w Japonii uprawiano różne kulty animistyczne .
			W czasach, gdy w Japonii zaczął się szerzyć buddyzm , dla odróżnienia od tej nowej religii, określanej mianem bukkyou ( jap. 仏教 nauczanie Buddy), stare wierzenia nazywano shintō , stosując do tego złożenie chińskich znaków oznaczających drogę bogów.
			W ciągu wieków między obiema religiami zachodził synkretyzm religijny – wielu Japończyków bierze dziś ślub w obrządku shintō, pogrzeby zaś odprawiane są w obrządku buddyjskim.
		</p>
	</article>
	<a href="#top">
		<svg class="border">
			<circle cx="4vw" cy="4vw" r="2.5vw" fill="pink" />
			<text x="2.8vw" y="3.6vw" class="top">Go to</text>
			<text x="2.4vw" y="4.8vw" class="top">the top</text>
		</svg>
	</a>
</body>
</html>