<?php
      require_once "Estoque.php";

      class EstoqueController {

            private $estoqueModel;

            public function __construct(Estoque $estoqueModel){
                  $this->estoqueModel = $estoqueModel;
            } 

            public function ListarEstoques(){
                  return $this->estoqueModel->getAllEstoque();
            }
      }

?>