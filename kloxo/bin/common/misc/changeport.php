<?php 

include_once "lib/html/displayinclude.php";

initProgram('admin');

$list = parse_opt($argv);

$port_ssl = (isset($list['port-ssl'])) ? $list['portssl'] : '7777';
$port_nonssl = $list['port-nonssl'] ?? '7778';
$disable_nonssl  = $list['disable_nonssl'] ?? null;
$redirect_to_ssl  = $list['redirect-to-ssl'] ?? null;

$gen = $login->getObject('general');

$gen->portconfig_b->sslport = $port_ssl;
$gen->portconfig_b->nonsslport = $port_nonssl;
$gen->portconfig_b->nonsslportdisable_flag = $redirect_to_ssl;
$gen->portconfig_b->redirectnonssl_flag = $disable_nonssl;

$gen->setUpdateSubaction();
$gen->write();
