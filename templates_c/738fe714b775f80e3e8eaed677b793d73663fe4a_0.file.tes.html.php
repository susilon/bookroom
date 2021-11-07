<?php
/* Smarty version 3.1.32, created on 2019-12-04 17:25:29
  from 'C:\xampp\htdocs\Assigner\Views\Report\tes.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de78999c02da0_91451736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '738fe714b775f80e3e8eaed677b793d73663fe4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Report\\tes.html',
      1 => 1575450002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de78999c02da0_91451736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('papersize', "A4" ,false ,32);
$_smarty_tpl->_assignInScope('pageorientation', "landscape" ,false ,32);?>
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


<p>&nbsp;</p>
<h1>Outstanding Project</h1>

<?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>

<?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>


<p>&nbsp;</p>
<table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
	<tr>
		<td ><strong>#</strong></td>
        <td class="auto-style3" ><strong>Doc No</strong></td>
        <td class="auto-style3" ><strong>Title</strong></td>
		<td class="auto-style3" ><strong>Sts</strong></td>
		<td class="auto-style3" ><strong>Sts desc</strong></td>
	</tr>

<!-- <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'ini');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ini']->value) {
?>	
	<tr>
		<td class="auto-style4"><?php echo $_smarty_tpl->tpl_vars['ini']->value['prj_ctgry_cd'];?>
</td>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ini']->value['detail'], 'isi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['isi']->value) {
?>	
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['no'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_doc_no'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_title'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_sts_cd'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_sts_desc'];?>
</td>
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		
	</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- 
    <tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td align="right">Total :</td>
		<td align="right"><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</td>
	</tr> -->

</table>

</body>


</html>
<?php }
}
