<?php
/* Smarty version 3.1.32, created on 2019-12-02 15:58:58
  from 'C:\xampp\htdocs\Assigner\Views\Memointernal\datami.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5de4d252da93a7_06238884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc6e9ccf4a4d94995ef13180a258de4be551093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Memointernal\\datami.html',
      1 => 1575276908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de4d252da93a7_06238884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115295de4d252cea281_69135920', 'headcontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69265de4d252d0c480_72850812', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_310235de4d252d70850_14816799', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_115295de4d252cea281_69135920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_115295de4d252cea281_69135920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Advanced Tables | SHARED ON THEMELOCK.COM</title>
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
class Block_69265de4d252d0c480_72850812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_69265de4d252d0c480_72850812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   


Select Number
<div class="row show-grid">
<div class="col-md-2"><span class="show-grid-block">
                                        <select name="combo_mi" id="combo_mi" class="form-control populate" onchange="combo_mi()" >
                                        <option selected>Pilih</option>
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
                                            <!-- <option value="9 Checked">9 Checked</option>
                                            <option value="1 Need Check">1 Need Check</option>
                                            <option value="2 OK">2 OK</option> -->
                                        </select>     
																				</span>
</div>
<div class="col-md-2">
  <span class="show-grid-block">
     <!-- <label class="control-label" id="label_desc_msnumb" ><?php echo $_smarty_tpl->tpl_vars['desc_msnumber']->value['desc'];?>
</label> -->
     <input type="text" name="label_desc_msnumb" id="label_desc_msnumb" value="<?php echo $_smarty_tpl->tpl_vars['desc_msnumber']->value['descr'];?>
" class="form-control">
     <input type="hidden" class="form-control" id="id_msnumber" value="<?php echo $_smarty_tpl->tpl_vars['id_msnumber']->value;?>
"> 
  </span>
</div>
</div> <br>
<div>
<section class="panel">
							<!-- <header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Rows with Details</h2>
							</header> -->
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none" id="datatable-details">
									<thead>
										<tr>
											<th>Seq Number</th>
											<!-- <th>MI Number</th> -->
											<th>Title</th>
											<th>Cancel Number</th>
											<th class="hidden">ref_cde</th>
											<th class="hidden">id_msnumber</th>
											<th class="hidden">status_cde</th>
											<th class="hidden">mi_remark</th>
											<th class="hidden">mi_ref</th>
											<th class="hidden">book_dte</th>
											<th class="hidden">updt_by</th>
										</tr>
									</thead>
									<tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datami']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <tr class="gradeA">
                                      
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/form/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['id_msnumber']->value;?>
"><i class="fa fa-pencil"></i></a><?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_title'];?>
</td>
                                            <!-- <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_number/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_msnumber'];?>
/<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
";><i class="fa fa-times"></i></a></td> -->
                                            <td><a href="#modalPrimary" id_msmi=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
 class="c_tombol_cancel modal-basic"><i class="fa fa-times"></i></a></td>
                                            											<td class="hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_numb'];?>
</td>   
																						<td class="hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['book_dte'];?>
</td>
																						<td class="hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['updt_by'];?>
</td>
																						<td class="hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['value_date'];?>
</td>
																						<td class="hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_rmrk'];?>
</td>
																						<td class="hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_ref'];?>
</td>
																						<td class="hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['updt_by'];?>
</td>
                                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</tbody>
								</table>
							</div>
</section>

</div>




<div id="modalPrimary" class="modal-block modal-block-primary mfp-hide">
                    <section class="panel">
                      <header class="panel-heading">
                        <h2 class="panel-title">Are you sure?</h2>
                      </header>
                      <div class="panel-body">
                        <div class="modal-wrapper">
                          <div class="modal-icon">
                            <i class="fa fa-question-circle"></i>
                          </div>
                          <div class="modal-text">
                            <h4>Primary</h4>
                            <p>Are you sure want to Cancel MI Seq Number : <span id="dialognameinfo"></span></p>
                            <input type="hidden" id="id_mi" class="form-control" > 
                          </div>
                        </div>
                      </div>
                      <footer class="panel-footer">
                        <div class="row">
                          <div class="col-md-12 text-right">
                            <button class="btn btn-primary modal-confirm" id="btnDelete" >Confirm</button>
                            <button class="btn btn-default modal-dismiss">No</button>
                          </div>
                        </div>
                      </footer>
                    </section>
</div>


<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptfooter'} */
class Block_310235de4d252d70850_14816799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_310235de4d252d70850_14816799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css">
  .columnsorter { cursor: pointer; }
</style>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/css/jquery.dataTables.css">


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">

var $codes;

function combo_mi(){
	//combo_mi

	// $codes = $(this).attr("codes");
	$id_msnumber = $("#combo_mi").val()
	// alert($codes);

window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/datami/" + $id_msnumber + "/";

}

$("#btnDelete").click(function()
  {

  	$id_mi = $("#id_mi").val();
  	$id_msnumber = $("#id_msnumber").val()

    // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_number/" + $data_Seq_numb + "/" + $data_ref_cde + "/" + $data_mi_code;
    window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_number/" + $id_mi + "/" + $id_msnumber;

    // <?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_number/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_msnumber'];?>
/<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>


      //   dataygmaudikirim = { 
      //   seq_numb : $(this).attr("data-seq_numb"),
      //   ref_cde : $(this).attr("data-ref_cde"),
      //   mi_numb : $(this).attr("data-mi_numb"),
      //   mi_title : $(this).attr("data-mi_title"),
      //   mi_rmrk : $(this).attr("data-mi_rmrk"),
      //   mi_ref : $(this).attr("data-mi_ref")
      // }

      console.log($data_mi_numb);

      // $.post( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_mi_ajax/", dataygmaudikirim)
      // .done(function( data ) 
      // {


      // // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/index";

      //   });  


// return false;

  });

$(".c_tombol_cancel").click(function()
  {

  		$id_msmi = $(this).attr("id_msmi");
  		$("#id_mi").val($id_msmi);
  		// alert($id_msmi);
  	});

<?php echo '</script'; ?>
>
    
		 <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
> -->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.js"><?php echo '</script'; ?>
> -->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
>  -->
		
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.js"><?php echo '</script'; ?>
>
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
> -->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"><?php echo '</script'; ?>
> -->
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"><?php echo '</script'; ?>
> 
		
	
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
> 
		
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>
		
		
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>  -->


		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.default.js"><?php echo '</script'; ?>
> -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.row.with.details.mi.js"><?php echo '</script'; ?>
>
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.tabletools.js"><?php echo '</script'; ?>
> -->


<?php
}
}
/* {/block 'scriptfooter'} */
}
