<?php
/* Smarty version 3.1.32, created on 2020-01-20 10:42:09
  from 'D:\ano site\Assigner\Views\Memointernal\bookform.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e252191060576_55294855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce0aa2006d097e6864a03b9cbd0d62ed513935d' => 
    array (
      0 => 'D:\\ano site\\Assigner\\Views\\Memointernal\\bookform.html',
      1 => 1579491378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e252191060576_55294855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196345e252190f3ce84_32373774', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168815e25219104a505_47663232', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_196345e252190f3ce84_32373774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_196345e252190f3ce84_32373774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\Assigner\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
   
<!-- dfgdfgdfg -->
<input type="hidden" name="noregister4" id="sts_input" class="form-control" value="input_new"> 
<input type="hidden" name="noregister5" id="seq_no_temp" class="form-control">
<input type="hidden" name="id_from_msnumber" id="id_from_msnumber" value="<?php echo $_smarty_tpl->tpl_vars['id_from_msnumber']->value;?>
" class="form-control">
<!-- <button type="button" class="mb-xs mt-xs mr-xs btn btn-info" id="btn_chhose_number">Choose Number Type</button>  -->

<!-- Select Number -->

<div class="row show-grid">
	<div class="col-md-2">Select Number</div>
	<div class="col-md-2"></div>
	<div class="col-md-2"></div>
</div>
<div class="row show-grid">
<div class="col-md-2"><span class="show-grid-block">
                                        <select name="combo_mi" id="combo_mi" class="form-control populate" onchange="combo_mi()" >
                                        <option value="Book No" selected>Book No</option>
                                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_msnumber']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"sd><?php echo $_smarty_tpl->tpl_vars['data']->value['descr'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                                            <!-- <option value="9 Checked">9 Checked</option>
                                             <option value="1 Need Check">1 Need Check</option>
                                            <option value="2 OK">2 OK</option> -->
                                        </select>     
																				</span>
</div>

<div class="col-md-2">
  <span class="show-grid-block">
     <!-- <label class="control-label" id="label_desc_msnumb" ><?php echo $_smarty_tpl->tpl_vars['desc_msnumber']->value['desc'];?>
</label> -->
     <input type="text" name="label_desc_msnumb" id="label_desc_msnumb" value="<?php echo $_smarty_tpl->tpl_vars['desc_msnumber']->value['descr'];?>
" class="form-control" readonly>
     <input type="hidden" name="label_id_msnumb" id="label_id_msnumb" value="<?php echo $_smarty_tpl->tpl_vars['desc_msnumber']->value['id'];?>
" class="form-control">
     <input type="hidden" id="tahun_from_view" value="<?php echo $_smarty_tpl->tpl_vars['tahun_from_view']->value;?>
" class="form-control">
  </span>
</div>

<div class="col-md-2">
  <!-- <span> 
    <select name="year" id="year" class="form-control populate" onchange="combo_year()">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_number']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['year'];?>
"<?php if ($_smarty_tpl->tpl_vars['tahun_from_view']->value == $_smarty_tpl->tpl_vars['data']->value['year']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['year'];?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </select> 
</span> -->
</div>

</div>
 <br> 

<div class="panel-body"> 
  <div class="row">
                    <div class="col-md-12" id="label_upper"> Click "GO" to book "New" Number, or Choose and click number in the Recomended number panel to book and Use Canceled number if exist
                    </div>
                    <div class="col-md-2">
                      <span class="show-grid-block">
                        <!-- <label class="control-label" id="label1"> Click "GO" to Book </label> -->
                        <!-- <br> -->
                        <form id="form1">
                        <div id="div_tombol1">
                        <button class="mb-xs mt-xs mr-xs btn btn-lg btn-warning" id='tombol1' class="btn btn-primary" seq_number="<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
" >GO</button>
                        </div>
                        </form>
                      </span>
                    </div>

                    <div class="col-md-2">
                      <span class="show-grid-block">
                        <!-- <label class="control-label" id="label2"> </label> -->
                        <!-- <br> -->
                        <form id="form2" >    
                        <input type="hidden" name="noregister" id="book_seq_numb" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
">
                        <input type="hidden" name="noregister" id="ref_no" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mi_ref_no']->value;?>
">
                        <input type="hidden" name="noregister2" id="updt_by" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
">
                        <input type="hidden" name="noregister3" id="book_dte" class="form-control" value="<?php echo smarty_modifier_date_format(time(),"%Y/%m/%d");?>
">
                        <div id = "div_tombol2">
                        <button style="visibility:hidden" class="mb-xs mt-xs mr-xs btn btn-lg btn-warning" id='tombol2' class="btn btn-primary" seq_number="<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
" >Sure</button>
                        
                        </div>
                        </form>
                      </span>
                    </div>

                    <div class="col-md-8">
                      <span class="show-grid-block">
                        <!-- <label class="control-label">. </label> -->
                        <!-- <br> -->
                        <form id="form3">
                        <div id="div_tombol3">
                        <button style="visibility:hidden" class="mb-xs mt-xs mr-xs btn btn-lg btn-warning" id='tombol3' class="btn btn-primary" seq_number="<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
" >Cancel</button>
                        </div>
                        </form>
                      </span>
                    </div>

                    <!-- <div class="col-md-4">
                    seq_number pertama : <?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>

                    </div> -->


  </div>
               <div id="output" style="color:green;font-size: 42px;" ></div>   
                <!--     <br>
                  <hr> -->
</div>



      <!-- //untuk menampilkan total data dan jSon result -->
        <!--  Showing <span id="rowcount"></span> data from <span id="rowstart"></span> to <span id="rowend"></span> of <span id="totaldata"></span> row(s)
      <hr>
      Ajax Data Source :
      <div class="well" style="border:solid 1px gray;background-color: #eee; padding: 10px;" id="bantingantable-datasource"></div>
 -->



<br>


<div class="row show-grid" >

 <!-- Tabel MI No Idol==================================================== -->
<div class="col-md-3" id="div_cancel">Recomended Number :
  <span> 
    <select name="year" id="year" class="form-control populate" onchange="combo_year()">
    <!-- <option selected>All</option> -->
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['year_number']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['year'];?>
"<?php if ($_smarty_tpl->tpl_vars['tahun_from_view']->value == $_smarty_tpl->tpl_vars['data']->value['year']) {?> selected <?php }?>>Canceled in : <?php echo $_smarty_tpl->tpl_vars['data']->value['year'];?>
</option>

    <!-- <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd'];?>
" <?php if ($_smarty_tpl->tpl_vars['prj_sts_cd_single']->value == $_smarty_tpl->tpl_vars['data']->value['prj_sts_cd']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['prj_sts_desc'];?>
</option> -->
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
    </select> 
</span>
<form action="" class="form-horizontal" id="bantingantable-searchform">
    <div class="row show-grid">
      <!-- <div class="col-md-12">------------------------------</div> -->
    </div>
        <section class="panel">
          <div class="panel-body">

            <table class="table">
              <thead>
                <tr>
                  <th>Number</th>
                  <th>Cancel by</th>
                  <th style="width: 3.5em;"></th>
                </tr>
              </thead>  
              <tbody>
                <div id ='tbl_cancel_number'>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_cancel']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
                <tr id="<?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
">
                  <td>
                      <!-- <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/form/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
<i class="fa fa-pencil"></i></a> -->
                      <a class="btnCancel mb-xs mt-xs mr-xs btn btn-primary" role="button" onclick="tes()" seq_numb="<?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
</a> 
                  </td>
                  <td>
                      <?php echo substr($_smarty_tpl->tpl_vars['data']->value['updt_by'],0,8);?>

                  </td>
                      <td>
                  </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
                </div>
              </tbody>
            </table>

          </div>
        </section>

</form>
  


</div>

<!-- Form Input data baru================================================ -->
<div class="col-md-9">
<!-- <form id="detail_mi_form" class="form-horizontal" method="POST" style="visibility:hidden"> -->
<form id="detail_mi_form" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/simpen_detail" style="visibility:hidden">
<div class="row show-grid">
 <div id="p_status3" class="col-md-2">Detail :</div>
 <div id="p_status2" class="col-md-3"></div>
</div>
            <section class="panel">
                <div class="panel-body">
                    <input type="hidden" id ="seq_numb" name="seq_numb" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
">
                    <input type="hidden" name="id_msnumber" id="id_msnumber" value="<?php echo $_smarty_tpl->tpl_vars['id_from_msnumber']->value;?>
" class="form-control">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Number : </label>
                        <div class="col-sm-4">
                            <input type="text" id ="mi_numb" name="mi_numb" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
												<label class="col-md-2 control-label">* Value Date : </label>
												<div class="col-md-4">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input id = "value_date" name = "value_date" type="text" data-plugin-datepicker class="form-control" required>
													</div>
												</div>
										</div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">* Title : </label>
                        <div class="col-sm-10">
                            <input type="text" id="mi_title" name="mi_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_title'];?>
" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Remark: </label>
                        <div class="col-sm-10">
                            <input type="text" id="mi_rmrk" name="mi_rmrk" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_rmrk'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"> Reference: </label>
                        <div class="col-sm-10">
                            <input type="text" id="mi_ref" name="mi_ref" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_ref'];?>
">
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button id="btn_simpen_detail" class="btn btn-primary">Save</button> 
                        </div>
                    </div>

                    <input type="hidden" name="book_dte" class="form-control" value="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
">
                    <input type="hidden" name="updt_by" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data_user']->value['NTUserName'];?>
">
                    <input type="hidden" name="passing_recomend" class="form-control" value="A">
                    <input type="hidden" id="years" name="years" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tahun_from_view']->value;?>
">
                    
                </footer>
            </section>
</form>
</div>
</div>



<!-- <a class="mb-xs mt-xs mr-xs modal-basic btn btn-primary" href="#modalPrimary">Primary</a> -->

                  <div id="modalPrimary" class="modal-block modal-block-primary mfp-hide">
                    <section class="panel">
                      <header class="panel-heading">
                        <h2 class="panel-title">Are you sure?</h2>
                      </header>
                      <div class="panel-body">
                        <div class="modal-wrapper">
                          <div class="modal-icon">
                            <i class="fa fa-question-circle"></i>
                          </div>
                          <div class="modal-text">
                            <h4>Primary</h4>
                            <p>Are you sure that you want to delete this image?</p>
                          </div>
                        </div>
                      </div>
                      <footer class="panel-footer">
                        <div class="row">
                          <div class="col-md-12 text-right">
                            <button class="btn btn-primary modal-confirm">Confirm</button>
                            <button class="btn btn-default modal-dismiss">Cancel</button>
                          </div>
                        </div>
                      </footer>
                    </section>
                  </div>


<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'scriptfooter'} */
class Block_168815e25219104a505_47663232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_168815e25219104a505_47663232',
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
/**********************************
BantinganTable.js 
**********************************/

$( document ).ready(function() {
  /* pertama kali halaman muncul, akan memanggil bantingantableload untuk mengambil data */
    bantingantableload(1);

    /* memberikan event click pada komponen page link */
    $("#bantingantablepaging").on("click",'.page-link', function(event) {
      event.preventDefault();
      bantingantableload($(this).attr("href"));     
    });

    /* memberikan event submit pada komponen form search */
    // $("#bantingantable-searchform").on("submit", function(event) {      
    //   event.preventDefault();
    //   bantingantableload(1);
    // });

    $("#bantingantable-keyword").on("click", function(event) {      
      event.preventDefault();
      bantingantableload(1);
    });

    if($("#id_from_msnumber").val() == ""){
      // alert("dgdfg");
      $("#tombol1").attr("disabled","disabled");
    } else {
      $("#tombol1").removeAttr("disabled");
    }

    // alert("dfdfdf");

}); 



  /* fungsi untuk mengambil data dan menampilkan di grid */
  function bantingantableload(page)
  {   
    var tahun = tanggal.getFullYear();
    var id_from_msnumber = $("#id_from_msnumber").val();


    if (page == null) page = 1;   // default page adalah halaman 1
    var keyword = $("#bantingantable-keyword").val(); // mengambil keyword pencarian
    // memanggil ajax get, dengan parameter p dan q
    $.get( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/datasource/" + tahun + "/" + id_from_msnumber, { p: page, q : keyword } )
    // $.get( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/datasource", { p: page, q : keyword } )
      .done(function( data ) {      
        // apabila data ditemukan
        $("#bantingantable-datasource").text(JSON.stringify(data)); // tampilkan source data
        $("#totaldata").text(data.count); // total data yang didapat
        $("#rowcount").text(data.data.length); // data mulai dari baris
        $("#rowstart").text(data.rowstart + 1); // data mulai dari baris
        $("#rowend").text(data.rowend); // data sampai dengan baris
        bantingantablefill(data.data); // isi tabel dengan data
        bantingantablepagingnumbering(data.pagestart,data.pageend,data.page,data.pagenumbertotal); // membuat link paging

      });
      $(".btnpencet").removeAttr("disabled");
  }

  /* fungsi untuk mengisi data ke tabel */
  function bantingantablefill(data)
  {   
    $("#bantingantable tbody").html(""); // kosongkan tabel
    $.each(data, function( index, value ) {     
      // loop untuk setiap row, membuat baris tabel
      $("#bantingantable tbody").append('<tr><td><button type="button" class="btnpencet btn btn-primary" onclick="tes(\'' + value.seq_numb + '\',\'' + value.ref_cde + '\')">' + value.seq_numb + '</button></td></tr>');
    });

  }

  /* fungsi untuk membuat link ke halaman tertentu */
  function bantingantablepagingnumbering(start,end,page,total)
  {     
    var prev = start > 1? start - 1 : 1; // menentukan halaman untuk tombol <
    var next = page == total? total : end + 1; // menentukan halaman untuk tombol >

    $("#bantingantablepaging").html('<li class="page-item"><a class="page-link" href="1"><i class="fa fa fa-angle-double-left"></i></a></li>');  // tombol << atau halaman pertama
    $("#bantingantablepaging").append('<li class="page-item"><a class="page-link page-link-prev" href="' + prev + '"><i class="fa fa-angle-left"></i></a></li>'); // tombol < atau halaman sebelumnya
    for (i = start; i <= end; i++) {
      var active = "";
      if (page == i)
      {
        active = "active"; // beri tampilan menarik pada nomor halaman yang aktif
      }
        $("#bantingantablepaging").append('<li class="page-item ' + active + '"><a class="page-link page-link-number" href="' + i + '">' + i + '</a></li>');
    } 
    $("#bantingantablepaging").append('<li class="page-item"><a class="page-link page-link-next" href="' + next + '"><i class="fa fa-angle-right"></i></a></li>'); // tombol > atau halaman selanjutnya
    $("#bantingantablepaging").append('<li class="page-item"><a class="page-link page-link-last" href="' + total + '"><i class="fa fa fa-angle-double-right"></i></a></li>'); // tombol >> atau halaman terakhir
  } 
/**********************************
BantinganTable.js
**********************************/ 

// untuk memilih Nomor type Nomor
function combo_mi(){

  $codes = $("#combo_mi").val();
  $year = $("#year").val();

window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/bookform/" + $codes + "/" + $year;


}

//Untuk milih tahun
function combo_year(){

  $codes = $("#label_id_msnumb").val();
  $year = $("#year").val();

  if (!$codes){
    $codes = " ";
  }

window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/bookform/" + $codes + "/" + $year;

}



//fungsi test untuk membuka form untuk cancel

function tes($seq_no,$ref_cd){

  console.log($seq_no);
// alert($seq_no + $ref_cd);
coba("input_cancel",$seq_no);
$(".btnCancel").attr("disabled","disabled");

// input_recomen($seq_no);

};
//===============================================

$(".btnCancel").click(function()
{

  var tahun = tanggal.getFullYear();
  $seq_no = $(this).attr("seq_numb");
  // console.log("sdf");
  coba("input_cancel",$seq_no);
  $(".btnCancel").attr("disabled","disabled");

});

$("#btn_chhose_number").click(function()
{
	window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/paranumber/" ;
});


<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/datatables/media/css/jquery.dataTables.css">
<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.css" />  
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/pnotify/pnotify.custom.js"><?php echo '</script'; ?>
>   -->

<?php echo '<script'; ?>
 type="text/javascript">
var $SelectedId;

function notif($title,$text,$type,$addclass,$icon) {
		new PNotify({
			title: $title,
			text: $text,
			type: $type,
			addclass: $addclass,
			icon: $icon
		});
    }
///////////////////////////////////////////////


// <?php echo '<script'; ?>
 type="text/javascript">

var tanggal = new Date();
var tahun = tanggal.getFullYear();
// var tahun = '2019';
var $tipe;


function coba($tipe,$seq_no_temp) {

  // alert($tipe + $seq_no_temp);

  document.getElementById("tombol2").style.visibility = "visible";
  document.getElementById("tombol3").style.visibility = "visible";
  document.getElementById('tombol1').disabled = true;
  $("#sts_input").val($tipe);
  $("#seq_no_temp").val($seq_no_temp);

  if ($tipe =="input_cancel")
  {
    $("#label2").html("sure want to Book?");
    $("#label_upper").html('Are you sure wanto to book canceled number : ' + $seq_no_temp +' ?');

  }

  else if ($tipe !="input_cancel")
  {
  $("#label2").html("sure want to Book?");
  $("#label_upper").html('Are you sure wanto to book new numbers');
  };

};


//tombol 1 ("GO") di klik :
$("#form1").submit(function() {

  if ($("#label_id_msnumb").val()=='') {

    $title = 'Notification :',
	  $text = 'Please Select Book No',
	  $type = 'custom',
    // $addclass = 'notification-primary',
    $addclass = 'notification-primary stack-topleft',
	  $icon = 'fa fa-twitter'
    notif($title,$text,$type,$addclass,$icon);
  } 
else {
    coba("input_new");
$(".btnpencet").attr("disabled","disabled");

  }


//     coba("input_new");
// $(".btnpencet").attr("disabled","disabled");


return false;

});

//Tombol 3 ("Cancel") di klik :
$("#form3").submit(function() {

  document.getElementById('tombol1').disabled = false;
  document.getElementById("tombol2").style.visibility = "hidden";
  document.getElementById("tombol3").style.visibility = "hidden";
  $("#label_upper").html('Click "GO" to book "New" Number, or Choose and click number in the Recomended number panel to book and Use Canceled number');
  // $(".btnpencet").removeAttr("disabled");
  $(".btnCancel").removeAttr("disabled");
  
  return false;
});


//Tombol Ok/Sure di klik :
  $("#form2").submit(function() 
      {
          var sts_inputan = $("#sts_input").val();
          var seq_no_temp = $("#seq_no_temp").val();
          var tahun_from_view = $("#year").val();
          var id_from_msnumber = $("#id_from_msnumber").val();
          // var value_date = $("#value_date").val();
              if (sts_inputan=="input_cancel")
                  {
                    
                    var tipe_simpan = "update";
                      dataygmaudikirim = {
                          // id_from_msnumber : id_from_msnumber,
                          mi_numb : "",
                          ref_cde : tahun,
                          seq_numb: seq_no_temp,
                          // value_date: value_date,
                          mi_title : "",
                          mi_rmrk: "",
                          mi_ref : ""
                         };

                          document.getElementById("tombol1").style.display="none";
                          document.getElementById("tombol2").style.display="none";
                          document.getElementById("tombol3").style.display="none";


                      $.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/simpen_ajax/" + id_from_msnumber + "/" + tipe_simpan + "/" + tahun_from_view, dataygmaudikirim)
                      .done(function(data) 
                          {   
                              // alert("test");
                            // console.log(data.cek_message);

                              if (data.cek_message == "not_exist")
                              {
                                  alert ("Maaf data telah diproses oleh User lain : " + data.cek_message);
                                  $("#seq_numb").val("");
                                  $("#mi_numb").val("");
                                  $("#mi_title").val("");
                                  $("#mi_rmrk").val("");
                                  $("#mi_ref").val("");
                                  $("#output").html("");

                                  $("#div_tombol1").html("<button class='mb-xs mt-xs mr-xs btn btn-lg btn-warning' id='tombol1' class='btn btn-primary'>GO</button>");

                                  $("#div_tombol2").html("<button style='visibility:hidden' class='mb-xs mt-xs mr-xs btn btn-lg btn-warning' id='tombol2' class='btn btn-primary' seq_number='<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
' >Sure</button>");

                                  $("#div_tombol3").html("<button style='visibility:hidden' class='mb-xs mt-xs mr-xs btn btn-lg btn-warning' id='tombol3' class='btn btn-primary' seq_number='<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
' >Cancel</button>");

                                  $("#label_upper").html('Click "GO" to book "New" Number, or Choose and click number in the Recomended number panel to book and Use Canceled number');

                                  $("#p_status2").html("<marquee behavior='alternate'>Data Saved</marquee>");
                              
                                  bantingantableload();

                                  document.getElementById("detail_mi_form").style.visibility = "hidden";
                              
                                  document.getElementById("p_status3").style.visibility = "hidden";

                                  document.getElementById("passing_recomend ").value = "A";
                                  // console.log(data.cek_message);
                              }

                              else if (data.cek_message == "exist")
                              {

                              $("#div_tombol1").html("<div id='div_temp1' style='background-color: #eb9316;color: #ffffff' class='btn-lg'>Execution</Div>");
                              $("#div_tombol2").html("<div id='div_temp2' style='background-color: #eb9316;color: #ffffff' class='btn-lg'>Done</Div>");
                              $("#div_tombol3").html("<div id='div_temp3' style='background-color: #eb9316;color: #ffffff' class='btn-lg'>No " + seq_no_temp + " successfuly Booked" + "</Div>");
                              $("#label_upper").html('Data Saved, Please Fill Detail and click "Save"');

                              input_recomen(seq_no_temp);
                              console.log(dataygmaudikirim);

                              // console.log(data.cek_message);

                              // alert (data.cek_message);
                              return false;
                              }

                              return false;  
                          });
                      return false;
                  }
              else if (sts_inputan=="input_new") 
                  {

                    
    
                      var tipe_simpan = "insert";
                      var code = $("#book_seq_numb").val();
                      // var value_date = $("#value_date").val();
    

                      dataygmaudikirim = { 
                          // id_from_msnumber : id_from_msnumber,
                          mi_numb : $("#ref_no").val(),
                          ref_cde : tahun,
                          updt_by : $("#updt_by").val(),
                          book_dte: $("#book_dte").val()
                  	     };

                      document.getElementById("tombol1").style.display="none";
                      document.getElementById("tombol2").style.display="none";
                      document.getElementById("tombol3").style.display="none";
                  	  $("#output").html("Submitting inprogresss");

                      console.log(dataygmaudikirim,tipe_simpan, code);
                      
                            

                  	  $.post( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/simpen_ajax/" + id_from_msnumber + "/" + tipe_simpan + "/" + code, dataygmaudikirim)
              		    .done(function(data) 
                          {
      		                    
                              console.log(data.message);

                              

                      		    $("#output").html("");
                              $("#output2").html('Next Number : ' + data.coba);

                              // alert(data.coba);

                      //----------------------------------------------
                              // alert("MI No " + data.data['seq_numb'] + " has successfuly Booked. Please input MI Detail");

                              $("#div_tombol1").html("<div id='div_temp1' style='background-color: #eb9316;color: #ffffff' class='btn-lg'>>>>>>>></Div>");
                              $("#div_tombol2").html("<div id='div_temp2' style='background-color: #eb9316;color: #ffffff' class='btn-lg'>Done</Div>");
                              $("#div_tombol3").html("<div id='div_temp3' style='background-color: #eb9316;color: #ffffff' class='btn-lg'> Number " + data.data['seq_numb'] + " successfuly Booked" + "</Div>");
            
                              $("#book_seq_numb").val(data.data['seq_numb']);
                              $("#seq_numb").val(data.data['seq_numb']);
                              $("#mi_numb").val(data.data['mi_numb']);
                              $("#label_upper").html('Data Saved, Please Fill Detail and click "Save"');
                              $("#seq_no_temp").val(data.data['seq_numb']);
              
                              document.getElementById("detail_mi_form").style.visibility = "visible";
                              document.getElementById("p_status2").style.visibility = "visible";
                              document.getElementById("p_status3").style.visibility = "visible";

                              $("#p_status2").html("");
                              // $(.btnpencet).attr("disabled","disabled");
                              $(".btnCancel").attr("disabled","disabled");
                              // $(".btnCancel").attr("disabled","disabled");
                              // $(".btnCancel").removeAttr("disabled");
                              



        
		                      });
                        return false;
                  }
    	    return false;
      });


// ==============Sure "Cancel" diklik:================================
function input_recomen($data_Seq_numb) 

{
  
  // $(".btnpencet").attr("disabled","disabled");
  $(".btnCancel").attr("disabled","disabled");

  document.getElementById("detail_mi_form").style.visibility = "visible";

  document.getElementById("p_status2").style.visibility = "visible";
  document.getElementById("p_status3").style.visibility = "visible";

  document.getElementById("mi_numb").value = $data_Seq_numb;
  document.getElementById("seq_numb").value = $data_Seq_numb;
  document.getElementById("passing_recomend").value = 'R';

  

  

};

$("#user_manual").click(function() {
  // alert("fgfg");
  window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/user_manual_print/", "_blank");
});


$("#btn_simpen_detail").click(function() {

  $id_msnumber = $("#id_msnumber").val();
  $mi_numb = $("#mi_numb").val();
  $mi_title = $("#mi_title").val();
  $seq_numb = $("#seq_numb").val();
  $years = $("#years").val();

if($id_msnumber!="" && $mi_title!=""){

  if($id_msnumber==2){

      window.open("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Reportnumber/cover_cr/" + $seq_numb + "/" + $id_msnumber + "/" + $years, "_blank");

  }
}
    


});


//-----Tombol Save di klik :
$("#detail_mi_formx").submit(function() {



  document.getElementById("div_cancel").style.visibility = "visible";
  var tipe_simpan = "save_detail";
  var code = $("#book_seq_numb").val();
  var passing_reco = $("#passing_recomend").val();
  var id_from_msnumber = $("#id_from_msnumber").val();
  var value_date = $("#value_date").val();
      // alert(passing_reco);


  if (passing_reco == "A")
      {
        document.getElementById("div_temp1").style.display="none";
        document.getElementById("div_temp2").style.display="none";
        document.getElementById("div_temp3").style.display="none";
      };




      dataygmaudikirim = { 
        // id_from_msnumber : id_from_msnumber,
        mi_numb : $("#mi_numb").val(),
        ref_cde : tahun,
        // seq_numb: $("#book_seq_numb").val(),
        seq_numb: $("#seq_no_temp").val(),
        mi_title : $("#mi_title").val(),
        value_date : $("#value_date").val(),
        mi_rmrk: $("#mi_rmrk").val(),
        mi_ref : $("#mi_ref").val()
      };

      // alert(dataygmaudikirim);

      $("#output").html("Submitting inprogress");
      console.log(dataygmaudikirim);
      console.log(code);
      console.log(tipe_simpan);


      // $.post( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/simpen_ajax/" + id_from_msnumber + "/" + tipe_simpan + "/" + code, dataygmaudikirim)
      $.post( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/simpen_detail/" + id_from_msnumber + "/" + tipe_simpan + "/" + code, dataygmaudikirim)
      .done(function(data) 
        {
          // console.log(dataygmaudikirim);
            console.log("save detail tes");
            // console.log(data.data['value_date']);
            // console.log(data.data['ref_cde']  + "tes");
            // console.log(data.data['mi_title'] +  "tes");
            // console.log(data.data['mi_rmrk'] + "tes");
        
            $("#seq_numb").val("");
            $("#mi_numb").val("");
            $("#mi_title").val("");
            $("#mi_rmrk").val("");
            $("#mi_ref").val("");
            $("#output").html("");

            $("#div_tombol1").html("<button class='mb-xs mt-xs mr-xs btn btn-lg btn-warning' id='tombol1' class='btn btn-primary'>GO</button>");

            $("#div_tombol2").html("<button style='visibility:hidden' class='mb-xs mt-xs mr-xs btn btn-lg btn-warning' id='tombol2' class='btn btn-primary' seq_number='<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
' >Sure</button>");

            $("#div_tombol3").html("<button style='visibility:hidden' class='mb-xs mt-xs mr-xs btn btn-lg btn-warning' id='tombol3' class='btn btn-primary' seq_number='<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
' >Cancel</button>");

            $("#label_upper").html('Click "GO" to book "New" Number, or Choose and click number in the Recomended number panel to book and Use Canceled number');

            // $("#p_status2").html("<marquee behavior='alternate'>Data Saved</marquee>");
        
            bantingantableload();

            document.getElementById("detail_mi_form").style.visibility = "hidden";
        
            document.getElementById("p_status3").style.visibility = "hidden";

            document.getElementById("passing_recomend ").value = "A";


            console.log("kesimpen");


            
            // return false;
        


        //     window.setTimeout(function()
        //     {
        //       document.getElementById("p_status2").style.visibility = "hidden";
          
        // },1000);
        
      });

      
      

      document.getElementById(code).style.display="none";
      $(".btnCancel").removeAttr("disabled");
      return false;

    });


<?php echo '</script'; ?>
>
  <!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/ui-elements/examples.modals.js"><?php echo '</script'; ?>
>    -->


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

  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/javascripts/theme.custom.js"><?php echo '</script'; ?>
>
  
<?php
}
}
/* {/block 'scriptfooter'} */
}
