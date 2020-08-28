<?php namespace App\Models;

    use CodeIgniter\Model;

    class AdministrativoModel extends Model {
        protected $table = 'administrativo';
        protected $primaryKey = 'idAdministrativo';
        protected $allowedFields = ['cidade_idcidade', 'estado_idestado', 'nome', 
        'email', 'telefone', 'whatsapp', 'usuario', 'senha', 'endereco', 'bairro', 'numeroCartao', 'nomeCartao', 'vencimentoCartao', 
        'codigoCartao'];
        protected $returnType = 'object';
    }
  
?>