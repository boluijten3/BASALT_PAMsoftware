<?php /* Smarty version Smarty-3.0.7, created on 2021-06-16 23:09:12
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/competence/employeeCompetenceCategoryGroup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:532660ca687855d224-23425673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0b7931194feaa80f8427f91cc20c1578496e041' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/competence/employeeCompetenceCategoryGroup.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '532660ca687855d224-23425673',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeCompetenceCategoryGroup.tpl -->
    <tr>
        <th colspan="100%">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showCategory()){?>
                <h2><?php echo CategoryConverter::display($_smarty_tpl->getVariable('interfaceObject')->value->getCategoryName());?>
</h2>
            <?php }else{ ?>
                &nbsp;
            <?php }?>
        </th>
    </tr>
    <tr>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->show360()){?>
        <?php $_smarty_tpl->tpl_vars['periodTitleColspan'] = new Smarty_variable(2, null, null);?>
        <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['periodTitleColspan'] = new Smarty_variable(1, null, null);?>
        <?php }?>
        <th class="shaded_title2">&nbsp;</th>
        <th class="shaded_title2 centered previous-period-header"colspan="<?php echo $_smarty_tpl->getVariable('periodTitleColspan')->value;?>
">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPreviousPeriodName();?>

        </th>
        <th class="shaded_title2 centered current-period-header" colspan="<?php echo $_smarty_tpl->getVariable('periodTitleColspan')->value;?>
">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCurrentPeriodName();?>

        </th>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showNorm()){?>
        <th class="shaded_title2 centered">&nbsp;</th>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showWeight()){?>
        <th class="shaded_title2 centered">&nbsp;</th>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showPdpActions()){?>
        <th class="shaded_title2 centered">&nbsp;</th>
        <?php }?>
        <th class="shaded_title2">
                &nbsp;
        </th>
    </tr>
    <tr>
        <th class="shaded_title2"></th>
        <th width="100px" class="shaded_title2 centered previous-period">
            <?php echo TXT_LC('COMPENTENCE_SCORE_HEADER_MANAGER');?>

            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPreviousPeriodIconView()->fetchHtml();?>

        </th>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->show360()){?>
        <th width="100px" class="shaded_title2 centered previous-period">
            <?php echo TXT_LC('COMPENTENCE_SCORE_HEADER_EMPLOYEE');?>

            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPreviousPeriodEmployeeIconView()->fetchHtml();?>

        </th>
        <?php }?>
        <th width="100px" class="shaded_title2 centered current-period">
            <?php echo TXT_LC('COMPENTENCE_SCORE_HEADER_MANAGER');?>

            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCurrentPeriodIconView()->fetchHtml();?>

        </th>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->show360()){?>
        <th width="100px" class="shaded_title2 centered current-period">
            <?php echo TXT_LC('COMPENTENCE_SCORE_HEADER_EMPLOYEE');?>

            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getCurrentPeriodEmployeeIconView()->fetchHtml();?>

        </th>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showNorm()){?>
        <th width="50px" class="shaded_title2 centered">
            <?php echo TXT_UCF('NORM');?>

        </th>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showWeight()){?>
        <th width="60px" class="shaded_title2 centered">
            <?php echo TXT_UCF('WEIGHT_FACTOR');?>

        </th>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showPdpActions()){?>
        <th width="60px"  class="shaded_title2 centered">
            <?php echo TXT_TAB('PDP_ACTIONS');?>

        </th>
        <?php }?>
        <th width="100px" class="shaded_title2">
            &nbsp;
        </th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['clusterInterfaceObject'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('interfaceObject')->value->getInterfaceObjects(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['clusterInterfaceObject']->key => $_smarty_tpl->tpl_vars['clusterInterfaceObject']->value){
?>
        <?php echo $_smarty_tpl->getVariable('clusterInterfaceObject')->value->fetchHtml();?>

    <?php }} ?>
<!-- /employeeCompetenceCategoryGroup.tpl -->