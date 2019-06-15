<!-- pour que mes liens soient opérationnels sur CHAQUE page je vais modifier le chemin PATH -->
<?php 
define("PATH","./");

?>

<!DOCTYPE html>
<html lang="fr">

     <head>
    <!-- je vais faire un INCLUDE des meta et des links -->

        <title>Vintage 2019 : ACCUEIL</title>


     <?php   
            include PATH.'includes/head.inc.php';
        ?>
        <!-- FIN de l'include -->
    </head>

    <body>

            
    <!-- // header   : j'ai enlever le header que j'ai placé dans le fichier header.inc.php ;
     je vais maintenant APPELER le fichier include dans mon index.php-->
        <?php   
            include PATH.'includes/header.inc.php';
        ?>
     <!-- // FIN header -->

     <!-- Fil d'Ariane -->
        <section>
                   
            <ul class="ariane ">
                <li>vous êtes ici : </li>
                    
                <li><a href="#"> &nbsp;accueil </a></li>
                    
            </ul>        
                   
        </section>

        <div class="img-slide">
           
        </div>
       
      <!-- Corps de la page : ACCUEIL : Nous sommes sur les CHAISES et il y a une seconde NAV avec le menu pour les différents meubles --> 
        <div class="bloc_page">
            <div class="container">
                <div class="contenu col-lg-12 col-md-12">
                    
                    <div class="container">
                        <main  class="content  col-md-9 col-lg-9">

                            <article class="article lg-item-triple md-item-triple">
                                <figure >
                                     <h2>
                                        <span  class="dis-none" >la nouvelle collection gazzda</span>  
                                        <img class="img-gazza" src="img/gazzda.jpg" alt="new collection gazzda" />
                                    </h2> 
                                 </figure>
                            </article>

                            <article class="article lg-item-triple md-item-triple">
                                <figure class="img-home">
                                    <h2>
                                        <span class="dis-none"> la collection LIAM </span>
                                    </h2>
                                        <a href="#">
                                            <img src="img/liam-fr.jpg" alt="Liam" />
                                        </a>
                                    
                                </figure>     
                            </article>

                            <article class="article lg-item-triple md-item-triple">
                                <figure class="img">
                                    <a href="#">
                                        <img src="img/IMG_06579_275x275.jpg" alt="chaise Peaky Blue" />
                                    </a>
                                </figure> 
                                <h3><a href="#" class="article-titre">Peaky Blue</a></h3>
                                 
                            </article>
                            <article class="article lg-item-triple md-item-triple">
                                <figure class="img">
                                    <a href="#">
                                        <img src="img/showroom-360.jpg" alt="showroom" />
                                    </a>
                                </figure> 
                                <h3><a href="#" class="article-titre">360° : Showroom</a></h3>
                                
                            </article>
                           
                                
                            
                    

                    </main>
                </div>
               
                    <nav class=" rubriques-articles container  rose" >

                        <ul class="col-md-3 col-lg-3">
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

                 </div> 
            </div>
            
        </div>      
    </body>
</html>
