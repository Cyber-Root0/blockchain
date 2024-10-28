<?php

require_once(__DIR__.'/../vendor/autoload.php');
use Cr0\Blockchain\Block;

var_dump(
    (new Block(0, '28/10/2024', '0', 'elefantinho'))->calculateHash()
);
