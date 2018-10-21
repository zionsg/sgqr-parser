<?php
$dir = __DIR__ . '/../';
require $dir . 'vendor/autoload.php';

// SGQR code sample from SOBA EXPRESS in article https://www.channelnewsasia.com/news/singapore/sgqr-qr-code-cashless-payment-singapore-rolls-out-unified-10727568
$qrCode = '00020101021126810011SG.COM.NETS01231198500065G9912312359000211111686614000308686614019908604108C251800007SG.SGQR01121809072DD85C020701.00010306079027040201050206060400000708201809155204581253037025802SG5912SOBA EXPRESS6009Singapore630457B3';

$parser = new \SgQr\Parser();
$result = $parser->parse($qrCode);
echo json_encode($result, JSON_PRETTY_PRINT);
