<?php /* Smarty version Smarty-3.0.7, created on 2021-06-15 14:28:08
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/target/employeeTargetEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2247960c89cd8ae5dd3-34896528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f50911e2e9c08b7707aa03a703938315844abbb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/target/employeeTargetEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2247960c89cd8ae5dd3-34896528',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeTargetEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showLabel()){?>
<h2><?php echo TXT_UCW('TARGET');?>
</h2>
<?php }?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td class="form-label" style="width:150px;">
            <label for="target_name"><?php echo TXT_UCF('TARGET');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedTarget()){?>
                <input id="target_name" name="target_name" size="80" type="text" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getTargetName();?>
" />
            <?php }else{ ?>
                <?php echo $_smarty_tpl->getVariable('valueObject')->value->getTargetName();?>

            <?php }?>
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="performance_indicator"><?php echo TXT_UCF('KPI');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedTarget()){?>
                <input id="performance_indicator" name="performance_indicator" size="80" type="text" value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getPerformanceIndicator();?>
" />
            <?php }else{ ?>
                <?php echo $_smarty_tpl->getVariable('valueObject')->value->getPerformanceIndicator();?>

            <?php }?>
        </td>
    </tr>
    </tr>
        <td class="form-label">
            <label for="end_date"><?php echo TXT_UCF('TARGET_END_DATE');?>
 <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRequiredFieldIndicator();?>
</label>
        </td>
        <td class="form-value">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedTarget()){?>
                <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEndDatePicker();?>

            <?php }else{ ?>
                <?php echo DateUtils::convertToDisplayDate($_smarty_tpl->getVariable('valueObject')->value->getEndDate());?>

            <?php }?>
        </td>
    </tr>
</table>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isViewAllowedEvaluation()){?>
<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showLabel()){?> 
<h2><?php echo TXT_UCW('EVALUATION');?>
</h2>
<?php }?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <td class="form-label">
            <label for="status"><?php echo TXT_UCF('TARGET_STATUS');?>
</label>
        </td>
        <td class="form-value">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedEvaluation()){?>
                <select id="status" name="status">
                <?php $_template = new Smarty_Internal_Template('components/selectOptionsComponent.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('values',EmployeeTargetStatusValue::values());$_template->assign('currentValue',$_smarty_tpl->getVariable('valueObject')->value->getStatus());$_template->assign('required',false);$_template->assign('converter','EmployeeTargetStatusConverter'); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                </select>
            <?php }else{ ?>
                <?php echo EmployeeTargetStatusConverter::image($_smarty_tpl->getVariable('valueObject')->value->getStatus());?>
&nbsp;<?php echo EmployeeTargetStatusConverter::display($_smarty_tpl->getVariable('valueObject')->value->getStatus());?>

            <?php }?>
        </td>
    </tr>
    </tr>
        <td class="form-label" style="width:150px;">
            <label for="evaluation_date"><?php echo TXT_UCF('CONVERSATION_DATE');?>
</label>
        </td>
        <td class="form-value">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedEvaluation()){?>
                <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getEvaluationDatePicker();?>

            <?php }else{ ?>
                <?php echo DateUtils::convertToDisplayDate($_smarty_tpl->getVariable('valueObject')->value->getEvaluationDate());?>

            <?php }?>
        </td>
    </tr>
    <tr>
        <td class="form-label">
            <label for="evaluation"><?php echo TXT_UCF('EVALUATION');?>
</label>
        </td>
        <td class="form-value">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isEditAllowedEvaluation()){?>
                <textarea id="evaluation" rows="4" cols="60" name="evaluation"><?php echo $_smarty_tpl->getVariable('valueObject')->value->getEvaluation();?>
</textarea>
            <?php }else{ ?>
                <?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->getEvaluation());?>

            <?php }?>
        </td>
    </tr>
</table>
<?php }?>
<!-- /employeeTargetEdit.tpl -->
