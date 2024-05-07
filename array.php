<?php

$varAluno= array("João", "Eduardo", "Guilherme");
$varIdade=array("João"=> 19, "Eduardo"=>16, "Guilherme"=> 17);
$varCPF=array("João"=>333, "Eduardo"=>123, "Guilherme"=>555);
$varEnde=array("João"=>"Rua 7 de Setembro", "Eduardo"=>"Rua 8 de Dezembro", "Guilherme"=>"Rua Da sua Ex");
$varCida=array("João"=>"Guanambi", "Eduardo"=>"Caculé", "Guilherme"=>"Guanambí");
$varEstad=array("João"=>"Bahia", "Eduardo"=>"Bahia", "Guilherme"=>"Bahia");

echo "Aluno 1<br><br>";
echo "Nome: $varAluno[0]. <br> Idade: $varIdade[João] anos. <br> Número do CPF: $varCPF[João].<br> Reside:$varEnde[João]/$varCida[João]/$varEstad[João]<br>";

echo "<br>";

echo "Aluno 2<br><br>";
echo "Nome: $varAluno[1]. <br> Idade: $varIdade[Eduardo] anos.<br> Número do CPF: $varCPF[Eduardo]. <br> Reside: $varEnde[Maria]/$varCida[Maria]/$varEstad[Maria]<br>";

echo "<br>";

echo "Aluno 3<br><br>";
echo "Nome: $varAluno[2]. <br> Idade: $varIdade[Guilherme] anos. <br> Número do CPF: $varCPF[Guilherme]. <br> Reside: $varEnde[Fernanda]/$varCida[Fernanda]/$varEstad[Fernanda]<br>";

echo "<br>";

$varProfessor=array("Fábio");
$varIdade=array("Fábio"=>33);
$varCPF=array("Fábio"=>259);
$varEnde=array("Fábio"=>"Rua da Baixa da Egua");
$varCida=array("Fábio"=>"Guanambi");
$varEstad=array("Fábio"=>"Bahia");

echo "Professor da disciplina de PSW<br><br>";
echo "Nome: $varProfessor[0]. <br> Idade: $varIdade[Fábio] anos. <br> Número do CPF: $varCPF[Fábio]. <br> Reside: $varEnde[Fábio]/$varCida[Fábio]/$varEstad[Fábio]<br>";

?>