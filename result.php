<?php
$resp = $_GET['resp'];
if ($resp == 1) {
	echo "<h3>Cadastro efetuado com <b>sucesso</b>! Você deve ter recebido uma mensagem de confirmação em seu Messenger.</h3>";
} else {
	echo "<h3>Ocorreu algum <b>erro ao efetuar o cadastro</b>: favor entrar em contato com o suporte técnico pelo telefone (35) 3829-1035.</h3>";
}

?>
