<?php
/* Smarty version 3.1.32, created on 2020-05-19 06:58:21
  from 'D:\ano site\Assigners\Views\Restruct\compliance.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec3211d8008d3_02534340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4adac55ddb1c5f016b2e4df2534369a2c3c9d8' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Restruct\\compliance.html',
      1 => 1589846118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec3211d8008d3_02534340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_288635ec3211d7606a3_69559546', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225785ec3211d7f9508_63095084', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_288635ec3211d7606a3_69559546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_288635ec3211d7606a3_69559546',
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
<!-- <div class="row">
    <div class="col-md-5">

<div class="form-group">
                        <label class="col-sm-4 control-label">prj_doc_no : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" placeholder=".Select Project" class="c_view_project form-control" required >
                                 </span>
                        </div>
                    </div>
    </div>
</div> -->
                    
<div class="row">
    <div class="col-md-8">
        <!-- form diarahkan ke action save dengan metode POST -->
         <!-- <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/upload" enctype="multipart/form-data" >  -->
        <form id="form1">
            <section class="panel">
                <!-- <header class="panel-heading">
                    <h2 class="panel-title">Asset Accepted <Textfile></Textfile></h2>                    
                </header> -->
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    

                    <div class="form-group " >
                        <label class="col-sm-3 control-label">Request Category : </label>
                        <div class="col-sm-4"><span class="show-grid-block">
                                        <select name="report_type" id="report_type" class="form-control populate" required>
                                           <option></option>   
                                           <option value="CMPREQ">CMPREQ - Restructured Request</option> 
                                           <option value="CMPPRO">CMPPRO - Restructured Proceed</option>
                                               <!-- <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    -->
                                              <!-- <option value="High">High</option> 
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>  -->
                                            
                                        </select>     
                                        <input type="hidden" class="form-control" id="score_desc" name="score_desc" value="<?php echo $_smarty_tpl->tpl_vars['data_msprj']->value['score_desc'];?>
">  
                                        </span>
                        </div>
                    </div>

                    <!-- <div class="form-group " >
                        <label class="col-sm-3 control-label">Request Category : </label>
                        <div class="col-sm-4"><span class="show-grid-block">
                            <input type="text" class="form-control" id="status"> 
                                        </span>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Upload File : </label>
                        <div class="col-sm-9">
                         <div class="fileupload fileupload-new" data-provides="fileupload" >
														<div class="input-append">
															
															<span class="btn btn-primary btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Browse</span>
																<input type="file" name="excel" onchange="cek_file()" id="file"  />
															</span>
															 <!-- <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>  -->
                                                            <div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
                                                            </div>
                                                    </div> 
                             <!-- <input type="file" name="gambar"  id="file"  />                        -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Notification :</label>
                        <div class="col-sm-9">
                            <!-- <p class="form-control-static" id="upload_message">Row : <span>100</span>, Cut Off EOD : <span>2020/05/29</span> </p> -->
                            <p class="form-control-static" id="upload_message">Please Browse Data</p>
                        <!-- <span class="show-grid-block">
                                <input type="text" class="form-control" id="prj_title" name="prj_title" readonly >
                            </span> -->
                        </div>
                    </div>

                    

                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary" id="btnload" disabled>Upload</button> 
                    <input type="hidden" class="form-control" id="status">  
                    <!-- <button class="btn btn-success" id="btndownload">Download</button> -->
                    <a id="btndownload" class="btn btn-success" disabled>Download</a>          
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <button type="reset" id="btncancel" class="btn btn-default">Cancel</button>
                </footer>
            </section>
        <!-- </form> -->
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
class Block_225785ec3211d7f9508_63095084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_225785ec3211d7f9508_63095084',
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


// function cek_file(){

//     // alert("sdfsdf");
//     // console("sdfsdfsdf");
//     // console.log("sdfsdfsdf");
//     // document.getElementById('form1').submit();
// }


$("#file").change(function()
    {
        $("#status").val('cek_data');
        $("#form1").submit();
        
    });

$("#form1").submit(function() {

// alert("vvvvv");
$cek = $("#status").val();

if($cek=='cek_data'){
    $status = 1;
    $("#upload_message").text('counting data');
} else {
    $status = 2;
    $("#upload_message").text('Uploading data');
}

$.ajax({
    url : '<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/count_data/' + $status,
    method : 'POST',
    data : new FormData(this),
    contentType : false,
    processData : false,
    success : function(respons){
        // console.log("gbgbgbgb");
        console.log(respons.message);
        // $("#upload_message").text(respons.message);
        $("#upload_message").text('');
        if(respons.status==2){
            $("#btndownload").removeAttr("disabled");
            $("#btnload").attr("disabled","disabled");
            
            $("#upload_message").text(respons.message);
        } else {
            
            $("#upload_message").text(respons.message);
            console.log(respons.status);
        }
        // console.log(respons.count_data);
    }
});

// if($status==2){
//     $("#btnload").attr("disabled","disabled");
// }

$("#status").val('');
return false;

});


function cek_file(){

    if($("#file").val()){
        
        $("#btnload").removeAttr("disabled");
        
    }

}


// $("#btndownload_ori").click(function()
//     {
//         $ntusername = $("#share_ntusername").val();

//         window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/report_oto_xls/" + $ntusername, "_blank");
//     });

    $("#btndownload").click(function()
    {
        $ntusername = $("#share_ntusername").val();

        $report_type = $("#report_type").val();

        // alert($report_type);

                          $.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/cek_download/" + $ntusername)
                      .done(function(data) 
                          {
                              if(data.status=='ada'){
                                
                                // $("#file").val(''); 
                                // document.getElementById("form1").reset();

                            window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/report_oto_xls/" + $ntusername + "/" + $report_type, "_blank");
                            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/compliance/";
                            // window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/compliance/");
                              } else {
                                
                                // $("#file").val(''); 
                                // document.getElementById("form1").reset();
                                // $("#upload_message").text(data.message); 
                                // $("#btndownload").attr("disabled","disabled");
                                window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/compliance/";
                                // window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/compliance/");
                              }
                            console.log(data.status);
                            console.log(data.message);
                            return false;  
                          });

        
    });

 $("#btncancel").click(function()
    {
        // alert("dfd");
        $("#btnload").attr("disabled","disabled");
        $("#upload_message").text('Please Browse Data');
        // window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/compliance/");
        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/compliance/";

    });




// function change_score(){

// var t = document.getElementById("score");
// $selectedText = t.options[t.selectedIndex].text;
// $("#score_desc").val($selectedText);

// }


    // $("#btnCancel").click(function()
    // {
    //     // fungsi untuk kembali ke halaman sebelumnya
    //     parent.history.back();
    //     return false;
    // });
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
