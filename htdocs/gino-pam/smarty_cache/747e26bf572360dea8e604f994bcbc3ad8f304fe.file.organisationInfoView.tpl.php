<?php /* Smarty version Smarty-3.0.7, created on 2021-06-10 21:34:51
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\organisation/organisationInfoView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2012560c2695bae71c8-24483552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '747e26bf572360dea8e604f994bcbc3ad8f304fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\organisation/organisationInfoView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2012560c2695bae71c8-24483552',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- organisationInfoView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<div class="" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;"><?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->infoText);?>
</div>
<!-- /organisationInfoView.tpl -->