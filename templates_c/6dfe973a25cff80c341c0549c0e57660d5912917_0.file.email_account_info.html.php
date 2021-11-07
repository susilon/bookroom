<?php
/* Smarty version 3.1.32, created on 2021-03-05 07:07:30
  from 'D:\ano site\UI-skeletonhahuyy\Views\Extagent\email_account_info.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60417642667af1_58611801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfe973a25cff80c341c0549c0e57660d5912917' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Extagent\\email_account_info.html',
      1 => 1614902846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60417642667af1_58611801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1197604176426519d1_47819695', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3139360417642665988_43059128', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_1197604176426519d1_47819695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_1197604176426519d1_47819695',
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
Selamat anda sudah berhasil mengaktivkan Account sebagai Agent External OTO KREDIT, berikut informasi User ID dan Password dan url form pengajuan yang selanjutnya 
<br>

<br>
Agent ID : <?php echo $_smarty_tpl->tpl_vars['email_info']->value['agent_id'];?>

<br>
Agent Name : <?php echo $_smarty_tpl->tpl_vars['email_info']->value['agent_name'];?>

<br>
Password : <?php echo $_smarty_tpl->tpl_vars['email_info']->value['password'];?>

<br>
url Agent for Submit Application (Car) : <a href='<?php echo $_smarty_tpl->tpl_vars['url_form_pengajuan_oto']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['url_form_pengajuan_oto']->value;?>
</a>
<br>
url Agent for Submit Application (Bike) : <a href='<?php echo $_smarty_tpl->tpl_vars['url_form_pengajuan_sof']->value;
echo $_smarty_tpl->tpl_vars['email_info']->value['key_agent'];?>
'><?php echo $_smarty_tpl->tpl_vars['url_form_pengajuan_sof']->value;?>
</a>
<br>
url Agent for Dashboard (Car) : <a href='<?php echo $_smarty_tpl->tpl_vars['url_dashboard_agent_oto']->value;
echo $_smarty_tpl->tpl_vars['email_info']->value['key_agent'];?>
'><?php echo $_smarty_tpl->tpl_vars['url_dashboard_agent_oto']->value;?>
</a>
<br>
url Agent for Dashboard (Car) : <a href='<?php echo $_smarty_tpl->tpl_vars['url_dashboard_agent_sof']->value;
echo $_smarty_tpl->tpl_vars['email_info']->value['key_agent'];?>
'><?php echo $_smarty_tpl->tpl_vars['url_dashboard_agent_sof']->value;?>
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
class Block_3139360417642665988_43059128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_3139360417642665988_43059128',
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
