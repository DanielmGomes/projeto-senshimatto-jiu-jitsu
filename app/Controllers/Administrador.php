<?php namespace App\Controllers;

class Administrador extends BaseController
{

	public function index()
	{
		return view('inicio');
	}

	public function cadastroAdministrador()
	{
        $data['mensagem'] = '';
        $data['acao'] = 'inserir';
        
        if($this->request->getMethod() == 'post')
        {

            $administrativoModel = new \App\Models\AdministrativoModel();
            $administrativo = array
            (
                'cidade_idcidade' => $this->request->getPost('cidade'),
                'estado_idestado'=> $this->request->getPost('estado'),
                'nome'=> $this->request->getPost('nome'),
                'email'=> $this->request->getPost('email'),
                'telefone' => $this->request->getPost('telefone'),
                'whatsapp' => $this->request->getPost('whatsapp'),
                'senha'=> sha1($this->request->getPost('senha')),
                'endereco'=> $this->request->getPost('endereco'),
                'bairro'=> $this->request->getPost('bairro')
            ); 
            
            if ($administrativoModel->insert($administrativo)) {
                //deu certo
                $data['mensagem'] = 'sucesso';
            }
            else{
                //deu errado
                $data['mensagem'] = 'erro';
            }            
            
        }
        
        $estadoModel = new \App\Models\EstadoModel();
        $cidadeModel = new \App\Models\CidadeModel();
        $data['estado'] = $estadoModel->find();
        $data['cidade'] = $cidadeModel->find();
		return view('administrador/cadastroAdministrador', $data);
	}

	public function buscarCidade(){
		$cidadeModel = new \App\Models\CidadeModel();
		$buscaCidade = $cidadeModel->where('idEstado', $_POST['idEstado'])->findAll();
		$fetchAll = $buscaCidade->fetchAll();
		foreach ($fetchAll as $cidades) {
			echo '<option>'.$cidades['nomeCidade'].'</option>';
		}
	}
}