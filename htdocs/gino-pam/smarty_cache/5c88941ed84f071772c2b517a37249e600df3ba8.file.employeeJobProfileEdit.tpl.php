<?php /* Smarty version Smarty-3.0.7, created on 2021-06-23 11:40:11
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeJobProfileEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2894360d3017b23a385-29515882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c88941ed84f071772c2b517a37249e600df3ba8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeJobProfileEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2894360d3017b23a385-29515882',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeJobProfileEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<input type=hidden name="selectedID_Fs" id="selectedID_Fs" value="<?php echo implode(',',$_smarty_tpl->getVariable('interfaceObject')->value->getFunctionIds());?>
">
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td class="form-label" colspan="2">
            <label for="sourceSelect"><?php echo TXT_UCF('JOB_PROFILES_OF_EMPLOYEE');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td >&nbsp;</td>
        <td style="width:300px;">
            <em><?php echo TXT_UCF('AVAILABLE_JOB_PROFILES');?>
</em>
        </td>
        <td width="80">&nbsp;</td>
        <td style="width:300px;">
            <em><?php echo TXT_UCF('SELECTED');?>
</em>
        </td>
    </tr>
    <tr>
        <td class="">&nbsp;</td>
        <td class="form-value" align="left">
            <select name="sourceSelect" id="sourceSelect" size="10" style="width:100%" multiple="multiple" ondblclick="moveJobProfile(); return false;">
                <?php $_template = new Smarty_Internal_Template('components/selectIdValuesComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('idValues',$_smarty_tpl->getVariable('interfaceObject')->value->getUnusedFunctionIdValues());$_template->assign('currentValue',null);$_template->assign('required',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
        </td>
        <td align="center" valign="middle">
            &nbsp;<br />
            <input type="reset" name="forward" id="buttonadd" value="&gt;&gt;" onclick="moveJobProfile(); return false;"/> <br />
            <br>
            <input type="reset" name="back" id="buttonremove" value="&lt;&lt;" onclick="moveJobProfile('remove'); return false;"/>
        </td>
        <td align="left">
            <select name="destinationSelect" id="destinationSelect" size="10" style="width:100%;" multiple="multiple" ondblclick="moveJobProfile(); return false;">
                <?php $_template = new Smarty_Internal_Template('components/selectIdValuesComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('idValues',$_smarty_tpl->getVariable('interfaceObject')->value->getFunctionIdValues());$_template->assign('currentValue',null);$_template->assign('required',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
        </td>
    </tr>
</table>
<br />
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr>
        <td class="form-label" style="width:200px;">
            <label for="ID_FID"><?php echo TXT_UCF('MAIN_JOB_PROFILE');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <select name="ID_FID" id="ID_FID">
            <?php $_template = new Smarty_Internal_Template('components/selectIdValuesComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('idValues',$_smarty_tpl->getVariable('interfaceObject')->value->getFunctionIdValues());$_template->assign('currentValue',$_smarty_tpl->getVariable('valueObject')->value->getMainFunctionId());$_template->assign('required',false);$_template->assign('subject',TXT_LC('MAIN_JOB_PROFILE')); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="form-label"><label for="note_note"><?php echo TXT_UCF('REMARKS');?>
</label></td>
        <td class="form-value">
            <textarea id="note" name="note" style="height:50px;" cols="60"><?php echo $_smarty_tpl->getVariable('valueObject')->value->getNote();?>
</textarea>
        </td>
    </tr>
</table>
<!-- /employeeJobProfileEdit.tpl -->