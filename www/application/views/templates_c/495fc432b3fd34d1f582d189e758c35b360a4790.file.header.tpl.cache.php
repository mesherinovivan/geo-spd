<?php /* Smarty version Smarty-3.1.12, created on 2013-01-13 18:47:50
         compiled from "application\views\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1095050f301564d0879-25625344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '495fc432b3fd34d1f582d189e758c35b360a4790' => 
    array (
      0 => 'application\\views\\templates\\header.tpl',
      1 => 1358102633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1095050f301564d0879-25625344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Vas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f30156515386_86665984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f30156515386_86665984')) {function content_50f30156515386_86665984($_smarty_tpl) {?><HTML>
<HEAD>
<TITLE></TITLE>
<script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU"></script>

<script src="http://geo-spd.ru/js/jquery/jquery-1.8.3.js"></script>
<script src="http://geo-spd.ru/js/yandex_api/yamaps.init.js"></script>
<script src="http://geo-spd.ru/js/yandex_api/yamaps.layouts.js"></script>
<script src="http://geo-spd.ru/js/yandex_api/yamaps.line.js"></script>
<script src="http://geo-spd.ru/js/yandex_api/yamaps.map.js"></script>
<script src="http://geo-spd.ru/js/yandex_api/yamaps.placemark.js"></script>
<script src="http://geo-spd.ru/js/yandex_api/yamaps.polygon.js"></script>
<script src="http://geo-spd.ru/js/yandex_api/yamaps.route.js"></script>
<script src="http://geo-spd.ru/js/yandex_api/yamaps.run.js"></script>

</HEAD>
<BODY bgcolor="#ffffff">
	<?php echo $_smarty_tpl->tpl_vars['Vas']->value;?>

	<div id='maps' style="height:300px; width:500px"></div>
</BODY>
</HTML>
<?php }} ?>