<?php /* Smarty version Smarty-3.0.7, created on 2021-06-18 12:55:47
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\library/pdpActionSelectClusterView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2040960cc7bb34ced80-96402253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc7731d0e817463a232a0e8bef724520953a746' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\library/pdpActionSelectClusterView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2040960cc7bb34ced80-96402253',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- pdpActionSelectClusterView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['radioId'] = new Smarty_variable(('pdp_action_selector_').($_smarty_tpl->getVariable('valueObject')->value->getId()), null, null);?>
<tr>
    <td>
        <input type="radio"
               onClick="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getSelectLink();?>
"
               name="ID_PDPAID"
               id="<?php echo $_smarty_tpl->getVariable('radioId')->value;?>
"
               value="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getId();?>
"<?php if ($_smarty_tpl->getVariable('interfaceObject')->value->isSelected()){?> checked="checked"<?php }?>>
        <label for="<?php echo $_smarty_tpl->getVariable('radioId')->value;?>
"><?php echo $_smarty_tpl->getVariable('valueObject')->value->getActionName();?>
</label>
    </td>
    <td>
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getProvider();?>

    </td>
    <td>
        <?php echo $_smarty_tpl->getVariable('valueObject')->value->getDuration();?>

    </td>
    <td>
        <?php echo PdpCostConverter::display($_smarty_tpl->getVariable('valueObject')->value->getCost());?>

    </td>
</tr>
<!-- /pdpActionSelectClusterView.tpl -->