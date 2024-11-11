<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $sql = "INSERT INTO `produit` (`id`, `libelle`, `prix`, `qte`, `des`, `image`, `promo`) VALUES (NULL, 'Dell XPS 15', '3000', '15', 'Powerful laptop with stunning display and excellent performance.', 'https://picsum.photos/200/200', '1');";
        
    $connexion = new connexion();
    $pdo = $connexion->getConnexion();

    //envoi de la requete sql
    $res = $pdo->exec($sql);

    echo $res;
    ?>

</body>

</html>