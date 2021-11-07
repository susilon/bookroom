<?php
/* Smarty version 3.1.32, created on 2020-01-10 17:50:01
  from 'D:\ano site\Assignerx\Views\Assigntopic\crprint.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e1856d99d1837_66408874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57fce40f207142cff9b5acd32d887cc79f797e9a' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Assigntopic\\crprint.html',
      1 => 1578653169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1856d99d1837_66408874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<!-- <html>
<head>
</head>
<body> -->

    


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36345e1856d99a44f6_85591036', 'bodycontent');
?>

<!-- </body>

</html> --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_36345e1856d99a44f6_85591036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_36345e1856d99a44f6_85591036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<div class="thumbnail">
      <!-- <img src = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/image/<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" width="242px" height="200px"> -->
      <!-- <img src = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigner/files/test nunu.jpg" width="242px" height="200px"> -->
      <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/pedeef.pdf" height="35" alt="Porto Admin" />
      <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/images/pedeef.pdf" height="35" alt="Porto Admin" /> -->
      <?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>

</div>

<!-- <img src = "files/test nunu.jpg"> -->D:\ano site\Assignerx\files\cr
<?php
}
}
/* {/block 'bodycontent'} */
}
