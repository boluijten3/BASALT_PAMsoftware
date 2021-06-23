<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 15:15:49
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\components/selectOptionsComponent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:379660c9f985c60ed1-47369449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25388b6e4c4b34fbbff5d1176cacdf8863e0ac91' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\components/selectOptionsComponent.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '379660c9f985c60ed1-47369449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- selectOptionsComponent.tpl -->
<?php if (!$_smarty_tpl->getVariable('required')->value){?>
    <option value="">- <?php echo TXT_LC('SELECT');?>
<?php if (!empty($_smarty_tpl->getVariable('subject',null,true,false)->value)){?> <?php echo $_smarty_tpl->getVariable('subject')->value;?>
<?php }?> -</option>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('values')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable(call_user_func(($_smarty_tpl->getVariable('converter')->value).('::display'),$_smarty_tpl->tpl_vars['value']->value), null, null);?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(call_user_func(($_smarty_tpl->getVariable('converter')->value).('::description'),$_smarty_tpl->tpl_vars['value']->value), null, null);?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->getVariable('currentValue')->value==$_smarty_tpl->tpl_vars['value']->value){?>selected<?php }?><?php if (!empty($_smarty_tpl->getVariable('title',null,true,false)->value)){?> title="<?php echo $_smarty_tpl->getVariable('title')->value;?>
"<?php }?>><?php echo $_smarty_tpl->getVariable('display')->value;?>
</option>
<?php }} ?>
<!-- /selectOptionsComponent.tpl -->
