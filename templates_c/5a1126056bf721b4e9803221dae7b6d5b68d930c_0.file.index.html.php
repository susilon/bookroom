<?php
/* Smarty version 3.1.32, created on 2020-01-17 17:57:22
  from 'D:\ano site\Assigner\Views\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e219312dbcdb7_94023038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1126056bf721b4e9803221dae7b6d5b68d930c' => 
    array (
      0 => 'D:\\ano site\\Assigner\\Views\\Home\\index.html',
      1 => 1564558096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e219312dbcdb7_94023038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192905e219312db3c63_43267874', 'bodycontent');
?>
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_192905e219312db3c63_43267874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_192905e219312db3c63_43267874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
<?php echo $_smarty_tpl->tpl_vars['hellomessage']->value;?>

<?php
}
}
/* {/block 'bodycontent'} */
}
