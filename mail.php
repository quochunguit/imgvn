<?php
$to = 'vanphonguit@gmail.com';
$subject = 'day chi la mail test ma thoi';
$message = 'xin chao, day chi la mail dang duoc thu nghiem ma thoi';
$headers = 'From: admin@kiemdinhcongtrinh.com.vn' . "\r\n" .'Reply-To: admin@kiemdinhcongtrinh.com.vn' . "\r\n" .'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
echo "123";
?>
