<?php namespace App\Models;

    use CodeIgniter\Model;

    class CidadeModel extends Model {
        protected $table = 'cidades';
        protected $primaryKey = 'idCidade';
        protected $allowedFields = ['nome', 'estado_idestado'];
        protected $returnType = 'object';
    }
  
?>