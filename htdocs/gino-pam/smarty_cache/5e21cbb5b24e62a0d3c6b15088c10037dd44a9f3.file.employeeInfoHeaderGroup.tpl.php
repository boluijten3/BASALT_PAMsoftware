<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 15:15:42
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/employeeInfoHeaderGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2117160c9f97e2051e7-62552998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e21cbb5b24e62a0d3c6b15088c10037dd44a9f3' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/employeeInfoHeaderGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2117160c9f97e2051e7-62552998',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeInfoHeaderGroup.tpl -->
<div class="application-content block-title" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <?php $_smarty_tpl->tpl_vars['infoInterfaceObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getInfoInterfaceObject(), null, null);?>
    <?php echo $_smarty_tpl->getVariable('infoInterfaceObject')->value->fetchHtml();?>

    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showJobProfile()){?>
    <div style="height:5px;"></div>
    <?php $_smarty_tpl->tpl_vars['jobProfileInterfaceObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getJobProfileInterfaceObject(), null, null);?>
    <?php echo $_smarty_tpl->getVariable('jobProfileInterfaceObject')->value->fetchHtml();?>

    <?php }?>
</div>
<!-- /employeeInfoHeaderGroup.tpl -->