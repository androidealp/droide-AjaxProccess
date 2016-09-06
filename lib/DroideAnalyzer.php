<?php

class DroideAnalizer {

public $init_memory = 0;
public $end_memory = 0;
public $pico = 0;
public $processos = [];
public $getData = [];
public function __construct()
{
  //echo round(memory_get_usage()/1048576,2).''.' MB'."\n";
  $this->init_memory = memory_get_usage().' bytes'."\n";
  $this->getData['stopExec'] = 0;
}

public function check()
{
    sleep(2);
    for ($i=0; $i < 100; $i++) {
      $this->Processos = $this->ProgressBar($i, 'processos gerados '.$i);
    }

  echo memory_get_usage().' bytes'."\n";
  echo memory_get_peak_usage().' bytes'."\n";
  echo 'Memory limit: ' . ini_get('memory_limit') ."\n";



}


public function ProgressBar($percent = 0, $text)
{
$html = <<<HTML
<p>{$text}</p>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="{$percent}" aria-valuemin="0" aria-valuemax="100" style="width: {$percent}%;">
  {$percent}%
  </div>
</div>
HTML;

return $html;
}

}

$getAnalizer = new DroideAnalizer;

$getAnalizer->check();

?>
