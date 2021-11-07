<?php
/* Smarty version 3.1.32, created on 2021-03-05 02:56:49
  from 'D:\ano site\UI-skeletonhahuyy\Views\Extagent\form_agent_activation.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60413b81b5d5e1_39518363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04be1154b2b7882f81832428a0a286faaddb1ef' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Extagent\\form_agent_activation.html',
      1 => 1614887764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60413b81b5d5e1_39518363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_577960413b81b4d5e2_43603551', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2023660413b81b58ed2_05218980', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/otocovid.master.html");
}
/* {block 'bodycontent'} */
class Block_577960413b81b4d5e2_43603551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_577960413b81b4d5e2_43603551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.min.js" rel="stylesheet">


<div class="container">
  <div class="row">
      <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Form Activation Agent External</li>
      </ol>
  </div>
</div>
<section class="first-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1 class="title-top">Activation Agent External</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
                                    
        <p class="text-left">
            Selamat datang, saat ini Anda akan melakukan proses Aktivasi Account Agent External OTO KREDIT. Mohon diisi Jawaban dari Secret Question dibawah ini.
        </p>
      
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">

                <p class="text-center" id="notifikasi">
                    
                </p>
                
                <!-- <form id="frmPengajuan" class="form-horizontal form-pengajuan" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Extagent/email_account_info/<?php echo $_smarty_tpl->tpl_vars['data']->value['key_activate'];?>
"> -->
                    <form id="frmPengajuan" class="form-horizontal">
                    <div class="form-group" >
                        <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['data']->value['secr_question'];?>
 :</label>
                        <div class="col-sm-4">
                                                                    <!--input id="custname" name="data[CustName]" class="form-control" placeholder="Customer Name" minlength="3" maxlength="50" required /-->
                            <input id="secr_answer" name="secr_answer"  required="required" class="form-control" placeholder="" required="required" type="text" aria-required="true">                                    
                        </div>
                            <input type="hidden" id="key_activate" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['key_activate'];?>
" class="form-control" aria-required="true">
                        
                    </div>
                    
                        

                    <div class="form-group">

                        <div class="col-sm-offset-5 col-sm-5">
                            <button type="button" class="btn btn-primary" name="btn" id="btn_simulasi">Activate</button>                                        
                                                                    <!-- <button type="reset" class="btn btn-warning" onclick="reset_kolom()">Reset</button>                                         -->
                        </div>
                        
                    </div>
                </form>

                <!-- <p class="text-center">
                    <label id="notifikasi" class="col-sm-5 control-label"></label>
                </p> -->

                
                <p class="text-center">
                    * Informasi Login dan Password akan dikirim melalui email
                </p>

                
                <!-- <form id="tbl_simulasi" style="display:block" class="form-horizontal" method="POST"> -->
                <div id="tbl_simulasi" style="display:none">
                <table class="table table-bordered table-bordered4" >
                    <thead>
                        <tr>
                            <th>Pokok Hutang</th>
                            <th>Tenor (tahun)</th>
                            <th>Suku Bunga</th>
                            <th>Angsuran</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td ><input type="text" name="val_pokok_hutang" disabled id="tbl_pokok_hutang" class="form-control"></td>
                                <td ><input type="text" name="val_tenor" disabled id="tbl_tenor" class="form-control"></td>
                                <td ><input type="text" name="val_suku_bunga" disabled id="tbl_suku_bunga" class="form-control"></td>
                                <td ><input type="text" name="data[val_angsuran]" disabled id="tbl_angsuran" class="form-control"></span></td>
                                
                            </tr>
                                            </tbody>
                </table>
            
                <input type="hidden" name="val_custname" disabled id="val_custname" class="form-control">
                <input type="hidden" name="val_no_telp" disabled id="val_custname" class="form-control">
                <p class="text-left">
                    * Hasil Simulasi merupakan estimasi dan akan berubah sesuai dengan hasil lelang
                </p>
                <br>
                <button type="button" class="btn btn-primary" name="btn" id="btnpengajuan" onclick="myFunct_ajukan()" >Ajukan</button>
           
            </div>
                


            </div>
        </div>
                </div>



                


                <div class="col-sm-4">
                  <div class="banner">
      <!-- <div class="row">
              </div> -->
  
                                                                          <center>
                          <a href="">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/1465795292-57244.jpg" class="img-responsive" alt="">
                          </a>
                      </center>
                                                                                                  <center>
                          <a href="http://karir.oto.co.id/">
                              <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/1465795292-48013.jpg" class="img-responsive" alt="">
                          </a>
                      </center>
                                                      
                  
  </div>
              </div>


    </div>

    


  </div>

  <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Konfirmasi
            </div>
            <div class="modal-body">
            Saya menyatakan data yang diberikan adalah benar dan 
saya setuju apabila data saya digunakan sehubungan dengan pengajuan Dana
Tunai
            </div>

            <div class="modal-footer">
                <a href="#" id="submit" class="btn btn-success success" data-dismiss="modal">Kirim</a>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Koreksi</button>
            </div>
        </div>
    </div>
</div>

</section>

<?php
}
}
/* {/block 'bodycontent'} */
/* {block 'bodyfooter'} */
class Block_2023660413b81b58ed2_05218980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_2023660413b81b58ed2_05218980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/jquery_003.js"><?php echo '</script'; ?>
>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/main.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {

        // $('.c_nominal').mask("#.##0,00");

      $('.carousel').carousel({
        interval: 10000
      })
    });
  <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/jquery.js"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 type="text/javascript">$(document).ready(function() {
        $(".fancybox").fancybox();
    });
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$('#btn_simulasi').click(function(){
            /* when the submit button in the modal is clicked, submit the form */
            // $('#frmPengajuan').submit();

            dataygmaudikirim = {
            secr_answer: $("#secr_answer").val(),
            key_activate: $("#key_activate").val()  
            };

            // alert(dataygmaudikirim);

    $.post( "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Extagent/cek_answer", dataygmaudikirim)
		  .done(function( data ) {
		    // console.log(data.notifikasi);
            // console.log("sdfgsdf");
		    // // $("#output").html(data.message + data.message);
            // $("#notifikasi").val(data.notifikasi);
            // $("#asset_name").val(data.data["prod_name"]);
            
            alert(data.key_agent);
            alert(data.secr_answer);
            alert(data.real_answer);

            $("#notifikasi").text("Secret Answer tidak valid");

            if(data.secr_answer!=data.real_answer){

                $("#notifikasi").text("Secret Answer tidak valid");

            } else {
                window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Extagent/email_account_info/" + data.key_agent  ;
            }
        

        
		  });
    	return false;

            

            
            
        });	

        $("#frmPengajuan").validate({
			errorPlacement: function(error, element) {
				var placement = $(element).data('error');
				if (placement) {
					$(placement).append(error)
				} else {
					error.insertAfter(element);
				}
            }
            
            
		});
        

        //Script for refresh captcha
        $('.crlink').on('click', function() {
            var image = $('.creload').attr('src');
            var glue = '?';
            if (image.indexOf('?') != 1) {
                glue = '&';
            }
            $('.creload').attr('src', image + glue + new Date().getTime());
            return false;
        });

         


<?php echo '</script'; ?>
>
    
<?php
}
}
/* {/block 'bodyfooter'} */
}
