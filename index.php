<?php
$toJSON = array("cep_origem"=> "88040000",
"cep_destino"=> "04050000",
"valor"=> "10,00",
"qtd_volumes"=>"1",
"quantidade[0]"=>"1",
"comprimento[0]"=>"10",
"largura[0]"=>"20",
"altura[0]"=>"10",
"peso[0]"=>"0,500",
"setor[0]"=>"22"
);

	
echo json_encode($toJSON);