<!--  définition des CHEMINS  -->
    <?php
        define("PATH", "../");
        
    ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vintage 2019 : Catalogue</title>
    <!-- les nouvelles balises header aside footer etc. ne sont pas reconnues par les anciens navigateurs, je vais rajouter un commentaire conditionnel pour internet explorers -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
        <link rel="stylesheet" type="text/css" href="../css/styles.css"/>

    </head>


    <body>

    <!-- // header -->
        <?php   
            include PATH.'includes/header.inc.php';
        ?>
     <!-- // FIN header -->

        
     <!-- Fil d'Ariane -->
        <section>
                   
            <ul class="ariane ">
                <li>vous êtes ici : </li>
                    
                <li><a href="#"> &nbsp;chaises </a></li>
                    
            </ul>        
                   
        </section>
       
      <!-- Corps de la page : CATALOGUE : Nous sommes sur les CHAISES et il y a une seconde NAV avec le menu pour les différents meubles --> 
        <div class="bloc-page">
            
            
                <nav class=" rubriques-articles col-md-3 col-lg-3 double  rose" >
                    <ul>
                        <li><a href="#">chaises</a>
                            <ul> 
                                <li><a href="#">Cuisine</a></li>
                                <li><a href="#">Salle à manger</a></li>
                            </ul>
                        </li>
                        <li><a href="#">tables</a>
                            <ul>
                                <li><a href="#">Basse</a></li>
                                <li><a href="#">Haute</a></li>
                                <li><a href="#">Chevet</a></li>
                                <li><a href="#">Deserte</a></li>
                            </ul>
                        </li>
                        <li><a href="#">armoires</a></li>
                        <li><a href="#">autres meubles</a></li>
                    </ul>
                </nav>
     <!-- FIN de nav -->

                
                <main  class="content  container col-md-9  col-lg-9">

                    <article class="article lg-item-triple md-item-triple">
                        <figure class="img">
                            <a href="detail.php">
                               <img src="../img/IMG_7957x z_275x275.jpg" alt="chaise Bombay" /> 
                            </a>
                        </figure> 
                        <h3><a href="detail.php" class="article-titre">Bombay</a></h3>
                        <p> <a href="detail.php" class="article-text">Chaise de bar industriele Bombay : le siége en cuir n'est pas complètement fini donnant aux chaises un joli loock vintage! Un design cool que vous pouvez combiner avec, par exemple, une table en bois. <br> [...]</a> </p>
                        <div class="prix"> 119 €</div> 
                    </article>

                    <article class="article lg-item-triple md-item-triple">
                        <figure class="img">
                            <a href="#">
                                <img src="../img/IMG_5792_275x275.jpg" alt="chaise Kina Acier" />
                            </a>
                        </figure> 
                        <h3><a href="#" class="article-titre">Kina Acier</a></h3>
                        <p><a href="#" class="article-text">Une belle chaise d'acier avec un design lisse et solide sans pareil et un vrais attachant à votre table <br> [...]</a> </p>
                        <div class="prix"> 89 €</div> 
                    </article>
                    <article class="article lg-item-triple md-item-triple">
                        <figure class="img">
                            <a href="#">
                                <img src="../img/IMG_06579_275x275.jpg" alt="chaise Peaky Blue" />
                            </a>
                        </figure> 
                        <h3><a href="#" class="article-titre">Peaky Blue</a></h3>
                        <p><a href="#" class="article-text">Lovely pour s'assoire et belle à regarder. Les chaises de salle à manger ne devrais pas selement être confortable. Elle doivent aussi avoir l'air bien moderne et bien ajusté <br> [...]</a> </p>
                        <div class="prix"> 99 €</div> 
                    </article>
                    <article class="article lg-item-triple md-item-triple">
                        <figure class="img">
                            <a href="#">
                                <img src="../img/IMG_3291_275x275.jpg" alt="DSW Red" />
                            </a>
                        </figure> 
                        <h3><a href="#" class="article-titre">DSW Red</a></h3>
                        <p><a href="#" class="article-text"> Pour ceux qui veulle être à l'aise et à la mode. Avec le siège DSW Style vous êtes bon! Une chaise facile et confortable qui, sans vouloir attirer l'attention s'adapte. <br> [...]</a> </p>
                        <div class="prix"> 89 €</div> 
                    </article>
                    <article class="article lg-item-triple md-item-triple">
                        <figure class="img">
                            <a href="#">
                                <img src="../img/IMG_5793_275x275.jpg" alt="chaise V Bar" />
                            </a>
                        </figure> 
                        <h3><a href="#" class="article-titre">V Bar</a></h3>
                        <p><a href="#" class="article-text"> Une belle chaise d'acier avec un design lisse et solide sans pareil et un vrais attachant à votre table de bar <br> [...]</a> </p>
                        <div class="prix"> 89 €</div> 
                    </article>
                    <article class='article lg-item-triple'>
                        <figure class="img">
                            <a href="#">
                                <img src="../img/IMG_0797_275x275.jpg" alt="chaise Pezy" />
                            </a>
                        </figure> 
                        <h3><a href="#" class="article-titre">Pezy</a></h3>
                        <p><a href="#" class="article-text">a chaise Pezi est un siège de fil très serré et peut être utilisé dans différents styles d'intérieur. <br> [...]</a> </p>
                        <div class="prix"> 69 €</div> 
                    </article>
                    <article class="article lg-item-triple md-item-triple ">
                        <figure class="img">
                            <a href="#">
                                <img src="../img/IMG_1898_275x275.jpg" alt="chaise Tulip" />
                            </a>
                        </figure> 
                        <h3><a href="#" class="article-titre">Tulip</a></h3>
                        <p><a href="#" class="article-text">Cette chaise est connue pour son siège en forme de tube spécifique. L'habitacle magnifiquement formé et équipé d'un cousin mou et donc très confortable. Le cockpit est fait de <br> [...]</a> </p>
                        <div class="prix"> 89 €</div> 
                    </article>
                    <article class='article lg-item-triple md-item-triple'>
                        <figure class="img">
                            <a href="#">
                                <img src="../img/bert-jn-zw_275x275.jpg" alt="chaise Bertoia" />
                            </a>
                        </figure> 
                        <h3><a href="#" class="article article-titre">Bertoia</a></h3>
                        <p><a href="#" class="article-text"> Chaise de salle à manger Bertoia noire. Chaise en fil d'un desing solide et élégant <br> [...]</a> </p>
                        <div class="prix"> 99 €</div> 
                    </article>
                 
            </main>
        </div>
        
        </div>      
    </body>
</html>
