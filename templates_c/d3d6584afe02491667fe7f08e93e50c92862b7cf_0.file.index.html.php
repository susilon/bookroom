<?php
/* Smarty version 3.1.32, created on 2020-12-21 14:42:00
  from 'D:\ano site\Assigners\Views\Auction\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fe051c85ab130_77109775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3d6584afe02491667fe7f08e93e50c92862b7cf' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Auction\\index.html',
      1 => 1608536517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe051c85ab130_77109775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24145fe051c859bde0_05784071', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_324755fe051c85a6489_36534878', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/otocovid.master.html");
}
/* {block 'bodycontent'} */
class Block_24145fe051c859bde0_05784071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_24145fe051c859bde0_05784071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 


<div class="container">
  <div class="row">
      <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Pengajuan Dana Tunai</li>
      </ol>
  </div>
</div>
<section class="first-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1 class="title-top">Pengajuan Dana Tunai</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
                                    
        <p class="text-left">
            Selamat datang, saat ini Anda berada di halaman 
Pengajuan Dana Tunai. Silahkan melengkapi informasi di bawah ini untuk 
pengajuan dana tunai.
        </p>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <form id="frmPengajuan" class="form-horizontal form-pengajuan" method="post" novalidate="novalidate">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama :</label>
                        <div class="col-sm-9">
                                                                    <!--input id="custname" name="data[CustName]" class="form-control" placeholder="Customer Name" minlength="3" maxlength="50" required /-->
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50" minlength="3" placeholder="Customer Nama" type="text" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Kelamin :</label>
                        <div class="col-sm-9">
                            <select name="data[CustGender]" class="form-control" id="CustGender">
<option value="L" selected="selected">Laki-laki</option>
<option value="P">Perempuan</option>
</select>                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Handphone :</label>
                        <div class="col-sm-9">
                                                                    <!--input id="custhp" name="data[CustHP]" class="form-control" placeholder="Customer Phone No." type="number" required /-->
                            <input name="data[CustHP]" id="custhp" required="required" class="form-control" maxlength="15" placeholder="Customer Phone No." type="number" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">E-Mail :</label>
                        <div class="col-sm-9">
                                                                    <!--input id="custemail" name="data[CustEmail]" class="form-control" placeholder="Customer E-Mail" type="email" /-->
                            <input name="data[CustEmail]" id="custemail" required="required" class="form-control" maxlength="50" placeholder="Customer Email" type="email" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">&nbsp;</label>
                        <div class="col-sm-9">
                            <!-- <div class="g-recaptcha" data-sitekey="6LdPvBUTAAAAAPF4av_yx-px2ULiJ1oeHgr20-cQ"></div> -->
                            <label for="CaptCaptcha" class="clabel">Masukkan Captcha yang muncul dibawah:</label><br><img src="Pengajuan%20Calon%20Kustomer%20OTOKreditMobil_files/captcha.html" class="creload" alt="" vspace="2"><a href="javascript:void(0);" class="crlink">&nbsp;<span class="glyphicon glyphicon-repeat"></span></a><br><input name="data[Capt][captcha]" autocomplete="off" type="text" id="CaptCaptcha">                                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                                                                    <button type="button" class="btn btn-success" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit">Setuju</button>                                        <button type="reset" class="btn btn-warning">Batal</button>                                        
                        </div>
                    </div>
                </form>
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
class Block_324755fe051c85a6489_36534878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_324755fe051c85a6489_36534878',
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
$('#submit').click(function(){
            /* when the submit button in the modal is clicked, submit the form */
            $('#frmPengajuan').submit();
            
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
        

        // Script for refresh captcha
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
