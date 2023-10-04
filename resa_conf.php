<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation Le Palais des Kebab</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main_resa.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet">
    <nav>
        <img/>
        <h1>Le Palais du Kebab</h1>
        <ul class="nav-menu">
            <li><a href="/menu.htlm">Menu </a></li>
            <li><a href="/Reservation.html">Réservation</a></li>
            <li><a href="/Engagements.html">Nos engagements</a></li>
            <li><a href="/team.html">La team</a></li>
            <li><a href="/contact.html">Contact</a></li>
        </ul>
    </nav>
</head>
<body>
    <header class="table">
        
    </header>
    <section class="confirmation">
        <?php
            echo 'Merci pour votre demande de réservation.' . '<br/>';
            echo 'Un mail de confirmation vous sera envoyé à : ' . ($_POST['email']) . '<br/>';
            echo 'Au plaisir de vous accueillir dans notre restaurant !';
        ?>
    </section>
</br>
    <div class='logo'>
    <img src=pictures/LogoPKv2.png> </img>
    </div>