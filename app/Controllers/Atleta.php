<?php namespace App\Controllers;

class Atleta extends BaseController
{

	public function cadastroAtleta()
	{
		
        $data['acao'] = 'inserir';
        $data['mensagem'] = '';

        if($this->request->getMethod() == 'post')
        {
            $atletaModel = new \App\Models\AtletaModel();
            $testeModel->set('nome', $this->request->getPost('nome'));

            if ($testeModel->insert()) {
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
        $academiaModel = new \App\Models\AcademiaModel();
        $professorModel = new \App\Models\ProfessorModel();
		$data['estado'] = $estadoModel->find();
        $data['cidade'] = $cidadeModel->find();
        $data['academia'] = $academiaModel->find();
        $data['professor'] = $professorModel->find();

		return view('atleta/cadastroAtleta', $data);
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