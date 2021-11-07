<?php
/* Smarty version 3.1.32, created on 2021-02-07 11:46:00
  from 'D:\ano site\UI-skeletonhahuyy\Views\Home\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_601f70889cc029_61356192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3da297343548586cd9add780cb2c01cd63720a5' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Home\\index.html',
      1 => 1564558096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601f70889cc029_61356192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13330601f70889a8990_05752860', 'bodycontent');
?>
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/coreui.master.html");
}
/* {block 'bodycontent'} */
class Block_13330601f70889a8990_05752860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_13330601f70889a8990_05752860',
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
