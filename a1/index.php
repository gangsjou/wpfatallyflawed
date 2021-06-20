<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ida Gange">
    <meta name="description" content="Ultimate Protection Sports Fencing Equipment Website: provides 
      protective clothing and fencing equipment for beginners">

    <title>Assignment 1b</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
    <link rel="icon" href="../../media/upsfeLogo16x16.png" type="image/x-icon">   
  </head>

  <body>

    <header>
      div class="flex-container"
        <div><img src='../../media/upsfeLogo201x201.png' alt='Logo depicts two stylised fencers
             and company initials'></div>   
        <div><h1>Ultimage Protection Sports Equipment</h1></div> 
    </header>

    <nav>
      <div>Put website navigation links here</div>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Name: Sjoukje Ida Gange, student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
