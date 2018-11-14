<?php

$test = "hallo";

$length = strlen($test);

for($i=0; $i < $length; $i++) {
    if($i % 2 == 0) {
        $testCijfers = ord($test[$i]);
        $nieuwTestCijfers = $testCijfers + $i;
        echo chr($nieuwTestCijfers) . '<br>';
    } else {
        $testCijfers = ord($test[$i]);
        $nieuwTestCijfers = $testCijfers - $i;
        echo chr($nieuwTestCijfers) . '<br>';
    }
}

// Opdracht 2
// AES, Blowfish, Camellia, SEED, CAST-128, DES, IDEA, RC2, RC4, RC5, Triple DES, GOST 28147-89

// Opdracht 3
// Encrypt:
// openssl_encrypt
// openssl_pkcs7_encrypt
// openssl_private_encrypt
// openssl_public_encrypt
// Decryp
// openssl_decryp
// openssl_pkcs7_decrypt
// openssl_private_decrypt
// openssl_public_decrypt






