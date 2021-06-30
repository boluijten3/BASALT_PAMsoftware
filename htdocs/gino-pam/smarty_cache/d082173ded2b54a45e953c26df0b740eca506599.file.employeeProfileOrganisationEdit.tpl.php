<?php /* Smarty version Smarty-3.0.7, created on 2021-06-21 11:53:57
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/profile/employeeProfileOrganisationEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1106960d061b5692cf2-16798299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd082173ded2b54a45e953c26df0b740eca506599' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/profile/employeeProfileOrganisationEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1106960d061b5692cf2-16798299',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeProfileOrganisationEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
">
    <tr>
        <td class="form-label" style="width:220px;">
            <label for="department"><?php echo TXT_UCF('DEPARTMENT');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <?php $_smarty_tpl->tpl_vars['departmentIdValues'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getDepartmentIdValues(), null, null);?>
            <select id="department" name="department">
                <?php $_template = new Smarty_Internal_Template('components/selectIdValuesComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('idValues',$_smarty_tpl->getVariable('departmentIdValues')->value);$_template->assign('currentValue',$_smarty_tpl->getVariable('valueObject')->value->getDepartmentId());$_template->assign('required',false);$_template->assign('subject',TXT_LC('DEPARTMENT')); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="boss"><?php echo TXT_UCF('BOSS');?>
</label>
        </td>
        <td class="form-value">
            <?php $_smarty_tpl->tpl_vars['bossIdValues'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getBossIdValues(), null, null);?>
            <select id="boss" name="boss">
                <?php $_template = new Smarty_Internal_Template('components/selectIdValuesComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('idValues',$_smarty_tpl->getVariable('bossIdValues')->value);$_template->assign('currentValue',$_smarty_tpl->getVariable('valueObject')->value->getBossId());$_template->assign('required',false);$_template->assign('subject',TXT_LC('BOSS')); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="boss"><?php echo TXT_UCF('IS_SELECTABLE_AS_BOSS');?>
</label>
        </td>
        <td class="form-value">
            <input id="is_boss" name="is_boss" type="checkbox" <?php if ($_smarty_tpl->getVariable('valueObject')->value->hasSubordinates()){?> disabled="disabled"<?php }?> value="is_boss" <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isBossChecked()){?> checked<?php }?>/>
            <?php if ($_smarty_tpl->getVariable('valueObject')->value->hasSubordinates()){?>&nbsp;<em>(<?php echo TXT_UCF('BOSS_CURRENTLY_HAS_SUBORDINATES');?>
)</em><?php }?>
        </td>
    </tr>
    <tr>
        <td class="form-label">&nbsp;</td>
        <td class="form-value">&nbsp;</td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="phone_number_work"><?php echo TXT_UCF('PHONE_WORK');?>
</label>
        </td>
        <td class="form-value">
            <input id="phone_number_work" name="phone_number_work" type="text" size="30" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getPhoneNumberWork();?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="employment_FTE"><?php echo TXT_UCF('EMPLOYMENT_PERCENTAGE');?>
</label>
        </td>
        <td class="form-value">
            <input  id="employment_FTE" name="employment_FTE" type="text" size="30" maxlength="4" value="<?php echo EmployeeFteConverter::input($_smarty_tpl->getVariable('valueObject')->value->getFte());?>
">
        </td>
    </tr>
    <tr>
        <td class="form-label" >
            <label for="employment_date"><?php echo TXT_UCF('EMPLOYMENT_DATE');?>
</label>
        </td>
        <td class="form-value">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEmploymentDatePicker();?>

        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="contract_state"><?php echo TXT_UCF('CONTRACT_STATE');?>
</label>
        </td>
        <td class="form-value">
            <select name="contract_state">
            <?php $_template = new Smarty_Internal_Template('components/selectOptionsComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('values',EmployeeContractStateValue::values());$_template->assign('currentValue',$_smarty_tpl->getVariable('valueObject')->value->getContractState());$_template->assign('converter','EmployeeContractStateConverter'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
        </td>
    </tr>
</table>
<!-- /employeeProfileOrganisationEdit.tpl -->