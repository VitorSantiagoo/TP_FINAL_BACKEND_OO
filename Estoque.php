<?php 
      class Estoque {
            private $pdo;

            public function __construct($pdo){
                  $this->pdo = $pdo;
            }

            public function getAllEstoque(){
                  return $this->pdo->query("SELECT produtos.id, produtos.nome, categorias.nome as categorias, quantidade
                  FROM (estoque INNER JOIN produtos) 
                  INNER JOIN categorias
                  WHERE produto_id = produtos.id 
                  AND categoria_id = categorias.id");

            }
      }
?>
