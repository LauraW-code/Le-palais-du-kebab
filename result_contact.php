
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/contact2.css">
        <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/montez" rel="stylesheet">
        <title>Récapitulatif</title>
    </head>

    <body class="result-contact-body">

        <header class="result-contact-header">
            <h1 class="return-title">Merci pour votre message<h1>
        </header>
        <?php

        //var_dump($_POST);
        $form=[$_POST];

        ?>
        <main class="result-contact-main">
            <div class="result-contact-div">
                
                <?php 
                foreach($form as $key=>$value):
                ?>
                <ul class="result-contact-ul">
                    <li class="result-contact-li">Votre nom :  <?= $value['firstName']?></li>
                    <li class="result-contact-li">Votre email :  <?= $value['email']?></li>
                    <li class="result-contact-li">Objet de votre demande :  <?= $value['messageObject']?></li>
                    <li class="result-contact-li">Votre message : <?= $value['message']?></li>     
                </ul>
                <?php endforeach?>

                <button onclick="location.href='contact.php';" class="result-contact-button">Retour au site</button>
            
            </div>
        </main>
        
    </body>
</html>