<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:08:52
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\report/finalResultDashboardView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1567960ca6864097ec0-28651504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '203765c4d83bcbed8eeaf5ae0d3c55a124d6a803' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/finalResultDashboardView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1567960ca6864097ec0-28651504',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- finalResultDashboardView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['keyIdValues'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getKeyIdValues(), null, null);?>
<tr style="text-align:center;" id="detail_dashboard_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getBossId();?>
" onmouseover="activateThisRow(this);" onmouseout="deactivateThisRow(this);">
    <td class="alternate" style="text-align:left;">
        <?php echo NameConverter::display($_smarty_tpl->getVariable('valueObject')->value->getBossName());?>

    </td>
    <td class="icon-link">
        <?php echo NumberConverter::display($_smarty_tpl->getVariable('valueObject')->value->getEmployeesTotal());?>

        &nbsp;<span class="activeRow icon-style"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getTotalDetailLink();?>
</span>
    </td>
    <td class="seperator">&nbsp;</td>
    <?php  $_smarty_tpl->tpl_vars['keyIdValue'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('keyIdValues')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['keyIdValue']->key => $_smarty_tpl->tpl_vars['keyIdValue']->value){
?>
    <?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable($_smarty_tpl->getVariable('keyIdValue')->value->getDatabaseId(), null, null);?>
    <td class="icon-link <?php if ($_smarty_tpl->getVariable('valueObject')->value->isNotAssessedScoreId($_smarty_tpl->getVariable('key')->value)){?> alternate<?php }?>">
        <?php echo NumberConverter::display($_smarty_tpl->getVariable('valueObject')->value->getEmployeeCountForKey($_smarty_tpl->getVariable('key')->value));?>

        &nbsp;<span class="activeRow icon-style"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getKeyDetailLink($_smarty_tpl->getVariable('key')->value);?>

    </td>
    <?php }} ?>
</tr>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showDebug()){?>
<tr>
    <td colspan="100%">
        <pre><?php echo print_r($_smarty_tpl->getVariable('valueObject')->value,true);?>
</pre>
    </td>
</tr>
<?php }?>
<!-- /finalResultDashboardView.tpl -->