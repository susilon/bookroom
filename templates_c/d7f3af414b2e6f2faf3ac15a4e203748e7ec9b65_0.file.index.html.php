<?php
/* Smarty version 3.1.32, created on 2020-05-01 15:49:52
  from 'D:\ano site\Assigners\Views\Admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eabe2b0dc9535_20582833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f3af414b2e6f2faf3ac15a4e203748e7ec9b65' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Admin\\index.html',
      1 => 1558343083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eabe2b0dc9535_20582833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14035eabe2b0dc26b9_49020693', 'bodycontent');
?>
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_14035eabe2b0dc26b9_49020693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_14035eabe2b0dc26b9_49020693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
Ini Halaman Admin<br>
<?php echo MESSAGE_EMAIL_SAME_LIKE_OLD_ONE;?>

<?php
}
}
/* {/block 'bodycontent'} */
}
