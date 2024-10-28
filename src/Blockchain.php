<?php
namespace Cr0\Blockchain;
use Cr0\Blockchain\Block;
class Blockchain
{
    public array $chains = [];
    public function __construct()
    {
        $this->chains[] = $this->createGenisus();
    }
    /**
     * Create the first Block on Blockchain network
     *
     * @return Block
     */
    private function createGenisus(): Block
    {
        return new Block(0, '28/10/2024', '0', 'Genisus block');
    }
    /**
     * get all network blocks
     *
     * @return array
     */
    public function getAllChains(): array
    {
        return $this->chains;
    }
    /**
     * add new block on newtork with unic id, and with the previous block hash
     *
     * @param Block $block
     * @return void
     */
    public function addBlock(Block $block): static
    {
        $lastBlock = $this->getLastBlock();
        $block->setPreviosHash($lastBlock->getHash());
        $block->setIndex($lastBlock->getIndex() + 1);
        $block->setHash();
        $this->chains[] = $block;
        return $this;
    }
    /**
     * get the last block of Blockchain network
     *
     * @return void
     */
    public function getLastBlock(): Block
    {
        return $this->chains[count(value: $this->chains) - 1];
    }    
    /**
     * valid blockchain network
     *
     * @return bool
     */
    public function isValid(): bool
    {
        for($i = 1; $i < count($this->chains); $i++){
            $currentBlock = $this->chains[$i];
            $previosBlock = $this->chains[$i-1];
            if ($currentBlock->getHash() != $currentBlock->calculateHash()){
                return false;
            }
            if ($currentBlock->getPreviousHash() != $previosBlock->getHash()){
                return false;
            }
        }
        return true;
    }
}