<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:09:12
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeJobProfileHeaderView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2805160ca6878243bb4-88916110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9151ca7db5ef89b8cd69d5f1867e0b8fa0a9afcd' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeJobProfileHeaderView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2805160ca6878243bb4-88916110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeJobProfileHeaderView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['mainFunction'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getMainFunction(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td>
            <p <?php if (!$_smarty_tpl->getVariable('valueObject')->value->hasAdditionalFunctions()){?>style="margin-bottom: 0px;"<?php }?>><strong><?php echo TXT_UCF('BASED_ON_JOB_PROFILE');?>
:</strong>&nbsp;<?php echo $_smarty_tpl->getVariable('mainFunction')->value->getFunctionName();?>
</p><?php if ($_smarty_tpl->getVariable('valueObject')->value->hasAdditionalFunctions()){?><p style="margin-bottom: 0px;"><strong><?php echo TXT_UCF('ADDITIONAL_JOB_PROFILES');?>
&nbsp;<?php echo constant('SIGN_COMP_ADDITIONAL_PROFILE');?>
:</strong>&nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getAdditionalFunctionsList();?>
</p><?php }?>
        </td>
        <td style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionsWidth();?>
px; text-align:right">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionLinks();?>

        </td>
    </tr>
</table>
<!-- /employeeJobProfileHeaderView.tpl -->