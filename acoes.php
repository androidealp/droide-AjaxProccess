<?php


class Acoes {

public $dadosReturn = [
  1=>"Processo etapa inicial - 5%",
  2=>"Processo etapa importação - 15%",
  3=>"Processo etapa dados em banco - 35%",
  4=>"Processo etapa configurando painel - 65%",
  5=>"Processo etapa definindo usuário - 85%",
  6=>"Processo etapa finalizando - 98%",
  7=>"Processo etapa finalizado - 100%",
];

public function Executar()
{
  sleep(2);
  $dados = [
    'mensagem'=>$this->dadosReturn[1],
    'stopExec'=>0,
    'getData'=>['processo'=>2]
  ];

  if(isset($_POST['processo']))
  {
    if($_POST['processo']<7)
    {
      $dados['getData']=[
        'processo'=>++$_POST['processo'],
        'stopExec'=>0
      ];

      $dados['mensagem'] = $this->dadosReturn[$_POST['processo']];

      if($dados['getData']['processo'] == 7){
        $dados['getData']['stopExec'] = 1;
      }

    }

  }



  header('Content-type: application/json');
  return json_encode($dados);
}


}


$acoes = new Acoes;

echo $acoes->Executar();
