<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 15:15:42
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/profile/employeeProfileUserView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242660c9f97eaeec21-09982792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39459c3c87f9edb40a2a2ab54f016ac9ac26c65b' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/profile/employeeProfileUserView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242660c9f97eaeec21-09982792',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeProfileUserView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['styleLabelWidth'] = new Smarty_variable('style="width:220px;"', null, null);?>
<table class="content-table employee" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hasUser()){?>
    <tr>
        <td class="content-label" <?php echo $_smarty_tpl->getVariable('styleLabelWidth')->value;?>
><?php echo TXT_UCF('USERNAME');?>
:</td>
        <td class="content-value"><span<?php if (!$_smarty_tpl->getVariable('valueObject')->value->isActive()){?> class="inactive" title="<?php echo TXT_UCF('DEACTIVATED_USER');?>
"<?php }?>><?php echo $_smarty_tpl->getVariable('valueObject')->value->getLogin();?>
</span><?php if (!$_smarty_tpl->getVariable('valueObject')->value->isActive()){?>&nbsp;<em><?php echo TXT_UCF('DEACTIVATED_USER');?>
</em><?php }?></td>
    </tr>
    <tr>
        <td class="content-label"><?php echo TXT_UCF('SECURITY');?>
:</td>
        <td class="content-value"><?php echo UserLevelConverter::display($_smarty_tpl->getVariable('valueObject')->value->getUserLevel());?>
</td>
    </tr>
    <?php }else{ ?>
    <tr>
        <td colspan="2" class="content-label info-text"><?php echo TXT_UCF('NO_EMPLOYEE_USER_LINK');?>
.</td>
    </tr>
    <?php }?>
</table>
<!-- /employeeProfileUserView.tpl -->