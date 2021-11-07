<?php
/* Smarty version 3.1.32, created on 2019-11-27 17:19:40
  from 'C:\xampp\htdocs\Assigner\Views\Dtpo\form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dde4dbc5ead11_29425348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6c3da9edef4fdca3338a0216b2cc5850a856f7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Dtpo\\form.html',
      1 => 1563423935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dde4dbc5ead11_29425348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130865dde4dbc457755_96905957', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61435dde4dbc567d20_09197919', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_130865dde4dbc457755_96905957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_130865dde4dbc457755_96905957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Assigner\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
            
<!-- template diambil dari porto forms-layouts.html Horizontal Form -->
<div class="row">
    <div class="col-md-5">
        <!-- form diarahkan ke action save dengan metode POST -->
        <!-- <form id="form1" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Text/viewtextfile"> -->
        <form id="form1" >
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Create <Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Product : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="prod_name" placeholder=".Select Product" class="c_view_product form-control" id="prod_name" required >
						        <input type="hidden" class="form-control" name="prod_id" id="prod_id" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['prod_id'];?>
">
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Prod Category : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="prodctgry_desc" readonly="readonly" class="form-control" id="prodctgry_desc"  >
                                <input type="hidden" class="form-control" name="prod_ctgry_id" id="prod_ctgry_id"  >
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Prod Type : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="prodtype_desc" readonly="readonly" class="form-control" id="prodtype_desc"  >
                                <input type="hidden" class="form-control" name="prod_type_id" id="prod_type_id" >
                            </span>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label class="col-sm-4 control-label">Vendor : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="vendor_name" placeholder=".Vendor" class="c_view_vendor form-control" id="vendor_name" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_name'];?>
" required>
                                <input type="hidden" class="form-control" name="vendor_id" id="vendor_id" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_id'];?>
">
                            </span>
                        </div>
                    </div> -->

                    <div class="form-group perhitungan">
                        <label class="col-sm-4 control-label">Qty / Unit Price : </label>
                        <div class="col-sm-3">
                        <span class="show-grid-block">
                                <input type="text" name="item_qty" placeholder=".item_qty" class="form-control" id="item_qty" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['item_qty'];?>
" required>
						        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['id'];?>
">
                            </span>
                        </div>
                        <div class="col-sm-5">
                                <input type="text" name="unit_price" readonly="readonly" class="form-control" id="unit_price" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['unit_price'];?>
" required>
                        </div>
                    </div>

                    <div class="form-group perhitungan" >
                        <label class="col-sm-4 control-label">Total Price : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="asset_price" placeholder=".Price" class="form-control" id="asset_price" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['asset_price'];?>
" required>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Purchase Date : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>
									    <input type="text" data-plugin-datepicker class="form-control" name="puchase_dt" id="puchase_dt" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['dtpo']->value['puchase_dt'],"%m/%d/%Y");?>
" required>
								</div>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Purchase Type : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="purchase_type_name" placeholder=".Purchase Type" class="c_view_purchase_type form-control" id="purchase_type_name" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['purchase_type_name'];?>
" required>
                                <input type="hidden" class="form-control" name="purchase_type_id" id="purchase_type_id" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['purchase_type_id'];?>
" >
                            </span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Waranty Expiry : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</span>
									    <input type="text" data-plugin-datepicker class="form-control" name="waranty_expiry_dt" id="waranty_expiry_dt" placeholder="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['dtpo']->value['waranty_expiry_dt'],"%m/%d/%Y");?>
" required>
								</div>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">PO Item Note : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="po_item_note" placeholder=".po_item_note" class="form-control" id="po_item_note" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['po_item_note'];?>
" >
                            </span>
                        </div>
                    </div>

                    <!-- <input type="hidden" id="REK000" name="REK000" class="form-control"  value="REK000">

                    <div class="form-group">
												<label class="col-md-4 control-label"> Tgl_Efektiv : </label>
												<div class="col-md-8">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input id = "Tgl_Efektiv" name = "Tgl_Efektiv" type="text" data-plugin-datepicker class="form-control" required>
													</div>
												</div>
                                        </div>

                    <input type="hidden" id="_000022" name="_000022" class="form-control" value="000022">

                    <input type="hidden" id="card_no" name="card_no" class="form-control" value="557692******6601">

                    <input type="hidden" id="_1217074400" name="_1217074400" class="form-control" value="1217074400">

                    <input type="hidden" id="_000000004566" name="_000000004566" class="form-control" value="000000004566">

                    <input type="hidden" id="_0047338144" name="_0047338144" class="form-control" value="0047338144">

                    <div class="form-group">
                        <label class="col-sm-4 control-label">No_Kontrak : </label>
                        <div class="col-sm-8">
                            <input type="text" id="No_Kontrak" name="No_Kontrak" class="form-control" value="10-017-18-01408">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Period : </label>
                        <div class="col-sm-8">
                            <input type="text" id="Period" name="Period" class="form-control" value="004" required>
                        </div>
                    </div>

                    <input type="hidden" id="_000000000000022" name="_000000000000022" class="form-control" value="000000000000022">

                    <div class="form-group">
                        <label class="col-sm-4 control-label"> Nominal : </label>
                        <div class="col-sm-8">
                            <input type="text" id="Nominal" name="Nominal" class="form-control" value="3584600" required>
                        </div>
                    </div>

                    <input type="hidden" id="_0" name="_0" class="form-control" value="0">

                    <input type="hidden" id="_6011" name="_6011" class="form-control" value="6011">

                    <input type="hidden" id="_00" name="00" class="form-control" value="00">

                    <br> -->

                </div>
                <footer class="panel-footer">
                    <!-- <input type="hidden" name="listfileobject" id="listfileobject"> -->
                    <!-- <button class="btn btn-primary" id="btnSubmit">Submit </button>  -->
                    <button class="btn btn-primary" id="btnAdd">Add</button>            
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <button type="reset" class="btn btn-default" id="btnCancel">Cancel</button>
                </footer>
            </section>
        </form>
    </div>
    <div class="col-md-7">
        <form id="formx" class="form-horizontal" >
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">List Data</h2>                  
                </header>
                <div class="panel-body">
                <table class="table table-fixed" style="margin-top: 0px">
		          <thead>
		            <tr>
		              <th class="col-xs-1">#</th><th class="col-xs-4">prod_name</th><th class="col-xs-3">purchase_type</th><th class="col-xs-1">qty</th><th class="col-xs-2">Total Price</th><th class="col-xs-1">x</th>
		            </tr>
		          </thead>
		          <tbody id="filelistview">          	
		          </tbody>
                </table>  
                </div>   
            </section>       	
        </form>
    </div>
    <div class="col-md-7">
        <form id="form_save" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtpo/save">
        <div class="form-group">
                        <label class="col-sm-4 control-label">Vendor : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="vendor_name" placeholder=".Select Vendor" class="c_view_vendor form-control" id="vendor_name" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_name'];?>
" required>
                                <input type="hidden" class="form-control" name="vendor_id" id="vendor_id" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_id'];?>
">
                                <input type="hidden" name="po_number" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['po_number'];?>
">
                            </span>
                        </div>
        </div>
        
        <div class="form-group">
                        <label class="col-sm-4 control-label">Ship To : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="location_name" placeholder=".Select Location" class="c_view_location form-control" id="location_name" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['location_name'];?>
" required>
                                <input type="hidden" class="form-control" name="location_id" id="location_id" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['location_id'];?>
">
                            </span>
                        </div>
        </div>

        <div class="form-group">
                        <label class="col-sm-4 control-label">Po Note : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <textarea name="po_note" value="<?php echo $_smarty_tpl->tpl_vars['po_note']->value;?>
" class="form-control" rows="3" data-plugin-maxlength maxlength="140"><?php echo $_smarty_tpl->tpl_vars['dtpo']->value['po_note'];?>
</textarea>
													<p>
														<code>max-length</code> set to 140.
													</p>
                            </span>
                        </div>
        </div>

        

        <div class="form-group">
                        <label class="col-sm-10 control-label"></label>
                        <div class="col-sm-2">
                        <span class="show-grid-block">
                                <input type="hidden" name="listfileobject" id="listfileobject" value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
">
                                <input type="hidden" name="id" id="id_header" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['id'];?>
">
                                <button class="mb-xs mt-xs mr-xs btn btn-lgx btn-warning" id='tombol1' class="btn btn-primary" >Submit</button>
                                
                            </span>
                        </div>
        </div>
        </form>
    </div>
    <div class="col-md-5">
    </div>

    <div class="col-md-2">
        <div class="form-group">
                        <label class="col-sm-4 control-label"> </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <form id="form_vw" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtpo/viewpo">
                        <div id="div_tombol1" >

                            <input type="hidden" name="listfileobject_vw" id="listfileobject_vw">
                            
                        <button class="mb-xs mt-xs mr-xs btn btn-lgx btn-warning" id='tombol1' class="btn btn-primary" >View PO</button>
                        </div>
                        <div class="col-md-10">
                        <span class="show-grid-block">
                                <input type="hidden" name="vendor_name_vw" placeholder=".Select Vendor" class="c_view_vendor form-control" id="vendor_name_vw" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_name_vw'];?>
">
                                <input type="hidden" class="form-control" name="vendor_id_vw" id="vendor_id_vw" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_id_vw'];?>
">
                                <input type="hidden" name="location_name_vw" placeholder=".Select Vendor" class="c_view_location form-control" id="location_name_vw" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['location_name_vw'];?>
">
                                <input type="hidden" class="form-control" name="location_id_vw" id="location_id_vw" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['location_id_vw'];?>
">
                                <!-- <input type="text" class="form-control" name="po_number" id="po_number" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['po_number'];?>
"> -->
                        </span>
                        </div>
                        </form>
                            </span>
                        </div>
        </div>
    </div>

        

        
        

        <!-- <div class="col-md-4">
                      <span class="show-grid-block">
                        <form id="form_vw" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtpo/viewpo">
                        <div id="div_tombol1" class="col-md-12">

                            <input type="hidden" name="listfileobject_vw" id="listfileobject_vw">
                        <button class="mb-xs mt-xs mr-xs btn btn-lgx btn-warning" id='tombol1' class="btn btn-primary" >View PO</button>
                        </div>
                        <div class="col-md-10">
                        <span class="show-grid-block">
                                <input type="hidden" name="vendor_name_vw" placeholder=".Select Vendor" class="c_view_vendor form-control" id="vendor_name_vw" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_name_vw'];?>
">
                                <input type="hidden" class="form-control" name="vendor_id_vw" id="vendor_id_vw" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_id_vw'];?>
">
                        </span>
                        </div>
                        </form>
                      </span>
        </div> -->




         <!-- <div class="col-md-8">
                      <span class="show-grid-block">
                        <form id="form_save" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtpo/save">
                        <div class="col-md-8">
                        <span class="show-grid-block">
                                <input type="text" name="vendor_name" placeholder=".Select Vendor" class="c_view_vendor form-control" id="vendor_name" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_name'];?>
" required>
                                <div class="form-group">
												<label class="col-md-4 control-label" for="textareaDefault">PO Note</label>
												<div class="col-md-8">
													<textarea name="address" value="<?php echo $_smarty_tpl->tpl_vars['msvendor']->value['address'];?>
" class="form-control" rows="3" data-plugin-maxlength maxlength="140"><?php echo $_smarty_tpl->tpl_vars['msvendor']->value['address'];?>
</textarea>
													<p>
														<code>max-length</code> set to 140.
													</p>
												</div>
					</div>
                                <input type="hidden" class="form-control" name="vendor_id" id="vendor_id" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_id'];?>
">
                        </span>
                        </div>
                        <div id="div_tombol1" class="col-md-4">

                            <input type="hidden" name="listfileobject" id="listfileobject">
                        <button class="mb-xs mt-xs mr-xs btn btn-lgx btn-warning" id='tombol1' class="btn btn-primary" >Submit</button>
                        </div>
                        
                        </form>
                      </span>
        </div>

        <div class="col-md-4">
                      <span class="show-grid-block">
                        <form id="form_vw" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Dtpo/viewpo">
                        <div id="div_tombol1" class="col-md-12">

                            <input type="hidden" name="listfileobject_vw" id="listfileobject_vw">
                        <button class="mb-xs mt-xs mr-xs btn btn-lgx btn-warning" id='tombol1' class="btn btn-primary" >View PO</button>
                        </div>
                        <div class="col-md-10">
                        <span class="show-grid-block">
                                <input type="hidden" name="vendor_name_vw" placeholder=".Select Vendor" class="c_view_vendor form-control" id="vendor_name_vw" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_name_vw'];?>
">
                                <input type="hidden" class="form-control" name="vendor_id_vw" id="vendor_id_vw" value="<?php echo $_smarty_tpl->tpl_vars['dtpo']->value['vendor_id_vw'];?>
">
                        </span>
                        </div>
                        </form>
                      </span>
        </div>  -->
    </div>
</div>


<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_61435dde4dbc567d20_09197919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_61435dde4dbc567d20_09197919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor\jquery\jquery.min.js"><?php echo '</script'; ?>
> -->

<?php echo '<script'; ?>
 type="text/javascript">
    $("#btnCancel").click(function()
    {
        
        parent.history.back();
        return false;
    });

$('.perhitungan').keyup(function()
{
    var item_qty = parseInt($("#item_qty").val())
    var asset_price = parseInt($("#asset_price").val())
    var unit_price = asset_price / item_qty;


    $('#unit_price').attr("value",unit_price)

});


// $('.perhitungan2').keyup(function()
// {
//     var item_qty = parseInt($("#item_qty").val())
//     var unit_price = parseInt($("#unit_price").val())

//     var asset_price = unit_price * item_qty;

//     $('#asset_price').attr("value",asset_price)
// });

var baseUrl = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
";

$(document).ready(function() {

    // alert("gjghj");

    // var listfileobject = $("#listfileobject").val()

    // var listfileobject = <?php if (isset($_smarty_tpl->tpl_vars['po_number']->value)) {
echo $_smarty_tpl->tpl_vars['po_number']->value;
} else { ?>[]<?php }?>;	

    // alert(listfileobject['0']);
// rendercart();


    // $("#filelistview").html("");
    //   for (i = 0; i < listfileobject.length; i++) 
    //     {
    // 		var row = '<tr><td class="col-xs-1">' + (i + 1) + '</td><td class="col-xs-1">' + listfileobject[i].prod_name + '</td><td class="col-xs-2">' + listfileobject[i].purchase_type_name + '</td><td class="col-xs-1">' + listfileobject[i].item_qty + '</td><td class="col-xs-1">' + listfileobject[i].asset_price + '</td>><td class="col-xs-4"><a href="#" class="apus" dataid=' + i + ' role="button" onclick="submit_on(); remove(' + i + '); "><i class="fa fa-trash-o"></i></a></td></tr>';
    //         // var row = '<tr><td class="col-xs-1">' + (i + 1) + '</td><td class="col-xs-1">' + listfileobject[i].prod_name + '</td><td class="col-xs-2">' + listfileobject[i].purchase_type_name + '</td><td class="col-xs-1">' + listfileobject[i].item_qty + '</td><td class="col-xs-1">' + listfileobject[i].asset_price + '</td><td class="col-xs-1">' + listfileobject[i].asset_price + '</td><td class="col-xs-4"><a href="#" class="apus" dataid=' + i + ' role="button" onclick="submit_on(); remove(' + i + '); "><i class="fa fa-trash-o"></i></a></td></tr>';
    //         $("#filelistview").append(row);
            
    //     //console.log(listfileobject);
	//     } 


	//-------------------Picker Product----------------------
    $('.c_view_product').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Dtpo/pagelistajax'             
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [                
            { "data" : "id", "title" : "id" },
            { "data" : "prod_name", "title" : "prod_name" },
            { "data" : "prodctgry_desc", "title" : "prodctgry_desc" },
            { "data" : "prodtype_desc", "title" : "prodtype_desc" }
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
        $("#prod_name").val(data["prod_name"]);
        $("#prodctgry_desc").val(data["prodctgry_desc"]); 
        $("#prod_ctgry_id").val(data["prod_ctgry_id"]);
        $("#prod_type_id").val(data["prod_type_id"]);
        $("#prodtype_desc").val(data["prodtype_desc"]); 
        $("#prod_id").val(data["id"]); 

      }
	});
    //------------------------------------------------------------
    //-------------------Picker Vendor----------------------
    $('.c_view_vendor').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Dtpo/pagelistajax_vendor'             
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [                
            { "data" : "id", "title" : "id" },
            { "data" : "name", "title" : "name" },
            { "data" : "contact_person", "title" : "contact_person" },
            { "data" : "email", "title" : "email" }
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
        $("#vendor_name").val(data["name"]);
        $("#vendor_id").val(data["id"]); 
        $("#vendor_name_vw").val(data["name"]);
        $("#vendor_id_vw").val(data["id"]); 

      }
    });
    
    //-------------------Picker Location----------------------
    $('.c_view_location').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Dtpo/pagelistajax_location'             
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [                
            { "data" : "id", "title" : "id" },
            { "data" : "location_cd", "title" : "location_cd" },
            { "data" : "location_name", "title" : "location_name" },
            { "data" : "address_line", "title" : "address_line" }
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
        $("#location_name").val(data["location_name"]);
        $("#location_id").val(data["id"]);
        $("#location_cd").val(data["location_cd"]); 
        $("#location_name_vw").val(data["location_name"]);
        $("#location_id_vw").val(data["id"]);

      }
    });
    
    //-------------------Picker Purchase Type----------------------
    $('.c_view_purchase_type').bantinganPicker({
      title       : 'Page List',    
      width       : "600px",  
      showbutton  : false,          
      datatableoption : { 
        "ajax": {

			//diambil dari function controller user management
            "url" : baseUrl + '/Dtpo/pagelistajax_purchase_type'             
        },
		"order": [[ 2, "id" ]],
		//pengaturan kolom di picker
        "columns" : [                
            { "data" : "id", "title" : "id" },
            { "data" : "purchtype_desc", "title" : "purchtype_desc" },
            { "data" : "status", "title" : "status" }
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
        $("#purchase_type_name").val(data["purchtype_desc"]);
        $("#purchase_type_id").val(data["id"]); 

      }
	});
});

//-------------------ambil data taro di list----------------------

var $SelectedId;


// var listfileobject = <?php if (isset($_smarty_tpl->tpl_vars['data']->value['listfileobject'])) {
echo $_smarty_tpl->tpl_vars['data']->value['listfileobject'];
} else { ?>[]<?php }?>;	
var listfileobject = <?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {
echo $_smarty_tpl->tpl_vars['data']->value;
} else { ?>[]<?php }?>;	
rendercart();
// alert(listfileobject);




    $("#form1").submit(function() {
    // alert("Please Add atlease 1 data to submit");

	

    //cek pengisian kolom dan simpan data inputan array
    // if ($("#Tgl_Efektiv").val() != "" && $("#No_Kontrak").val() != "" && $("#Period").val() != "" && $("#Nominal").val() != "" )
    // {

        // var str = $("#No_Kontrak").val();
        // var res = str.replace("-", "");
        // for (i = 0; i < str.length; i++) 
        // {
        // res = res.replace("-", "");
        // res = res.replace(" ", "");
        // } 

    	var fileobject = {
        id:$("#id").val(),
        prod_name:$("#prod_name").val(),
        prod_id:$("#prod_id").val(),
        prodctgry_desc:$("#prodctgry_desc").val(),
        prod_ctgry_id:$("#prod_ctgry_id").val(),
        prodtype_desc:$("#prodtype_desc").val(),
        prod_type_id:$("#prod_type_id").val(),
        vendor_name:$("#vendor_name").val(),
        vendor_id:$("#vendor_id").val(),
        item_qty:$("#item_qty").val(),
        asset_price:$("#asset_price").val(),
        unit_price:$("#unit_price").val(),
        puchase_dt:$("#puchase_dt").val(),
        purchase_type_name:$("#purchase_type_name").val(),
        purchase_type_id:$("#purchase_type_id").val(),
        waranty_expiry_dt:$("#waranty_expiry_dt").val(),
        po_item_note:$("#po_item_note").val()


        // vendor_name_vw:$("#vendor_name_vw").val(),
        // vendor_id_vw:$("#vendor_id_vw").val()
        // REK000:$("#REK000").val(),
        // Tgl_Efektiv:$("#Tgl_Efektiv").val(),
        // _000022:$("#_000022").val(),
        // card_no:$("#card_no").val(),
    	// _1217074400:$("#_1217074400").val(),
    	// _000000004566:$("#_000000004566").val(),
        // _0047338144:$("#_0047338144").val(),

        // No_Kontrak:res,
        // Period:$("#Period").val(),

    	// _000000000000022:$("#_000000000000022").val(),
    	// Nominal:$("#Nominal").val(),
    	// _0:$("#_0").val(),
        // _6011:$("#_6011").val(),
        // _00:$("#_00").val()
    	};
    listfileobject.push(fileobject);    	    	
    rendercart(); 
// return false; 
//     }

      //Disable tombil id="btnSubmit"
        // if (listfileobject.length == 0)
        // {
        //   document.getElementById('btnSubmit').disabled = true;
        // }
        // else
        // {
        //   document.getElementById('btnSubmit').disabled = false;
        // }
    return false; 
    }

);

    function rendercart()
    {
    	$("#filelistview").html("");
      for (i = 0; i < listfileobject.length; i++) 
      {
    		var row = '<tr><td class="col-xs-1">' + (i + 1) + '</td><td class="col-xs-1">' + listfileobject[i].prod_name + '</td><td class="col-xs-2">' + listfileobject[i].purchase_type_name + '</td><td class="col-xs-1">' + listfileobject[i].item_qty + '</td><td class="col-xs-1">' + listfileobject[i].asset_price + '</td>><td class="col-xs-4"><a href="#" class="apus" dataid=' + i + ' role="button" onclick="submit_on(); remove(' + i + '); "><i class="fa fa-trash-o"></i></a></td></tr>';
            // var row = '<tr><td class="col-xs-1">' + (i + 1) + '</td><td class="col-xs-1">' + listfileobject[i].prod_name + '</td><td class="col-xs-2">' + listfileobject[i].purchase_type_name + '</td><td class="col-xs-1">' + listfileobject[i].item_qty + '</td><td class="col-xs-1">' + listfileobject[i].asset_price + '</td><td class="col-xs-1">' + listfileobject[i].asset_price + '</td><td class="col-xs-4"><a href="#" class="apus" dataid=' + i + ' role="button" onclick="submit_on(); remove(' + i + '); "><i class="fa fa-trash-o"></i></a></td></tr>';
            $("#filelistview").append(row);
            
        //console.log(listfileobject);
		  } 

		  var cartcontainer = $('#filelistview');
	    var height = cartcontainer[0].scrollHeight;
        cartcontainer.scrollTop(height);
        $("#id").val("");
            return false; 	 	
    }

    $("#form_save").submit(function() 
    {    
        // $("#vendor_name_vw").val($("#vendor_name").val());
    	$("#listfileobject").val(JSON.stringify(listfileobject));
        // $("#listfileobject_vw").val(JSON.stringify(listfileobject));
    });

    $("#form_vw").submit(function() 
    {    	
    	// $("#listfileobject").val(JSON.stringify(listfileobject));
        $("#listfileobject_vw").val(JSON.stringify(listfileobject));
    });

//Disable tombol id="btnSubmit"
    function submit_on() {
    //   if (listfileobject.length == 1)
    //     // {
    //     //   document.getElementById('btnSubmit').disabled = true;
    //     // }
    //     // else
    //     // {
    //     //   document.getElementById('btnSubmit').disabled = false;
    //     // }

    //   alert(listfileobject.length);
    }

    // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Projectactivity/delete/" + $SelectedId;

    // $("#form1").submit(function() 
    // {    	
    // 	$("#listfileobject").val(JSON.stringify(listfileobject));
    // });


    //Fungsi Untuk mendelete ROW array di memory
    function remove(index) {
        listfileobject.splice(index, 1);
        rendercart();
        // alert(index);
    }



<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'bodyfooter'} */
}
