<?php
/* Smarty version 3.1.32, created on 2020-01-21 13:58:32
  from 'D:\ano site\Assignerx\Views\Memointernal\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5e26a118bb3482_34811527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85b366e53593aafa9e5ed87b542f64dc46c69e46' => 
    array (
      0 => 'D:\\ano site\\Assignerx\\Views\\Memointernal\\index.html',
      1 => 1563862733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e26a118bb3482_34811527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67295e26a1189438b8_82599754', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_237165e26a118ba2da0_58344177', 'scriptfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_67295e26a1189438b8_82599754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_67295e26a1189438b8_82599754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\anosite\\Assignerx\\Libs\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
   
<div class="btn-toolbar list-toolbar">
    <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/bookform" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Book MI Number</a>    
  <div class="btn-group pull-right">  
    <form class="form-inline" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/index">
      <div class="form-group">        
        <div class="input-group">          
          <input type="hidden" name="search" value=1>
          <input type="text" class="form-control" id='keyword' placeholder="Search..." name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['listdata']->value->keyword;?>
">
          <!-- <input type="text" class="form-control" placeholder="Search..." name="q" value="<?php echo $_smarty_tpl->tpl_vars['listdata']->value->keyword;?>
"> -->
          <!-- <button class="btn btn-primary" id="btnSubmit">Submit </button> -->
          <div class="input-group-addon"><i class="fa fa-search"></i></div>
        </div>
      </div>
    </form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <!-- <th>id</th> -->
      <th>Seq No</th>
      <th>MI Number</th>
      <th>Title</th>
<!--       <th>Remark</th>
      <th>Reference</th>
      <th>Book Date</th> -->
      <th>Update by</th>
      <th style="width: 3.5em;"></th>
    </tr>
  </thead>  
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listdata']->value->data, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
    <tr>
      <!-- <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td> -->
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_numb'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_title'];?>
</td>
<!--  <td><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_rmrk'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['mi_ref'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['book_dte'];?>
</td> -->
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['updt_by'];?>
</td>
      <td>
          <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/form/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><i class="fa fa-pencil"></i></a>
      </td>
      <td>
          <a class="btnDeleteConfirma mb-xs mt-xs mr-xs modal-basic btn btn-primary" role="button" data-seq_numb=<?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
 data-ref_cde=<?php echo $_smarty_tpl->tpl_vars['data']->value['ref_cde'];?>
 data-mi_numb=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_numb'];?>
 data-mi_title=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_title'];?>
 data-mi_rmrk=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_rmrk'];?>
 data-mi_ref=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_ref'];?>
 data-mi_code=<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
 href="#modalPrimary">Primary</a>
      </td>
<!--       <td>
          <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/form/<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><i class="fa fa-pencil"></i></a>
          <a href="#deleteConfirm" role="button" data-toggle="modal" class="btnDeleteConfirm" dataseq_numb="<?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
" dataid="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" datami_numb=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_numb'];?>
  ><i class="fa fa-trash-o"></i></a>
      </td> -->
          <td>
         <!--  <a class="link_cancelb" data-seq_numb=<?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
 data-ref_cde=<?php echo $_smarty_tpl->tpl_vars['data']->value['ref_cde'];?>
 data-mi_numb=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_numb'];?>
 data-mi_title=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_title'];?>
 data-mi_rmrk=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_rmrk'];?>
 data-mi_ref=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_ref'];?>
 data-book_dte=<?php echo $_smarty_tpl->tpl_vars['data']->value['book_dte'];?>
 data-updt_by=<?php echo $_smarty_tpl->tpl_vars['data']->value['updt_by'];?>
>cancel</a> -->
      </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   
  </tbody>
</table>


<ul class="pagination">
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/index?q=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->keyword;?>
&p=1&s=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->sort;?>
&f=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->field;?>
">&laquo;</a></li>  
<?php
$_smarty_tpl->tpl_vars['var'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['var']->step = 1;$_smarty_tpl->tpl_vars['var']->total = (int) ceil(($_smarty_tpl->tpl_vars['var']->step > 0 ? $_smarty_tpl->tpl_vars['listdata']->value->pageend+1 - ($_smarty_tpl->tpl_vars['listdata']->value->pagestart) : $_smarty_tpl->tpl_vars['listdata']->value->pagestart-($_smarty_tpl->tpl_vars['listdata']->value->pageend)+1)/abs($_smarty_tpl->tpl_vars['var']->step));
if ($_smarty_tpl->tpl_vars['var']->total > 0) {
for ($_smarty_tpl->tpl_vars['var']->value = $_smarty_tpl->tpl_vars['listdata']->value->pagestart, $_smarty_tpl->tpl_vars['var']->iteration = 1;$_smarty_tpl->tpl_vars['var']->iteration <= $_smarty_tpl->tpl_vars['var']->total;$_smarty_tpl->tpl_vars['var']->value += $_smarty_tpl->tpl_vars['var']->step, $_smarty_tpl->tpl_vars['var']->iteration++) {
$_smarty_tpl->tpl_vars['var']->first = $_smarty_tpl->tpl_vars['var']->iteration === 1;$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
if ($_smarty_tpl->tpl_vars['var']->value == $_smarty_tpl->tpl_vars['listdata']->value->page) {?>
  <li><a href="#" style="background-color: #eee;"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a></li>
<?php } else { ?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/index?q=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->keyword;?>
&p=<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
&s=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->sort;?>
&f=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->field;?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a></li>
<?php }
}
}
?>    
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/index?q=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->keyword;?>
&p=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->pagenumbertotal;?>
&s=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->sort;?>
&f=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->field;?>
">&raquo;</a></li>
</ul>
<div class="pull-right">
Total data : <?php echo $_smarty_tpl->tpl_vars['listdata']->value->count;?>
 row(s)<br>
Total page : <?php echo $_smarty_tpl->tpl_vars['listdata']->value->pagenumbertotal;?>
 page(s)
</div>



 <form id='book'>
  <input type="hidden" name="noregister" id="seq_numb" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
">
  <input type="hidden" name="noregister2" id="updt_by" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['updt_by']->value;?>
">
  <input type="hidden" name="noregister3" id="book_dte" class="form-control" value="<?php echo smarty_modifier_date_format(time(),"%m/%d/%Y");?>
"> 
  <!-- Next MI Number : <?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
 -->
  <div id="output2">Next MI Number (available) : <?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
</div>    
  <button id='tes' class="btn btn-primary" seq_number="<?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
">Book : <?php echo $_smarty_tpl->tpl_vars['next_seq_numb']->value;?>
</button>
  <div id="output"></div>
</form>




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
                            <p>Are you sure that you want to Cancel MI Seq Number : <span id="dialognameinfo"></span></p>
                          </div>
                        </div>
                      </div>
                      <footer class="panel-footer">
                        <div class="row">
                          <div class="col-md-12 text-right">
                            <button class="btn btn-primary modal-confirm" id="btnDelete" >Confirm</button>
                            <button class="btn btn-default modal-dismiss">No</button>
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
class Block_237165e26a118ba2da0_58344177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scriptfooter' => 
  array (
    0 => 'Block_237165e26a118ba2da0_58344177',
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
var $data_Seq_numb;
var $data_ref_cde;
var $data_mi_numb;
var $data_mi_title;
var $data_mi_code;

  // $(".btnDeleteConfirma").each(function()
  // {
  //   $SelectedId = $(this).attr("dataseq_numba");
  //   $("#dialognameinfo").text($(this).attr("datami_numba"));    
  // });

  // $("#btnDelete").click(function()
  // {
  //   alert($SelectedId);
  //   // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel/" + $SelectedId;
  // });

// seq_numb
// ref_cde
// mi_numb
// mi_title


// <a class="btnDeleteConfirma mb-xs mt-xs mr-xs modal-basic btn btn-primary" role="button" data-seq_numb=<?php echo $_smarty_tpl->tpl_vars['data']->value['seq_numb'];?>
 data-ref_cde=<?php echo $_smarty_tpl->tpl_vars['data']->value['ref_cde'];?>
 data-mi_numb=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_numb'];?>
 data-mi_title=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_title'];?>
 data-mi_rmrk=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_rmrk'];?>
 data-mi_ref=<?php echo $_smarty_tpl->tpl_vars['data']->value['mi_ref'];?>
 href="#modalPrimary">Primary</a>

  $(".btnDeleteConfirma").click(function()
  {
    $data_Seq_numb = $(this).attr("data-seq_numb");
    $data_ref_cde = $(this).attr("data-ref_cde");
    $data_mi_numb = $(this).attr("data-mi_numb");
    $data_mi_title = $(this).attr("data-mi_title");
    $data_mi_code = $(this).attr("data-mi_code");

    $data_mi_numb_display = " - " + $data_mi_numb;

      //         dataygmaudikirim = { 
      //   seq_numb : $(this).attr("data-seq_numb"),
      //   ref_cde : $(this).attr("data-ref_cde"),
      //   mi_numb : $(this).attr("data-mi_numb"),
      //   mi_title : $(this).attr("data-mi_title"),
      //   mi_rmrk : $(this).attr("data-mi_rmrk"),
      //   mi_ref : $(this).attr("data-mi_ref")
      // }

      alert($data_mi_code);

    $("#dialognameinfo").text($data_Seq_numb + $data_mi_numb_display);    
  });

  $("#btnDelete").click(function()
  {
    alert("ghfghfgh");
    alert($data_Seq_numb + "/" + $data_ref_cde + "/" + $data_mi_code);
    window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel/" + $data_Seq_numb + "/" + $data_ref_cde + "/" + $data_mi_code;

      //   dataygmaudikirim = { 
      //   seq_numb : $(this).attr("data-seq_numb"),
      //   ref_cde : $(this).attr("data-ref_cde"),
      //   mi_numb : $(this).attr("data-mi_numb"),
      //   mi_title : $(this).attr("data-mi_title"),
      //   mi_rmrk : $(this).attr("data-mi_rmrk"),
      //   mi_ref : $(this).attr("data-mi_ref")
      // }

      console.log($data_mi_numb);

      // $.post( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_mi_ajax/", dataygmaudikirim)
      // .done(function( data ) 
      // {


      // // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/index";

      //   });


// return false;

  });

// $seq_numb=null,$ref_cde=null,$mi_numb=null,$mi_title=null

$(".link_cancel").each(function(){

  $(this).click(function()
  {
    
    alert($(this).attr("data-seq_numb"));

      // dataygmaudikirim = { 
      //   seq_numb : $(this).attr("data-seq_numb"),
      //   ref_cde : $(this).attr("data-ref_cde"),
      //   mi_numb : $(this).attr("data-mi_numb"),
      //   mi_title : $(this).attr("data-mi_title"),
      //   mi_rmrk : $(this).attr("data-mi_rmrk"),
      //   mi_ref : $(this).attr("data-mi_ref"),
      //   book_dte : $(this).attr("data-book_dte"),
      //   updt_by : $(this).attr("data-updt_by")
      // };

      // console.log(dataygmaudikirim);

// alert(dataygmaudikirim); 
// alert($(this).attr("data-id")); 

// $.post( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/cancel_mi_ajax/", dataygmaudikirim)
//       .done(function( data ) 
//       {

//         }


  });


});



	// $(".btnDeleteConfirm").click(function()
	// {
	// 	$SelectedId = $(this).attr("dataid");
	// 	$("#dialognameinfo").text($(this).attr("datanama"));		
	// });
	// $("#btnDelete").click(function()
	// {
	// 	window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Masterproject/delete/" + $SelectedId;
	// });


  $(".columnsorter").click(function() {    
    // objek nama field yang di klik
    var field = $(this).attr("field");
    // objek status sort
    var sort = $(this).attr("sort");
    // objek container icon atas bawah
    var iconcontainer = $(this).children("i");    

    // apakah status sort sudah ada?
    if (sort == null)
    {
      // kalau belum ada di set ascending
      $(this).attr("sort","asc");
      sort = $(this).attr("sort");
      // set icon panah keatas      
      iconcontainer.addClass("fa-chevron-up");
    } else {      
      // kalau sudah ada dicek, apakah status terakhir ascending?
      if (sort == "asc")
      {
        // kalau iya, ganti dengan descending
        $(this).attr("sort","desc");
        sort = "desc";
        // ganti icon dengan panah kebawah
        iconcontainer.removeClass("fa-chevron-up");
        iconcontainer.addClass("fa-chevron-down");
      } else {
        // kalau status terakhir descending, ganti dengan ascending
        $(this).attr("sort","asc");
        sort = "asc";
        // ganti icon dengan panah keatas
        iconcontainer.removeClass("fa-chevron-down");
        iconcontainer.addClass("fa-chevron-up");
      }     
    }    

    var allfield = $(".columnsorter");
    for (i = 0; i < allfield.length; i++)
    { 
      if ($(allfield[i]).attr("field") != field)     
      {
        $(allfield[i]).attr("sort","");
        alliconcontainer = $(allfield[i]).children("i");
        alliconcontainer.removeClass("fa-chevron-up");
        alliconcontainer.removeClass("fa-chevron-down");  
      }      
    }
    
    // kirim parameter ke server    
    window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/index?q=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->keyword;?>
&p=<?php echo $_smarty_tpl->tpl_vars['listdata']->value->page;?>
&s="+sort+"&f="+field;    
  });  
  <?php if ($_smarty_tpl->tpl_vars['listdata']->value->sort) {?>  
  var columnsorter = $(".columnsorter");
    for (i = 0; i < $(".columnsorter").length; i++)
    { 
      if ($(columnsorter[i]).attr("field") == "<?php echo $_smarty_tpl->tpl_vars['listdata']->value->field;?>
")     
      {
        $(columnsorter[i]).attr("sort","<?php echo $_smarty_tpl->tpl_vars['listdata']->value->sort;?>
");
        alliconcontainer = $(columnsorter[i]).children("i");
        if ("<?php echo $_smarty_tpl->tpl_vars['listdata']->value->sort;?>
" == "asc")
        {
          alliconcontainer.addClass("fa-chevron-up");  
        } else {
          alliconcontainer.addClass("fa-chevron-down");  
        }
      }      
    }
  <?php }?>

// var ad = $next_seq_numb;
// var $SelectedId;

    $("#book").submit(function() {
      $SelectedId = $(this).attr("dataid");
    // alert($SelectedId);
    	dataygmaudikirim = { 
        seq_numb: $("#seq_numb").val(),
        updt_by : $("#updt_by").val(),
        book_dte: $("#book_dte").val()
    	};
// alert("sdgfd");
    	$("#output").html("Submitting inprogress");


    	$.post( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/simpen_ajax", dataygmaudikirim)
		  .done(function( data ) {
		    console.log(data.message);
		    // $("#output").html(data.message + data.message);
		    $("#output").html("MI No " + data.data['seq_numb'] + " has successfuly Booked");
        $("#output2").html('Next MI Number : ' + data.coba);
        $("#seq_numb").val(data.coba);
        alert("MI No " + data.data['seq_numb'] + " has successfuly Booked");
        window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Memointernal/form";
        
		  });
    	return false;
    });

    // $("#submitall").click(function() {    	
    // 	$("#form1").submit();
    // 	$("#form2").submit();
    // });

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scriptfooter'} */
}
