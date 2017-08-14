<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Bubbler+One|Permanent+Marker" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link href="styles.php" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://use.fontawesome.com/0df17449bf.js"></script>
        <title>Audrey Guilloud</title>
    </head>

    <body>
        <header>
            <div id="logo">
                <h1 class="nomlogo"><img src="logo3.png" style="width: 50px; margin-left: 50px;margin-top: 0px;"></h1>
                <h2 class="navlogo">Développeuse<br> web<br> junior</h2>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="#boxp" class="lien">Projets </a></li>
                    <li></li>
                    <li><a href="#skills" class="lien">Compétences </a></li>
                    <li></li>
                    <li><a href="#parcours" class="lien">Parcours </a></li>
                    <li></li>
                    <li><a href="#contact" class="lien">Contact </a><li>

                </ul>
            </nav>

        </header>


        <div class="about">
            <div class="card card-3">
                <h1>Audrey Guilloud</h1>
                <div class="trait"></div>
                <p class="desc_p">Développeuse web junior en formation chez Simplon<br>
                    à la recherche de nouvelles opportunités professionnelles</p>
                    <a href="#contact" class="lien"><p><img src="mail.png" width=20px> Me contacter<p></a>


            </div> 
            <div class="card card-3 var1">
                <h1>Audrey Guilloud</h1>
                <div class="trait"></div>
                <p class="desc_p">Développeuse web junior en formation chez Simplon<br>
                    à la recherche de nouvelles opportunités professionnelles

                </p>
                <a href="#contact" class="lien"><div class="contact_p"><p><img src="mail.png" width=30px> Me contacter</p></div></a>


            </div> 
        </div>  



        <main>  
            <?php
            $dossier = "./";
            $files = scandir($dossier);
            $files = array_diff($files, ['.', '..']);
            foreach ($files as $file) {
                if (is_dir($file)) {
                    $languagefich = $file . '/language.txt';
                    if (is_file($languagefich)) {
                        $language = file_get_contents($languagefich);
                    }
                    $descriptionfich = $file . '/README.md';
                    if (is_file($descriptionfich)) {
                        $description = file_get_contents($descriptionfich);
                    }
                    $screen = $file . '/cover.png';
                    if (file_exists($screen)) {
                        echo '
              <a href="' . $file . '"> 

                <div id="boxp">
                    <div class="img"><img src="' . $screen . '"></div>
                    <div class="calque">
                    <h3>' . $language . '</h3>
                      <div class="trait2"></div>
                    <h4>' . $file . '</h4>
                    <div class="description">' . $description . '</div>
                    </div>
                </div>
              </a>';
                    };
                }
            }
            ?>
            <div id="skills">
                <div class="container_comp">
                    <div class="competences">
                        <i class="fa fa-html5 fa-5x" aria-hidden="true"></i>
                        <div class="descr_comp">Html</div>
                    </div>
                    <div class="competences">
                        <i class="fa fa-css3 fa-5x" aria-hidden="true"></i>
                        <div class="descr_comp">css</div>
                    </div>
                    <div class="competences">
                        <i class="fa fa-bold fa-5x" aria-hidden="true"></i>
                        <div class="descr_comp">bootstrap</div>
                    </div>
                    <div class="competences">
                        <img src="js.png" width=80px>
                        <div class="descr_comp">javascript</div>
                    </div>
                    <div class="competences">
                        <img src="php.png" width=80px>
                        <div class="descr_comp">php</div>
                    </div>
                    <div class="competences">
                         <img src="sql.png" width=60px>
                        <div class="descr_comp">sql</div>
                    </div>
                    <div class="competences">
                        <i class="fa fa-github fa-5x" aria-hidden="true"></i>
                        <div class="descr_comp">github</div>
                    </div>
                    <div class="competences">
                        <i class="fa fa-wordpress fa-5x" aria-hidden="true"></i>
                        <div class="descr_comp">wordpress</div>
                    </div>
                </div>
            </div>
            <div id="parcours">
                <div id="parcours1"></div>
                <div id="parcours2">
                    <div id="text_parcours">
                        <h1>Qui suis-je ?</h1>
                        <p>
                            Journaliste, principalement sur Internet, pendant 7 ans, je me suis tournée en 2013 vers le développement front-end. Passionnée par le web et les arts graphiques, c’est tout naturellement que j’ai pris ce virage afin d’en faire mon métier.

                            A 28 ans, reprendre des études à temps complet était pour moi difficilement envisageable. C’est donc en autodidacte que je me suis formée au développement front-end et à l’intégration. Durant un an, livres, cours en vidéo, tutoriels et sites spécialisés ont été mes outils et j'ai pu valider cette autoformation en décrochant mon premier poste début 2014.
                            Depuis, je cherche toujours à perfectionner mes compétences, dans un métier où l'on n’a jamais fini d’apprendre.
                        </p>
                    </div>
                </div>
                <div id="photo_parcours"></div>
            </div>
            <div id="contact">
                <div class="box box2 shadow2">
                    <h3>Contact</h3>
                    <p> 06 74 77 34 91<br>
                        audreyguilloud@yahoo.fr</p> 
                </div>
            </div>






        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>

</html>