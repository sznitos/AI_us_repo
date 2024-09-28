<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">
    <title>{$page_title|default:"LibraApp"}</title>

    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css">
         <noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css"> </noscript>

</head>
<body class="is-preload">
<div id="page-wrapper">
    <div id="app_top">
    <header id="header">
    <div id="app_top" class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <h1 id="logo"><a href="">{$page_title|default:"Tytuł domyślny"}</a></h1>
            <nav id="nav">
            <ul>
                <li><a href="#app_content">Administracja</a></li>
                <li><a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">Wyloguj się</a></li>
    {*	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>*}
            </ul>
        </nav>
    
    </div>
    </header>
    </div>
<div id="main" class="wrapper style1">
    <div class="container">
    <section>
{*        <h1>{$page_title|default:"Tytuł domyślny"}</h1>*}
        <h1>
             {$page_description|default:"Opis domyślny"}
        </h1>
    </section>
    </div>

    <div class="container">

{block name=content} Domyślna treść zawartości .... {/block}
    </div>
        </div>


<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; LibraApp by Michał Kromoliński. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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