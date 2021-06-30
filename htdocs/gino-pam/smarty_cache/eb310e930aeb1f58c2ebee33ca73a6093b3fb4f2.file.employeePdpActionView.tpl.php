<?php /* Smarty version Smarty-3.0.7, created on 2021-06-23 12:50:24
         compiled from "C:\xampp\htdocs\gino-pam\php_cm/modules/interface/templates\employee/pdpAction/employeePdpActionView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2487360d311f090bd47-97497538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb310e930aeb1f58c2ebee33ca73a6093b3fb4f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/pdpAction/employeePdpActionView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2487360d311f090bd47-97497538',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeePdpActionView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
    <tr>
        <td class="<?php if ($_smarty_tpl->getVariable('valueObject')->value->isCancelled()){?>inactive<?php }?>" title="<?php echo PdpActionNameConverter::title($_smarty_tpl->getVariable('valueObject')->value->isUserDefined());?>
<?php if ($_smarty_tpl->getVariable('valueObject')->value->isCancelled()){?>, <?php echo PdpActionCompletedConverter::display($_smarty_tpl->getVariable('valueObject')->value->getIsCompletedStatus());?>
<?php }?>">
            <strong><?php echo PdpActionNameConverter::display($_smarty_tpl->getVariable('valueObject')->value->getActionName(),PdpActionNameConverter::EMPTY_LABEL,$_smarty_tpl->getVariable('valueObject')->value->isUserDefined());?>
</strong>
        </td>
        <td class="">
            <?php echo PdpActionCompletedConverter::image($_smarty_tpl->getVariable('valueObject')->value->getIsCompletedStatus());?>

        </td>
        <td class="<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hasDateWarning()){?>warning-text<?php }?>">
            <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getTodoBeforeDate());?>

        </td>
        <td class="">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getOwnerName();?>

        </td>
        <td class="">
            <?php echo DateConverter::display($_smarty_tpl->getVariable('valueObject')->value->getEmailAlertDate());?>

        </td>
        <td class="actions">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionLinks();?>

        </td>
    </tr>
    <tr>
        <th class="sub-header">
            &nbsp;
        </th>
        <th class="sub-header shaded_title" colspan="2">
            <?php echo TXT_UCF('PROVIDER');?>

        </th>
        <th class="sub-header shaded_title">
            <?php echo TXT_UCF('DURATION');?>

        </th>
        <th class="sub-header shaded_title"
            ><?php echo TXT_UCF('COST');?>

        </th>
        <th class="sub-header" >
            &nbsp;
        </td>
    </tr>
    <tr>
        <td class="">
            &nbsp;
        </td>
        <td class="" colspan="2">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getProvider();?>

        </td>
        <td class="">
            <?php echo $_smarty_tpl->getVariable('valueObject')->value->getDuration();?>

        </td>
        <td class="<?php if ($_smarty_tpl->getVariable('valueObject')->value->isCancelled()){?>inactive" title="<?php echo PdpActionCompletedConverter::display($_smarty_tpl->getVariable('valueObject')->value->getIsCompletedStatus());?>
<?php }?>">
            &euro; <?php echo PdpCostConverter::display($_smarty_tpl->getVariable('valueObject')->value->getCost());?>

        </td>
        <td class="">
            &nbsp;
        </td>
    </tr>
    <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showDetailInfo()){?>
    <tr>
        <td class="">
            &nbsp;
        </td>
        <td colspan="4" style="padding-left:0px; padding-right:0px;">
            <div class="remarks-content" style=" padding:10px;">
                <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->hasRelatedCompetences()){?>
                <strong><?php echo TXT_LC('RELATED_COMPETENCES');?>
</strong>
                <br />
                <span class="comment"><?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getRelatedCompetences();?>
</span>
                <br />
                <?php if ($_smarty_tpl->getVariable('valueObject')->value->hasNote()){?>
                <br />
                <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('valueObject')->value->hasNote()){?>
                <strong><?php echo TXT_LC('REASONS_REMARKS');?>
</strong>
                <br />
                <span class="comment"><?php echo nl2br($_smarty_tpl->getVariable('valueObject')->value->getNote());?>
</span>
                <?php }?>
            </div>
        </td>
        <td class="">
            &nbsp;
        </td>
    </tr>
    <?php }?>
    <tr>
        <td class="bottom_line" colspan="100%">
            &nbsp;
        </td>
    </tr>
<!-- /employeePdpActionView.tpl -->