<?php /* Smarty version Smarty-3.0.7, created on 2021-06-11 15:19:52
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\report/baseReportEmployeeDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1128860c362f89ae809-19492747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f3ca4b13831973f16f2ad1961693471832825a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\report/baseReportEmployeeDetailView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1128860c362f89ae809-19492747',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- baseReportEmployeeDetailView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<tr>
    <td class="bottom_line <?php if ($_smarty_tpl->getVariable('valueObject')->value->isInactive()){?> warning-text inactive" title="<?php echo TXT_UCF('EMPLOYEE_DELETED');?>
<?php }?>">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getEmployeeName();?>

    </td>
    <td class="bottom_line">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getFunctionName();?>

    </td>
    <td class="bottom_line">
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getDepartmentName();?>

    </td>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showCount()){?>
    <td class="bottom_line centered" >
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getReportCount();?>

    </td>
    <?php }?>
</tr>
<!-- /baseReportEmployeeDetailView.tpl -->