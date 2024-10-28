<?php
namespace Cr0\Blockchain;
class Block
{
    private string $hash;
    /**
     * __construct
     *
     * @param int $index
     * @param string $timestamp
     * @param string $data
     * @param string $previousHash
     * @return void
     */
    public function __construct(
        private int $index,
        private string $timestamp,
        private string $previousHash,
        private string $data
    ) {
        $this->hash = $this->calculateHash();
    }
    public function setIndex(int $i = 0){
        $this->index = $i;
        return $this;
    }
    public function setHash(){
        $this->hash = $this->calculateHash();
        return $this;
    }
    /**
     * calculateHash
     *
     * @return string
     */
    public function calculateHash(): string
    {
        return hash(
            'sha256',
            sprintf(
                '%d%s%s%s',
                $this->getIndex(),
                $this->getTimeStamp(),
                $this->getPreviousHash(),
                json_encode($this->getData())
            )
        );
    }
    public function setPreviosHash(string $hash){
        $this->previousHash = $hash;
        return $this;
    }
    /**
     * getPreviousHash
     *
     * @return string
     */
    public function getPreviousHash(): string
    {
        return $this->previousHash;
    }
    /**
     * getData
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    /**
     * getTimeStamp
     *
     * @return string
     */
    public function getTimeStamp(): string
    {
        return $this->timestamp;
    }
    /**
     * getIndex
     *
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }    
    /**
     * getHash
     *
     * @return string
     */
    public function getHash(): string{
        return $this->hash;
    }
}