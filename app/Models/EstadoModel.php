<?php namespace App\Models;

    use CodeIgniter\Model;

    class EstadoModel extends Model {
        protected $table = 'estados';
        protected $primaryKey = 'idEstado';
        protected $allowedFields = ['nome', 'uf'];
        protected $returnType = 'object';
    }
  
?>