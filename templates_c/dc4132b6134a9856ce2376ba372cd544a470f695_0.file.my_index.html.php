<?php
/* Smarty version 3.1.32, created on 2021-02-17 11:08:13
  from 'D:\ano site\UI-skeletonhahuyy\Views\Dashboard\my_index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_602c96ad34ca47_19429734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc4132b6134a9856ce2376ba372cd544a470f695' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Dashboard\\my_index.html',
      1 => 1609323355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602c96ad34ca47_19429734 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18827602c96ad03a047_58962092', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22393602c96ad348ad5_11651393', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_18827602c96ad03a047_58962092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_18827602c96ad03a047_58962092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\UI-skeletonhahuyy\\Libs\\Smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
        
<section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>
        
                <h2 class="panel-title">My Task due in 7 day or over dueee</h2>
            </header>
            <div class="panel-body">
                <table class="table table-no-more table-bordered table-striped mb-none">
                            <thead>

                                <tr>
                                     <th>Due (Day)</th>
                                     <th>Task</th> 
                                    <th>Project Title </th>
                                     <th>Plan</th>
                                    <th>Insert</th> 
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mytask_reminder']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                            <tr class="gradeA">
                                <td class="hidden-phone"> <?php if (($_smarty_tpl->tpl_vars['data']->value['due'] < 0)) {?> <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value['due'],"-",'');?>
 OVD <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['data']->value['due'];?>
 <?php }?></td> 
                                <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
</td> -->
                                <td class="hidden-phone" data-toggle="tooltip" data-trigger="hover" data-original-title="Click to Change Task Status"><a href="#" class="c_button_done" task_sts_desc="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_sts_desc'];?>
" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" datatask_id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_dttask'];?>
" ><?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
</a></td> 
                                <!-- <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_title'];?>
</td>  -->
                                <td ><a class="on-default c_view_cr_file" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" file_cr_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['file_cr_name'];?>
" data-toggle="tooltip" data-trigger="hover" data-original-title="Click to Show CR form in PDF"> <i class="fa fa-file-pdf-o"></i></a> - <a href="#" class="on-default c_view_project_info" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" data-toggle="tooltip" data-trigger="hover" data-original-title="Click to Show Project Information"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_title'];?>
</a></td >
                                <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['plan_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['plan_end'];?>
</td>
                                <td class="center hidden-phone">
                            <a class="btn btn-success c_button_insert_log" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" datatask_id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_dttask'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" >Project Log
                            </a>
                            </td>
                                 
                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
                            </tbody>
                        </table>
            </div>
</section>


<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-title">New Assignment</h2>
    </header>
    <div class="panel-body">
        <table class="table table-no-more table-bordered table-striped mb-none">
                    <thead>

                        <tr>
                             <th>Dok No</th>
                             <th>Title</th> 
                            <th>Project Category </th>
                             <th>Project Status</th>
                            <!-- <th>Insert</th>  -->
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_project_assign_to_me']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                    <tr class="gradeA">
                        <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_doc_no'];?>
</td> 
                        <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
</td> -->
                        <td ><a class="on-default c_view_cr_file" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" file_cr_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['file_cr_name'];?>
" data-toggle="tooltip" data-trigger="hover" data-original-title="Click to Show CR form in PDF"> <i class="fa fa-file-pdf-o"></i></a> - <a href="#" class="on-default c_view_project_info" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" data-toggle="tooltip" data-trigger="hover" data-original-title="Click to Show Project Information"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_title'];?>
</a></td >
                        <!-- <td class="hidden-phone" data-toggle="tooltip" data-trigger="hover" data-original-title="Click to Change Task Status"><a href="#" class="c_button_done" task_sts_desc="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_sts_desc'];?>
" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" datatask_id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_dttask'];?>
" ><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_desc'];?>
</a></td>  -->
                        <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_desc'];?>
</td> 
                        
                        <td id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_desc'];?>
</td>
                        <!-- <td class="center hidden-phone">
                    <a class="btn btn-success c_button_insert_log" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
" pic_name="<?php echo $_smarty_tpl->tpl_vars['data']->value['pic_name'];?>
"  dept_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" datatask_id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_dttask'];?>
"  id="<?php echo 'class_btn_edit_id';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" >Project Log
                    </a>
                    </td> -->
                         
                    </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
                    </tbody>
                </table>
    </div>
</section>



<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_22393602c96ad348ad5_11651393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_22393602c96ad348ad5_11651393',
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

$(".c_button_done").click(function () {   
        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        $dept_cd = $(this).attr("dept_cd");
        $id = $(this).attr("datatask_id");
        $task_sts_desc = $(this).attr("task_sts_desc");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/form_update_task/" + $id_ms_prj + "/" + $pic_name + "/" + $id + "/task_pic" + "/update_to_done/" ;

        // alert($task_sts_desc);

        // if ($task_sts_desc=='Done'){
        //     // alert($task_sts_desc);
        // } else {
        //     // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Assigntopic/taskdone/" + $id_ms_prj + "/" + $pic_name + "/" + $id + "/task_pic" + "/update_to_done/" ;
        //     window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/form_update_task/" + $id_ms_prj + "/" + $pic_name + "/" + $id + "/task_pic" + "/update_to_done/" ;
        // }
        
        
    });

$(".c_button_insert_log").click(function () {   
        $id_ms_prj = $(this).attr("id_ms_prj");
        $pic_name = $(this).attr("pic_name");
        $dept_cd = $(this).attr("dept_cd");
        $id = $(this).attr("datatask_id");
        $task_sts_desc = $(this).attr("task_sts_desc");

        // alert($task_sts_desc);

      
            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/project_log/" + $id_ms_prj + "/" + $pic_name + "/" + $id ;
        
        
        
    });

$(".c_button_view").click(function () {   
        $prj_ctgry_cd = $(this).attr("prj_ctgry_cd");
        $task_sts_cd = $(this).attr("task_sts_cd");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/info/index?prj_ctgry_cd=" + $prj_ctgry_cd + "&prj_sts=" + $task_sts_cd + "&prj_title=" ; 
        
    });

$(".c_button_view_task").click(function () {   
        $prj_ctgry_cd = $(this).attr("prj_ctgry_cd");
        $task_sts_cd = $(this).attr("task_sts_cd");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/task/task_dept?prj_ctgry_cd=" + $prj_ctgry_cd + "&prj_sts=" + $task_sts_cd + "&prj_title=" ; 
        
    });

$(".c_view_project_info").click(function()
    {
        // $id_btn_delete = $(this).attr("id_btn_delete");
        // $id = $(this).attr("id");
        $id_ms_prj = $(this).attr("id_ms_prj");

        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Info/project_info/" + $id_ms_prj ;

    });

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
        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Task/task_pic/";
            parent.history.back();
            // return false;
    });
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'bodyfooter'} */
}
