<?php
/* Smarty version 3.1.32, created on 2019-11-04 14:43:17
  from 'C:\xampp\htdocs\Assigner\Views\Dashboard\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dbfd6953ca029_21162275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '166739d30b6e193babf20e39a4bbe31738d85f88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Dashboard\\index.html',
      1 => 1572853391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dbfd6953ca029_21162275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157845dbfd6950f90c1_39620240', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83855dbfd695392508_03165405', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_157845dbfd6950f90c1_39620240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_157845dbfd6950f90c1_39620240',
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

<center>NS : Not Started, OP : Open, IP : In Progress, DN : Done, PN : Postpone, DR : Drop</center>

<div class="row show-grid">
    <div class="col-md-6">
        <span class="show-grid-block">
            <!-- <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Project</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-no-more table-bordered table-striped mb-none">
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs hidden-sm">project Category</th>
                                            <th class="text-right">Prj Code</th>
                                            
                                            <th class="text-right">NS</th>
                                            <th class="text-right">OP</th>
                                            <th class="text-right">IP</th>
                                            <th class="text-right">DN</th>
                                            <th class="text-right">PN</th>
                                            <th class="text-right">DR</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <tr>
                                            <td data-title="project Category" class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_desc'];?>
</td>
                                            <td data-title="Prj Code"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
</td>
                                            
                                            <td data-title="NS" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['NS'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="NS"><?php echo $_smarty_tpl->tpl_vars['data']->value['NS'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="OP" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['OP'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="OP"><?php echo $_smarty_tpl->tpl_vars['data']->value['OP'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="IP" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['IP'];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['IP'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="DN" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['DN'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="DN"><?php echo $_smarty_tpl->tpl_vars['data']->value['DN'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="PN" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['PN'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['PN'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="DR" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['DR'];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['DR'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="Total" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['Total'];?>
</td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                    </tbody>
                                </table>
                            </div>

                        </section> -->

                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Task per Dept</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-no-more table-bordered table-striped mb-none">
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs hidden-sm">Dept</th>
                                            <!-- <th class="text-right">Prj Code</th> -->
                                            
                                            <th class="text-right">NS</th>
                                            <th class="text-right">OP</th>
                                            <th class="text-right">IP</th>
                                            <th class="text-right">DN</th>
                                            <th class="text-right">PN</th>
                                            <th class="text-right">DR</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_task']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <tr>
                                            <td data-title="project Category" class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>
                                            <td data-title="Prj Code"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>
                                            
                                            <td data-title="NS" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['NS'];?>
</td>
                                            <td data-title="OP" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['OP'];?>
</td>
                                            <td data-title="IP" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['IP'];?>
</td>
                                            <td data-title="DN" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['DN'];?>
</td>
                                            <td data-title="PN" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['PN'];?>
</td>
                                            <td data-title="DR" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['DR'];?>
</td>
                                            <td data-title="Total" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['Total'];?>
</td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  -->
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_task']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <tr>
                                            <td data-title="project Category" class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td>
                                            <!-- <td data-title="Prj Code"><?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
</td> -->
                                            
                                            <td data-title="NS" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['NS'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view_task" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" task_sts_cd="NS"><?php echo $_smarty_tpl->tpl_vars['data']->value['NS'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="OP" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['OP'];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view_task" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" task_sts_cd="OP"><?php echo $_smarty_tpl->tpl_vars['data']->value['OP'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="IP" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['IP'];
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view_task" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['IP'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="DN" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['DN'];
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view_task" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" task_sts_cd="DN"><?php echo $_smarty_tpl->tpl_vars['data']->value['DN'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="PN" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['PN'];
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view_task" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['PN'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="DR" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['DR'];
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view_task" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['dept_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['DR'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="Total" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['Total'];?>
</td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- NS : Not Started, OP : Open, IP : In Progress, DN : Done, PN : Postpone, DR : Drop -->
                        </section>

                        <!-- NS : Not Started, OP : Open, IP : In Progress, DN : Done, PN : Postpone, DR : Drop -->

                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">My Outstanding Task due in 7 day or over dueee</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-no-more table-bordered table-striped mb-none">
                                            <thead>
    
                                                <tr>
                                                     <th>Due (Day)</th>
                                                     <th>Task</th> 
                                                    <th>CR Title </th>
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
                                                <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['due'];?>
</td> 
                                                <!-- <td class="hidden-phone"><?php echo $_smarty_tpl->tpl_vars['data']->value['task_desc'];?>
</td> -->
                                                <td class="hidden-phone"><a href="#" class="c_button_done" task_sts_desc="<?php echo $_smarty_tpl->tpl_vars['data']->value['task_sts_desc'];?>
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
"> <i class="fa fa-file-pdf-o"></i></a> - <a href="#" class="on-default c_view_project_info" id_ms_prj="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_ms_prj'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_title'];?>
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

        </span>
    </div>





    <div class="col-md-6">
        <span class="show-grid-block">
      <!--   <br>
            <h2 class="panel-title">My Task due in 7 day or Last </h2>
        <br> -->
            <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Project</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-no-more table-bordered table-striped mb-none">
                                    <thead>
                                        <tr>
                                            <th class="hidden-xs hidden-sm">project Category</th>
                                            <th class="text-right">Prj Code</th>
                                            
                                            <th class="text-right">NS</th>
                                            <th class="text-right">OP</th>
                                            <th class="text-right">IP</th>
                                            <th class="text-right">DN</th>
                                            <th class="text-right">PN</th>
                                            <th class="text-right">DR</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_prj']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <tr>
                                            <td data-title="project Category" class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_desc'];?>
</td>
                                            <td data-title="Prj Code"><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
</td>
                                            
                                            <td data-title="NS" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['NS'];
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable13 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="NS"><?php echo $_smarty_tpl->tpl_vars['data']->value['NS'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="OP" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['OP'];
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="OP"><?php echo $_smarty_tpl->tpl_vars['data']->value['OP'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="IP" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['IP'];
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable15 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['IP'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="DN" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['DN'];
$_prefixVariable16 = ob_get_clean();
if ($_prefixVariable16 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="DN"><?php echo $_smarty_tpl->tpl_vars['data']->value['DN'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="PN" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['PN'];
$_prefixVariable17 = ob_get_clean();
if ($_prefixVariable17 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['PN'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="DR" class="text-right"  >
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['data']->value['DR'];
$_prefixVariable18 = ob_get_clean();
if ($_prefixVariable18 == '0') {?> 0 <?php } else { ?> <a href="#" class="c_button_view" prj_ctgry_cd="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_ctgry_cd'];?>
" task_sts_cd="IP"><?php echo $_smarty_tpl->tpl_vars['data']->value['DR'];?>
</a> <?php }?>
                                            </td>
                                            <td data-title="Total" class="text-right"><?php echo $_smarty_tpl->tpl_vars['data']->value['Total'];?>
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


        </span>
    </div>
</div>

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_83855dbfd695392508_03165405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_83855dbfd695392508_03165405',
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
