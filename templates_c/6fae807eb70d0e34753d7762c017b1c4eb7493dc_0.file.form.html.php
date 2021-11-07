<?php
/* Smarty version 3.1.32, created on 2020-01-07 16:24:17
  from 'D:\ano site\Assignerx\Views\Msproject\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e144e415aaea8_16973962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fae807eb70d0e34753d7762c017b1c4eb7493dc' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Msproject\\form.html',
      1 => 1578389041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e144e415aaea8_16973962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1353283605e144e41572902_68730473', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5152338835e144e415a5607_48088020', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_1353283605e144e41572902_68730473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_1353283605e144e41572902_68730473',
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
<div class="row">
    <div class="col-md-5">

<div class="form-group">
                        <label class="col-sm-4 control-label">prj_doc_no : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" placeholder=".Select Project" class="c_view_project form-control" required >
                                <!-- <input type="hidden" class="form-control" name="id_po_header" id="id_po_header">
                                <input type="hidden" class="form-control" name="id_po_detail" id="id_po_detail"> -->
                            </span>
                        </div>
                    </div>
    </div>
</div>
                    
<div class="row">
    <div class="col-md-10">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Msproject/save" enctype="multipart/form-data" > 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Asset Accepted <Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">* prj_doc_no : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="prj_doc_no" placeholder=".Select Project" class="form-control" id="prj_doc_no" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_doc_no'];?>
" required >
                                 <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['id'];?>
">
                                <!-- <input type="hidden" class="form-control" name="id_po_detail" id="id_po_detail">  -->
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">* prj_title : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" id="prj_title" name="prj_title" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_title'];?>
" required >
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">prj_sum : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <textarea id="prj_sum" name = "prj_sum" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_sum'];?>
" class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                            </span>
                        </div>
                    </div>

                    <div class="form-group " >
                        <label class="col-sm-2 control-label">* prj_ctgry_desc : </label>
                        <div class="col-sm-10"><span class="show-grid-block">
                                        <select name="prj_ctgry_cd" id="prj_ctgry_cd" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_ctgry_desc'];?>
" required onchange="change_prj_ctgry_cd()">
                                           <option></option>   
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj_ctgry']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['data_msprj']->value['prj_ctgry_cd'] == $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_desc'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                             <!-- <option value="DEPT">DEPT</option> 
                                            <option value="DIV">DIV</option> -->
                                            
                                        </select>
                                        <input type="hidden" class="form-control" id="prj_ctgry_desc" name="prj_ctgry_desc" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_ctgry_desc'];?>
">     
                                        </span>
                        </div>
                    </div>

                    <div class="form-group " >
                        <label class="col-sm-2 control-label">* prj_sts_desc : </label>
                        <div class="col-sm-10"><span class="show-grid-block">
                                        <select name="prj_sts_cd" id="prj_sts_cd" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_sts_desc'];?>
" required onchange="change_prj_sts_cd()">
                                           <option></option>   
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj_sts']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['data_msprj']->value['prj_sts_cd'] == $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_desc'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                             <!-- <option value="DEPT">DEPT</option> 
                                            <option value="DIV">DIV</option> -->
                                            
                                        </select> 
                                        <input type="hidden" class="form-control" id="prj_sts_desc" name="prj_sts_desc" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['prj_sts_desc'];?>
">    
                                        </span>
                        </div>
                    </div>

                    <div class="form-group " >
                        <label class="col-sm-2 control-label">Remark : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                            <textarea id="remark" value="remark" name="remark" class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">PDF : </label>
                        <div class="col-sm-10">
                         <div class="fileupload fileupload-new" data-provides="fileupload" >
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" name="gambar" id="file"  />
															</span>
															 <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a> 
														</div>
                                                    </div> 
                             <!-- <input type="file" name="gambar"  id="file"  />                        -->
                        </div>
                    </div>

                    <div class="form-group " >
                        <label class="col-sm-2 control-label">Score : </label>
                        <div class="col-sm-10"><span class="show-grid-block">
                                        <select name="score" id="score" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['score_desc'];?>
" required onchange="change_score()">
                                           <option selected></option>   
                                               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_score']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?> 
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data_msprj']->value['score'] == $_smarty_tpl->tpl_vars['data']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['score_desc'];?>
</option>
                                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
                                              <!-- <option value="High">High</option> 
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>  -->
                                            
                                        </select>     
                                        <input type="hidden" class="form-control" id="score_desc" name="score_desc" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['score_desc'];?>
">  
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
</div>


<!-- <div class="form-group">
												<label class="col-md-2 control-label">File Upload : </label>
												<div class="col-md-10">
													<div class="fileupload fileupload-new" data-provides="fileupload" >
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file"  id="file"  />
															</span>
															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
														</div>
													</div>
                                                </div>
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-md-5">
                                                    <button id="btnSubmit" class="mt-sm mb-sm btn btn-primary">Submit</button>
                                                </div>
                                                <div class="col-md-5">
                                                </div>
                                            </div> -->



                    
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
class Block_5152338835e144e415a5607_48088020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_5152338835e144e415a5607_48088020',
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
    $('.c_view_project').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Msproject/pagelistajax_data_cr'             
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [                
            { "data" : "id", "title" : "id" },
            { "data" : "mi_numb", "title" : "mi_numb" },
            { "data" : "mi_title", "title" : "mi_title" },
            { "data" : "mi_ref", "title" : "mi_ref" }
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
        $("#prj_doc_no").val(data["mi_numb"]);
        $("#prj_title").val(data["mi_title"]);
        // $("#prj_sum").val(data["prj_sum "]);
        $("#remark").text(data["mi_rmrk"]); 
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
