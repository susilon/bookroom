<?php
/* Smarty version 3.1.32, created on 2019-12-11 09:14:07
  from 'C:\xampp\htdocs\Assigner\Views\Reportnumber\Report_book_numbers.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df050ef849305_68632749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525d21fe03cec2186a3452f79882fb03cc47be11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Reportnumber\\Report_book_numbers.html',
      1 => 1576030427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df050ef849305_68632749 (Smarty_Internal_Template $_smarty_tpl) {
?><p>&nbsp;</p>
<h1>Booked Number</h1>

<?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>

  <!-- <?php echo '<script'; ?>
 type="text/php">

<?php echo '</script'; ?>
> -->

<br>
Print by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>



<p>&nbsp;</p>
<table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
	<tr>
		<td class="auto-style3"><strong>#</strong></td>
        <td class="auto-style3" ><strong>Doc No</strong></td>
        <td class="auto-style3" ><strong>Title</strong></td>
		<td class="auto-style3" ><strong>Sts</strong></td>
		<td class="auto-style3" ><strong>Sts desc</strong></td>
    </tr>
    
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'ini');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ini']->value) {
?>	

    <tr>
            <td colspan="5" class="auto-style5">Number Of : <?php echo $_smarty_tpl->tpl_vars['ini']->value['descr'];?>
</td>
    </tr>

	<tr>
         <td colspan="5" class="auto-style5">Total : <?php echo $_smarty_tpl->tpl_vars['ini']->value['total'];?>
</td>
    
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ini']->value['detail'], 'isi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['isi']->value) {
?>	
                    <tr>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['no'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['seq_numb'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['mi_numb'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['isi']->value['mi_title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['isi']->value['mi_ref'];?>
</td>
                        
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tr>
    <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
    </tr>
    <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
    </tr>
    
    <br>    
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

</table><?php }
}
