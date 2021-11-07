<?php
/* Smarty version 3.1.32, created on 2020-05-19 10:51:42
  from 'D:\ano site\Assigners\Views\Report\f_daily_activity.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec357ce213675_47583790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d9c6f33beeb75359cf72ba1338e0fd1ea7b88c8' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Report\\f_daily_activity.html',
      1 => 1589364127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec357ce213675_47583790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204955ec357ce184c25_65591327', 'headcontent');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299235ec357ce19b848_57890292', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93105ec357ce209ee4_78940571', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_204955ec357ce184c25_65591327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_204955ec357ce184c25_65591327',
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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.css" />
        <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/css/datepicker3.css" /> -->

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.css" />
        <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" /> -->

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme.css" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->
        <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme-custom.css"> -->

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
class Block_299235ec357ce19b848_57890292 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_299235ec357ce19b848_57890292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\Assigners\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
<!-- <div class="col-md-2">List Dept Code
                                        
                                        <select data-plugin-selectTwo class="form-control populate" name="prj_ctgry_cd" id="prj_ctgry_cd">
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
                                        </select>     
</div> -->
<div class="col-md-2" >
    <span id="font_project_status">Dept</span> <br>
    <!-- <span class="show-grid-block"> -->
        <select name="dept_cd" id="dept_cd" class="form-control populate" multiple="multiple" data-plugin-multiselect data-plugin-options='{ "includeSelectAllOption": true }' id="ms_example5" required>
            <optgroup label="Dept">
                <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

                <!-- <option value="analysis">Analysis</option> -->
    
                <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj_sts']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['prj_sts_cd_single']->value == $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_desc'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  -->
    
            </optgroup>
        </select>
    <!-- </span> -->
</div>
<div class="col-md-4">
    Activity Date
        <div id="datepickerz" class="input-daterange input-group" data-plugin-datepicker>
                                <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </span>
                                <input type="text" class="form-control" required name="date_start" id="date_start" onchange="date_start_change()" placeholder='<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
' >
                                <span class="input-group-addon">to</span>
                                <input type="text" class="form-control" required name="date_end" id="date_end" onchange="date_end_change()" placeholder='<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
'   >
                               
                            </div>
    
        
    
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
class Block_93105ec357ce209ee4_78940571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_93105ec357ce209ee4_78940571',
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

function notif() {
        $title = 'Notification :';
                        $text = 'Please Filled All Parameter (Dept & Activity Date)';
                        $type = 'custom';
                        $addclass = 'notification-primary';
                        $icon = 'fa fa-twitter';
		new PNotify({
			title: $title,
			text: $text,
			type: $type,
			addclass: $addclass,
			icon: $icon
		});
    } 


function notif_date() {
        $title = 'Warning :';
                        $text = 'End Date Cannot be earlier than Start Date, please Reset. For Next, System will set Start Date same as End Date automaticly if Start Date same as End Date';
                        $type = 'custom';
                        $addclass = 'notification-primary';
                        $icon = 'fa fa-twitter';
		new PNotify({
			title: $title,
			text: $text,
			type: $type,
			addclass: $addclass,
			icon: $icon
		});
    } 

function date_start_change(){

if ($("#date_end").val())
    if($("#date_start").val() > $("#date_end").val()){
        $("#date_end").val('');
        $("#date_start").val('');
        notif_date();
    }
}

function date_end_change(){

if ($("#date_start").val())
    if($("#date_start").val() > $("#date_end").val()){
        $("#date_end").val('');
        $("#date_start").val('');
        notif_date();
    }
}


    $("#btn_print_pdf").click(function()
    {

        // $year = $("#year").val();
        $dept_cd = $("#dept_cd").val();
        $date_start = $("#date_start").val();
        $date_end = $("#date_end").val();

        // alert($date_start);

        if ($dept_cd && $date_start && $date_end) {

        window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Report/Report_daily_activity_pdf/" + $dept_cd + "/" + $date_start + "/" + $date_end, "_blank");

        } else {
            notif();
        }
        return false;

    });

    $("#btn_export_xls").click(function()
    {

        // $year = $("#year").val();
        $dept_cd = $("#dept_cd").val();
        $date_start = $("#date_start").val();
        $date_end = $("#date_end").val();

        // alert($date_start);

        if ($dept_cd && $date_start && $date_end) {

        window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Report/Report_daily_activity_xls/" + $dept_cd + "/" + $date_start + "/" + $date_end, "_blank");

        } else {
            notif();
        }
        return false;

    });


<?php echo '</script'; ?>
>

<!-- Vendor -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/magnific-popup/magnific-popup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
>

<!-- Specific Page Vendor -->
<!-- <?php echo '<script'; ?>
 src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"><?php echo '</script'; ?>
> 
<!-- <?php echo '<script'; ?>
 src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/fuelux/js/spinner.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/dropzone/dropzone.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-markdown/js/markdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-markdown/js/to-markdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/addon/selection/active-line.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/addon/edit/matchbrackets.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/mode/javascript/javascript.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/mode/xml/xml.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/codemirror/mode/css/css.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/summernote/summernote.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/ios7-switch/ios7-switch.js"><?php echo '</script'; ?>
> -->

<!-- Theme Base, Components and Settings -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
> -->

<!-- Theme Custom -->
<!-- <?php echo '<script'; ?>
 src="assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
> -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
> 
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"><?php echo '</script'; ?>
>

<!-- Theme Initialization Files -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>

<!-- Notif -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.css" />  
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.js"><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.default.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.row.with.details.mi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.tabletools.js"><?php echo '</script'; ?>
>

<!-- Examples -->
<!-- <?php echo '<script'; ?>
 src="assets/javascripts/forms/examples.advanced.form.js" /><?php echo '</script'; ?>
> -->





<?php
}
}
/* {/block 'bodyfooter'} */
}
