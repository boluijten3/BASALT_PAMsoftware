<?php /* Smarty version Smarty-3.0.7, created on 2021-06-25 16:08:23
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\list/employeeFilterAction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2275760d5e3579b9391-90949096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ab1e5f118d41d675c8b4ff88b60a2f0c83e19a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\list/employeeFilterAction.tpl',
      1 => 1624264062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2275760d5e3579b9391-90949096',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- /employeeFilterAction.tpl -->
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showFilters()){?>
<div class="actions<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->warnActiveFilters()){?> warning<?php }?>" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
   <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getFilterLabel();?>
&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getFilterToggleLink();?>

</div>
<?php }?>
<!-- /employeeFilterAction.tpl -->
