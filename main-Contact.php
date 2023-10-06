<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact2.css">
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/montez" rel="stylesheet">
</head>

<body class="main-contact-body">
    <?php
    include 'data_contact.php';
    ?>
    <main>
        <div class="dining-room">
            </div>
            <h2 class="h2-contact-page">Contactez-nous</h2>
        <div class="contact-page">
        
            <!-------------------------------------->
            <!--/Partie gauche de la page contact/-->
            <!-------------------------------------->
            <div class="left-side">
                <h3>Informations de contact</h3>
                <p>Pour toutes questions ou demande, vous pouvez nous contacter directement par téléphone, par mail, ou
                    via
                    le
                    formulaire de contact.</p>
                <div class="contact-info">
                    <div class="contact-left">
                        <p>Téléphone</p>
                        <p>Email</p>
                        <p>Adresse</p>
                    </div>
                    <div class="contact-right">
                        <p>03 54 44 94 32</p>
                        <p>contact@palaiskebab.fr</p>
                        <p>15 rue de Paris, 57160 Rozérieulles</p>
                    </div>
                </div>
                <h4>Horaires d'ouverture:</h4>
                <div class="contact-info">
                    <div class="contact-left">
                        <p>Dimanche au Vendredi</p>
                        <p>Samedi</p>
                    </div>
                    <div class="contact-right">
                        <p>11h30 - 23h</p>
                        <p>11h30 - 1h</p>
                    </div>
                </div>

            </div>
            <!-------------------------------------->
            <!--/Partie droite de la page contact/-->
            <!-------------------------------------->




            <form class="right-side" id="send-message" action="result_contact.php" method="post">
                <h3>Formulaire de contact</h3>
                <div class="contact-form">
                    <input type="text" id="name" name="firstName" size="40" placeholder="Votre nom et prénom *" >
                    <input type="text" id="email" name="email" size="40" placeholder="Votre adresse email *" >
                    <select name="messageObject" id="subject" >
                        <option value="">Veuillez sélectionner...</option>
                        <?php
                       foreach ($messageObject as $index => $value){
                        echo "<option value=\"" .$value ."\">" . $value . "</option>";
                    }
                    ?>
                    </select>
                    <textarea id="message" name="message" cols="40" rows="10" size="40" placeholder="Votre message *"
                        ></textarea>
                </div>
                
                <p>* Champs obligatoires</p>
                <div class="check-checkbox">
                    <input type="checkbox" id="conditions" >
                    <label for="conditions">En soumettant ce formulaire, j’accepte que les informations saisies soient
                        utilisées
                        pour permettre de me recontacter dans le cadre de la relation commerciale qui découle de cette
                        demande
                        d’information.</label>
                </div>
                <input type="submit" id="button-contact" value="ENVOYER">
            </form>
        </div>

    </main>
    <!--/Insertion googlemap/-->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1552.9118022073992!2d6.090854781138993!3d49.11179656604232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794db53139e85ab%3A0x68beb5ad5fe60462!2sLe%20Palais%20du%20Kebab!5e0!3m2!1sfr!2sfr!4v1695378466042!5m2!1sfr!2sfr"
        class="map" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>