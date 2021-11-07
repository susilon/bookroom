<?php
/* Smarty version 3.1.32, created on 2019-12-10 14:42:12
  from 'C:\xampp\htdocs\Assigner\Views\Second\lister.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5def4c54b6b9e5_90712101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992db00334c623e9cf8b18afe0028c1ba9302397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Second\\lister.html',
      1 => 1575963669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5def4c54b6b9e5_90712101 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['greetings']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<hr>
<table border=1>
<tr><td>Alamat</td><td>Phone</td><td>Status</td><td>&nbsp;</td></tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bukutelepon']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['data']->value->alamat;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->phone;?>
</td><td>lagi <?php echo $_smarty_tpl->tpl_vars['data']->value->lagingapain;?>
</td><td>Edit</td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
