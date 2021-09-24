<?php
require_once __DIR__ . '/../vendor/autoload.php';

use nguyenanhung\Libraries\Hashids\HashIds;

$config = array(
    'salt'          => 'w40):pc6cwS{mn9I_O=B$2Cr;=YXA#',
    'minHashLength' => 8,
    'alphabet'      => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'
);

$hash = new HashIds();
$hash->setConfig($config);

$id = 12345679;

echo "Version: " . $hash->getVersion() . PHP_EOL;

echo "RandomId: " . $hash->randomId() . PHP_EOL . PHP_EOL;

echo "SourceId: " . $id . PHP_EOL;
$encodeId = $hash->encodeId($id);
echo "EncodeId: " . $encodeId . PHP_EOL;

$decodeId = $hash->decodeId($encodeId);
echo "DecodeId: " . $decodeId . PHP_EOL;

