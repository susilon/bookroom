<?php
/* Smarty version 3.1.32, created on 2020-11-19 10:25:30
  from 'D:\ano site\Assigners\Views\Skeleton\form_variation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fb5e5aa236090_40713978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc963b4586eb72f8dc84232dc55b967462598df' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Skeleton\\form_variation.html',
      1 => 1605753809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb5e5aa236090_40713978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_221165fb5e5aa1a7771_59049546', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103945fb5e5aa221ff9_46157477', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_221165fb5e5aa1a7771_59049546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_221165fb5e5aa1a7771_59049546',
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
    <div class="col-md-10">
        <!-- form diarahkan ke action save dengan metode POST -->
         <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Skeleton/save_variation" enctype="multipart/form-data" > 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
<Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Id : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" class="form-control"  name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['id'];?>
" readonly >
                                <input type="hidden" class="form-control" name="project_key" id="project_key" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['project_key'];?>
">
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Project Name : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" disabled class="form-control" id="project_name" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['project_name'];?>
" required>
                                
                            </span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Variation Desc : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="var_desc" placeholder="" class="form-control" id="var_desc" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['var_desc'];?>
" required>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Key Name : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" disabled placeholder="" class="form-control" id="key_name" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['key_name'];?>
" >
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Key Value : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="key_value"  placeholder="" class="form-control" id="key_value" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['key_value'];?>
" required>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textareaAutosize">Json Skeleton</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="10" name="json_skeleton" id="json_skeleton" data-plugin-textarea-autosize><?php echo $_smarty_tpl->tpl_vars['data_variation']->value['json_skeleton'];?>
</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Remark : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" name="remark_key" class="form-control" id="remark_key" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['remark_key'];?>
" >
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">API Path : </label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                                <input type="text" disabled placeholder="" class="form-control" id="api_path" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['api_path'];?>
">
                            </span>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-md-2 control-label" for="textareaAutosize">Json Skeleton</label>
                        <div class="col-md-10">
                            <textarea class="form-control" rows="10" name="json_skeleton" id="json_skeleton" data-plugin-textarea-autosize><?php echo $_smarty_tpl->tpl_vars['data_variation']->value['json_skeleton'];?>
</textarea>
                        </div>
                    </div> -->
            
                    
                    <!-- <div class="form-group " >
                        <label class="col-sm-2 control-label">Add to Menu : </label>
                        <div class="col-sm-1"><span class="show-grid-block">
                                        <select name="add_to_menu" id="add_to_menu" class="form-control populate" value="<?php echo $_smarty_tpl->tpl_vars['data_variation']->value['add_to_menu'];?>
" required>
                                        <option value="yes" <?php if ($_smarty_tpl->tpl_vars['data_variation']->value['add_to_menu'] == 'yes') {?> selected <?php }?>>yes</option>  
                                        <option value="no" <?php if ($_smarty_tpl->tpl_vars['data_variation']->value['add_to_menu'] == 'no') {?> selected <?php }?>>no</option>
                                        </select> 
                             
                                        </span>
                        </div>
                    </div> -->

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
class Block_103945fb5e5aa221ff9_46157477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_103945fb5e5aa221ff9_46157477',
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


function notif($title,$text,$type,$addclass,$icon) {
        new PNotify({
            title: $title,
            text: $text,
            type: $type,
            addclass: $addclass,
            icon: $icon
        });
    }


    // $(".look_up_modul").click(function () {   

        
    //     var group_id = $("#group_id").val();

    //     if (group_id==""){
    //     group_id="0";

    //     $title = "Warning";
    //     $text = "Please Choose Group Name from List Group (Role)";
    //     $type = "custom";
    //     $addclass = "notification-warning";
    //     $icon = "fa fa-twitter";

    //     notif($title,$text,$type,$addclass,$icon);
    //     }

    // });

// $("#form1").submit(function() {

// // alert("vvvvv");
// $project_key = $("#project_key").val();
// $id = $("#id").val();

// // if($cek=='cek_data'){
// //     $status = 1;
// //     $("#upload_message").text('counting data');
// // } else {
// //     $status = 2;
// //     $("#upload_message").text('Uploading data');
// // }

// $.ajax({
//     url : '<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Skeleton/cek_data/' + $key_value,
//     method : 'POST',
//     data : new FormData(this),
//     contentType : false,
//     processData : false,
//     success : function(respons){
//         // console.log("gbgbgbgb");
//         console.log(respons.message);
//         // $("#upload_message").text(respons.message);
//         $("#upload_message").text('');
//         if(respons.status==0){
//             $title = "Warning";
//             $text = "Value sudah pernah diinput";
//             $type = "custom";
//             $addclass = "notification-warning";
//             $icon = "fa fa-twitter";
//             // $("#btndownload").removeAttr("disabled");
//             // $("#btnload").attr("disabled","disabled");
            
//             // $("#upload_message").text(respons.message);
//         } else {

//             dataygmaudikirim = { 
//             key_value : $("#key_value").val(),					
//             var_desc : $("#var_desc").val(),
//             json_skeleton : $("#json_skeleton").val(),
//             remark_key : $("#remark_key").val()
//                          };

//             $.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Skeleton/save_variation/" + $project_key + "/" + $id + "/", dataygmaudikirim)
//             .done(function(data) 
//             {
                
//                 // $("#rowz").html(data.rowz);
//                 // console.log(data.rowz);
//                 // alert(data.rowz);

//             });
//         }
//         // console.log(respons.count_data);
//     }
// });

// // if($status==2){
// //     $("#btnload").attr("disabled","disabled");
// // }

// $("#status").val('');
// return false;

// });



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
