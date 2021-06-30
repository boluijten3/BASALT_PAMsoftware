<?php /* Smarty version Smarty-3.0.7, created on 2021-06-21 12:02:37
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeAnswerEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1645360d063bdeb4bd7-80139077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97e8bd6acac0267d4208762c7ae609ed64120ca8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeAnswerEdit.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1645360d063bdeb4bd7-80139077',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeAnswerEdit.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['questionId'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getQuestionId(), null, null);?>
<tr>
    <td class="form-label" colspan="100%"><label for="question_answer_<?php echo $_smarty_tpl->getVariable('questionId')->value;?>
"><?php echo nl2br($_smarty_tpl->getVariable('interfaceObject')->value->getDisplayQuestion());?>
</td>
</tr>
<tr>
    <td class="form-value" colspan="100%">
        <textarea name="question_answer_<?php echo $_smarty_tpl->getVariable('questionId')->value;?>
" id="question_answer<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('valueObject')->value->getAnswer();?>
</textarea>
    </td>
</tr>
<tr>
    <td colspan="100%">&nbsp;</td>
</tr>
<!-- /employeeAnswerEdit.tpl -->