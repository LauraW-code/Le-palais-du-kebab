<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>L'équipe du palais du Kebab</title>
        <link rel="stylesheet" href="/css/index.css">
        <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/montez" rel="stylesheet">
        <script src="script.js" defer></script>
        <nav>
        <?php include 'data-team.php' ?>
            <a href="/menu.html">
            <img src="/pictures/LogoPKv2.png" width="100px">
            </a>
            <h1>Le Palais du Kebab</h1>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
              <?php foreach($navbar as $links=>$link): ?>
                <li><a class="nav-link" href="<?= $link['link']?>"><?=$link['title']?></a></li>
                <?php endforeach ?>
              </ul>
            </div>
        </nav>
    </head>