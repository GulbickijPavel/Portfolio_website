<?php /* Smarty version 3.1.24, created on 2016-01-05 00:08:49
         compiled from "smarty/templates/main/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:857209185568aed71e595b1_29942762%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '518069a9dcc01567b1fc0ed6ab75ac6207836744' => 
    array (
      0 => 'smarty/templates/main/menu.tpl',
      1 => 1451945324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '857209185568aed71e595b1_29942762',
  'variables' => 
  array (
    'sections' => 0,
    'item' => 0,
    'language' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568aed71edd293_46812311',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568aed71edd293_46812311')) {
function content_568aed71edd293_46812311 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '857209185568aed71e595b1_29942762';
?>

        <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="#">Pavel Gulbickij</a>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
              <ul class="nav navbar-nav">
                    <?php
$_from = $_smarty_tpl->tpl_vars['sections']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['shown'] == 1) {?>
                    <li>
                        <a href="#<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="menu_item"><?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['sectionname'];
$_tmp2=ob_get_clean();
echo smarty_function_translation(array('langEn'=>$_tmp2),$_smarty_tpl);?>
</a>
                    </li>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                    <li>
                        <a href="#contacts" class="menu_item"><?php echo smarty_function_translation(array('langEn'=>"Contacts"),$_smarty_tpl);?>
</a>
                  </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <?php
$_from = $_smarty_tpl->tpl_vars['language']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['keyword'] == $_smarty_tpl->tpl_vars['lang']->value) {?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['keyword'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">&nbsp<?php echo $_smarty_tpl->tpl_vars['item']->value['langNative'];?>
&nbsp;<span class="caret"></span></a>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                    <ul class="dropdown-menu" role="menu">
                        <?php
$_from = $_smarty_tpl->tpl_vars['language']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['keyword'] != $_smarty_tpl->tpl_vars['lang']->value) {?>
                        <li class="lang-img"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" id="lang-<?php echo $_smarty_tpl->tpl_vars['item']->value['keyword'];?>
" data-toggle="tooltip" data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['keyword'];?>
" data-original-title="<?php echo $_smarty_tpl->tpl_vars['item']->value['keyword'];?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['keyword'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['langNative'];?>
 </span></a></li>
                        <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                    </ul>
                </li>
              </ul>  
            </div>
          </div>
        </div><?php }
}
?>