<?php
/* Smarty version 3.1.32, created on 2020-01-16 09:52:53
  from 'D:\ano site\Assigner\Views\Reportnumber\f_rpt_number.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e1fd005348a26_38141663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c83a456b857f1573007feb16b3a3ec236ba086' => 
    array (
      0 => 'D:\\ano site\\Assigner\\Views\\Reportnumber\\f_rpt_number.html',
      1 => 1578024078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1fd005348a26_38141663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_218545e1fd0052a1fd9_09907022', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_320625e1fd00533df25_34764621', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_218545e1fd0052a1fd9_09907022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_218545e1fd0052a1fd9_09907022',
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
span.vrdna {
    /* Huruf */
    font-family:verdana;
    /* counter-increment: my-sec-counter;
    content: counter(my-sec-counter) ". "; */
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

<div class="row show-grid">
<div class="col-md-2">Number Category
    <span >
                                        <select name="combo_mi" id="id_msnumber" class="form-control populate" onchange="combo_mi()" >
                                        <option selected>All</option>
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_msnumber']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['descr'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                        </select>     
	</span>
</div>
 <div class="col-md-2">Year
    <span>
                                        <select name="year" id="year" class="form-control populate" onchange="combo_mi()" >
                                        <!-- <option selected>All</option> -->
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_number']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['year'];?>
"sd><?php echo $_smarty_tpl->tpl_vars['data']->value['year'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                        </select> 
	</span>

</div> 

<div class="col-md-2">   

</div> 
</div>



<div class="row">
    <div class="col-md-2">
        <span >
          <button type="button" id="btn_print_pdf" class="mb-xs mt-xs mr-xs btn btn-primary">Print pdf</button>
        </span>
    </div>
    <div class="col-md-3">
        <span>
          <button type="button" id="btn_export_xls" class="mb-xs mt-xs mr-xs btn btn-success">Export to Excel</button>   
        </span>
    </div>
</div>

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_320625e1fd00533df25_34764621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_320625e1fd00533df25_34764621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
  .columnsorter { cursor: pointer; }
</style>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
> -->

<?php echo '<script'; ?>
 type="text/javascript">

var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";



$(document).ready(function() {

   
    
});


    $("#btn_print_pdf").click(function()
    {

        $year = $("#year").val();
        $id_msnumber = $("#id_msnumber").val();

        window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/Report_book_number/" + $year + "/" + $id_msnumber, "_blank");

        return false;

    });

    $("#btn_export_xls").click(function()
    {

        $year = $("#year").val();
        $id_msnumber = $("#id_msnumber").val();

        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/Report_book_number_xls/" + $year + "/" + $id_msnumber;

        window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/Report_book_number_xls/" + $year + "/" + $id_msnumber, "_blank");

        return false;

    });


<?php echo '</script'; ?>
>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
