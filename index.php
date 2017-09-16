<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <script src="https://use.fontawesome.com/0df17449bf.js"></script>
        <title>Audrey Guilloud</title>
    </head>

    <body>
        <header class="header">
            <div id="logo">
                <h1 class="nomlogo"><img src="logo3.png" alt="audrey guilloud"></h1>
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
        
                <button class="hamburger">&#9776;</button>
                 <button class="cross">&#735;</button>
            </nav>
        </header>

 


        <div class="about">

            <div class="menu2">
                <ul>
                    <a href="#boxp" class="lien ul2"><li>Projets</li></a>
                    <a href="#skills" class="lien ul2"><li>Compétences</li></a>
                    <a href="#parcours" class="lien ul2"><li>Parcours</li></a>
                    <a href="#contact" class="lien ul2"><li>Contact</li></a>
                </ul>
            </div>
            <div class="card card-3">
                <h1>Audrey Guilloud</h1>
                <div class="trait"></div>
                <p class="desc_p">Développeuse web junior <br>en formation chez Simplon</p>
                <a href="#contact" class="lien"><p><img src="mail.png" width=20px alt="icone contact"> Me contacter<p></a>
            </div> 
            <div class="hidden">
                <p class="hidden_ligne_un">Audrey Guilloud</p>
                <p class="hidden_ligne_deux">Développeuse web junior</p>            
            </div>
            <div class="card card-3 var1">
                <h1>Audrey Guilloud</h1>
                <div class="trait"></div>
                <p class="desc_p">Développeuse web junior<br>en formation chez Simplon</p>
                <a href="#contact" class="lien"><div class="contact_p"><p><img src="mail.png" width=30px alt="icône contact"> Me contacter</p></div></a>

            </div> 
        </div>  



        <main>  
            <div class="container">
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
                        ?>
                <div>
                <a href="<?php echo $file ?>"> 
                    <div id="boxp">               
                        <div class="img" style="background-image: url('<?php echo $screen ?>')">
                            <div class="calque">
                                <h3 class="h3calque"><?php echo $language ?></h3>
                                <div class="trait2calque"></div>
                                <h4 class="h4calque"><?php echo $file ?></h4>                
                                <div class="descriptioncalque"><?php echo $description ?></div>
                            </div>
                        </div> 
                    </div> 
                    <div class="boxphidden">
                        <h3><?php echo $language ?></h3>
                        <div class="trait2"></div>
                        <h4><?php echo $file ?></h4>                
                        <div class="description"><?php echo $description ?></div>
                    </div>                 
                </a>
            </div>
                     
              <?php
              
                    };
                }
            }
            ?>
            
            <div id="skills">
                <div class="container_comp">
                    <div class="box_comp">
                        <div class="competences">
                            <i class="fa fa-html5 fa-5x" aria-hidden="true"></i>
                            <div class="descr_comp">Html</div>
                        </div>
                   </div>
                   <div class="box_comp">
                        <div class="competences">
                            <i class="fa fa-css3 fa-5x" aria-hidden="true"></i>
                            <div class="descr_comp">css</div>
                        </div>
                    </div> 
                    <div class="box_comp"> 
                        <div class="competences">
                            <i class="fa fa-bold fa-5x" aria-hidden="true"></i>
                            <div class="descr_comp">bootstrap</div>
                        </div>
                    </div> 
                    <div class="box_comp"> 
                        <div class="competences">
                            <img src="js.png" width=80px alt="icône javascript">
                            <div class="descr_comp">javascript</div>
                        </div>
                   </div>    
                    <div class="box_comp">     
                        <div class="competences">
                            <img src="php.png" width=80px alt="icône php">
                            <div class="descr_comp">php</div>
                        </div>
                    </div>    
                    <div class="box_comp">     
                        <div class="competences">
                            <img src="sql.png" width=60px alt="icône sql">
                            <div class="descr_comp">sql</div>
                        </div>
                    </div>      
                    <div class="box_comp">     
                        <div class="competences">
                            <i class="fa fa-github fa-5x" aria-hidden="true"></i>
                            <div class="descr_comp">github</div>
                        </div>
                    </div>      
                    <div class="box_comp">     
                        <div class="competences">
                            <i class="fa fa-wordpress fa-5x" aria-hidden="true"></i>
                            <div class="descr_comp">wordpress</div>
                        </div>
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

Proin interdum, velit in sollicitudin venenatis, ligula metus efficitur lectus.
                        </p>
                    </div>
                </div>
                <div id="photo_parcours"></div>
            </div>
            <div id="contact">
                <div class="box box2 shadow2">
                    <h3>Contact</h3>
                    <p> 06 74 77 34 91<br>audreyguilloud@yahoo.fr</p> 
                    <a href="https://fr.linkedin.com/in/audrey-guilloud-09777a46" alt="profil linkedin de audrey guilloud" title="profil linkedin de audrey guilloud"><i class="contactfa fa fa-linkedin-square fa-2x" style="margin-right: 10px"></i></a>
                    <a href="https://github.com/guilloudaudrey" alt="dépôt github de audrey guilloud" title="dépôt github de audrey guilloud"><i class="contactfa fa fa-github fa-2x"></i></a>
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