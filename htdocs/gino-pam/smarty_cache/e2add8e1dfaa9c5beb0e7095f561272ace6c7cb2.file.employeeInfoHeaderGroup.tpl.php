<?php /* Smarty version Smarty-3.0.7, created on 2021-06-25 16:08:25
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/employeeInfoHeaderGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1448960d5e3599ea4e5-31588040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2add8e1dfaa9c5beb0e7095f561272ace6c7cb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/employeeInfoHeaderGroup.tpl',
      1 => 1624264060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1448960d5e3599ea4e5-31588040',
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