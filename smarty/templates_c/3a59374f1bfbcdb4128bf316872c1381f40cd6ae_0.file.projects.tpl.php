<?php /* Smarty version 3.1.24, created on 2016-01-05 12:43:27
         compiled from "/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/projects.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1399256578568b9e4f061ea4_35916843%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a59374f1bfbcdb4128bf316872c1381f40cd6ae' => 
    array (
      0 => '/home/drabuziu/domains/pgulbickij.lt/public_html/smarty/templates/sections/projects.tpl',
      1 => 1451990603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1399256578568b9e4f061ea4_35916843',
  'variables' => 
  array (
    'projects' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_568b9e4f203ce5_47165920',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568b9e4f203ce5_47165920')) {
function content_568b9e4f203ce5_47165920 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1399256578568b9e4f061ea4_35916843';
?>
        <section class="jumbotron" id="projects">
            <div class="experience-content">
                <h2><?php echo smarty_function_translation(array('langEn'=>"Projects"),$_smarty_tpl);?>

                </h2>
                <hr>
                <ul class="bxslider">
                    <?php
$_from = $_smarty_tpl->tpl_vars['projects']->value;
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
                    <li>
                        <h3> <?php echo $_smarty_tpl->tpl_vars['item']->value['projectname'];?>
</h3>
                         <ul class="bxslider inner">
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
" alt="This picture loads on non-supporting browsers.">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <source media="(min-width: 37.5em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
">
                                   <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
-->
                            </li>
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
" alt="This picture loads on non-supporting browsers.">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <source media="(min-width: 37.5em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
">
                                   <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
-->
                            </li>
                            <li>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
" alt="This picture loads on non-supporting browsers.">
<!--
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <source media="(min-width: 37.5em)" srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <source srcset="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
">
                                   <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagePath'];?>
low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
-->
                            </li>
                        </ul>
                        <article class="experience-desc">
                          <?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['lang']->value];?>

                        </article>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
            </div>
        </section>
<?php }
}
?>