<?php /* Smarty version Smarty-3.0.7, created on 2021-06-30 11:50:13
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/profile/employeeProfileInformationView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1237160dc3e55018ef3-91165230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1763f24c4588f549a44763f3b4fa0817b08e9efb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/profile/employeeProfileInformationView.tpl',
      1 => 1624264061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1237160dc3e55018ef3-91165230',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeProfileInformationView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['styleLabelWidth'] = new Smarty_variable('style="width:220px;"', null, null);?>
<table  class="content-table employee" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <?php $_smarty_tpl->tpl_vars['educationLevel'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getEducationLevel(), null, null);?>
    <?php if (!empty($_smarty_tpl->getVariable('educationLevel',null,true,false)->value)){?>
    <tr>
        <td class="content-label" <?php echo $_smarty_tpl->getVariable('styleLabelWidth')->value;?>
><?php echo TXT_UCF('EDUCATION_LEVEL');?>
:</td>
        <td class="content-value"><?php echo EmployeeEducationLevelConverter::display($_smarty_tpl->getVariable('educationLevel')->value);?>
</td>
    </tr>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['additionalInfo'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getAdditionalInfo(), null, null);?>
    <?php if (!empty($_smarty_tpl->getVariable('additionalInfo',null,true,false)->value)){?>
    <tr>
        <td class="content-label" <?php echo $_smarty_tpl->getVariable('styleLabelWidth')->value;?>
><?php echo TXT_UCF('ADDITIONAL_INFO');?>
:</td>
        <td class="content-value"><?php echo nl2br($_smarty_tpl->getVariable('additionalInfo')->value);?>
</td>
    </tr>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isAllowedShowManagerInfo()){?>
    <?php $_smarty_tpl->tpl_vars['managerInfo'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getManagerInfo(), null, null);?>
    <?php if (!empty($_smarty_tpl->getVariable('managerInfo',null,true,false)->value)){?>
    <tr>
        <td class="content-label" <?php echo $_smarty_tpl->getVariable('styleLabelWidth')->value;?>
><?php echo TXT_UCF('MANAGERS_COMMENTS');?>
:</td>
        <td class="content-value"><?php echo nl2br($_smarty_tpl->getVariable('managerInfo')->value);?>
</td>
    </tr>
    <?php }?>
    <?php }?>
    <?php if (empty($_smarty_tpl->getVariable('educationLevel',null,true,false)->value)&&empty($_smarty_tpl->getVariable('additionalInfo',null,true,false)->value)&&empty($_smarty_tpl->getVariable('managerInfo',null,true,false)->value)){?>
    <tr>
        <td colspan="2" class="content-label info-text"><?php echo TXT_UCF('NO_ADDITIONAL_INFO');?>
</td>
    </tr>
    <?php }?>
</table>
<!-- /employeeProfileInformationView.tpl -->