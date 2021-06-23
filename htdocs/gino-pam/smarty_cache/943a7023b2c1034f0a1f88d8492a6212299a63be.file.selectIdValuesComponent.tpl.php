<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 15:15:49
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\components/selectIdValuesComponent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:720760c9f985bcc406-01927400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943a7023b2c1034f0a1f88d8492a6212299a63be' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\components/selectIdValuesComponent.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '720760c9f985bcc406-01927400',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- selectIdValuesComponent.tpl -->
<?php if (!$_smarty_tpl->getVariable('required')->value){?>
    <option value="">- <?php echo TXT_LC('SELECT');?>
<?php if (!empty($_smarty_tpl->getVariable('subject',null,true,false)->value)){?> <?php echo $_smarty_tpl->getVariable('subject')->value;?>
<?php }?> -</option>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['idValue'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('idValues')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['idValue']->key => $_smarty_tpl->tpl_vars['idValue']->value){
?>
<option value="<?php echo $_smarty_tpl->getVariable('idValue')->value->getDatabaseId();?>
" <?php if ($_smarty_tpl->getVariable('currentValue')->value==$_smarty_tpl->getVariable('idValue')->value->getDatabaseId()){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('idValue')->value->getValue();?>
</option>
<?php }} ?>
<!-- /selectIdValuesComponent.tpl -->