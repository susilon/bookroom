<?php
/* Smarty version 3.1.32, created on 2020-01-21 11:43:44
  from 'D:\ano site\Assignerx\Views\Memointernal\datami.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e2681807bb6d4_01889160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb1a80ad43e18e022763d7b970bdc910fb2b28ee' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Memointernal\\datami.html',
      1 => 1579491961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2681807bb6d4_01889160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99625e268180605450_16748581', 'headcontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46225e268180648c09_32111634', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90545e2681807a4c54_58436856', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'headcontent'} */
class Block_99625e268180605450_16748581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'headcontent' => 
  array (
    0 => 'Block_99625e268180605450_16748581',
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
class Block_46225e268180648c09_32111634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_46225e268180648c09_32111634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   


<!-- Select Number -->
<div class="row show-grid">
	<div class="col-md-2">Select Number</div>
	<div class="col-md-2"></div>
	<div class="col-md-2">Select Year</div>
</div>

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
	 <input type="hidden" class="form-control" id="tahun_from_view" value="<?php echo $_smarty_tpl->tpl_vars['tahun_from_view']->value;?>
"> 
	 <!-- <input type="text" class="form-control" id="id_msmix">  -->
  </span>
</div>
<div class="col-md-2">
	<span>
	  <select name="year" id="year" class="form-control populate" onchange="combo_year()">
	  <!-- <option selected>All</option> -->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_number']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
	  <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['year'];?>
"<?php if ($_smarty_tpl->tpl_vars['tahun_from_view']->value == $_smarty_tpl->tpl_vars['data']->value['year']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['year'];?>
</option>
  
	  <!-- <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['prj_sts_cd_single']->value == $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_desc'];?>
</option> -->
		  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
	  </select> 
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
/<?php echo $_smarty_tpl->tpl_vars['data']->value['years'];?>
"><i class="fa fa-pencil"></i></a> <?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
</td>
											<td class = "c_tombol_history" id_msmix=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_title'];?>

											</td>
                                            <!-- <td><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_number/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['id_msnumber'];?>
/<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
";><i class="fa fa-times"></i></a></td> -->
											<td>
												<a href="#modalPrimary" id_msmi=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
 seq_numb=<?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
 mi_numb=<?php if ($_smarty_tpl->tpl_vars['data']->value['mi_numb'] == null) {?> untitled <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['data']->value['mi_numb'];?>
 <?php }?> class="c_tombol_cancel modal-basic"><i class="fa fa-times"></i></a>
												
											</td>
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
                            <p>Are you sure want to Cancel Seq Number : <span id="dialognameinfo"></span></p>
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
class Block_90545e2681807a4c54_58436856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_90545e2681807a4c54_58436856',
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
var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";



$(".c_tombol_history").hover(function()
  {


	$id_msmix = $(this).attr("id_msmix");


$('.c_tombol_history').bantinganPicker({

		title       : 'Page List',    
		width       : "600px",  
		showbutton  : false,          
		datatableoption : { 
			"ajax": {

				//diambil dari function controller user management
				"url" : baseUrl + '/Memointernal/getlist_dtnumberlog_ajax/' + $id_msmix
				// "url" : baseUrl + '/Ajax/getlist_msdept'          
			},
			"order": [[ 2, "id" ]],
			//pengaturan kolom di picker
			"columns" : [     
				{ "data" : "id", "title" : "id" },          
				{ "data" : "seq_numb", "title" : "seq_numb" },
				{ "data" : "activity", "title" : "activity" },
				{ "data" : "create_dt", "title" : "create_dt" },
				{ "data" : "create_by", "title" : "create_by" }
			],
			
			columnDefs: [                       
			{ targets: [0,1,2], orderable: false },
			//untuk meng hide apabila mode layar xs (kecil)
			{ targets: [1,2], className: "hidden-xs"}
			],
			"bLengthChange": false,
			"serverSide": true,
			"processing": true,     
		},
		done  : function(event, data) {     

			// $("#modul_to_add").val(data["modul_name"]);
			// $("#look_up_modul").val(data["modul_name"]);
			// $("#modul_id").val(data["id"]);

			}

		});


	});
	  
$("#user_manual").click(function() {

  			window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/user_manual_print/", "_blank");
	});

// $(document).ready()
// {


// 	function tombol_history($id_msmix=null){

// 	$id_msmi = $("#id_msmix").val();
// 	// alert($id_msmi);

//     $('.c_tombol_history').bantinganPicker({
	
//       title       : 'Page List',    
//       width       : "600px",  
//       showbutton  : false,          
//       datatableoption : { 
//         "ajax": {

// 			//diambil dari function controller user management
//             "url" : baseUrl + '/Memointernal/getlist_dtnumberlog_ajax/' + $id_msmi
//             // "url" : baseUrl + '/Ajax/getlist_msdept'          
//         },
// 		"order": [[ 2, "id" ]],
// 		//pengaturan kolom di picker
//         "columns" : [     
// 			{ "data" : "id", "title" : "id" },          
//             { "data" : "seq_numb", "title" : "seq_numb" },
// 			{ "data" : "activity", "title" : "activity" },
// 			{ "data" : "create_dt", "title" : "create_dt" },
//             { "data" : "create_by", "title" : "create_by" }
// 		],
		
//         columnDefs: [                       
// 		   { targets: [0,1,2], orderable: false },
// 		   //untuk meng hide apabila mode layar xs (kecil)
//            { targets: [1,2], className: "hidden-xs"}
//         ],
//         "bLengthChange": false,
//         "serverSide": true,
//         "processing": true,     
//       },
//       done  : function(event, data) {     

//         // $("#modul_to_add").val(data["modul_name"]);
//         // $("#look_up_modul").val(data["modul_name"]);
//         // $("#modul_id").val(data["id"]);


//       }
// 	});

// };

// };

// });

// untuk memilih Nomor type Nomor
function combo_mi(){

$id_msnumber = $("#combo_mi").val();
$year = $("#year").val();

window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/datami/" + $id_msnumber + "/" + $year;


}

//Untuk milih tahun
function combo_year(){

$id_msnumber = $("#id_msnumber").val();
$year = $("#year").val();

if (!$id_msnumber){
  $id_msnumber = " ";
}

window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/datami/" + $id_msnumber + "/" + $year;

}

$("#btnDelete").click(function()
  {

  	$id_mi = $("#id_mi").val();
  	$id_msnumber = $("#id_msnumber").val();
	$tahun_from_view = $("#tahun_from_view").val()

    // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_number/" + $data_Seq_numb + "/" + $data_ref_cde + "/" + $data_mi_code;
    window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_number/" + $id_mi + "/" + $id_msnumber + "/" + $tahun_from_view;

      console.log($data_mi_numb);

// return false;

  });

$(".c_tombol_cancel").click(function()
  {

		  $id_msmi = $(this).attr("id_msmi");
		  $mi_numb = $(this).attr("mi_numb");
		  
		  $seq_numb = $(this).attr("seq_numb");
		  $("#id_mi").val($id_msmi);
		  $("#dialognameinfo").text($seq_numb + " - " + $mi_numb);
  		// alert($id_msmi);
  	});

// 	  $(".c_tombol_cancel").click(function()
//   {

//   		alert("dsfg");
//   	});

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
