<?php /* Smarty version Smarty-3.0.7, created on 2021-06-18 12:55:47
         compiled from "D:\XAMPP\htdocs\gino-pam\php_cm/modules/interface/templates\employee/pdpAction/employeePdpActionCompetenceSelectView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769060cc7bb37d54d7-13215562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b2b97b01887df1e0a3a6b6a01491c608f57542' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\gino-pam\\php_cm/modules/interface/templates\\employee/pdpAction/employeePdpActionCompetenceSelectView.tpl',
      1 => 1379954116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769060cc7bb37d54d7-13215562',
  'function' => 
  array (
    'writeCheckbox' => 
    array (
      'parameter' => 
      array (
        'input_id' => '',
        'is_selected' => false,
      ),
      'compiled' => '',
    ),
    'writeLabel' => 
    array (
      'parameter' => 
      array (
        'label_name' => '',
        'input_id' => '',
        'is_selected' => false,
      ),
      'compiled' => '',
    ),
  ),
  'has_nocache_code' => 0,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeePdpActionCompetenceSelectView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<?php $_smarty_tpl->tpl_vars['inputId'] = new Smarty_variable(($_smarty_tpl->getVariable('interfaceObject')->value->getCheckboxPrefix()).($_smarty_tpl->getVariable('valueObject')->value->getId()), null, null);?>

<?php if (!function_exists('smarty_template_function_writeCheckbox')) {
    function smarty_template_function_writeCheckbox($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['writeCheckbox']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <input type="checkbox"
           name="<?php echo $_smarty_tpl->getVariable('input_id')->value;?>
"
           id="<?php echo $_smarty_tpl->getVariable('input_id')->value;?>
"
           <?php if ($_smarty_tpl->getVariable('is_selected')->value){?> checked="checked" <?php }?>><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


<?php if (!function_exists('smarty_template_function_writeLabel')) {
    function smarty_template_function_writeLabel($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->template_functions['writeLabel']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <label for="<?php echo $_smarty_tpl->getVariable('input_id')->value;?>
"
           <?php if ($_smarty_tpl->getVariable('is_selected')->value){?> style="font-weight: bold" <?php }?>
           >
        <?php echo $_smarty_tpl->getVariable('label_name')->value;?>

    </label><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

    <tr>
        <td style="padding-left: 20px; width: 25px;">
            <?php smarty_template_function_writeCheckbox($_smarty_tpl,array('input_id'=>$_smarty_tpl->getVariable('inputId')->value,'is_selected'=>$_smarty_tpl->getVariable('interfaceObject')->value->isSelected()));?>

        </td>
        <td>
            <?php smarty_template_function_writeLabel($_smarty_tpl,array('label_name'=>$_smarty_tpl->getVariable('valueObject')->value->getCompetenceName(),'input_id'=>$_smarty_tpl->getVariable('inputId')->value,'is_selected'=>$_smarty_tpl->getVariable('interfaceObject')->value->isSelected()));?>

        </td>
        <td>
        </td>
    </tr>
<!-- /employeePdpActionCompetenceSelectView.tpl -->