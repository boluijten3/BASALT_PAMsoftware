<?php /* Smarty version Smarty-3.0.7, created on 2021-06-15 14:30:58
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/target/employeeTargetDelete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1669860c89d821e9164-47519526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278683ce0622077e48b0d472020f9f11c21fce10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/target/employeeTargetDelete.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669860c89d821e9164-47519526',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeTargetDelete.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<p><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getConfirmQuestion();?>
</p>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
">
    <tr>
        <td class="bottom_line form-label" style="width:150px;"><?php echo TXT_UCF('TARGET');?>
</td>
        <td class="bottom_line form-value">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getTargetName();?>

        </td>
    </tr>
    <tr>
        <td class="bottom_line form-label"><?php echo TXT_UCF('KPI');?>
</td>
        <td class="bottom_line form-value">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getPerformanceIndicator();?>

        </td>
    </tr>
    <tr>
        <td class="bottom_line form-label"><?php echo TXT_UCF('END_DATE');?>
</td>
        <td class="bottom_line form-value">
            <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getEndDate());?>

        </td>
    </tr>
</table>
<!-- /employeeTargetDelete.tpl -->