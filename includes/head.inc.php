<!-- ATTENTION : il s'agit ICI d'un fichier APPELE donc je ne doit pas le mettre
 entre des balises php ; j'inscrits juste le bout de code que je vais appeler -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- les nouvelles balises header aside footer etc. ne sont pas reconnues par les anciens navigateurs, je vais rajouter un commentaire conditionnel pour internet explorers -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- j' appelle la google font via le scss styles.scss donc je ne doit plus l'importer via le link :

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
	-->
        
        <link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>css/styles.css"/>
