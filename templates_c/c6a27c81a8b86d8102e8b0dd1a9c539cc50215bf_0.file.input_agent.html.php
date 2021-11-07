<?php
/* Smarty version 3.1.32, created on 2021-03-12 10:33:55
  from 'D:\ano site\UI-skeletonhahuyy\Views\Extagent\input_agent.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_604ae1238437d0_74882895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6a27c81a8b86d8102e8b0dd1a9c539cc50215bf' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Extagent\\input_agent.html',
      1 => 1614910559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604ae1238437d0_74882895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9635604ae12369f277_28758881', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16265604ae12383e8a6_45601149', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_9635604ae12369f277_28758881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_9635604ae12369f277_28758881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->
<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.css" /> -->
        <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" /> -->
        <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme.css" /> -->
<style>
div.scrollt {
        width: 100px;
    height: 100px;
    overflow: scroll;
}
</style>

                    
<div class="row">
    <div class="col-md-10">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Extagent/save_agent" enctype="multipart/form-data" > 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Input Agent<Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Id : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="id" class="form-control" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['id'];?>
" readonly >
                                <input type="hidden" placeholder="" name="project_key" class="form-control" id="project_key" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['project_key'];?>
" required>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" placeholder="" name="agent_name" class="form-control" id="agent_name" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['agent_name'];?>
" required>
                                
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No KTP : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" placeholder="" class="form-control" name="agent_id_ktp" id="agent_id_ktp" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['agent_id_ktp'];?>
" required>
                            </span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Gender : </label>
                        <div class="col-sm-3">
                        <span >
                                                            <select name="agent_gender" id="agent_gender" class="form-control populate" required>
                                                            <option></option>
                                                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gender']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                                            <!-- <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</option> -->
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['data_agent']->value['agent_gender'] == $_smarty_tpl->tpl_vars['data']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</option>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                                                            </select>     
                        </span>
                        </div>
                    </div>
                    <b><i>Domicili Address</i></b>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaAutosize">Address</label>
                        <div class="col-md-9">
                            <textarea class="form-control" rows="2" name="agent_address" id="agent_address" data-plugin-textarea-autosize><?php echo $_smarty_tpl->tpl_vars['data_agent']->value['agent_address'];?>
</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Kelurahan : </label>
                        <div class="col-md-9">
                            <select data-plugin-selectTwo name="id_area" id="id_area" class="form-control populate">
                                <optgroup label="Kelurahan/kecamatan/Kotamadya-Kabupaten/Province">
                                    <option></option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_wilayah']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['data_agent']->value['data_area'] == $_smarty_tpl->tpl_vars['data']->value['nama_area']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['nama_area'];?>
</option>
                                                            <!-- <input type="hidden" name="kelurahan" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kelurahan'];?>
">
                                                            <input type="hidden" name="kec_kab" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kec_kab'];?>
">
                                                            <input type="hidden" name="kota" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kota'];?>
">
                                                            <input type="hidden" name="provinsi" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['provinsi'];?>
">         -->
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="email_agent" placeholder="" class="form-control" id="email_agent" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['email_agent'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Telp : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="no_telp" placeholder="" class="form-control" id="no_telp" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['no_telp'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Domisili sesuai KTP : </label>
                        <div class="col-sm-3 checkbox">
                            <!-- <div class="checkbox checkBox-primary"></div> -->
                        <label >
                            <input type="checkbox"  id="mycheck" onclick="myFunction()"> 
                            <!-- domicili sesuai KTP  -->
                            <input type="hidden" id="domicili_same_as_ktp" name="domicili_same_as_ktp" class="form-control" >
                        </label>
                        <!-- </div> -->
                        </div>
                    </div>
                    <b><i>Rekening</i></b>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Account Name : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="account_name" placeholder="" class="form-control" id="account_name" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['account_name'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Account Number : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="acc_bank_number" placeholder="" class="form-control" id="acc_bank_number" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['acc_bank_number'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Bank Name : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="acc_bank_name" placeholder="" class="form-control" id="acc_bank_name" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['acc_bank_name'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Register at (Branch) : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="reg_branch" placeholder="" class="form-control" id="reg_branch" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['reg_branch'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">KTP Image : </label>
                        <div class="col-sm-9">
                         <div class="fileupload fileupload-new" data-provides="fileupload" >
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" name="image_ktp" id="image_ktp"  />
															</span>
															 <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a> 
														</div>
                                                    </div> 
                             
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Buku Tabungan : </label>
                        <div class="col-sm-9">
                         <div class="fileupload fileupload-new" data-provides="fileupload" >
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" name="image_buku_tabungan" id="image_buku_tabungan"  />
															</span>
															 <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a> 
														</div>
                                                    </div> 
                             
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">NPWP : </label>
                        <div class="col-sm-9">
                         <div class="fileupload fileupload-new" data-provides="fileupload" >
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" name="image_npwp" id="image_npwp"  />
															</span>
															 <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a> 
														</div>
                                                    </div> 
                             
                        </div>
                    </div>
                    <b><i>Activation Purpose</i></b>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Secret Question : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="secr_question" placeholder="" class="form-control" id="secr_question" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['secr_question'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Secret Answer : </label>
                        <div class="col-sm-9">
                        <span class="show-grid-block">
                                <input type="text" name="secr_answer" placeholder="" class="form-control" id="secr_answer" value="<?php echo $_smarty_tpl->tpl_vars['data_agent']->value['secr_answer'];?>
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
class Block_16265604ae12383e8a6_45601149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_16265604ae12383e8a6_45601149',
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

$("#user_manual").click(function() {
  // alert("fgfg");
  window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/user_manual_skeleton_print/", "_blank");
});

function myFunction() {
  var checkBox = document.getElementById("mycheck");
//   var text = document.getElementById("task_desc");
//   var task_container = document.getElementById("task_container");
//   $picname = $("#NTUserName").val();
  if (checkBox.checked == true){
        

        $("#domicili_same_as_ktp").val("1");

  } else {
    //  text.style.display = "none";

     $("#domicili_same_as_ktp").val("0");
    //  alert("Check False");
  }

//   $vall = $("#domicili_same_as_ktp").val();

//   alert($vall);
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
/assets/stylesheets/theme.css" />

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"><?php echo '</script'; ?>
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
<!-- <?php echo '<script'; ?>
 src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/magnific-popup/magnific-popup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
> -->

<!-- Specific Page Vendor -->
<!-- <?php echo '<script'; ?>
 src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.js"><?php echo '</script'; ?>
> -->
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"><?php echo '</script'; ?>
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

<!-- Theme Initialization Files -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
