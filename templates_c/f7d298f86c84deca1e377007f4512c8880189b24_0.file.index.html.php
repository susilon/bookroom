<?php
/* Smarty version 3.1.32, created on 2019-10-09 14:22:44
  from 'C:\xampp\htdocs\Assigner\Views\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9d8ac4a39934_65170095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d298f86c84deca1e377007f4512c8880189b24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Home\\index.html',
      1 => 1564558096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9d8ac4a39934_65170095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195165d9d8ac4a31ad1_60202448', 'bodycontent');
?>
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_195165d9d8ac4a31ad1_60202448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_195165d9d8ac4a31ad1_60202448',
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
