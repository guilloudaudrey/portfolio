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

    <title>Document</title>
</head>

<body>
    <header>
        <div id="logo">
        <h1 class="nomlogo">Audrey Guilloud</h1>
        <div class="trait"></div>
        <h2 class="navlogo">Web developper</h2>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="#boxp" class="lien">Projets </a></li>
                <li></li>
                <li><a href="#" class="lien">Compétences </a></li>
                <li></li>
                <li><a href="#" class="lien">Parcours </a></li>
                <li></li>
                <li><a href="#contact" class="lien">Contact </a><li>
            </ul>
        </nav>
        
    </header>


   <div class="about">
   <div class="decription"></div>
   <div class="profil"></div>

   </div>  

   <main>  
    <?php
    $dossier ="./";
    $files = scandir($dossier);
    $files = array_diff($files, ['.', '..']);
    foreach($files as $file){
       if(is_dir($file)){
           $languagefich = $file.'/language.txt';
           if(is_file($languagefich)){
           $language = file_get_contents($languagefich);
           }
           $descriptionfich = $file.'/README.md';
           if (is_file($descriptionfich)){
               $description = file_get_contents($descriptionfich);
           }
           $screen = $file.'/cover.png';
           if(file_exists($screen)){
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
        }}
    ?>
    <div id="skills">
        <div class="container_comp">
        <div class="competences">
            <div class="descr_comp">Html</div>
        </div>
        <div class="competences">
            <div class="descr_comp">css</div>
        </div>
        <div class="competences">
            <div class="descr_comp">bootstrap</div>
        </div>
        <div class="competences">
            <div class="descr_comp">javascript</div>
        </div>
        <div class="competences">
            <div class="descr_comp">php</div>
        </div>
        <div class="competences">
            <div class="descr_comp">sql</div>
        </div>
        <div class="competences">
            <div class="descr_comp">github</div>
        </div>
        </div>
    </div>
    </main>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>