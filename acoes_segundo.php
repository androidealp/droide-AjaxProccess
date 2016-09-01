<?php


class Acoes {
public $percent = [
  1=>5,
  2=>30,
  3=>50,
  4=>65,
  5=>85,
  6=>91,
  7=>100,
];
public $dadosReturn = [
  1=>"Processo etapa inicial - 5%",
  2=>"Processo etapa Criação de arquivos - 30%",
  3=>"Processo etapa inserção de conteúdo - 50%",
  4=>"Processo etapa configurando painel - 65%",
  5=>"Processo etapa definindo usuário - 85%",
  6=>"Processo ajuste de alinhamento - 91%",
  7=>"Processo etapa finalizado - 100%",
];

public function ProgressBar($percent = 0, $text)
{
$html = <<<HTML
<p>{$text}</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="{$percent}" aria-valuemin="0" aria-valuemax="100" style="width: {$percent}%;">
  {$percent}%
  </div>
</div>
HTML;

return $html;
}

public function Executar()
{
sleep(1);
  $dados = [
    'mensagem'=>$this->ProgressBar($this->percent[1],$this->dadosReturn[1]),
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

      $dados['mensagem'] = $this->ProgressBar($this->percent[$_POST['processo']],$this->dadosReturn[$_POST['processo']]);

      if($dados['getData']['processo'] == 7){
        sleep(2);
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
