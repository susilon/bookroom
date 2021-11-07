<?php
/* Smarty version 3.1.32, created on 2020-01-02 11:07:20
  from 'D:\ano site\Assignerx\Views\Report\Report_outstnd_prj_numb_pdf.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e0d6c7891bcd8_44439118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a562f788f4b088a24921c3b0ffe1c8ba8e952fde' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Report\\Report_outstnd_prj_numb_pdf.html',
      1 => 1576569754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0d6c7891bcd8_44439118 (Smarty_Internal_Template $_smarty_tpl) {
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


            /** Define the margins of your page **/
            @page {
                margin: 100px 25px;
            }

            .header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            .footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }
        
</style>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; font-size: 11px">


	<header>
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
	</header>

	<footer>
          Copyright &copy; <?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>
 <?php echo '<?php ';?>echo date("Y");<?php echo '?>';?>  
    </footer>



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
