<?php
/* Smarty version 3.1.32, created on 2021-03-04 23:18:11
  from 'D:\ano site\UI-skeletonhahuyy\Views\Extagent\email_activation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60410843cfa039_41511678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5ca4b50e0c33fe704a5fd0abab2d3b699e2f056' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Extagent\\email_activation.html',
      1 => 1614874683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60410843cfa039_41511678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_241760410843cea8b0_95146589', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_681360410843cf80f4_44209628', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_241760410843cea8b0_95146589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_241760410843cea8b0_95146589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->
<style>
div.scrollt {
        width: 100px;
    height: 100px;
    overflow: scroll;
}
</style>


                    
<style>
			.show-grid-block {
				background-color: #EEE;
				border: 1px solid #FFF;
				display: block;
				line-height: 40px;
				min-height: 40px;
				text-align: center;
			}

			html.dark .show-grid-block {
				background-color: #282d36;
				border-color: #282d36;
			}
</style>

From : agentotokredit@oto.co.id
<br>
To : <?php echo $_smarty_tpl->tpl_vars['email_info']->value['email_agent'];?>

<br>
Subject : Aktivasi Account External Agent OTO Kredit
<br>
<br>

Body :
<br>
Kepada Yth <?php echo $_smarty_tpl->tpl_vars['email_info']->value['agent_name'];?>

<br>

<br>
Selamat Pengajuan pendaftaran registrasi external Agent OTO Kredit anda telah kami terima dan sudah terdaftar
<br>
<br>
Mohon klik url dibawah ini untuk melakukan proses aktivasi Agent Acount
<br>
<a href='<?php echo $_smarty_tpl->tpl_vars['url_activation']->value;
echo $_smarty_tpl->tpl_vars['email_info']->value['key_activate'];?>
'><?php echo $_smarty_tpl->tpl_vars['url_activation']->value;
echo $_smarty_tpl->tpl_vars['email_info']->value['key_activate'];?>
</a>
<br>
<br>

Batas proses aktivasi  2 x 24 jam
<br>
<br>


PT Oto Multiartha / PT Summit Oto Finance
<br>
<br>

Powered by Bantingan

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_681360410843cf80f4_44209628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_681360410843cf80f4_44209628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
  .columnsorter { cursor: pointer; }
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";


<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
