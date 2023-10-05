    <body>
        <?php include 'data-Team.php'?>
        <h2 class="h2-team">L'équipe de choc</h2>
        <section class="maitre-kebabier">
            <img src="/pictures/yavuz.png" alt="maître kebabier">
            <h3 class="card-title">Yavuz, le petit père du Kebab</h3>
            <p>Il n'est nul autre que le fondateur de ce superbe établissement.</p>
            <p>D'origine turque, il a su développer une plaque tournante de kebab dans le voisinage.</p>
            <p>L'équipe ci-dessous, formée par ses soins saura vous satisfaire.</p>
        </section>
        <section class="team-images-responsive">
        <?php foreach($cardTeam as $key=>$values): ?>
            <div class="item-team">
                <img src="<?= $values['image']?>" alt="Laura">
                <h3 class="card-title"><?= $values['prénom']?></h3>
                <p><?= $values['description']?></p>
            </div>
        <?php endforeach ?>
        </section>
       
        <section class="carousel">
            <ul class="carousel-items">
            <?php foreach($cardCarousel as $title=>$section): ?>
                <li class="carousel-item">

                    <div class="card">
                    
                        <h4 class="card-title"><?= $section['prénom'] ?></h4>
                        <img src="<?= $section['image'] ?>"/>
                        <div class="card-content">
                        <p><?= $section['description'] ?></p>
            </div>
                       
                    </div>
                </li>
                <?php endforeach ?>
            </ul>
        </section>