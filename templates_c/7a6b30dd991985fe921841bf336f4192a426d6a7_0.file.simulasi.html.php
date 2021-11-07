<?php
/* Smarty version 3.1.32, created on 2021-03-30 15:07:58
  from 'D:\ano site\UI-skeletonhahuyy\Views\Auction\simulasi.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6062dc5ed12594_69483725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a6b30dd991985fe921841bf336f4192a426d6a7' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Auction\\simulasi.html',
      1 => 1617091676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6062dc5ed12594_69483725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81906062dc5ed053c0_86782568', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87946062dc5ed0d501_75198675', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/otocovid.master.html");
}
/* {block 'bodycontent'} */
class Block_81906062dc5ed053c0_86782568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_81906062dc5ed053c0_86782568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<!-- <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/vendor/jquery/jquery.min.js" rel="stylesheet"> -->


<div class="container">
  <div class="row">
      <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Simulasi Pembiayaan</li>
      </ol>
  </div>
</div>
<section class="first-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1 class="title-top">Simulasi Pembiayaan</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
                                    
        <p class="text-left">
            Selamat datang, saat ini Anda berada di laman Simulasi Pembiayaan Kendaraan Lelang. Silakan melengkapi informasi dibawah ini.
        </p>
        <!-- <br> -->

        <p class="text-left">
            Saya menyatakan dan bersedia bahwa data yang disampaikan disini akan dipergunakan sesuai tujuan permohonan/simulasi pembiayaan
        </p>
        
        <br>

        <!-- <button type="button" class="btn btn-success" onclick="myFunction()" name="btn" id="btn_simulasi">Tata Cara</button> -->

        <h2 class="title" style="align:center">JBA</h2>
        <br>
        <br>
        
        <button type="button" class="btn btn-primary" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit2">Cara Pengajuan</button>
        
        <button type="button" class="btn btn-primary" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit3">Syarat dan Ketentuan</button>
       
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                
                <form id="frmPengajuan" class="form-horizontal form-pengajuan">
                    <div class="form-group" >
                        <label class="col-sm-3 control-label">Harga OTR * :</label>
                        <div class="col-sm-9">
                                                                    <!--input id="custname" name="data[CustName]" class="form-control" placeholder="Customer Name" minlength="3" maxlength="50" required /-->
                            <input id="otr" required="required" class="form-control" minlength="3" placeholder="Rp,-" required="required" type="text" aria-required="true">                                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">DP (%) * :</label>
                        
                        <div class="col-sm-4 "> 
                            <input  id="dp_percentage" class="form-control percentage" min="20" maxlength="2"  type="text" aria-required="true" required="required">
                            <dfn>minimal 20% dari OTR</dfn>
                        </div>
                        <div class="col-sm-5">
                            <input  id="dp_nominal" required="required" class="form-control nominal" maxlength="12" placeholder="Rp,-"type="text" aria-required="true">    
                            <dfn>Input Nominal DP</dfn>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-3 control-label">Plafon Pinjaman * :</label>
                        <div class="col-sm-9">
                            <input id="pokok_hutang" disabled class="form-control"  placeholder="" required="required" type="text" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tenor * :</label>
                        <div class="col-sm-9">
                            <!-- <input name="data[tenor]" id="tenor" required="required" class="form-control" maxlength="50" minlength="3" placeholder="" type="text" aria-required="true">    -->
                            <select class="form-control" id="tenor" required="required">
                                <option > </option>
                                <option tenor="1" value="1" >1 tahun</option>
                                <option tenor="2" value="2">2 tahun</option>
                                <option tenor="3" value="3">3 tahun</option>
                                <option tenor="4" value="4">4 tahun</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama * :</label>
                        <div class="col-sm-9">
                                                                    <!--input id="custname" name="data[CustName]" class="form-control" placeholder="Customer Name" minlength="3" maxlength="50" required /-->
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50" minlength="3" placeholder="" type="text" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nomor Telp * :</label>
                        <div class="col-sm-9">
                                                                    <!--input id="custname" name="data[CustName]" class="form-control" placeholder="Customer Name" minlength="3" maxlength="50" required /-->
                            <input name="data[no_telp]" id="no_telp" required="required" class="form-control" maxlength="50" minlength="3" placeholder="" type="text" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                                                                    <button type="button" class="btn btn-success" onclick="myFunction()" name="btn" id="btn_simulasi">Kalkulasi</button>                                        
                                                                    <button type="reset" class="btn btn-warning" onclick="reset_kolom()">Reset</button>                                        
                        </div>
                    </div>
                </form>

                
                <!-- <form id="tbl_simulasi" style="display:block" class="form-horizontal" method="POST"> -->
                <div id="tbl_simulasi" style="display:none">
                <table class="table table-bordered table-bordered4" >
                    <thead>
                        <tr>
                            <th>Pokok Hutang</th>
                            <th>Tenor (tahun)</th>
                            <th>Suku Bunga</th>
                            <th>Angsuran</th>
                            <!-- <th>Perusahaan</th> -->
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
                <!-- <br> -->
                <input type="hidden" name="val_custname" disabled id="val_custname" class="form-control">
                <input type="hidden" name="val_no_telp" disabled id="val_custname" class="form-control">
                <p class="text-left">
                    * Hasil Simulasi merupakan estimasi dan akan berubah sesuai dengan hasil lelang
                </p>
                <br>
                <button type="button" class="btn btn-primary" name="btn" id="btnpengajuan" onclick="myFunct_ajukan()" >Ajukan</button>
                <!-- <button type="reset" class="btn btn-warning" id="btn_reset" onclick="reset_kolom()">Reset</button> -->
                <!-- <button class="btn btn-primary" id="btnpengajuan" >Ajukan</button> -->
                <!-- <input class="btn btn-primary" type="submit" value="EN"> -->
                <!-- <input name="data[lang]" id="changeLang-EN" type="submit" value="EN"> -->
                <!-- <button type="button" class="btn btn-success" name="btn" id="btnpengajuan" data-toggle="modal" data-target="#confirm-submit">Sumulasi Ulang</button> -->
            <!-- </form>     -->
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

  <!-- <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
</div> -->

<div class="modal fade" id="confirm-submit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content warna">
            <div class="modal-header">
                Cara Pengajuan
            </div>
            <!-- <div class="modal-body"> -->

                <!-- <div class="col-sm-12"> -->
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/OTO.jpg" style="align-items: flex-end;align-items: flex-start;" width="100%">
                <!-- </div> -->
                        
            <!-- </div> -->

            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-submit3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true" width="100%" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Syarat dan Ketentuan
            </div>

            <div class="modal-body">
                <p style="font-weight: bold; font-size:13px;">Syarat dan Ketentuan Pembiayaan Atas Kendaraan Hasil Lelang (Auction Finance):</p><br>
                <font style="font-weight: bold; font-size:13px;">
                    <table width="100%">
                        <tr><td>1.&nbsp;&nbsp;</td><td>Kendaraan lelang yang dapat dibiayai adalah kendaraan dengan Grade A, B dan C.</td></tr>
                        <tr><td>2.</td><td>Dokumen yang dibutuhkan untuk pengajuan kredit:</td></tr>
                    </table>

                    <div class="col-sm-12 ex1">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/Syarat Kredit.jpg" style="align-items: flex-end;align-items: flex-start;"  >

                    </div>

                    <table width="100%">
                        <tr><td>3.</td><td>Setelah dinyatakan sebagai pemenang lelang customer hanya perlu membayar:</td></tr>
                        <tr><td></td><td>a.	Down Payment.</td></tr>
                        <tr><td></td><td>b.	Biaya administrasi JBA.</td></tr>
                        <tr><td></td><td>c.	Biaya administrasi OTO .</td></tr>
                        <tr><td></td><td>d.	Premi asuransi kendaraan.</td></tr>
                        <tr><td></td><td>e.	Angsuran ke-1.</td></tr>
                        <tr><td>4.</td><td>Pembayaran tersebut dilakukan ke JBA selambat - lambatnya 5 (lima) hari setelah diumumkan sebagai pemenang lelang.</td></tr>
                        <tr><td>5.</td><td>Untuk saat ini program ini berlaku terbatas untuk JBA area Jabodetabek. Untuk JBA area nasional akan menyusul kemudian.</td></tr>
                    </table>

                </font>
                </div>



            <br>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
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
class Block_87946062dc5ed0d501_75198675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_87946062dc5ed0d501_75198675',
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

        function reset_kolom() {
            var table_simulasi = document.getElementById("tbl_simulasi");
            table_simulasi.style.display = "none";

        }

        
        function myFunction() {

            var table_simulasi = document.getElementById("tbl_simulasi");
            table_simulasi.style.display = "block";

            var otr = parseFloat($("#otr").val());
            var dp_nominal = parseFloat($("#dp_nominal").val());
            var tenor = parseInt($("#tenor").val());
            // var tenor_tahun = $("#tenor").text();
            var tenor_tahun = tenor * 12;
            var pokok_hutang = parseInt($("#pokok_hutang").val());

            var custname = $("#custname").val();
            var no_telp = $("#no_telp").val();

            var suku_bunga = "10.49%";

            var otr_min_dp = parseFloat(otr - dp_nominal);
            var interest_val = parseFloat(otr_min_dp * 0.09);

            // var pokok_hutang = parseFloat(otr_min_dp + interest_val);

            // var intvalue = Math.round( floatvalue );

            var angsuran = Math.round(pokok_hutang / tenor_tahun);

            // var pokok_hutang =parseFloat( otr * 0.03 );



            $("#tbl_pokok_hutang").val(pokok_hutang);
            $("#tbl_tenor").val(tenor);
            $("#tbl_suku_bunga").val(suku_bunga);
            $("#tbl_angsuran").val(angsuran);
            $("#tbl_cust_name").val(custname);
            $("#tbl_no_telp").val(no_telp);


        
        
        }

        function myFunct_ajukan() {

            var otr = parseFloat($("#otr").val());
            var dp_nominal = parseFloat($("#dp_nominal").val());
            var tenor = parseInt($("#tenor").val());
            var pokok_hutang = parseInt($("#pokok_hutang").val());
            var custname = $("#custname").val();
            var no_telp = $("#no_telp").val();

            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Auction/pengajuan/" + otr + "/" + dp_nominal + "/" + tenor + "/"  + pokok_hutang + "/" + custname + "/" + no_telp ;

        }

        function itung() {

            var harga_otr = parseFloat($("#otr").val());
    var dp_percentage = parseFloat($("#dp_percentage").val());
    var dp_nominal = parseFloat($("#dp_nominal").val());

    var nominal = (harga_otr * dp_percentage) / 100;
    var percentage = (harga_otr / dp_nominal) * 100;
    // var otr = (harga_otr / dp_nominal) * 100;

    $('#dp_nominal').val(nominal);
    $('#dp_percentage').val(percentage);


    // $('#dp_nominal').attr("value",nominal);
    // $('#dp_percentage').attr("value",percentage);


}

// $('#otr').change(function()
// {
//     $("#dp_percentage").val(0);
//     $("#dp_nominal").val(0);
// }


        $('.percentage').change(function()
{
    
    var harga_otr = parseFloat($("#otr").val());
    var dp_percentage = parseFloat($("#dp_percentage").val());
    // var dp_nominal = parseFloat($("#dp_nominal").val());

    // if (dp_percentage<20){
    //     alert("Minimal DP 20% dari Harga OTR");
    //     $("#dp_percentage").focus();
    // } else {}

    var nominal = parseFloat((harga_otr * dp_percentage) / 100);

    var otr_x_dp = parseFloat((harga_otr * dp_percentage) / 100);

    var pokok_hutang = parseFloat(harga_otr - otr_x_dp);
    // var otr = (harga_otr / dp_nominal) * 100; Harga OTR - (Harga OTR * total DP)


    // $('#dp_nominal').attr("value",nominal);
    // $('#dp_percentage').attr("value",percentage);
    $('#dp_nominal').val(nominal);
    $('#pokok_hutang').val(pokok_hutang);

    harga_otr = parseFloat($("#otr").val());
    // percentage = parseFloat($("#dp_percentage").val());
    dp_nominal = parseFloat($("#dp_nominal").val());


});


$('.nominal').change(function()
{
    
    var harga_otr = parseFloat($("#otr").val());
    // var dp_percentage = parseFloat($("#dp_percentage").val());
    var dp_nominal = parseFloat($("#dp_nominal").val());

    // var nominal = parseFloat((harga_otr * dp_percentage) / 100);
    var percentage = parseFloat((dp_nominal / harga_otr) * 100);
    // var otr = (harga_otr / dp_nominal) * 100;

    var otr_x_dp = parseFloat((harga_otr * dp_percentage) / 100);

    var pokok_hutang = parseFloat(harga_otr - otr_x_dp);


    // $('#dp_nominal').attr("value",nominal);
    // $('#dp_percentage').attr("value",percentage);
    $('#dp_percentage').val(percentage);
    $('#pokok_hutang').val(pokok_hutang);

    harga_otr = parseFloat($("#otr").val());
    percentage = parseFloat($("#dp_percentage").val());
    // dp_nominal = parseFloat($("#dp_nominal").val());

});

    


<?php echo '</script'; ?>
>
    
<?php
}
}
/* {/block 'bodyfooter'} */
}
