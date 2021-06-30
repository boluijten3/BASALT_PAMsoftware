<?php /* Smarty version Smarty-3.0.7, created on 2021-06-21 11:47:30
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\components/selectImageRadioComponent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1346060d06032b513b4-49775702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf3866a0c633effc21aff21b243536ed46731b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\components/selectImageRadioComponent.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1346060d06032b513b4-49775702',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- selectImageRadioComponent.tpl -->
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('values')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable(call_user_func(($_smarty_tpl->getVariable('converter')->value).('::displayImage'),$_smarty_tpl->tpl_vars['value']->value), null, null);?>
    <?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(call_user_func(($_smarty_tpl->getVariable('converter')->value).('::description'),$_smarty_tpl->tpl_vars['value']->value), null, null);?>
    <input  id="<?php echo $_smarty_tpl->getVariable('inputName')->value;?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" type="radio" name="<?php echo $_smarty_tpl->getVariable('inputName')->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->getVariable('currentValue')->value){?> checked <?php }?>>
    <label for="<?php echo $_smarty_tpl->getVariable('inputName')->value;?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if (!empty($_smarty_tpl->getVariable('title',null,true,false)->value)){?> title="<?php echo $_smarty_tpl->getVariable('title')->value;?>
"<?php }?>><?php echo $_smarty_tpl->getVariable('display')->value;?>
</label><br />
<?php }} ?>
<!-- /selectImageRadioComponent.tpl -->
