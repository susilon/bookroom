<?php
/* Smarty version 3.1.32, created on 2020-05-01 15:51:03
  from 'D:\ano site\Assigners\Views\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eabe2f792e7d9_86731439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6afbecb3786adf7ccba6c4d77859f4b8efe77788' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Home\\index.html',
      1 => 1564558096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eabe2f792e7d9_86731439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74825eabe2f7925077_53892448', 'bodycontent');
?>
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_74825eabe2f7925077_53892448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_74825eabe2f7925077_53892448',
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
