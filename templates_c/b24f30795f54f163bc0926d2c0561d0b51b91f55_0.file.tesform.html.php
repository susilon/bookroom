<?php
/* Smarty version 3.1.32, created on 2019-11-27 10:04:52
  from 'C:\xampp\htdocs\Assigner\Views\Report\tesform.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ddde7d4279532_98130780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b24f30795f54f163bc0926d2c0561d0b51b91f55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Report\\tesform.html',
      1 => 1574763790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddde7d4279532_98130780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143605ddde7d420faa9_04873690', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_252015ddde7d42647c8_89157319', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/portoku.master.html");
}
/* {block 'bodycontent'} */
class Block_143605ddde7d420faa9_04873690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_143605ddde7d420faa9_04873690',
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



<div class="row show-grid">
    <div class="col-md-6">
        <span >

 <!-- form diarahkan ke action save dengan metode POST -->
         <!-- <form id="form2" class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Msproject/save" enctype="multipart/form-data" >  -->
         <form id="form2" class="form-horizontal" > 
        <!-- <form id="form1" > -->
            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Parameter Request <Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">
                    <!-- <i>User : </i><br> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">nama : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" name="nama" class="form-control" id="nama" required>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">idktp : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" id="idktp" name="idktp"   required>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">nohp : </label>
                        <div class="col-sm-8">
                        <span class="show-grid-block">
                                <input type="text" class="form-control" id="nohp" name="nohp"   >
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Result : </label><label class="col-sm-10 form-control-static" id="answers"></label>
                        <!-- <div class="col-sm-10">
                        <span class="show-grid-block">
                        
                            </span>
                        </div> -->
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Status : </label><label class="col-sm-10 form-control-static" id="res_message"></label>
                        <!-- <div class="col-sm-10">
                        <span class="show-grid-block">
                        
                            </span>
                        </div> -->
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Message : </label><label class="col-sm-10 form-control-static" id="res_message2"></label>
                        <!-- <div class="col-sm-10">
                        <span class="show-grid-block">
                        
                            </span>
                        </div> -->
                    </div>

                </div>
                <footer class="panel-footer">
                    <button class="btn btn-primary" id="btnAdd">Submit</button>            
                    <!-- btnCancel ini akan melakukan back ke halaman sebelumnya -->        
                    <button type="reset" class="btn btn-info" id="btnReset">Reset</button>
                        
                </footer>
            </section>
        </form>

        <form id="form4" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Report/tes" target="_BLANK">
                            <input type="hidden" id="v_nama" name="v_nama" >
                            <input type="hidden" id="v_idktp" name="v_idktp" >
                            <input type="hidden" id="v_nohp" name="v_nohp" >
                            <input type="hidden" id="v_result" name="v_result" >
                            <input type="hidden" id="v_status" name="v_status" >
                            <input type="hidden" id="v_message" name="v_message" >
                            <input type="hidden" id="v_tanggal" name="v_tanggal" >
                            <button type="submit" id="btnPrint" class="mt-sm mb-sm btn btn-success">Print to PDF</button>
                        </form>

            
        </span>
    </div>
    <div class="col-md-6">
        <span>
            
       <!--  <form id="form1" class="form-horizontal" > 

            <section class="panel">
                <header class="panel-heading">
                    <h2 class="panel-title">Response <Textfile></Textfile></h2>                    
                </header>
                
                <div class="panel-body">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Answer : </label><label class="col-sm-10 form-control-static" id="answers"></label>
                        <div class="col-sm-10">
                        <span class="show-grid-block">
                        
                            </span>
                        </div>
                    </div>

                </div>
                <footer class="panel-footer">

                </footer>
            </section>
        </form> -->

        </span>
    </div>
</div>

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_252015ddde7d42647c8_89157319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_252015ddde7d42647c8_89157319',
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



$(document).ready(function() {

   
    
});


//Tombol Ok/Sure di klik :
  $("#form2").submit(function() 

    
        {

          var nama = $("#nama").val();
          var idktp = $("#idktp").val();
          var nohp = $("#nohp").val();

          

          // alert('value_API_CIF_V1');

          dataygmaudikirim = {
                          nama : nama,
                          idktp : idktp,
                          nohp : nohp
                         };

                      $.post("<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/smma/get_response_cif", dataygmaudikirim)
                      .done(function(data) 
                          {   

                            console.log(data.status);
                                        console.log(data.answer);

                                        // $("#answer").val(data.answer);
                                        $("#answers").text(data.answer);
                                        $("#res_message").text(data.status);
                                        $("#res_message2").text("success");

                                        $("#v_result").val(data.answer);
                                        $("#v_status").val(data.status);
                                        $("#v_message").val('success');
                                        $("#v_tanggal").val(data.tanggal);


                                        $("#v_nama").val(nama);
                                        $("#v_idktp").val(idktp);
                                        $("#v_nohp").val(nohp);
 
                          });

            


            // $("#v_nama").val($("#nama").val());
            // $("#v_idktp").val($("#idktp").val());
            // $("#v_nohp").val($("#nohp").val());


                      // $.post("//10.3.170.209:8080/smma/Smma/cif", dataygmaudikirim)

                      //           .done(function(data) 
                      //               {   
 
                      //                   console.log(data.status);
                      //                   console.log(data.answer);

                      //                   // $("#answer").val(data.answer);
                      //                   $("#answers").text(data.answer);

                      //               });

                      return false;
                      
        });

// $("#btnPrint").click(function()
//     {

//         // $nama = $("#nama").val();
//         // $idktp = $("#idktp").val();
//         // $nohp = $("#nohp").val();
//         // $result = $("#answers").val();
//         // $notif = $("#res_message").val();

//         window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Smma/print_cif/";

//     });


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
