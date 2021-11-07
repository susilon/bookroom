<?php
/* Smarty version 3.1.32, created on 2019-11-14 13:43:37
  from 'C:\xampp\htdocs\Assigner\Views\Memointernal\form_master.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dccf79996fe33_68535966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87217fb289e973f18724e5a373a583dcfc12d8f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Memointernal\\form_master.html',
      1 => 1573713543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccf79996fe33_68535966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91695dccf799955194_92590768', 'bodycontent');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77345dccf79996ca58_72385314', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_91695dccf799955194_92590768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_91695dccf799955194_92590768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  
        
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->

<div class="row">
    <div class="col-md-6">
        <!-- form diarahkan ke action save dengan metode POST -->
        <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/memointernal/save_msnumber">
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['pageSubTitle']->value;?>
</h2>                    
                </header>
                <div class="panel-body">
                    <!-- <div class="form-group">
                        <label class="col-sm-4 control-label"> Code Number: </label>
                        <div class="col-sm-8">  
                          <input type="hidden" name="id" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"> 
                            <input type="text" name="code" class="form-control" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
">
                             <input type="text" id="update_by" name="update_by" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
">  
                            
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Descr: </label>
                        <div class="col-sm-8">
                            <input type="text" name="descr" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['descr'];?>
">
                            <input type="hidden" id="update_by" name="update_by" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Description: </label>
                        <div class="col-sm-8">
                            <input type="text" name="Description" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['Description'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Available Number: </label>
                        <div class="col-sm-8">
                            <input type="text" name="availablenumb" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['availablenumb'];?>
">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label"> </label>
                         <div class="col-sm-8"> 
                            <input type="checkbox" name="special_code" value="yes"> Show in Lookup Input Project<br>

                        </div> 
                    </div>
                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary">Submit </button>            
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->     
                    <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button>
                </footer>
            </section>
        </form>
    </div>
</div>



<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_77345dccf79996ca58_72385314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_77345dccf79996ca58_72385314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            

<?php echo '<script'; ?>
 type="text/javascript">


// $( document ).ready(function() {
//     // $("#update_by").val() = $("#share_ntusername").val();

// }


    $("#btnCancel").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        parent.history.back();
        return false;
    });

function functionRubah() 
{
    var x = document.getElementById.value("inp");
    var z = x.value;
    var y = document.getElementById.value("images");
    
    y.value = z.substring(12);
}

function functionRubah2() 
{
document.getElementById("image").value = "Hello JavaScript!";
}

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
