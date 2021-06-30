<?php /* Smarty version Smarty-3.0.7, created on 2021-06-21 11:42:43
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/profile/employeeProfileInformationEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:500860d05f1338f258-12367409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e724f18bcce1303544f54804fd71c830b34cfd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/profile/employeeProfileInformationEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '500860d05f1338f258-12367409',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeProfileInformationEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
">
    <tr>
        <td class="form-label" style="width:150px;">
            <label for="education_level"><?php echo TXT_UCF('EDUCATION_LEVEL');?>
</label>
        </td>
        <td class="form-value">
            <select name="education_level">
            <?php $_template = new Smarty_Internal_Template('components/selectOptionsComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('values',EmployeeEducationLevelValue::values());$_template->assign('currentValue',$_smarty_tpl->getVariable('valueObject')->value->getEducationLevel());$_template->assign('converter','EmployeeEducationLevelConverter'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="additional_info"><?php echo TXT_UCF('ADDITIONAL_INFO');?>
</label>
        </td>
        <td class="form-value">
            <textarea id="additional_info" name="additional_info" style="height:60px;" cols="60"><?php echo $_smarty_tpl->getVariable('valueObject')->value->getAdditionalInfo();?>
</textarea>
        </td>
    </tr>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedManagerInfo()){?>
    <tr>
        <td class="form-label">
            <label for="manager_info"><?php echo TXT_UCF('MANAGERS_COMMENTS');?>
</label>
        </td>
        <td class="form-value">
            <textarea id="manager_info" name="manager_info" style="height:60px;" cols="60"><?php echo $_smarty_tpl->getVariable('valueObject')->value->getManagerInfo();?>
</textarea>
        </td>
    </tr>
    <?php }?>
</table>
<!-- /employeeProfileInformationEdit.tpl -->