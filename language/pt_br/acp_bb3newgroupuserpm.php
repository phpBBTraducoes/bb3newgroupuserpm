<?php

/**
*
* @package BB3NewGroupUserPM
* @copyright (c) 2016 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.0.1] (https://github.com/phpBBTraducoes)
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'GROUPUSERPM_SETTINGS' => 'Mensagem Privada ao entrar em um grupo',
	'BB3NEWGROUPUSERPM_USERID' => 'ID do usuário',
	'BB3NEWGROUPUSERPM_USERID_EXPLAIN' => 'ID do usuário ao qual as mensagens privadas serão enviadas (0 - em nome do membro do grupo, esta opção será comum a todos os grupos)',
	'BB3NEWGROUPUSERPM_SUBJECT' => 'Cabeçalho da mensagem',
	'BB3NEWGROUPUSERPM_SUBJECT_EXPLAIN' => 'Pode estar na forma de texto ou um nome de variável (não use código HTML), a variável deve ser definida no arquivo /ext/ppk/bb3newgroupuserpm/language/seu idioma/acp_bb3newgroupuserpm.php',
	'BB3NEWGROUPUSERPM_MESSAGE' => 'Texto da mensagem',
	'BB3NEWGROUPUSERPM_MESSAGE_EXPLAIN' => 'Para enviar aos usuários uma mensagem privada ao entrar neste grupo, pode ser na forma de texto ou um nome de variável, a variável deve ser definida no arquivo /ext/ppk/bb3newgroupuserpm/language/seu idioma/acp_bb3newgroupuserpm.php, você pode usar o código HTML, bem como as seguintes variáveis:<br />{USER_ID} - ID do usuário <br />{USERNAME} - nome do usuário<br />{GROUP_ID} - ID do grupo<br />{GROUP_NAME} - nome do grupo<br />Este campo e o campo abaixo devem ser preenchidos para enviar uma mensagem.',

	'GROUP_MESSAGE0_SUBJECT' => 'Exemplo de cabeçalho de mensagem',
	'GROUP_MESSAGE0_MESSAGE' => 'Texto de exemplo',
));
