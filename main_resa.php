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
    <main class="mainResa">
        <section class="introduction">
            <h4 class="title-resa">Réservation</h4>
            <p>
                 Notre restaurant vous accueille tous les jours de 11h30 à 23h00.</p>
                 <p> Retrouvez toutes les informations utiles sur notre page contact.
            </p>
            <br/>
            <h2 class="subtitle-resa">Réserver une table</h2>
        </section>
        <form id="resaForm" action="/resa_conf.php" method="POST">
            <div class='reservation'>       
                <div>
                    <label for="date_heure">Date & heure</label>
                    <input   
                    type="datetime-local"
                    id="meeting-time"
                    name="meeting-time"
                    value= "2023-10-04T11:30"
                    min= "2023-10-04T11:30"
                    max="2023-12-31T23:00"            
                    step="900"
                />
                </div>
                <?php $select = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];?>
                <div class="personnes">
                    <label>Nb personnes</label>
                    <select name="personnes" required aria-required="true" data-selected>
                    <option value="">Nb personnes</option>;
                    <?php
                    foreach ($select as $index => $value) {
                        echo "<option value=" . $index . ">" . $value . "</option>";
                    }
                    ?>
                    </select>
                </div>
            </div>
            <section class="contact">
            <h2 class="subtitle_resa">Vos coordonnées</h2>
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name" placeholder="Nom" required />
            </div>
            <div>
                <label for="email">Adresse de messagerie</label>
                <input typetype="email" name="email" size="30" placeholder="Email" required />
            </div>
            <div>
                <label for="phone">N° Téléphone</label>
                <input type="tel" name="phone" placeholder="Téléphone" required>
            </div>
            <div class="form-submit">
            <button type="submit">Demande de réservation</button>
            </div>
        </section>
        </form>
        <!-- <script>
            const message = "Votre demande de réservation a bien été pris en compte."

            document.getElementById("resaForm").addEventListener("submit", function(event){
                event.preventDefault();
                alert(message);
            });
        </script> -->
    </main>
    <br/> <br/>
    <footer>
        &#169;Le palais du Kebab
       <ul>
           <li><a href=https://facebook.com><img src="pictures/facebook.svg"></a></li>
           <li><a href=https://instagram.com><img src="pictures/instagram.svg" width="60%"></a></li>
       </ul>
   </footer>
</body>

</html>