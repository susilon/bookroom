<?php
/* Smarty version 3.1.32, created on 2019-10-09 14:15:26
  from 'C:\xampp\htdocs\Assigner\Views\Assigntopic\crprint.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9d890ef070d4_79087561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2b3796ce996a8301d85221bc3faab4d4c943cbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Assigntopic\\crprint.html',
      1 => 1565692462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9d890ef070d4_79087561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<!-- <html>
<head>
</head>
<body> -->

    


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_235155d9d890eeed753_51952718', 'bodycontent');
?>

<!-- </body>

</html> --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_235155d9d890eeed753_51952718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_235155d9d890eeed753_51952718',
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
      <?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>

</div>

<!-- <img src = "files/test nunu.jpg"> -->
<?php
}
}
/* {/block 'bodycontent'} */
}
