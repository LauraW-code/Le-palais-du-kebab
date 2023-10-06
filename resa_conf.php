<?php include __DIR__ . '/include/navbar.php'; ?>

<?php 
$data=array_map('trim',$_POST);
$data=array_map('htmlentities',$_POST);
$errors =[];
if (!isset ($data['name']) || empty($data['name'])) {
    $errors[]="Le nom est obligatoire";
}
if (!isset ($data['email'])|| empty($data['email'])) {
    $errors[]="L'email est obligatoire";
}
if (!filter_var ($data['email'], FILTER_VALIDATE_EMAIL)){
    $errors[]="L'email n'est pas au bon format";
}
if (!isset ($data['phone'])|| empty($data['phone'])) {
    $errors[]="Le numéro de téléphone est obligatoire";
}
if (!isset ($data['personnes'])|| empty($data['personnes'])){
    $errors[]="Le nombre de personnes est requis";
}
if (!empty ($errors)){
    foreach($errors as $keyError=>$ValueError){
        echo $ValueError ."</br>" ;
    }
    die();
}
?>

    <body class="resa-conf-body">
    <section class="confirmation">
        <?php
            echo 'Merci pour votre demande de réservation.' . '<br/>';
            echo 'Un mail de confirmation vous sera envoyé à : ' . ($_POST['email']) . '<br/>';
            echo 'Au plaisir de vous accueillir dans notre restaurant !';
        ?>
    </section>
</br>
    <div class='logo_resa'>
    <img src=pictures/LogoPKv2.png> </img>
    </div>
</body>

</html>