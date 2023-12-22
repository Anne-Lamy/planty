<?php 

function enregistrerCommande() {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fraise = $_POST["fraise"];
        $pamplemousse = $_POST["pamplemousse"];
        $framboise = $_POST["framboise"];
        $citron = $_POST["citron"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $adresse = $_POST["adresse"];
        $code_postal = $_POST["code_postal"];
        $ville = $_POST["ville"];


        // Adresse e-mail de destination
        $destinataire = "planty.drink@planty.fr";

        // Sujet du mail
        $sujet = "Nouvelle commande enregistrée";

        // Corps du message
        $corps_message = "Nom : $nom\n";
        $corps_message .= "Prénom : $prenom\n";
        $corps_message .= "E-mail : $email\n";
        $corps_message .= "Adresse : $adresse $code_postal $ville\n";
        $corps_message .= "Quantité de boissons à la fraise : $fraise\n";
        $corps_message .= "Quantité de boissons au pamplemousse : $pamplemousse\n";
        $corps_message .= "Quantité de boissons à la framboise : $framboise\n";
        $corps_message .= "Quantité de boissons au citron : $citron\n";

        // En-têtes du mail
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Envoi du mail
        mail($destinataire, $sujet, $corps_message, $headers);

    }
}


?>

