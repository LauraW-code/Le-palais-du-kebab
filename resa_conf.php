<?php include __DIR__ . '/include/navbar.php'; ?>
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
</body>
</html>