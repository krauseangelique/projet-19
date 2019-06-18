<?php
        define("PATH", "../");
?>

<!DOCTYPE html>
<html lang="fr">
<!--  définition des CHEMINS  -->
    <head>
        <!-- je vais faire un INCLUDE des meta et des links -->
         <?php   
            include PATH.'includes/head.inc.php';
        ?>
        <!-- FIN de l'include -->

        <title>Vintage 2019 : CONTACT</title>

   
    </head>


    <body>

     <!-- // header -->
        <?php   
            include PATH.'includes/header.inc.php';
        ?>
     <!-- // FIN header -->

        
     <!-- Fil d'Ariane : je ne mets pas une section mais une simple DIV car section ne peut être utilisé comme conteneur générique-->
        <div>
                   
            <ul class="ariane ">
                <li>vous êtes ici : </li>
                    
                <li><a href="contact.phpl"> &nbsp;CONTACT </a></li>
                    
            </ul>        
                   
        </div>
       
      <!-- Corps du site -->
        <!-- plan : Google map -->
        <div class="bloc-page">

        <div class="plan contenu container vert">
            <iframe class="col-lg-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10120.85335412887!2d5.554299717003033!3d50.64172893792035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0fa164d5c4969%3A0xd379a00de93c696!2sRue+St+Laurent+33%2C+4000+Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1528832800927" width="600" height="450"  style="border:0" allowfullscreen></iframe>
        </div>
        <div class="container">
            <section class=" container global-contact contenu col-lg-3 vert">

                <div class="infos col-md-3 col-lg-3 ">
                    <h3 class="form--titre--infos mix-white-40">Infos contact ! </h3>
                    <div >
                        <p>
                            <span class="bold">Adresse</span>
                            <br />
                            33 rue Saint-Laurent 4000 Liège
                        </p><p>
                            <span class="bold">E-mail : </span>
                            <br /><a href="mailto:vintage@lab.com">
                            vintage@lab.com</a>
                        </p><p>
                            <span class="bold">Tél.</span>
                            <br />
                           <a href="tel:+32472650511"> +32 (0)4 223 11 31 </a>
                        </p><p>
                            <span class="bold">Site : </span>
                            <br />
                            <a href="http://www.vlab.com"> www.vlab.com </a>
                        </p>
                       
                    </div>
                </div>

                <div class="  col-md-8 col-lg-8 ">
                    <h3 class="form--titre--contact mix-white-40">Contactez-nous ! </h3>


                    <form class= " container renseignement  " name="inscription" method="post" action="destination.php">
                        <div class="col-md-5 col-lg-5">
                            <p>
                                <label for="nom">Nom : </label>
                            <input type="text" name="nom" id="nom"  autofocus >
                            </p>
                            <p>
                                <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom">
                            </p>

                            <p>
                                <label for="email">E-mail : </label>
                            <input type="email" name="email" id="email" >
                            </p>
                            <p>
                                <input  type="checkbox" name="newsleter" id="newsleter" value="Souhaite s'inscrire à la leter" />
                                <label for="newsleter" >je désire recevoir la newsletter</label>
                                
                            </p>
                            <p>
                                <input type="submit" name="contact" class="button" value="ENVOYER">
                            </p>
                        </div>
                        <div class="col-md-5 col-lg-5">
                            <textarea name="commentaire" placeholder="Un commentaire ?" id="commentaire" rows="16" cols="30"></textarea> 
                        </div>
                    </form>
                    
                </div>

            </section>
        </div>
    </div>
    </body>
</html>    