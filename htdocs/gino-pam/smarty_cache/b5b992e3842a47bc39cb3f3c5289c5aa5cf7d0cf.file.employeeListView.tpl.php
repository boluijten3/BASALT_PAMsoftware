<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 15:15:10
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\list/employeeListView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3246060c9f95e50f038-85037886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b992e3842a47bc39cb3f3c5289c5aa5cf7d0cf' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\list/employeeListView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3246060c9f95e50f038-85037886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeListView.tpl -->
<!-- sortfilter:<?php echo EmployeeFilterService::retrieveSortFilter();?>
 -->
<div class="actions">
    <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getAddLink();?>

</div>
<div id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getReplaceHtmlId();?>
">
    <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getFilteredEmployees()->fetchHtml();?>

</div><!-- /<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getReplaceHtmlId();?>
 -->
<!-- /employeeListView.tpl -->