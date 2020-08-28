<?php namespace App\Models;

    use CodeIgniter\Model;

    class CidadeModel extends Model {
        protected $table = 'cidade';
        protected $primaryKey = 'idCidade';
        protected $allowedFields = ['nome', 'uf', 'ibge'];
        protected $returnType = 'object';
    }
  
?>