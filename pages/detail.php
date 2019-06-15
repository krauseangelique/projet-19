<!--  définition des CHEMINS  -->
    <?php
        define("PATH", "../");
    ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <!-- je vais faire un INCLUDE des meta et des links -->
         <?php   
            include PATH.'includes/head.inc.php';
        ?>
        

        <title>>Vintage 2019 : détail</title>

   
    <!-- FIN de l'include -->
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
                    
                <li><a href="index.php"> &nbsp;chaises</a> &gt; Bombay</li>
                    
            </ul>        
                   
        </section>
       
      <!-- Corps du site -->
      <div class="bloc-page">
        <div class="container">
        <main class=" contenu col-lg-2">
            <section class="image-detail">

                <figure class="big-detail">
            <!-- je mets un lien autour de l'image pour voir les images en différents formats -->
                   <a href="../img/big-CHR-59-02.jpg"> <img src="../img/big-CHR-59-02.jpg" alt="chaise Bombay" height="412" width="412" /></a>
                </figure> 
                <figure>  
                   <a href="../img/big-CHR-59-02.jpg"> <img src="../img/small100-CHR-59-01.jpg " alt="chaise Bombay vue gauche" height="100" width="100" /></a>
                   <img src="../img/small100-CHR-59-02.jpg " alt="chaise Bombay vue droite" height="100" width="100" />
                   <img src="../img/small100-CHR-59-03.jpg " alt="chaise Bombay vue  front" height="100" width="100" />
                   <img src="../img/small100-CHR-59-04.jpg " alt="chaise Bombay vue profil" height="100" width="100" />
                </figure>
                
            </section>

            <section class="contenu-detail">

                <div class="description-detail">
                    <h2>Bombay : </h2>
                    <h3>Chaise De Bar Industrielle en cuir marron</h3>
                    <p>Le siège en cuir n'est pas complètement fini donnant aux chaises un joli loock vintage! </br>Un design cool que vous pouvez combiner avec, par exemple, une table en bois.</p>
                </div>

                <div class="specifications-detail" >
                    <div class="prix-detail "> <b>Prix :</b> 119 €</div>
                    <h4 id="petite-majuscule">Spécifications</h4>
                    <div class="mesures">
                        <p><b>Hauteur d'assise :</b> 75 cm</p>
                        <p><b>Hauteur totale :</b> 105 cm</p>
                        <p><b>Largeur :</b> 51 cm</p>
                        <p><b>Profondeur :</b> 53 cm</p>
                    </div>
                </div> 

            </section>

        </main>
        </div> 
    </div>

    </body>
</html>