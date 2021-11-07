<?php
/* Smarty version 3.1.32, created on 2019-11-27 17:20:20
  from 'C:\xampp\htdocs\Assigner\Views\Dtpo\viewpo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dde4de412a284_98776467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f24fc00b800631ae8aa6a15c485be9a9ec6f4c0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Dtpo\\viewpo.html',
      1 => 1561002650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dde4de412a284_98776467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Assigner\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('papersize', "A4" ,false ,32);
$_smarty_tpl->_assignInScope('pageorientation', "Portrait" ,false ,32);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>APPLICATION DELIVERY FORM</title>
<style type="text/css">
.auto-style1 {
	border: 1px solid #000000;
	text-align: center;
}
.auto-style2 {
	border: 1px solid #000000;
	background-color: #C0C0C0;
}
.auto-style3 {
	border: 1px solid #000000;
}
.auto-style4 {
	text-align: center;
	background-color: #C0C0C0;
}
</style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; font-size: 11px">

<table style="border-style: solid; border-width: 1px; border-color: black; width: 100%; border-collapse: collapse;">
	<tr>
		<td rowspan="6" style="width: 76px" class="auto-style3">
         <img alt="" height="80" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/logo_po_tes.png" width="165" /></td> 
        <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/logoxx.png" height="80" alt="Porto Admin" width="165" /></td> -->
		<td class="auto-style1" colspan="6"><strong>Purchase Order</strong></td>
	</tr>
	<tr>
		<td class="auto-style6" colspan="6">PT Kite kite:</td>
		<!-- <td colspan="3" class="auto-style3"><?php echo $_smarty_tpl->tpl_vars['data']->value['adfno'];?>
</td> -->
	</tr>
	<tr>
        <td class="auto-style6" colspan="6">City, ST ZIP Code:</td>
		<!-- <td class="auto-style3">PROJECT:</td>
		<td colspan="3" class="auto-style3"><?php echo $_smarty_tpl->tpl_vars['data']->value['projectname'];?>
</td> -->
    </tr>
    <tr>
        <td class="auto-style6" colspan="6">Phone Number: (000)000-00000</td>
		<!-- <td class="auto-style3">PROJECT:</td>
		<td colspan="3" class="auto-style3"><?php echo $_smarty_tpl->tpl_vars['data']->value['projectname'];?>
</td> -->
    </tr>
    <tr>
        <td class="auto-style6" colspan="6">Fax: (000)000-00000</td>
		<!-- <td class="auto-style3">PROJECT:</td>
		<td colspan="3" class="auto-style3"><?php echo $_smarty_tpl->tpl_vars['data']->value['projectname'];?>
</td> -->
	</tr>
	<tr>
		<td class="auto-style3">PO NUMBER:</td>
		<td class="auto-style3" colspan="2"><?php echo $_smarty_tpl->tpl_vars['po_number']->value;?>
</td>
		 <!-- <td class="auto-style3"></td>   -->
        <td class="auto-style3">PO DATE</td>
        <td class="auto-style3" colspan="2"><?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
</td>
	</tr>
</table>
<p>&nbsp;</p>
<table style="border: 1px solid black; width: 100%; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
	<tr>
		<td class="auto-style3">
        <b>VENDOR:<br /> </b>
        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_vendor']->value['name'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_vendor']->value['contact_person'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_vendor']->value['state'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_vendor']->value['city'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_vendor']->value['country'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_vendor']->value['phone'];?>

        </td>

        <td class="auto-style3">
        <b>SHIP TO:<br /> </b>
        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_location']->value['location_name'];?>

        <br>
        <!-- <?php echo $_smarty_tpl->tpl_vars['data_location']->value['contact_person'];?>
 -->
        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_location']->value['state'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_location']->value['city'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_location']->value['country'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['data_location']->value['phone'];?>

        </td>
	</tr>

</table>

<p>&nbsp;</p>
<table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
	<tr>
		<td class="auto-style4" ><strong>#</strong></td>
        <td class="auto-style4" ><strong>Product Name</strong></td>
        <td class="auto-style4" ><strong>Purchase Type</strong></td>
		<td class="auto-style4" ><strong>UNIT PRICE</strong></td>
		<td class="auto-style4" ><strong>QTY</strong></td>
		<td class="auto-style4" ><strong>Sub Total</strong></td>
		<!-- <td class="auto-style4" rowspan="2"><strong>REMARK</strong></td> -->
	</tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'adfobject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adfobject']->value) {
?>	
	<tr>
		<td>#</td>
		<td><?php echo $_smarty_tpl->tpl_vars['adfobject']->value->prod_name;?>
</td>
		<td style="text-indent: 10px"><?php echo $_smarty_tpl->tpl_vars['adfobject']->value->purchase_type_name;?>
</td>
		<td align="right"><?php echo $_smarty_tpl->tpl_vars['adfobject']->value->unit_price;?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['adfobject']->value->item_qty;?>
</td>
		<td align="right" style="margin-left: 40px"><?php echo $_smarty_tpl->tpl_vars['adfobject']->value->asset_price;?>
</td>
	</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datax']->value, 'adfobject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adfobject']->value) {
?>	
	<tr>
		<td>#</td>
		<td><?php echo $_smarty_tpl->tpl_vars['adfobject']->value['prod_name'];?>
</td>
		<td style="text-indent: 10px"><?php echo $_smarty_tpl->tpl_vars['adfobject']->value['purchase_type_name'];?>
</td>
		<td align="right"><?php echo $_smarty_tpl->tpl_vars['adfobject']->value['unit_price'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['adfobject']->value['item_qty'];?>
</td>
		<td align="right" style="margin-left: 40px"><?php echo $_smarty_tpl->tpl_vars['adfobject']->value['asset_price'];?>
</td>
	</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td align="right">Total :</td>
		<td align="right"><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</td>
	</tr>

</table>

</body>


</html>
<?php }
}
