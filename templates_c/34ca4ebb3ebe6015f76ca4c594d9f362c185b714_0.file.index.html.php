<?php
/* Smarty version 3.1.32, created on 2020-01-13 08:56:46
  from 'D:\ano site\Assignerx\Views\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e1bce5ec1e136_56230487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34ca4ebb3ebe6015f76ca4c594d9f362c185b714' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Home\\index.html',
      1 => 1564558096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1bce5ec1e136_56230487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128265e1bce5ebca3f2_50966824', 'bodycontent');
?>
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_128265e1bce5ebca3f2_50966824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_128265e1bce5ebca3f2_50966824',
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
