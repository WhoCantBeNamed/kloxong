<?php

// by mustafa@bigraf.com for Kloxo-MR

include_once "lib/html/include.php";

$list = parse_opt($argv);

$select = $list['select'] ?? '';
$nolog  = $list['nolog'] ?? null;

setMysqlBranch($select, $nolog);

