<!DOCTYPE html>
<html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]--><!--[if gt IE 8]><!--><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="assets/css/screen.css">
</head>
<body>
<header>
    <div class="container">
        <div class="header-menu sixteen columns clearfix">
            <a href="index.html" class="three columns alpha logo-container">
                <img src="assets/images/2014/landing/logo.png" alt="">
            </a>
            <ul class="thirteen columns omega">
                <li>
                    <a class="scrollable" href="#sponsors">
                    </a>
                </li>
                <li>
                    <a class="scrollable" href="#speakers">
                    </a>
                </li>
                <li>
                    <a class="scrollable" href="#edicion2013">
                    </a>
                </li>
                <li>
                    <a class="scrollable" href="#organizadores">
                    </a>
                </li>
                <li>
                    <a class="color-green" href="./v2013">
                    </a>
                </li>
                <li>
                    <a class="color-green" href="./v2012">
                    </a>
                </li>
                <li>
                    <a href="eng.html" class="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-video">
        <img src="assets/images/2014.jpg" class="header-video--media" data-video-src="97064014" data-teaser-source="assets/images/techmeetup" data-provider="Vimeo" data-video-width="500" data-video-height="281">
        <div class="container clearfix">
            <div class="header-event sixteen columns">
                <div class="header-place eleven columns alpha">
                    <span class="header-date">
                    </span>
                    <span class="header-divider">
                    </span>
                    <span class="header-venue">
                    </span>
                </div>
                <div class="header-button five columns omega">
                    <a href="http://vimeo.com/97064014" target="_blank" class="btn btn-blue video-trigger">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container container-with-margin">
    <div class="sixteen columns">
        <section class="section-intro">
            <h1 class="sixteen columns alpha omega">
                Nuestros objetivos:
            </h1>
        </section>
    </div>
    <div class="one-third column">
        <h3 class="color-blue">
            Potenciar comunidades locales.
        </h3>
        <p>
            <a href="http://meetup.uy" target="_blank">
            </a>
        </p>
    </div>
    <div class="one-third column">
        <h3 class="color-blue">
            Impulsar a los estudiantes de IT.
        </h3>
        <p>
        </p>
    </div>
    <div class="one-third column">
        <h3 class="color-blue">
            Actualizaci??n profesional y Networking.
        </h3>
        <p>
        </p>
    </div>
</div>
<!-- container -->
<div class="container container-with-margin" id="sponsors">
    <section class="sixteen columns sponsors clearfix">
        <h1>
            Sponsors
        </h1>
        <p>
        </p>
        <a id="sponsors-pdf" href="docs/tech.meetup.uy.sponsors.v2014.pdf" target="_blank">
            <img src="assets/images/2014/landing/sponsors.png" alt="">
        </a>
        <div class="clear">
        </div>
        <div class="center clearfix">
            <h2>
                Si quer??s apoyar la conferencia cont??ctanos a
                <a href="mailto:info@meetup.uy">
                    info@meetup.uy
                </a>
            </h2>
        </div>
        <h1>
            Apoyan
        </h1>
        <?php
	    $s = [
            [
                'alt' => 'CASE',
                'url' => 'http://case-inc.com',
                'img' => 'case.png',
                'type' => 'green'	            
            ],
            [
                'alt' => 'Moove-it',
                'url' => 'http://moove-it.com',
                'img' => 'moove-it.png',
                'type' => 'green'
            ],
            [
                'alt' => 'Mercaro Libre',
                'url' => 'http://www.mercadolibre.com.uy',
                'img' => 'mercadolibre.png',
                'type' => 'green'
            ],
            [
                'alt' => 'Guruhub',
                'url' => 'http://guruhub.com',
                'img' => 'guruhub.png',
                'type' => 'blue'
            ],
            [
                'alt' => 'Grupo Jordan',
                'url' => '#',
                'img' => 'grupo-jordan.png',
                'type' => 'blue'
            ],
            [
                'alt' => 'wyeworks',
                'url' => 'http://www.wyeworks.com',
                'img' => 'wyeworks.png',
                'type' => 'blue'
            ],
	        [
	           'alt' => 'tryolabs',
                'url' => 'http://www.tryolabs.com/',
                'img' => 'tryolabs.png',
                'type' => 'blue'
            ],
	        [
    	        'alt' => 'PedidosYa',
    	        'url' => 'http://www.pedidosya.com.uy/',
    	        'img' => 'pedidosya.png',
    	        'type' => 'blue'
	        ],
	        [
    	        'alt' => 'NEON ROOTS',
    	        'url' => 'http://www.neonroots.com/',
    	        'img' => 'neon-roots.png',
    	        'type' => 'blue'
	        ],
	        [
    	        'alt' => 'Rootstrap',
    	        'url' => 'http://rootstrap.it/',
    	        'img' => 'rootstrap.png',
    	        'type' => 'blue'
	        ],
	        [
	            'alt' => 'El Pais',
	            'url' => 'http://www.elpais.com.uy/',
	            'img' => 'elpais.png',
	            'type' => 'blue'
	        ],
	        [
                'alt' => 'Antel',
                'url' => 'http://www.antel.com.uy',
                'img' => 'antel.png',
                'type' => 'blue'
            ],
	        [
                'alt' => 'ANII',
                'url' => 'http://www.anii.org.uy/web/',
                'img' => 'anii.png',
                'type' => 'blue'
            ],
	        [
	           'alt' => 'Pepsi',
	           'url' => '#',
	           'img' => 'pepsi.png',
	           'type' => 'blue'
	        ],
	        [
	           'alt' => 'Zillertal',
               'url' => '#',
               'img' => 'zillertal.png',
               'type' => 'blue'
            ],
	    ];  
		?>
        <div class="center clearfix">
            <div class="one-third column sponsor alpha">
                <a href="http://www.case-inc.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/case.png" alt="CASE">
                </a>
                <div class="sponsor-type sponsor-type-green">
                </div>
            </div>
            <div class="one-third column sponsor">
                <a href="http://moove-it.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/moove-it.png" alt="Moove-it">
                </a>
                <div class="sponsor-type sponsor-type-green">
                </div>
            </div>
            <div class="one-third column sponsor omega">
                <a href="#" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/default.png" alt="Sponsor">
                </a>
                <div class="sponsor-type sponsor-type-green">
                </div>
            </div>
            <div class="one-third column sponsor alpha">
                <a href="http://www.case-inc.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/wyeworks.png" alt="WyeWork">
                </a>
                <div class="sponsor-type sponsor-type-blue">
                </div>
            </div>
           
            <div class="one-third column sponsor">
                <a href="http://www.case-inc.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/anii.png" alt="ANII">
                </a>
                <div class="sponsor-type sponsor-type-blue">
                </div>
            </div>
            <div class="one-third column sponsor omega">
                <a href="http://www.case-inc.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/tryo.png" alt="Tryolabs">
                </a>
                <div class="sponsor-type sponsor-type-green">
                </div>
            </div>
            <div class="one-third column sponsor alpha">
                <a href="http://www.case-inc.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/antel.png" alt="Antel">
                </a>
                <div class="sponsor-type sponsor-type-blue">
                </div>
            </div>
            <div class="one-third column sponsor">
                <a href="http://www.case-inc.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/pepsi.png" alt="Pepsi">
                </a>
                <div class="sponsor-type sponsor-type-green">
                </div>
            </div>
            <div class="one-third column sponsor omega">
                <a href="http://www.case-inc.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/zillertal.png" alt="Zillertal">
                </a>
                <div class="sponsor-type sponsor-type-green">
                </div>
            </div>
            <div class="one-third column sponsor alpha">
                <a href="http://www.case-inc.com/?ref=tech.meetup.uy" target="_blank">
                    <img src="assets/images/2014/landing/sponsors/default.png" alt="El Pais">
                </a>
                <div class="sponsor-type sponsor-type-green">
                </div>
            </div>
        </div>
    </section>
</div>
<div class="blue-wrapper" id="speakers">
    <div class="container container-with-margins">
        <section class="sixteen columns speakers clearfix">
            <h1>
                Oradores
            </h1>
            <h2>
                Ten??s algo interesante que contar?
            </h2>
        </section>
        <section class="sixteen columns speakers clearfix">
            <a class="btn btn-white" href="https://docs.google.com/a/centra.com.uy/spreadsheet/viewform?usp=drive_web&amp;formkey=dFppcTdWNXczZFQtRXJMWnYyeHNqLUE6MA#gid=24" target="_blank">
            </a>
            <br>
            <br>
            <br>
        </section>
        <section class="speakers-description clearfix">
            <div class="one-third column">
                <h3 class="color-white">
                    Formato de las charlas
                </h3>
                <p>
                </p>
                <p>
                </p>
                <p>
                </p>
            </div>
            <div class="one-third column">
                <h3 class="color-white">
                    P??blico objetivo
                </h3>
                <p>
                </p>
                <p>
                </p>
                <p>
                </p>
                <p>
                </p>
            </div>
            <div class="one-third column">
                <h3 class="color-white">
                    Presentando tus ideas
                </h3>
                <p>
                </p>
                <p>
                </p>
                <p>
                    <i>
                    </i>
                </p>
            </div>
        </section>
    </div>
</div>
<div class="blue-wrapper wrapper-2013" id="edicion2013">
    <div class="container container-with-margin">
        <section class="sixteen columns anterior clearfix">
            <h1 id="speakers">
                Lo que pas?? en
                <a href="http://tech.meetup.uy/v2013/" target="_blank">
                    2013
                    <span>
                        ver
                    </span>
                </a>
            </h1>
            <p>
                <strong>
                </strong>
                <strong>
                </strong>
                <strong>
                </strong>
                <strong>
                </strong>
                <strong>
                </strong>
            </p>
            <h3>
                Te lo vas a perder?
            </h3>
            <a href="http://vimeo.com/97064014" target="_blank" class="btn btn-yellow video-trigger">
            </a>
            <div class="header-video-2013">
                <img _src="assets/images/2013.jpg" class="header-video--media-2013" data-video-src="97064014" data-teaser-source_="assets/images/2013" data-provider="Vimeo" data-video-width="500" data-video-height="281">
            </div>
        </section>
    </div>
</div>
<div class="container container-with-margin" id="organiza">
    <section class="sixteen columns organizers clearfix">
        <h1 id="organizadores">
            Organiza
        </h1>
        <div class="center clearfix">
            <div class="one-third column organizer alpha">
                <img src="assets/images/2014/landing/organizers/diego_sapriza.jpg" alt="Diego Sapriza">
                <h4>
                    Diego Sapriza
                </h4>
                <a href="http://twitter.com/AV4TAr" target="_blank">
                </a>
            </div>
            <div class="one-third column organizer">
                <img src="assets/images/2014/landing/organizers/gustavo_armagno.jpg" alt="Gustavo Armagno">
                <h4>
                    Gustavo Armagno
                </h4>
                <a href="http://twitter.com/GustavoArmagno" target="_blank">
                </a>
            </div>
            <div class="one-third column organizer omega">
                <img src="assets/images/2014/landing/organizers/nacho_nin.jpg" alt="Ignacio Nin">
                <h4>
                    Ignacio Nin
                </h4>
                <a href="http://twitter.com/nachexnachex" target="_blank">
                </a>
            </div>
            <div class="clear">
            </div>
            <div class="one-third column organizer alpha">
                <img src="assets/images/2014/landing/organizers/martinc.jpg" alt="Mart??n Cabrera">
                <h4>
                    Mart??n Cabrera
                </h4>
                <a href="http://twitter.com/murtun" target="_blank">
                </a>
            </div>
            <div class="one-third column organizer">
                <img src="assets/images/2014/landing/organizers/martin_loy.jpg" alt="Mart??n Loy">
                <h4>
                    Mart??n Loy
                </h4>
                <a href="http://twitter.com/martinloy" target="_blank">
                </a>
            </div>
            <div class="one-third column organizer omega">
                <img src="assets/images/2014/landing/organizers/nicolasb.jpg" alt="Nicol??s Bianchi">
                <h4>
                    Nicol??s Bianchi
                </h4>
                <a href="http://twitter.com/nicobf" target="_blank">
                </a>
            </div>
        </div>
    </section>
</div>
<div class="footer-wrapper">
    <footer>
        <div class="container">
            <section class="sixteen columns footer clearfix">
                <div class="seven columns alpha omega">
                    <h4>
                        Informaci??n General
                    </h4>
                    <p>
                        <a href="mailto:info@meetup.uy">
                        </a>
                    </p>
                    <h4>
                        Organizaci??n
                    </h4>
                    <p>
                        <a href="mailto:organizacion@meetup.uy">
                        </a>
                    </p>
                    <h4>
                        Comunicaci??n
                    </h4>
                    <p>
                        <a href="mailto:comunicacion@meetup.uy">
                        </a>
                    </p>
                    <h4>
                        Tel??fono
                    </h4>
                    <p>
                        <a href="phone:+59827078003">
                        </a>
                    </p>
                    <div class="social-icons">
                        <ul>
                            <li>
                                <a href="https://twitter.com/meetupuy" target="_blank">
                                    <i class="fa fa-twitter-square">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/meetupuy" target="_blank">
                                    <i class="fa fa-facebook-square">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/meetupuy" target="_blank">
                                    <i class="fa fa-youtube-square">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/u/0/115708920691702747812/posts" target="_blank">
                                    <i class="fa fa-google-plus-square">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nine columns alpha omega">
                    <a href="/">
                        <img src="assets/images/2014/landing/logo-footer.png" alt="">
                    </a>
                    <p>
                    </p>
                    <a style="VISIBILITY:HIDDEN" class="hostedby" href="http://servergrove.com/" target="_blank">
                        <p>
                            <small>
                            </small>
                        </p>
                        <img src="assets/images/2014/landing/sg230x35_g.png" alt="Hosted by ServerGrove">
                    </a>
                    <div class="made-with-love">
                        <span class="heart">
                        </span>
                        <a target="_blank" href="http://twitter.com/trikanna">
                        </a>
                    </div>
                </div>
                <div class="clear">
                </div>
            </section>
        </div>
    </footer>
</div>
<script src="assets/javascripts/jquery.min.js">
</script>
<script src="assets/javascripts/modernizr.js">
</script>
<script src="assets/javascripts/plugins.js">
</script>
<script src="assets/javascripts/script.js">
</script>
<script src="assets/javascripts/application.js">
</script>
<!-- &lt;script&gt; (function(i,s,o,g,r,a,m){i[&#x27;GoogleAnalyticsObject&#x27;]=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,&#x27;script&#x27;,&#x27;//www.google-analytics.com/analytics.js&#x27;,&#x27;ga&#x27;);
ga(&#x27;create&#x27;, &#x27;UA-34814216-1&#x27;, &#x27;meetup.uy&#x27;);
ga(&#x27;send&#x27;, &#x27;pageview&#x27;); &lt;/script&gt; -->
</body>
</html>