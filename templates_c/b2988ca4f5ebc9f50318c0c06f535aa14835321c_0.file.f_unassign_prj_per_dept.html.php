<?php
/* Smarty version 3.1.32, created on 2020-01-21 14:03:26
  from 'D:\ano site\Assignerx\Views\Report\f_unassign_prj_per_dept.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e26a23e56a103_61637420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2988ca4f5ebc9f50318c0c06f535aa14835321c' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Report\\f_unassign_prj_per_dept.html',
      1 => 1576573747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e26a23e56a103_61637420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10245e26a23e52b405_99613806', 'headcontent');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137945e26a23e5420f7_65056347', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_316225e26a23e562c83_72868927', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_10245e26a23e52b405_99613806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_10245e26a23e52b405_99613806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Basic -->
		<meta charset="UTF-8">

		<title>Advanced Forms | SHARED ON THEMELOCK.COM</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/css/bootstrap.css" />
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/css/datepicker3.css" /> -->

		<!-- Specific Page Vendor CSS -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" /> -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.css" />
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/dropzone/css/basic.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/dropzone/css/dropzone.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/summernote/summernote.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/summernote/summernote-bs3.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/codemirror/lib/codemirror.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/codemirror/theme/monokai.css" /> -->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/modernizr/modernizr.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'headcontent'} */
/* {block 'bodycontent'} */
class Block_137945e26a23e5420f7_65056347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_137945e26a23e5420f7_65056347',
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
<div class="col-md-2">List Dept Code
    <!-- <span > -->
                                        <!-- <select name="prj_ctgry_cd" id="prj_ctgry_cd" class="form-control populate" > -->
                                        <select data-plugin-selectTwo class="form-control populate" name="prj_ctgry_cd" id="prj_ctgry_cd">
                                        <!-- <optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
                                                        </optgroup> -->
                                        <!-- <optgroup label="Alaskan/Hawaiian Time Zone"> -->
                                        <option selected>All</option>
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_dept_cd']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                        <!-- </optgroup> -->
                                        </select>     
	<!-- </span> -->
</div>
 <div class="col-md-1">
    <!-- <span>
                                        <select name="year" id="year" class="form-control populate" onchange="combo_mi()" >
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
	</span> -->

</div> 

<div class="col-md-2">   

</div> 
</div>



<div class="row">
    <div class="col-md-1">
        <span >
          <button type="button" id="btn_print_pdf" class="mb-xs mt-xs mr-xs btn btn-primary">Print pdf</button>
        </span>
    </div>
    <div class="col-md-2">
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
class Block_316225e26a23e562c83_72868927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_316225e26a23e562c83_72868927',
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

        // $year = $("#year").val();
        $prj_ctgry_cd = $("#prj_ctgry_cd").val();

        window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Report/Report_unassign_prj_per_dept_pdf/" + $prj_ctgry_cd, "_blank");

        return false;

    });

    $("#btn_export_xls").click(function()
    {

        // $year = $("#year").val();
        $prj_ctgry_cd = $("#prj_ctgry_cd").val();

        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/Report_book_number_xls/" + $year + "/" + $id_msnumber;

        window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Report/Report_outstnd_prj_numb_xls/" + $prj_ctgry_cd, "_blank");

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

<!-- Theme Base, Components and Settings -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Custom -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Initialization Files -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>


		<!-- Examples -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/forms/examples.advanced.form.js" /><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}