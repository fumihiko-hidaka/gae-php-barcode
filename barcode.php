<?php

require_once "vendor/autoload.php";

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();

// CND配信されると10sかからないよ！
sleep(10);

header("Content-type: image/png");
header("cache-control: public, max-age=3600");

echo $generator->getBarcode(
    '4902102072618',
    $generator::TYPE_EAN_13,
    190 / 95,
    100
);
