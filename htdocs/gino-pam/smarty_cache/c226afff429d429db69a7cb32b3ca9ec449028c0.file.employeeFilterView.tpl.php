<?php /* Smarty version Smarty-3.0.7, created on 2021-06-30 11:48:56
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\list/employeeFilterView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2198460dc3e082ee5c0-42797365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c226afff429d429db69a7cb32b3ca9ec449028c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\list/employeeFilterView.tpl',
      1 => 1624264062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2198460dc3e082ee5c0-42797365',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeFilterView.tpl -->
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showSearch()){?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td>
            <input type="text" name="search_employee" name="search_employee" size="25" maxlength="250" value="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmployeeSearchValue();?>
" onkeyup="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->submitFunction();?>
">
            <a href="" onClick="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->submitFunction();?>
"><img src="<?php echo constant('ICON_SEARCH');?>
" title="<?php echo TXT_UCF('SEARCH_EMPLOYEE');?>
" alt="search" class="icon-style" /></a>
        </td>
    </tr>
</table>
<?php }?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showFilters()){?>
<div id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getReplaceActionHtmlId();?>
" style="padding:3px">
    <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getFilterActionHtml();?>

</div>
<div id="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getReplaceFormHtmlId();?>
">
    <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getFilterDetailHtml();?>

</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showSearch()||$_smarty_tpl->getVariable('interfaceObject')->value->showFilters()){?>
<hr />
<?php }?>
<!-- /employeeFilterView.tpl -->