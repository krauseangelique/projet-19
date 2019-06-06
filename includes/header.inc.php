
<!-- ATTENTION : il s'agit ICI d'un fichier APPELE donc je ne doit pas le mettre
 entre des balises php ; j'inscrits juste le bout de code que je vais appeler -->

<div class="bloc-page">

        <!-- LOGO & zone de RECHERCHE -->
        <div class="container">
            <header id= "logo" class="headPrincipal col-md-6 col-lg-3  header  ">
                
                
                <h1 class= "logo col-lg-4 " id="info-logo">
                    <span  class="dis-none" >vintage lab logo page ACCUEIL</span>  
                    <img src="<?php echo PATH; ?>img/logoVint.jpg" alt="logo société vintage lab " />
                </h1>
                <!-- FORMULAIRE DE RECHERCHE : en haut à droite -->
                
                <form class= "form push" name="inscription" method="post" action="#">
                  
                        <input type="search" name="recherche"   placeholder="Que cherchez-vous">
                    
                        <input type="submit" name="button" id="button" value="OK">
                 
                </form>
                <!-- FIN Formulaire -->
            </header>
           
        </div>

        <hr />


     <!-- GROUPE 2 La nav ou menu du site -- >
        <!-- en vue intermédiaire (tablette) les élémts se positionnent 3 par 3 
        donc container-md-3 -->

        <div class="container">

            <nav class=" nav-principal col-lg-3 col-md-3 "> <!--en display none class dis-none EN MOBILE -->
                <ul class=" nav-menu vert">
                    <!-- pour que mon fichier soit appelé je vais faire un ECHO du PATH chemin 
                    vers la page index.php ; ne pas OUBLIER de modifier les extentions de fichier 
                    de .html on passe en .php -->
                        <li class="mix-white-40"><h2><a href="<?php echo PATH; ?>index.php">accueil</a></h2></li>
                        <li><h2><a href="<?php echo PATH; ?>pages/catalogue.php">meubles</a></h2></li>
                        <li><h2><a href="#">luminaires</a></h2></li>
                        <li><h2><a href="#">accessoires</a></h2></li>
                        <li><h2><a href="<?php echo PATH; ?>pages/contact.php">contact</a></h2></li>
                </ul>        
            </nav>

        </div>

 </div>