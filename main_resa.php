
<body class="body_resa">
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
                    <label class="label_resa" name='time' for="date_heure">Date & heure</label>
                    <input   
                    type="datetime-local"
                    id="meeting-time"
                    name="meeting-time"
                    value= "2023-10-06T14:00"
                    min= "2023-10-06T14:00"
                    max="2023-12-31T23:00"            
                    step="900"
                />
                </div>
                <?php $select = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];?>
                <div class="personnes">
                    <label class="label_resa">Nb personnes</label>
                    <select class='nbPers' name="personnes" required aria-required="true" data-selected>
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
                <label class="label_resa" for="name">Nom</label>
                <input type="text" name="name" placeholder="Nom" required/>
            </div>
            <div>
                <label class="label_resa" for="email">Adresse de messagerie</label>
                <input typetype="email" name="email" size="30" placeholder="Email" required />
            </div>
            <div>
                <label class="label_resa" for="phone">N° Téléphone</label>
                <input type="tel" name="phone" placeholder="Téléphone" required>
            </div>
            <div class="form-submit">
            <button class="button_resa" type="submit">Demande de réservation</button>
            </div>
        </section>
        </form>
        