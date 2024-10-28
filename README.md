# Blockchain PHP

Um projeto simples de Blockchain em PHP, criado para demonstrar o funcionamento básico de uma blockchain usando classes PHP.

## Estrutura do Projeto

O projeto está dividido em duas classes principais:

1. **Blockchain**: Representa toda a blockchain e é responsável por gerenciar os blocos da rede.
2. **Block**: Representa um bloco individual na blockchain.

Cada bloco possui um índice, timestamp, hash do bloco anterior, e dados (informações arbitrárias que o bloco contém).

## Classes

### Blockchain

A classe `Blockchain` é responsável por manter a estrutura da cadeia de blocos, inicializando com o bloco "Gênesis" e permitindo a adição de novos blocos.

- **Métodos principais**:
  - `__construct`: Cria a blockchain com o bloco "Gênesis".
  - `createGenesis()`: Cria o primeiro bloco da blockchain.
  - `getAllChains()`: Retorna todos os blocos da blockchain.
  - `addBlock(Block $block)`: Adiciona um novo bloco à blockchain.
  - `getLastBlock()`: Retorna o último bloco da cadeia.
  - `isValid()`: Verifica a integridade da blockchain, validando os hashes de cada bloco.

### Block

A classe `Block` define a estrutura e as propriedades de cada bloco.

- **Métodos principais**:
  - `calculateHash()`: Calcula o hash do bloco com base nas suas propriedades.
  - `getIndex()`, `getTimeStamp()`, `getPreviousHash()`, `getData()`, `getHash()`: Métodos de acesso para as propriedades do bloco.
  - `setIndex(int $i)`: Define o índice do bloco.
  - `setHash()`: Calcula e define o hash do bloco.
  - `setPreviousHash(string $hash)`: Define o hash anterior para o bloco.

## Instalação

Para usar este projeto:

1. Clone o repositório:

   ```bash
   git clone https://github.com/seu-usuario/blockchain-php.git
   cd blockchain-php
