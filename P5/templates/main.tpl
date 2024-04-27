<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">
    <title>{$page_title|default:"Kalkulator lokat"}</title>

    <link rel="stylesheet" href="{$css_path}/main.css">
         <noscript><link rel="stylesheet" href="{$app_url}/assets/css/noscript.css"> </noscript>

</head>
<body class="is-preload">
<div id="page-wrapper">
    <div id="app_top">
<header id="header">
    <div id="app_top" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <h1 id="logo"><a href="">{$page_title|default:"Tytuł domyślny"}</a></h1>
        <nav id="nav">
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            
            <li><a href="#app_content">Idź do formularza</a></li>
        </ul></nav>
    </div>
    </div></div>
<div id="main" class="wrapper style1">
    <div class="container">
    <section>
        <h1>{$page_title|default:"Tytuł domyślny"}</h1>
        <p>
             {$page_description|default:"Opis domyślny"}
        </p>
        <p><a href="#app_content" class="primary">Idź do formularza</a></p>
    </section>
    </div>
        <div class="content-wrapper">

    <div class="container">

{block name=content} Domyślna treść zawartości .... {/block}
    </div>
        </div></div></div>


<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Michał Kromoliński. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>