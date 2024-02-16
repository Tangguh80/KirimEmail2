<?php

header('Content-Type: text/html; charset=UTF-8');

// Sisipkan library PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/OAuth.php";
require_once "library/POP3.php";
require_once "library/SMTP.php";

$mail = new PHPMailer;

// Konfigurasi SMTP
$mail->SMTPDebug = 3; // Set ke 0 untuk produksi
$mail->isSMTP();
$mail->Host = "smtp.gmail.com"; // Gunakan "smtp.gmail.com"
$mail->SMTPAuth = true;
$mail->Username = "tangguh880@gmail.com"; // Ganti dengan email Anda
$mail->Password = "aqcp qfxq pceu rtda"; // Ganti dengan password Anda
$mail->SMTPSecure = "tls";
$mail->Port = 587;

$mail->CharSet = 'UTF-8';

// Detail pengirim dan penerima
$mail->setFrom("tangguh880@gmail.com", "Pengirim"); // Ganti dengan pengirim
$mail->addAddress($_POST['email'], $_POST['nama']); // Ganti dengan penerima

$mail->isHTML(true);
$mail->Subject = $_POST['subjek'];

// Mengelola isi email
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$pesanRaw = $_POST['pesan'];

$pesanFormatted = '<p>' . preg_replace("/\n\n+/", "</p><p>", $pesanRaw) . '</p>';
$pesanFormatted = preg_replace("/\n/", "<br>", $pesanFormatted);

$file_path = '/kirimEmail/template.php';
$htmlContent = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $file_path);
$htmlContent = str_replace(['{{email}}', '{{tanggal}}', '{{judul}}', '{{pesan}}'], [$_POST['email'], $tanggal, $judul, $pesanFormatted], $htmlContent);

$mail->Body = $htmlContent;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// Periksa apakah ada file yang di-upload
if (!empty($_FILES['lampiran']['name'][0])) {
    foreach ($_FILES['lampiran']['name'] as $key => $name) {
        // Menambahkan lampiran file ke email
        $mail->addAttachment($_FILES['lampiran']['tmp_name'][$key], $_FILES['lampiran']['name'][$key]);
    }
}

// Mengirim email
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent successfully";
}

?>
