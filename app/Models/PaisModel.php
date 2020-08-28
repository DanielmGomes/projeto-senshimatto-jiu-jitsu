<?php namespace App\Models;

    use CodeIgniter\Model;

    class PaisModel extends Model {
        protected $table = 'pais';
        protected $primaryKey = 'idPais';
        protected $allowedFields = ['nome', 'nome_pt', 'sigla', 'bacen'];
        protected $returnType = 'object';
    }
  
?>