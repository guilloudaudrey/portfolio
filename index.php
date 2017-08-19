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
                <h1 class="nomlogo"><img src="logo3.png"></h1>
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
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean facilisis, metus sit amet aliquam euismod, erat sem rhoncus nisl, eget mollis urna magna non lacus. Suspendisse sit amet ultricies erat. Nullam bibendum ultrices suscipit. Proin ante erat, varius quis arcu a, porta consequat eros. Vestibulum id pulvinar sem, quis congue neque. Curabitur vel condimentum nisl. Donec ac nisi luctus, volutpat mauris vitae, interdum ante. Donec tincidunt malesuada orci nec dignissim. Nullam ac metus eget metus sagittis lobortis. Aenean a dolor gravida, laoreet nisl in, lobortis purus. Nullam facilisis justo felis, ac aliquam augue congue non. Aenean eget tempus dolor, in varius lectus. Suspendisse in magna in tortor sollicitudin congue. Nulla facilisi. Nam in augue non magna imperdiet imperdiet. Curabitur placerat molestie dui.

Proin interdum, velit in sollicitudin venenatis, ligula metus efficitur lectus, non hendrerit lorem lacus a nunc. Suspendisse id tristique erat, vitae ullamcorper massa. Maecenas mollis sollicitudin lectus, vitae laoreet lorem tristique et. Nam malesuada in turpis at lobortis. Vestibulum a leo felis. Nam rhoncus a nulla imperdiet faucibus. Phasellus ex neque, tincidunt sed dolor ac, varius egestas tellus. Vestibulum convallis id justo sed scelerisque. Pellentesque pellentesque lacus eu magna venenatis blandit. Nam aliquet arcu libero, non rutrum neque fermentum elementum. Sed malesuada tellus a accumsan efficitur. Morbi commodo dolor sed feugiat rhoncus. Proin ligula nulla, ullamcorper non sem quis, cursus egestas felis. Phasellus dui lorem, iaculis a posuere sed, convallis ut dui. Quisque vitae augue eros. Morbi quis nunc mi.
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
                        <a href="https://fr.linkedin.com/in/audrey-guilloud-09777a46"><i class="contactfa fa fa-linkedin-square fa-2x" aria-hidden="true" style="margin-right: 10px"></i></a>
                        <a href="https://github.com/guilloudaudrey"><i class="contactfa fa fa-github fa-2x" aria-hidden="true"></i></a>
                </div>
            </div>
            <footer>
                <p>© Audrey Guilloud - 2017</p>
            </footer>






        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>

</html>