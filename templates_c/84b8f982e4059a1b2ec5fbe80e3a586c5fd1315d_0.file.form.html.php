<?php
/* Smarty version 3.1.32, created on 2020-04-19 14:17:54
  from 'D:\ano site\Assigners\Views\Assigntodept\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e9bfb22e28318_20668906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b8f982e4059a1b2ec5fbe80e3a586c5fd1315d' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Assigntodept\\form.html',
      1 => 1570692634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9bfb22e28318_20668906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293975e9bfb22df3e12_47356321', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108885e9bfb22e21ef7_13845578', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_293975e9bfb22df3e12_47356321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_293975e9bfb22df3e12_47356321',
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
												<i class="fa fa-star"></i> Form Assignment
											</a>
										</h4>
									</div>
									<div id="collapse2One" class="accordion-body collapse in">
										<div class="panel-body">
                                            
                                            <div class="row">
    <div class="col-md-5">

<div class="form-group">
                        <label class="col-sm-4 control-label">Pick Dept : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" placeholder=".Select Project" class="c_view_dept form-control" required >
                                <!-- <input type="hidden" class="form-control" name="id_po_header" id="id_po_header">
                                <input type="hidden" class="form-control" name="id_po_detail" id="id_po_detail"> -->
                            </span>
                        </div>
                    </div>
    </div>
</div>
                    
<div class="row">
    <div class="col-md-8">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntodept/save"> 
        <!-- <form id="form1" > -->
            <section class="panel">
                 <header class="panel-heading">
                    <h2 class="panel-title"> <Textfile></Textfile></h2>                    
                </header> 
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dept Code : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="dept_cd" placeholder=".Select Project" class="form-control" id="dept_cd" required >
                                 <!-- <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['id'];?>
"> -->
                                 <input type="hidden" class="form-control" name="id_ms_prj" id="id_ms_prj" value="<?php echo $_smarty_tpl->tpl_vars['id_ms_prj']->value;?>
">  
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Dept  : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" id="descr" name="descr"  >
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Remark : </label>
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
    <div class="col-md-4">
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
													<th colspan="3">Dept Already Assigned :  </th>
													<!-- <th>Status</th>
													<th>Progress</th> -->
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prjpicdept']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                                <td class="center hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td> 
                                                <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['create_dt'];?>
</td> 
                                                 <!-- <td class="center hidden-phone">
                                                     <a href="#" class="on-default c_button_remove"><span class="label label-success">Remove</span></a>
                                                
                                                </td>  -->
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
												<tr>
                                                    <!-- <th colspan="3">Info Project :  </th> -->
												</tr>
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
class Block_108885e9bfb22e21ef7_13845578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_108885e9bfb22e21ef7_13845578',
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
	//-------------------Picker Product----------------------
    $('.c_view_dept').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Ajax/getlist_msdept'             
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [               
            { "data" : "id", "title" : "id" }, 
            { "data" : "dept_cd", "title" : "dept_cd" },
            { "data" : "descr", "title" : "descr" },
            { "data" : "div_cd", "title" : "div_cd" }
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
        $("#descr").val(data["descr"]);
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

<?php
}
}
/* {/block 'bodyfooter'} */
}
