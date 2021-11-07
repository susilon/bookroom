<?php
/* Smarty version 3.1.32, created on 2019-11-07 18:44:23
  from 'C:\xampp\htdocs\Assigner\Views\Admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dc40397140ca0_91531901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6658e4b461b0c837bb30509ce34bb33f9cfecec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Admin\\index.html',
      1 => 1558343083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc40397140ca0_91531901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90455dc4039713b821_96150305', 'bodycontent');
?>
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_90455dc4039713b821_96150305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_90455dc4039713b821_96150305',
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
