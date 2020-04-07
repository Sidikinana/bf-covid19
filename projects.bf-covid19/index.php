<!DOCTYPE html>


<html lang="en">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Catalogue des projets BF-Covid19  - Accueil</title>
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="csrf-token" content="Ijg3Y2VkOGE3YmRhZTVkY2VlNTcxMWZkMWUwMmRlODAwOGQ3MGU3MTIi.XojIJw.lZsrwfgeM-VFhu738FPuYnOjrF4">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta property="og:title" content="index"/>
        <meta property="og:locale" content="en_US"/>
        <meta name="description" content="The Jekyll theme for pages connected avec la portail coalition des rechercheurs sur le covid19 au Burkina Faso"/>
        <meta property="og:description"
            content="The Jekyll theme for pages connected with avec la portail coalition des rechercheurs sur le covid19 au Burkina Faso"/>
        <link rel="shortcut icon" type="image/png" href="static/banners/fnr/logo2.jpeg"/>
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/logo22.jpeg">
        <link rel="stylesheet" href="static/css/mainc02e.css?qqaz">
        <link rel="stylesheet" href="static/css/projectsc02e.css?qqaz">
        <link rel="stylesheet" href="static/css/fontawesome-all.min.css">

         

        <script type="text/javascript">
            function defer(method) {
                if (window.jQuery)
                    method();
                else
                    setTimeout(function () {
                        defer(method)
                    }, 50);
            }
        </script>

    </head>
    <body>
        <div class="main">
            <div class="content-wrapper">
                
                

                <header class="site-header" role="banner"><div class="custom-header">
                    <a href="../index.html"><img class="img-research" src="static/logos/logo.jpeg" type="image/svg+xml" /></a>
                    <img class="img-banner img-banner-main" src="static/banners/fnr/banner.svg" type="image/svg+xml"/>
                    <img class="img-banner img-banner-motto" src="static/banners/fnr/logo.jpg" type="image/svg+xml"/>

            
                    <nav class="site-nav">
                        <input type="checkbox" id="nav-trigger" class="nav-trigger"/>
                            <label for="nav-trigger">
                                <span class="menu-icon">
                                    <svg viewBox="0 0 18 15" width="18px" height="15px">
                                        <path fill="#424242"
                                            d="M18,1.484c0,0.82-0.665,1.484-1.484,1.484H1.484C0.665,2.969,0,2.304,0,1.484l0,0C0,0.665,0.665,0,1.484,0 h15.031C17.335,0,18,0.665,18,1.484L18,1.484z"/>
                                        <path fill="#424242"
                                            d="M18,7.516C18,8.335,17.335,9,16.516,9H1.484C0.665,9,0,8.335,0,7.516l0,0c0-0.82,0.665-1.484,1.484-1.484 h15.031C17.335,6.031,18,6.696,18,7.516L18,7.516z"/>
                                        <path fill="#424242"
                                            d="M18,13.516C18,14.335,17.335,15,16.516,15H1.484C0.665,15,0,14.335,0,13.516l0,0 c0-0.82,0.665-1.484,1.484-1.484h15.031C17.335,12.031,18,12.696,18,13.516L18,13.516z"/>
                                    </svg>
                                </span>
                            </label>
                            <div class="wrapper trigger page-tabs">
                                <a class="page-link" href="../index.html">Accueil</a>
                                <a class="page-link" href="../task-force.html">Task Force</a>
                                <a class="active page-link" href="index.php" target="_blank">Projets</a>
                                <a class="page-link" href="http://uv.bf/coalition-recherche/formtools/modules/form_builder/published/enregistrerProjet.php" target="_blank">Soumettre un projet</a>
                                <a class="page-link" href="../about.html">À propos</a>  
                            </div>
                    </nav>
                </header>

                <div>
                    <main class="page-content" aria-label="Content">
                        <div class="wrapper main-wrapper">                                
                            <div class="row">
                                <form id="search-form" method="GET" role="form" class="col-md-12 form-horizontal">
                                    <fieldset class="field-container">
                                    <input name="query" id="query" type="text" placeholder="Rechercher des projets..." class="field" value=""/>
                                        <div class="icons-container">
                                            <div class="icon-search"></div>
                                            <div class="icon-close">
                                                    <div class="x-up"></div>
                                                    <div class="x-down"></div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div id="sort_by_div">
                                        <label for="sort_by" class="pull-left control-label">Trier par</label>
                                        <select id="sort_by" name="sort_by" class="pull-left form-control submit-change"> 
                                            <option value="">pertinence</option>
                                            <option value="created">crée </option>
                                            <option selected="selected" value="title">titre </option>
                                
                                        </select>
                                    </div>
                                    <div id="sort_order_div">
                                        <label style="" for="order" class="pull-left control-label">Ordre</label>
                                        <select id="order" name="order" class="pull-left form-control submit-change">
                                            <option >asc</option>
                                            <option selected="selected" >desc</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </main>
                </div>
                <p align="center">Informations sur les projets COVID19 en cours et les nouvelles idées proposées à venir.</p>
                <?php require "projet.php"; ?>




                <footer class="partners">
                    <div class="partners-container" >
                        <a href="https://www.mesrsi.gov.bf/" target="_blank"><img class="img-banner-logos list" title="MERSI"  alt="MERSI" src="../mersi.jpg"/></a>
                        <a href="http://www.cnrst.bf/" target="_blank"><img class="img-banner-logos fnr"   alt="CNRST" src="../cnrst.jpg" /></a>
                        <a href="https://www.univ-ouaga1.gov.bf/" target="_blank"><img class="img-banner-logos unilu" title="UOJKZ" alt="l’Université Joseph Ki Zerbo" src="../uo.jpg" /></a>
                        <a href="https://www.unz.bf/" target="_blank"><img class="img-banner-logos unilu" title="unz" alt="l’Université Norbert Zongo" src="../unz.jpg" /></a>
                        <a href="https://uv.bf/" target="_blank"><img class="img-banner-logos unilu" title="uvbf" alt="l’Université virtuel du burkina" src="../uvbf.jpg" /></a>
                        <a href="http://www.univ-bobo.bf/" target="_blank"><img class="img-banner-logos unilu" title="unb" alt="l’Université Nazie Boni" src="../unb.jpg" /></a>
                       
                    </div>
                </footer>
                <footer class="site-footer h-card">
                    <div class="wrapper footer-wrapper">
                        <div class="footer-cp">
                                <span>
                                        © <a href="../index.html" target="_parent"><strong>Coalition de la Recherche du Burkina Faso</strong>,</a>
                                        2020. All rights reserved.</p>
                                    <p>
                                        <a href="../privacy_policy.html" target="_blank">Politique de confidentialité</a>
                                    </p>
                                </span>

                                <div class="powered_by"> 
                                    <ul>
                                        <li>Powered by:</li>
                                        <li><a href="http://www.incubuo.tech/" target="_blank"><img class="mini-logo" src="incubuo.png" /></a></li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                </footer>

            </div>
            <link href="../fonts.googleapis.com/css26b65.css?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&amp;display=swap" rel="stylesheet">
        </div>

        <script src="../code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).on('ready', function () {
                $('.field').on('focus', function () {
                    $(this).addClass('is-focus');
                });

                $('.field').on('blur', function () {
                    $(this).removeClass('is-focus is-type');
                });

                $('.icon-close').on('click', function () {
                    $('.field').val('').focus();
                });
                $('.submit-change').change(function () {
                    this.form.submit();
                });
            });
        </script>

    </body>


</html>
