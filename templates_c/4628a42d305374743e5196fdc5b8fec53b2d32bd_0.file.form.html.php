<?php
/* Smarty version 3.1.32, created on 2020-04-29 16:09:04
  from 'D:\ano site\Assigners\Views\Assigntopic\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ea94430d3fc28_34062266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4628a42d305374743e5196fdc5b8fec53b2d32bd' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Assigntopic\\form.html',
      1 => 1588151333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea94430d3fc28_34062266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169095ea94430c914b0_82551351', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167215ea94430d2e3f4_41654689', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_169095ea94430c914b0_82551351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_169095ea94430c914b0_82551351',
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

<div class="panel-group" id="accordion2">
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One">
												<i class="fa fa-star"></i> Assignment Form
											</a>
										</h4>
									</div>
									<div id="collapse2One" class="accordion-body collapse in">
										<div class="panel-body">
                                            
                                            <div class="row">
    <div class="col-md-5">

<div class="form-group">
                        <label class="col-sm-4 control-label">PIC : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" placeholder=".Select Project" class="c_view_pic form-control" required >
                                <!-- <input type="hidden" class="form-control" name="id_po_header" id="id_po_header">
                                <input type="hidden" class="form-control" name="id_po_detail" id="id_po_detail"> -->
                            </span>
                        </div>
                    </div>
    </div>
</div>
                    
<div class="row">
    <div class="col-md-7">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/save"> 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <!-- <h2 class="panel-title">Assign Form <Textfile></Textfile></h2>                     -->
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">PIC Name: </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="pic_name" placeholder=".Select Project" class="form-control" id="NTUserName" required >
                                 <!-- <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['id'];?>
"> -->
                                 <input type="hidden" class="form-control" name="id_ms_prj" id="id_ms_prj" value="<?php echo $_smarty_tpl->tpl_vars['id_ms_prj']->value;?>
">  
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dept: </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="dept_cd" placeholder=".Select Project" class="form-control" id="dept_cd" required > 
                                <input type="hidden" name="div_cd" placeholder=".Select Project" class="form-control" id="div_cd" required >
                            </span>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="col-sm-2 control-label">Dept  : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" id="descr" name="descr"  >
                            </span>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Remark: </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <textarea id="assign_dept_remark" name = "remark"  class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                            </span>
                        </div>
                    </div>

                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary" id="btnAdd">Save</button>            
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button>
                </footer>
            </section>
        </form>
    </div>
    <div class="col-md-5">
							<section class="panel">
								<!-- <header class="panel-heading panel-heading-transparent">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Projects Stats</h2>
								</header> -->
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<tr>
													<!-- <th>#</th> -->
													<th colspan="3">PIC Already Assigned :  </th>
													<!-- <th>Status</th>
													<th>Progress</th> -->
                                                </tr>
                                                <tr>
													 <th>Name</th> 
													<th>Dept </th>
													 <th>Asgn date</th>
													<th></th> 
												</tr>
											</thead>
											<!-- <tbody>
												<tr>
													<td>1</td>
													<td>Porto - Responsive HTML5 Template</td>
													<td><span class="label label-success">Success</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																100%
															</div>
														</div>
													</td>
												</tr>
												
                                            </tbody> -->
                                            
                                            <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_dtpic']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                                <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
</td> 
                                                <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td> 
                                                <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['create_dt'];?>
</td>
                                                 <td class="center hidden-phone">
                                                     <a href="#" class="on-default c_button_remove" dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" ><span class="label label-success">Remove</span></a>
                                                 <a href="#modalPrimary" class="modal-with-form a_modal" dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" style="visibility:hidden" onclick="remove_ok()">Task
                                            </a> 
                                                </td> 
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
									        </tbody>
										</table>
									</div>
								</div>
							</section>
						</div>
</div>

										</div>
									</div>
								</div>
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Two">
												<i class="fa fa-cogs"></i> Info Project : <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>

											</a>
										</h4>
									</div>
									<div id="collapse2Two" class="accordion-body collapse">
										<div class="panel-body">
                                            
                                            <section class="panel">
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">
											<thead>
												<!-- <tr>
                                                    <th colspan="3">Info Project : <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>
 </th>
												</tr> -->
											</thead>
                                            
                                            <tbody>

                                            <tr class="gradeA">
                                                <td ><a href="#" class="on-default c_view_cr_file" id="<?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['id'];?>
" file_cr_name="<?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['file_cr_name'];?>
"><span class="label label-success">View CR File</span></a></td > 
                                            </tr> 
                                            <!-- <tr class="gradeA">
                                                <td >Doc No :</td> 
                                            </tr> 
                                            <tr class="gradeA">
                                                <td >>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_doc_no'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td >Title</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td >>> <?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_title'];?>
</td> 
                                            </tr> -->
                                            <tr class="gradeA">
                                                <td>Project Category :</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_ctgry_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Assign Status :</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_assgn_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Project Status : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_sts_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Score : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>>><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['score_desc'];?>
</td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Project Summary : </td> 
                                            </tr>
                                            <tr class="gradeA">
                                                <td><?php echo $_smarty_tpl->tpl_vars['info_msprj']->value['prj_sum'];?>
</td> 
                                            </tr>
                                           
									        </tbody>
										</table>
									</div>
								</div>
							</section>

										</div>
									</div>
								</div>
								<div class="panel panel-accordion panel-accordion-primary">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2Three">
												<i class="fa fa-cloud"></i> Lorem ipsum dolor
											</a>
										</h4>
									</div>
									<div id="collapse2Three" class="accordion-body collapse">
										<div class="panel-body">
											Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
										</div>
									</div>
								</div>
							</div>






<div id="modalPrimary" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Confirmation</h2>
        </header>
        <div class="panel-body">
            <div class="modal-wrapper">
                <div class="modal-icon">
                    <i class="fa fa-question-circle"></i>
                </div>
                <div class="modal-text">
                    <h4>Are you sure want to remove "<span id="modal_pic_name"></span>" ?</h4>
                     <span id="modal_dept_cd"class="hidden"></span>
                     <span id="modal_id_ms_prj"class="hidden"></span>
                </div>
            </div>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-primary modal-confirm" id="btnDelete" onclick="delete_pic()">Yes</button>
                    <button class="btn btn-default modal-dismiss">No</button>
                </div>
            </div>
        </footer>
    </section>
</div>

                   
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

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_167215ea94430d2e3f4_41654689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_167215ea94430d2e3f4_41654689',
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
>  -->
 <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
> -->
 

<?php echo '<script'; ?>
 type="text/javascript">

var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";
// var baseUrl = "http://localhost:8080/Assigner";

$(document).ready(function() {
	//-------------------Picker Product----------------------
    $('.c_view_pic').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_dtuser'   
            // "url" : baseUrl + '/Ajax/getlist_msdept'          
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [               
            { "data" : "employee_id", "title" : "employee_id" }, 
            { "data" : "emp_name", "title" : "emp_name" },
            { "data" : "NTUserName", "title" : "NTUserName" },
            { "data" : "div_cd", "title" : "div_cd" },
            { "data" : "dept_cd", "title" : "dept_cd" }
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

        // console.log("dfdf");
        // console.log($title_modal);
        $("#dept_cd").val(data["dept_cd"]);
        $("#div_cd").val(data["div_cd"]);
        $("#NTUserName").val(data["NTUserName"]);
        $("#emp_name").val(data["emp_name"]);
        // // $("#prj_sum").val(data["prj_sum "]);
        // $("#remark").text(data["mi_rmrk"]); 
        // $("#prod_ctgry_id").val(data["prod_ctgry_id"]);
        // $("#prod_type_id").val(data["prod_type_id"]);
        // $("#prodtype_desc").val(data["prodtype_desc"]); 
        // $("#prod_id").val(data["id"]); 
        // $("#vendor_name").val(data["vendor_name"]);
        // $("#vendor_id").val(data["vendor_id"]); 
        // $("#po_number").val(data["po_number"]); 
        // $("#item_qty").val(data["item_qty"]);
        // $("#accepted_qty").val(data["accepted_qty"]);  

      }
	});
    
});

// $title = 'Notification :',
// 	$text = 'Checked & Data Saved',
// 	$type = 'custom',
// 	$addclass = 'notification-primary',
// 	$icon = 'fa fa-twitter'
//     notif($title,$text,$type,$addclass,$icon);

function notif($title,$text,$type,$addclass,$icon) {
		new PNotify({
			title: $title,
			text: $text,
			type: $type,
			addclass: $addclass,
			icon: $icon
		});
    }

// function remove_ok(){

//         $id_ms_prj = $(this).attr("id_ms_prj");
//         $pic_name = $(this).attr("pic_name");

//         $("#info_row_modal").text($pic_name);

//         // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/remove_pic/" + $id_ms_prj + "/" + $pic_name;
// }

$("#btnDelete").click(function()
	{

        $id_ms_prj = $("#modal_id_ms_prj").text();
        $pic_name = $("#modal_pic_name").text();
        $pic_dept_cd = $("#modal_dept_cd").text();

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/remove_pic/" + $id_ms_prj + "/" + $pic_name + "/" + $pic_dept_cd;

    });

$(".c_openurl").click(function()
	{

        // $id_ms_prj = $("#modal_id_ms_prj").text();
        // $pic_name = $("#modal_pic_name").text();

        window.location = "\\otouatfs01\PROJECTS\01. Documentation\Master CR\2019\CR_0157_ICU_05_2019_Pembuatan 6 Report NFS untuk ICU AUDIT OTO Motor.pdf";

    });




$(".c_button_remove").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $dept_cd = $(this).attr("dept_cd");
        $user_dept_cd = $("#share_dept_cd").text();

        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        // alert($user_dept_cd);

        if($dept_cd!=$user_dept_cd)
        {
            // alert("sama");
            $title = 'Notification :',
	$text = 'Sory, You only can remove pic dept ' + $user_dept_cd + ' (your own dept)',
	$type = 'custom',
	$addclass = 'notification-primary',
	$icon = 'fa fa-twitter'
    notif($title,$text,$type,$addclass,$icon);
        } else {

            // alert("ini baru bisa woy");modalPrimary
            // $('#modalPrimary').set;
// document.getElementById("modalPrimary").removeAttribute("class", "mfp-hide");
                $("#modal_pic_name").text($pic_name);
                $("#modal_dept_cd").text($dept_cd);
                $("#modal_id_ms_prj").text($id_ms_prj);

                $('.a_modal').click();
                

                

                // window.location = $('#a_modal').attr('href');
            //  document.getElementById("modalPrimary").tabIndex() = "1";
            
            // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/remove_pic/" + $id_ms_prj + "/" + $pic_name;

        }

        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/form/" + $id_ms_prj ;
        // $("#dialog_idx").text($id_btn_delete);
        // $("#info_row_modal").text($info_row);
    });

function change_prj_ctgry_cd(){

var t = document.getElementById("prj_ctgry_cd");
$selectedText = t.options[t.selectedIndex].text;
$("#prj_ctgry_desc").val($selectedText);

}

function change_prj_sts_cd(){

var t = document.getElementById("prj_sts_cd");
$selectedText = t.options[t.selectedIndex].text;
$("#prj_sts_desc").val($selectedText);

}

function change_score(){

var t = document.getElementById("score");
$selectedText = t.options[t.selectedIndex].text;
$("#score_desc").val($selectedText);

}

$(".c_view_cr_file").click(function()
	{
        // $id_btn_delete = $(this).attr("id_btn_delete");
        $id = $(this).attr("id");
        $file_cr_name = $(this).attr("file_cr_name");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/crprint/" + $id + "/" + $file_cr_name;

    });

function f_test()
{
    alert("rtdrt");
}

    $("#btnCancel").click(function()
    {
        // fungsi untuk kembali ke halaman sebelumnya
        parent.history.back();
        return false;
    });


<?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>   


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
    

<?php
}
}
/* {/block 'bodyfooter'} */
}
