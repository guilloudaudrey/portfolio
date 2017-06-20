<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Bubbler+One|Permanent+Marker" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="styles.php" rel="stylesheet" type="text/css" media="all" />

    <title>Document</title>
</head>

<body>

    <header>
        <div id="logo">
        <h1>Audrey Guilloud</h1>
        <div class="trait"></div>
        <h2 ><a href="#" class="menu">About</a> — <a href="#boxp" class="menu">Work</a> — <a href="#" class="menu">Contact</a> </h2>
        </div>
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
           $screen = $file.'/cover.png';
           if(file_exists($screen)){
              echo '
              <a href="'. $file.'"> 

                <div id="boxp">
                    <div class="img"><img src="'.$screen.'"></div>
                    <div class="calque">
                    <h3>html/css</h3>
                      <div class="trait2"></div>
                    <h4>'.$file.'</h4>
                    </div>
                </div>
              </a>';
             };
        }}
    ?>
    </main>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>