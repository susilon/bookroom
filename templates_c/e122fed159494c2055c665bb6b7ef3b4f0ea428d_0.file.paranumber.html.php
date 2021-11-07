<?php
/* Smarty version 3.1.32, created on 2020-01-15 19:09:27
  from 'D:\ano site\Assigner\Views\Memointernal\paranumber.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e1f00f7e5a366_93212534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e122fed159494c2055c665bb6b7ef3b4f0ea428d' => 
    array (
      0 => 'D:\\ano site\\Assigner\\Views\\Memointernal\\paranumber.html',
      1 => 1574934359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1f00f7e5a366_93212534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52925e1f00f7dbafb4_79349775', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82835e1f00f7e43dd3_89134474', 'bodyfooter');
?>







<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154815e1f00f7e452d2_19256782', 'scriptfooter');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_52925e1f00f7dbafb4_79349775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_52925e1f00f7dbafb4_79349775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  

<button type="button" id="btn_add" class="mb-xs mt-xs mr-xs btn btn-primary">Add</button>


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
                                            <th class="hidden-phone"></th>
											 <th>Id</th> 
											<!-- <th>ref code</th> -->
                                            <th>Desc Code</th>
                                            <th>Update date</th>
                                            <th class="hidden-phone">Update by</th>
                                            <th class="hidden-phone">Next Number</th>
                                            <th class="hidden-phone">Is Active</th>
                                            <!-- <th class="hidden-phone">Edit</th> -->
										</tr>
									</thead>
									

                                        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdata']->value->data, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                            <tr class="gradeA">
                                            <td class="center hidden-phone">
                                            <a class="btn btn-default goto_bookform"
                                            id_msnumber="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"  is_active="<?php echo $_smarty_tpl->tpl_vars['data']->value['is_active'];?>
"   
                                            >Edit
                                            </a>
                                        
                                            </td>    
                                             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td> 
                                            <!-- <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ref_cde'];?>
</td> -->
                                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['descr'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['update_dte'];?>
</td>
                                             <td class="center hidden-phone" id="<?php echo 'jam_masuk';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['update_by'];?>
</td>
                                             <td class="center hidden-phone" id="<?php echo 'jam_keluar';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['availablenumb'];?>
</td>
                                             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['is_active'];?>
</td>  
                                             <!-- <td class="center hidden-phone">
                                            <a href="#modalForm" class="modal-with-form btn btn-default lnk_sts" id="<?php echo 'status';
echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" 
                                            code="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
" 
                                            >Edit
                                            </a>
                                        
                                            </td>  -->
                                            </tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
										<!--<tr class="gradeA">
											<td>Gecko</td>
											<td>Netscape Browser 8</td>
											<td>Win 98SE+</td>
											<td class="center hidden-phone">1.7</td>
											<td class="center hidden-phone">A</td>
										</tr> -->
									</tbody>
								</table>
							</div>
                        </section>
                        
<div id="modalFormx" class="modal-block modal-block-primary mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">Registration Form</h2>
											</header>
											<div class="panel-body">
												<form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
													<div class="form-group mt-lg">
														<label class="col-sm-3 control-label" >Name</label>
														<div class="col-sm-9">
															<input type="text" id = "nama" name="name" class="form-control" placeholder="Type your name..." required/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Email</label>
														<div class="col-sm-9">
															<input type="email" id="email" name="email" class="form-control" placeholder="Type your email..." required/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">URL</label>
														<div class="col-sm-9">
															<input type="url" name="url" class="form-control" placeholder="Type an URL..." />
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Comment</label>
														<div class="col-sm-9">
															<textarea rows="5" class="form-control" placeholder="Type your comment..." required></textarea>
														</div>
													</div>
												</form>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary modal-confirm" onclick="simpan_absenx()">Submit</button>
														<button class="btn btn-default modal-dismiss">Cancel</button>
													</div>
												</div>
											</footer>
										</section>
</div>
<!-- <div id="modalForm" class="modal-block modal-block-full mfp-hide"> -->
 <div id="modalForm" class="modal-block modal-block-lg mfp-hide"> 
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title">Edit Absen
                                                    <span class="show-grid-block" id="emp_name" ></span>
                                                    <span class="show-grid-block" id="abs_dt" ></span>
                                                </h2>
											</header>
											<div class="panel-body">
												<div class="modal-wrapper">
													<div class="row show-grid">
                                                        <div class="col-md-2"><span class="show-grid-block" id="id_abs"></span></div>
                                                        <div class="col-md-2"><span class="show-grid-block" >In</span></div>
                                                        <div class="col-md-2"><span class="show-grid-block" >Out</span></div>
                                                        <div class="col-md-2"><span class="show-grid-block" >Late</span></div>
                                                        <div class="col-md-2"><span class="show-grid-block" >Earlier</span></div>
                                                        <div class="col-md-2"><span class="show-grid-block" >Short</span></div>
                                                        <!-- <div class="col-md-6"><span class="show-grid-block" >Remark</span></div> -->
                                                        <!-- <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div> -->
                                                    </div>
                                                    <div class="row show-grid">
                                                        <div class="col-md-2"><span class="show-grid-block">Input</span></div>
                                                         <div class="col-md-2"><input type="text" id = "cek_in" class="form-control" disabled/></div>
                                                        <div class="col-md-2"><input type="text" id = "cek_out" class="form-control" disabled/></div>
                                                        <div class="col-md-2"><input type="text" id = "is_late" class="form-control" disabled/></span></div>
                                                        <div class="col-md-2"><input type="text" id = "is_earlier" class="form-control" disabled/></div>
                                                        <div class="col-md-2"><input type="text" id = "is_short" class="form-control" disabled/></div> 
                                                        <!-- <div class="col-md-6"><span class="show-grid-block" ></span></div> -->
                                                        <!-- <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div> -->
                                                    </div>
                                                    <div class="row show-grid">
                                                        <div class="col-md-2"><span class="show-grid-block"></span></div>
                                                        <div class="col-md-10"><span class="show-grid-block" id="remark_in"></span></div>
                                                        <!-- <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div> -->
                                                        <!-- <div class="col-md-6"><span class="show-grid-block" id="remark_out"></span></div> -->
                                                        <!-- <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div> -->
                                                    </div>
                                                    <div class="row show-grid">
                                                        <div class="col-md-2"><span class="show-grid-block"></span></div>
                                                        <div class="col-md-10"><span class="show-grid-block" id="remark_out"></span></div>
                                                        <!-- <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div> -->
                                                        <!-- <div class="col-md-6"><span class="show-grid-block" id="remark_out"></span></div> -->
                                                        <!-- <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div> -->
                                                    </div>
                                                    <hr>
                                                    <div class="row show-grid">
                                                        <div class="col-md-2"><span class="show-grid-block">Tap</span></div>
                                                        <div class="col-md-2"><span class="show-grid-block">
                                                            <!-- <div class="input-group" id="wtimesss">
														<span class="input-group-addon">
															<i class="fa fa-clock-o"></i>
														</span> -->
                                                            <!-- <input type="text" id="jam_masuk" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false,"minuteStep": 1 }' > -->
                                                            <input type="text" id = "jam_masuk" name="name" class="form-control" placeholder="time" required/>
                                                            <!-- </div> -->
                                                        </span></div>
                                                          <div class="col-md-2"><span class="show-grid-block">
                                                        <!-- <input type="text" id="jam_keluar" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false,"minuteStep": 1 }' > -->
                                                        <input type="text" id = "jam_keluar" name="name" class="form-control" placeholder="Time" required/>      
                                                        </span></div>  
                                                        <div class="col-md-2"><input type="text" id = "late" class="form-control" disabled/></div>
                                                        <div class="col-md-2"><input type="text" id = "earlier" class="form-control" disabled/></div>
                                                        <div class="col-md-2"><input type="text" id = "short" class="form-control" disabled/></div>
                                                        <!-- <div class="col-md-6"><span class="show-grid-block" id="remark"></span></div> -->
                                                        <!-- <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div>
                                                        <div class="col-md-1"><span class="show-grid-block">.col-md-1</span></div> -->
                                                    </div>
                                                    <div class="row show-grid">
                                                        <div class="col-md-2"><span class="show-grid-block">Remark</span></div>
                                                        <div class="col-md-10">
                                                        <input type="text" id = "remark_update" class="form-control"/>
                                                        <input type="text" id = "default_in" class="form-control"/>
                                                        <input type="text" id = "default_out" class="form-control"/>
                                                        <input type="text" id = "default_range" class="form-control"/>
                                                        </div>
                                                    </div>
												</div>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-md-12 text-right">
														<button class="btn btn-primary modal-confirm" onclick="simpan_absen()" >Confirm</button>
														<button class="btn btn-default modal-dismiss" id="btn_mdl_cancel">Cancel</button>
													</div>
												</div>
											</footer>
										</section>
</div>
                        





 
<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_82835e1f00f7e43dd3_89134474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_82835e1f00f7e43dd3_89134474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
            
<?php
}
}
/* {/block 'bodyfooter'} */
/* {block 'scriptfooter'} */
class Block_154815e1f00f7e452d2_19256782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_154815e1f00f7e452d2_19256782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
$('#btn_mdl_cancel').click(function() {
		new PNotify({
			title: 'Notification',
			text: 'Canceled ',
			type: 'custom',
			addclass: 'notification-primary',
			icon: 'fa fa-twitter'
		});
    });

function notif($title,$text,$type,$addclass,$icon) {
		new PNotify({
			title: $title,
			text: $text,
			type: $type,
			addclass: $addclass,
			icon: $icon
		});
    }


// function edit_tap()
// {
//     // $SelectedId = $(this).attr("dataid");
//     // // $a = $dataid;
//     // alert($SelectedId);

//     // $("#nama").val($SelectedId);
// 	// // $("#t_remark_modal").val("");
// };
var $from,$to ;

$(".goto_bookform").click(function()
{
    
    // $from = $("#periodstart").val();
    // $select_emp_name = $("#select_emp_name").val();
    $id_msnumber = $(this).attr("id_msnumber");
    $is_active = $(this).attr("is_active");
    // alert($code);
	window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/edit/" + $id_msnumber + "/" + $is_active ;
});


$("#btn_add").click(function()
{ 
 window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/form_master/" ;
});

function simpan_absen()
{
    
    // $id_abs=$("#id_abs").text();
    $jam_masuk = $("#jam_masuk").val();
    $jam_keluar = $("#jam_keluar").val();
    $remark_update = $("#remark_update").val();
    $late = $("#late").val();
    $earlier = $("#earlier").val();
    $short = $("#short").val();

    document.getElementById("status" + $id_abs).setAttribute("jam_masuk", $jam_masuk);
    document.getElementById("status" + $id_abs).setAttribute("jam_keluar", $jam_keluar);
    document.getElementById("status" + $id_abs).setAttribute("remark_update", $remark_update);

    dataygmaudikirim = { 
                          id : $("#id_abs").text(),
                          abs_dt : $("#abs_dt").text(),
                          default_in : $("#default_in").val(),
                          default_out : $("#default_out").val(),
                          default_range : $("#default_range").val(),
                          jam_masuk : $("#jam_masuk").val(),
                          jam_keluar : $("#jam_keluar").val(),
                          remark_update : $("#remark_update").val(),
                          status : '9 checked'

                  	     };

	// alert(dataygmaudikirim);
    // console.log($("#jam_masuk").val());
    // console.log(dataygmaudikirim['status']);

	$.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Absen/edit_jam",dataygmaudikirim)
                      .done(function(data) 
                          { 
                              console.log(data.pos.default_in);
                            //   console.log(data.hasil_edit_jam.jam_masuk);
                            //   console.log(data.hasil_edit_jam.status);
                            // console.log(data.hasil_edit_jam.remark_update);
                            // console.log("jam_keluar"+$id_abs+data.hasil_edit_jam.jam_masuk);

    // $("#abs_id").text(data.hasil_cek.id_in);
    document.getElementById('jam_masuk'+$id_abs).innerHTML = data.hasil_edit_jam.jam_masuk;
    document.getElementById('jam_keluar'+$id_abs).innerHTML = data.hasil_edit_jam.jam_keluar;
    document.getElementById('status'+$id_abs).innerHTML = '9 Checked';
    // document.getElementById('jam_keluar'+$id_abs).innerHTML = $("#jam_keluar").val();

    document.getElementById("status" + $id_abs).setAttribute("late", data.hasil_edit_jam.late);
    document.getElementById("status" + $id_abs).setAttribute("earlier", data.hasil_edit_jam.earlier);
    document.getElementById("status" + $id_abs).setAttribute("short", data.hasil_edit_jam.short);

                          });
    // alert($("#jam_masuk6").text());
    $title = 'Notification :',
	$text = 'Checked & Data Saved',
	$type = 'custom',
	$addclass = 'notification-primary',
	$icon = 'fa fa-twitter'
    notif($title,$text,$type,$addclass,$icon);

    return false;

    
}


	$(".lnk_sts").click(function()
	{

        $id_abs = $(this).attr("id_abs");
        $abs_dt = $(this).attr("abs_dt");
        $emp_name = $(this).attr("emp_name");
        $cek_in = $(this).attr("cek_in");
        $cek_out = $(this).attr("cek_out");
        $default_in = $(this).attr("default_in");
        $default_out = $(this).attr("default_out");
        $default_range = $(this).attr("default_range");
        $is_late = $(this).attr("is_late");
        $is_earlier = $(this).attr("is_earlier");
        $is_short = $(this).attr("is_short");
        $remark_in = $(this).attr("remark_in");
        $remark_out = $(this).attr("remark_out");
        $jam_masuk = $(this).attr("jam_masuk");
        $jam_keluar = $(this).attr("jam_keluar");
        $late = $(this).attr("late");
        $earlier = $(this).attr("earlier");
        $short = $(this).attr("short");

        $("#id_abs").text($id_abs);
        $("#emp_name").text($emp_name);
        $("#abs_dt").text($abs_dt);
        $("#cek_in").val($cek_in);
        $("#cek_out").val($cek_out);
        $("#default_in").val($default_in);
        $("#default_out").val($default_out);
        $("#default_range").val($default_range);
        $("#is_late").val($is_late);
        $("#is_earlier").val($is_earlier);
        $("#is_short").val($is_short);
        $("#remark_in").text("Remark In : " + $remark_in);
        $("#remark_out").text("Remark Out : " + $remark_out);
        $("#jam_masuk").val($jam_masuk);
        $("#jam_keluar").val($jam_keluar);
        $("#late").val($late);
        $("#earlier").val($earlier);
        $("#short").val($short);

        $("#jam_masuk").text($jam_masuk);

        

        
        // $(this).attr("jam_keluar").val($jam_keluar);
        // $(this).attr("remark_update").val($remark_update);
  
    // alert($jam_masuk + $jam_keluar + $emp_name + $id_abs);
	});



















<?php echo '</script'; ?>
>


<!-----------------------------Reference-------------------------------------------------------- -->

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.css" />

        <!-- Specific Page Vendor -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Base, Components and Settings -->
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
> 
		
		<!-- Theme Custom -->
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
> 
		
		<!-- Theme Initialization Files -->
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
> 


		<!-- Examples -->
         <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.notifications.js"><?php echo '</script'; ?>
> 
         <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
> -->
         
		
		<!-- Theme Base, Components and Settings -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Custom -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Initialization Files -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>


		<!-- Examples -->
		  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.default.js"><?php echo '</script'; ?>
> 
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.row.with.details.js"><?php echo '</script'; ?>
> 
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/tables/examples.datatables.tabletools.js"><?php echo '</script'; ?>
>  


<!-- Vendor CSS -->
		  <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />   -->

		<!-- Specific Page Vendor CSS -->
		 <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/select2/select2.css" /> 
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

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
        

        <!---------------------------------------- Modal ----------------------------------------------->
        
        <!-- Vendor CSS -->
		<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/css/bootstrap.css" /> -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.css" />
		 <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />  -->

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/modernizr/modernizr.js"><?php echo '</script'; ?>
>

        <!-- Vendor -->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.js"><?php echo '</script'; ?>
> -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"><?php echo '</script'; ?>
>
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
> -->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
> -->
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
> -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/magnific-popup/magnific-popup.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
>
		
		<!-- Specific Page Vendor -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Base, Components and Settings -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Custom -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Initialization Files -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>


		<!-- Examples -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>
        

         <!-- Time Picker------------------------------------------------------------------------- -->

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"><?php echo '</script'; ?>
>
		
		<!-- Theme Initialization Files -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
>
        

        <!-- sdfgsdfg  ------------------------------------------------------------------------------------- -->


    <!-- Searching multiple ------------------------------------------------------------------------- -->

		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"><?php echo '</script'; ?>
> 
		
		 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.init.js"><?php echo '</script'; ?>
> 


        

<?php
}
}
/* {/block 'scriptfooter'} */
}
