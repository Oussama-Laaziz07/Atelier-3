<?php
function Inscription($num,$nom,$city,$dn,$gender,$loisirs,$info,$temp,$distination){
     if (!empty($_POST["action1"])) {
    $num = $_POST["ins"];
    $nom = $_POST["nom"];
    $city = $_POST["ville"];
    $dn = $_POST["ddn"];
    $gender = $_POST["gender"];
    $loisirs = $_POST["hobbies"];
    $info = $_POST["info"];
    $img_1=$_FILES["image"]["name"];
    $temp=$_FILES['photo']['tmp_name'];
    $distination="/images". $img_1;
    echo "<table border='1' width='100%' rules='all' style='border-color:red;'>";
    echo "<tr><td>Numéro d'inscription : " . $num_ins . "</td></tr>";
    echo "<tr><td>Nom et prénom : " . $nom . "</td></tr>";
    echo "<tr><td>Ville : " . $ville . "</td></tr>";
    echo "<tr><td>Date de naissance : " . $date_nais . "</td></tr>";
    echo "<tr><td>Sexe : " . $gender . "</td></tr>";
    echo "<tr><td>Loisirs : " . $loisirs . "</td></tr>";
     echo "<tr><td>Photos : " <img src='$img_1'width='100'  height='100'> "</td></tr>";
    echo "<tr><td>Informations complémentaires : " . $infor . "</td></tr>";
    echo "</table>";
}
}
move_uploaded_file($temp,$distination);
?>