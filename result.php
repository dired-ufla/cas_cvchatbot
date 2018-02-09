<?php
$resp = $_GET['resp'];
if ($resp == 1) {
	echo "Cadastro efetuado com <b>sucesso</b>! Você deve ter recebido uma mensagem de confirmação em seu Messenger.";
} else {
	echo "Ocorreu algum <b>erro ao efetuar o cadastro</b>: favor entrar em contato com o suporte técnico pelo telefone (35) 3829-1035";
}

?>
