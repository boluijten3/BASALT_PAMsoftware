<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:10:38
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\library/assessmentCycleInfoDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:356860ca68ce0a8698-05733567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e05f39e33e885ea607b15971b94f251edd309c1' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/assessmentCycleInfoDetail.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '356860ca68ce0a8698-05733567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- assessmentCycleInfoDetail.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['previousValueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getPreviousValueObject(), null, null);?>
<table  border="0" cellspacing="0" cellpadding="2">
    <tr id="current_assessment_detail_row_<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
" onmouseover="activateThisRow(this, 'no-hilite');" onmouseout="deactivateThisRow(this, 'no-hilite');">
        <td nowrap class="" style="padding: 5px;">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showCyclePrefix()){?>
                <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showPreviousCycle()){?>
                <?php echo TXT_UCF('CURRENT_ASSESSMENT_CYCLE');?>

                <?php }else{ ?>
                <?php echo TXT_UCF('ASSESSMENT_CYCLE');?>

                <?php }?>
            <?php }?>
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getAssessmentCycleName();?>

            <span class="activeRow icon-style">
                &nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCurrentHoverIcon();?>

            </span>
            <span class="activeRow hiddenActiveRow">
                &nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCurrentTitle();?>

            </span>
        </td>
    </tr>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showPreviousCycle()){?>
    <tr id="prev_assessment_detail_row_<?php echo $_smarty_tpl->getVariable('previousValueObject')->value->getId();?>
" onmouseover="activateThisRow(this, 'no-hilite');" onmouseout="deactivateThisRow(this, 'no-hilite');">
        <td nowrap class="" style="padding: 5px;">
            <?php echo TXT_UCF('PREVIOUS_ASSESSMENT_CYCLE');?>

            <?php echo $_smarty_tpl->getVariable('previousValueObject')->value->getAssessmentCycleName();?>

            <span class="activeRow icon-style">
                &nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPreviousHoverIcon();?>

            </span>
            <span class="activeRow hiddenActiveRow">
                &nbsp;<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPreviousTitle();?>

            </span>
        </td>
    </tr>
    <?php }?>
</table>
<!-- /assessmentCycleInfoDetail.tpl -->