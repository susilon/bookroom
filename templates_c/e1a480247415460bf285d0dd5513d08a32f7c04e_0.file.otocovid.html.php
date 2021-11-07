<?php
/* Smarty version 3.1.32, created on 2020-05-26 03:00:49
  from 'D:\ano site\Assigners\Views\Restruct\otocovid.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ecc23f1d25bd3_30028158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1a480247415460bf285d0dd5513d08a32f7c04e' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Restruct\\otocovid.html',
      1 => 1590436836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecc23f1d25bd3_30028158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229455ecc23f1ce8568_56522000', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_307295ecc23f1d12975_48717871', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_229455ecc23f1ce8568_56522000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_229455ecc23f1ce8568_56522000',
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
                        <label class="col-sm-3 control-label">Request Category </label>
                        <div class="col-sm-4"><span class="show-grid-block">
                                        <select name="report_type" id="report_type" class="form-control populate" required>
                                           <option ></option>   
                                           <option value="OTORK">OTORK - Restructured Request</option> 
                                           <option value="OTOGRAB">OTOGRAB - Grab</option> 
                                           <option value="OTOGOJEK">OTOGOJEK - Gojek</option>
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
																<input type="file" name="excel" onchange="cek_file()" id="file" >
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
                            <p class="form-control-static" id="upload_message">Please Browse Data (xls/xlsx/csv)</p>
                        <!-- <span class="show-grid-block">
                                <input type="text" class="form-control" id="prj_title" name="prj_title" readonly >
                            </span> -->
                        </div>
                    </div>

                    

                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary" id="btnload" disabled>Upload</button> 
                    <input type="hidden" class="form-control" id="key_id">
                    <input type="hidden" class="form-control" id="status">  
                    <input type="hidden" class="form-control" id="total_row">
                    <input type="hidden" class="form-control" id="origin_file_name">
                    <input type="hidden" class="form-control" id="execution_date" name="execution_date">
                    <!-- <button class="btn btn-success" id="btndownload">Download</button> -->
                    <!-- <a id="btndownload" class="btn btn-success" disabled>Download</a>           -->
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <!-- <button type="reset" id="btncancel" class="btn btn-default">Cancel</button> -->
                </footer>
            </section>
        <!-- </form> -->
    </div>
</div>

<h4>Upload List :</h4> 
<section class="panel">
    <!-- <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">Basic</h2>
    </header> -->
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
                <tr>
                    <th class="hidden-phone">File</th>
                    <th class="hidden-phone">Total</th>
                    <th class="hidden-phone">Status</th>
                    <th class="hidden-phone">Upload Date</th>
                    <th class="hidden-phone">Download</th>
                    
                    

                </tr>
            </thead>
            
            <!-- <td class="hidden-phone" ><span id="<?php echo 'sts';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['sts'];?>
</span></td> -->

                <tbody id="rowz">
                    <?php echo $_smarty_tpl->tpl_vars['rowz']->value;?>

                    <!-- <div id="rowz"><?php echo $_smarty_tpl->tpl_vars['rowz']->value;?>
</div> -->
                    <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_history']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                    <tr class="gradeA">
                    <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['origin_file_name'];?>
</td>
                    <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['origin_qty'];?>
</td>
                    <td class="hidden-phone" ><?php echo $_smarty_tpl->tpl_vars['data']->value['sts'];?>
</td>
                    <td class="center hidden-phone">
                        <a class="btn btn-success c_btn_download" key_id="<?php echo $_smarty_tpl->tpl_vars['data']->value['key_id'];?>
" status="<?php echo $_smarty_tpl->tpl_vars['data']->value['sts'];?>
" >Download
                        </a>
                        </td>
                    
                    </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    -->
            </tbodyid="rowz">
        </table>
    </div>
</section>




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



                    
<!-- <style>
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
		</style> -->

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_307295ecc23f1d12975_48717871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_307295ecc23f1d12975_48717871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- <style type="text/css">
  .columnsorter { cursor: pointer; }
</style> -->

<style type="text/css">
    .columnsorter {
        cursor: pointer;
    }
</style>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/css/jquery.dataTables.css">

<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
> -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>



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


var auto_refresh = setInterval(
            function () {

                
        // $("#rowz").html("");
        // $ntusername = $("#share_ntusername").val();
        // $.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/refresh_rowz/" + $ntusername)
        // .done(function(data) 
        //     {
        //         $("#rowz").html(data.rowz);
        //         return false;
        //     });


            }, 30000); // refresh setiap 10000 milliseconds
    
// $(function(){ 
//     $(".c_btn_download").live('click',
//         function(){
//         $key_id = $(this).attr("key_id");
//         alert($key_id);
//         $report_type = $("#report_type").val();
//         $ntusername = $("#share_ntusername").val();

//         window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/report_oto_xls/" + $key_id + "/" + $report_type + "/" + $ntusername, "_blank");
        
//     })
// });

$(function(){ 
    $('#rowz').delegate('.c_btn_download', 'click',
        function(){
        $key_id = $(this).attr("key_id");
        // alert($key_id);
        $report_type = $("#report_type").val();
        $ntusername = $("#share_ntusername").val();

        window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/report_oto_xls/" + $key_id + "/" + $report_type + "/" + $ntusername, "_blank");
        
    })
});

// $(".c_btn_download").click(function()
//     {
        
//         $key_id = $(this).attr("key_id");
//         alert($key_id);
//         $report_type = $("#report_type").val();
//         $ntusername = $("#share_ntusername").val();



//         window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/report_oto_xls/" + $key_id + "/" + $report_type + "/" + $ntusername, "_blank");
        
//     });




$("#file").change(function()
    {
       
        $("#status").val('cek_data');
        $("#form1").submit();
        
    });

$("#form1").submit(function() {



$cek = $("#status").val();
$report_type = $("#report_type").val();


if($cek=='cek_data'){
    $status = 1;

    // alert("cek_data");
    $("#upload_message").text('counting data');
    // alert("kjkjhkjh");

    $.ajax({
    url : '<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/count_data/',
    method : 'POST',
    data : new FormData(this),
    contentType : false,
    processData : false,
    success : function(respons){

if(respons.message=='wrong file'){
    $("#upload_message").text('Wrong File, Please Browse Data (xls/xlsx/csv)');
    $("#btnload").attr("disabled","disabled");
} else{

        $("#total_row").val(respons.count_data);
        $("#upload_message").text(respons.message);
        // console.log(respons.origin_file_name);
        $("#origin_file_name").val(respons.origin_file_name);
        $("#key_id").val(respons.key_id);
        $("#btnload").removeAttr("disabled");

    }

        }
    });

} else {
    $status = 2;
    $key_id = $("#key_id").val();

    dataygmaudikirim = { 
            key_id : $key_id,					
            total_row : $("#total_row").val(),
            origin_file_name : $("#origin_file_name").val(),
            request_type : $report_type,
            ntusername : $("#share_ntusername").val()
                         };

    $("#rowz").html("");
    $.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/insert_history/", dataygmaudikirim)
        .done(function(data) 
            {
                
                $("#rowz").html(data.rowz);
                // console.log(data.rowz);
                // alert(data.rowz);

            });

    // $key_id = $("#key_id").val();

    $.ajax({
    url : '<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/upload_data/' + $key_id,
    method : 'POST',
    data : new FormData(this),
    contentType : false,
    processData : false,
    success : function(respons){

        // $id = (respons.id);
        // $id = $id-1;
        // $("#sts"+$id).text('Ready');
        // alert($id);
        // $("#key_id").val(respons.key_id);
        // sleep(6000);
        
        // alert($("#sts"+$id).text());
        $("#rowz").html('');
        $("#rowz").html(respons.rowz);
        // let clickButton = document.getElementsByClassName('c_btn_download');
        // clickButton.addEventListener('click');
        

// clickButton.addEventListener('click', popOneTimeAlert)
       
        }
    });

    //  return false;


}



if($status==2){
   
    $("#btnload").attr("disabled","disabled");

}

$("#status").val('');
return false;

});


// function cek_file(){

//     if($("#file").val()){
        
//         $("#btnload").removeAttr("disabled");
        
//     }

// }


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
/Restruct/otocovid/";
                            // window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/otocovid/");
                              } else {
                                
                                // $("#file").val(''); 
                                // document.getElementById("form1").reset();
                                // $("#upload_message").text(data.message); 
                                // $("#btndownload").attr("disabled","disabled");
                                window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/otocovid/";
                                // window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/otocovid/");
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
        $("#upload_message").text('Please Browse Data (xls/xlsx/csv)');
        // window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/otocovid/");
        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Restruct/otocovid/";

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

<!-- ============================= -->

<!-- Examples -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>

<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.js"><?php echo '</script'; ?>
> -->
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
<?php
}
}
/* {/block 'bodyfooter'} */
}
