<?php /* Smarty version 3.1.24, created on 2016-01-08 02:36:10
         compiled from "/var/www/html/smarty/templates/sections/test4asd.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1612769021568f047abc4f06_72942176%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18fdec272eaf2c0effd6e677cda59699193b238a' => 
    array (
      0 => '/var/www/html/smarty/templates/sections/test4asd.tpl',
      1 => 1452188941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1612769021568f047abc4f06_72942176',
  'variables' => 
  array (
    'test4asd' => 0,
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568f047abd21a3_49494116',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568f047abd21a3_49494116')) {
function content_568f047abd21a3_49494116 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1612769021568f047abc4f06_72942176';
?>
<section class="jumbotron" id="test4asd"> <h2><?php echo smarty_function_translation(array('langId'=>"90"),$_smarty_tpl);?>
<h2> <hr> <?php
$_from = $_smarty_tpl->tpl_vars['test4asd']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?> <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['lang']->value];?>
 <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>  </section><?php }
}
?>