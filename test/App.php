<?php

require_once(__DIR__.'/../vendor/autoload.php');
use Cr0\Blockchain\{Block, Blockchain};

$bloco1 = new Block(1, '28/10/2024', 'wdd', 'Teste');
$bloco2 = new Block(1, '29/10/2024', 'wdd', 'Teste');
$bloco3 = new Block(1, '30/10/2024', 'wdd', 'Teste');

$ntk = new Blockchain();
$ntk->addBlock($bloco1);
$ntk->addBlock($bloco2);
$ntk->addBlock($bloco3);
//$ntk->chains[1] = $bloco2;
var_dump($ntk->isValid());
