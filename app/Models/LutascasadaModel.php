<?php namespace App\Models;

    use CodeIgniter\Model;

    class LutascasadaModel extends Model {
        protected $table = 'litascasadas';
        protected $primaryKey = 'idlutasCasadas';
        protected $allowedFields = ['inscricao_idinscricao', 'placarLuta'];
        protected $returnType = 'object';
    }
  
?>