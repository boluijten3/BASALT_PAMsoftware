<?php /* Smarty version Smarty-3.0.7, created on 2021-06-21 11:47:30
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeAssessmentEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1661560d06032a613a4-79100217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '959c6888d8714a37cc58166e5c30cf9c0ca4be88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeAssessmentEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1661560d06032a613a4-79100217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeAssessmentEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="6" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td class="form-label" style="width:150px;">
            <label for="assessment_date"><?php echo TXT_UCF('CONVERSATION_DATE');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getAssessmentDatePicker();?>

        </td>
    </tr>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isViewAllowedScoreStatus()){?>
    <tr>
        <td class="form-label">
            <label for="score_status"><?php echo TXT_UCF('SCORE_STATUS');?>
</label>
        </td>
        <td class="form-value">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedScoreStatus()){?>
            <?php $_template = new Smarty_Internal_Template('components/selectImageRadioComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('values',ScoreStatusValue::values());$_template->assign('currentValue',$_smarty_tpl->getVariable('valueObject')->value->getScoreStatus());$_template->assign('required',true);$_template->assign('inputName','score_status');$_template->assign('converter','ScoreStatusConverter'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            <?php }else{ ?>
            <?php echo ScoreStatusConverter::display($_smarty_tpl->getVariable('valueObject')->value->getScoreStatus());?>

            <?php }?>
        </td>
    </tr>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedScoreStatus()&&$_smarty_tpl->getVariable('interfaceObject')->value->showAssessmentNote()){?>

    <tr>
        <td class="form-label" style="width:120px;">
            <label for="assessment_note"><?php echo TXT_UCF('REMARKS');?>
</label>
        </td>
        <td class="form-value">
            <textarea id="assessment_note" name="assessment_note" style="height:50px;" cols="60"></textarea>
        </td>
    </tr>
    <?php }?>
    <?php }?>
</table>
<!-- /employeeAssessmentEdit.tpl -->