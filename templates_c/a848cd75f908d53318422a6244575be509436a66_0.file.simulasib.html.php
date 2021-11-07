<?php
/* Smarty version 3.1.32, created on 2020-12-23 10:55:58
  from 'D:\ano site\Assigners\Views\Auction\simulasib.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5fe2bfce8fe9b9_31951204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a848cd75f908d53318422a6244575be509436a66' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Auction\\simulasib.html',
      1 => 1608695755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe2bfce8fe9b9_31951204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_294985fe2bfce8eabd9_66969632', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84175fe2bfce8f6571_89382878', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/otocovid.master.html");
}
/* {block 'bodycontent'} */
class Block_294985fe2bfce8eabd9_66969632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_294985fe2bfce8eabd9_66969632',
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
            Selamat datang, saat ini Anda berada di halaman Simulasi Pembiayaan Kendaraan Lelang. Silahkan melengkapi informasi dibawah ini untuk pengajuan.
        </p>
        <br>

        <p class="text-left">
            Data Kendaraan dan nilai perhitungan adalah estimasi dan akan berubah sesuai dengan hasil lelang dan persetujuan pembiayaan.
Jumlah Pinjaman (plafond pinjaman) maksimal adalah sebesar 80 % dari harga jual lelang digunakan mana yang lebih rendah.
Biaya asuransi, uang muka, biaya administrasi dan biaya provisi akan dibayar lunas oleh Pemohon kepada penyelenggara lelang segera setelah dinyatakan sebagai pemenang lelang.
        </p>
        <br>

        <p class="text-left">
            Saya menyatakan data yang diberikan adalah benar dan setuju apabila data saya digunakan sehubungan pengajuan pembiayaan / Simulasi yang saya lakukan   </p>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                
                <form id="frmPengajuan" class="form-horizontal form-pengajuan" method="post" novalidate="novalidate">
                    <div class="form-group" >
                        <label class="col-sm-3 control-label">Harga OTR * :</label>
                        <div class="col-sm-9">
                                                                    <!--input id="custname" name="data[CustName]" class="form-control" placeholder="Customer Name" minlength="3" maxlength="50" required /-->
                            <input id="otr" required="required" class="form-control" on maxlength="50" minlength="3" placeholder="Rp,-" required="required" type="text" aria-required="true">                                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">DP (%) * :</label>
                        
                        <div class="col-sm-4 "> 
                            <input  id="dp_percentage" class="form-control percentage" maxlength="5"  type="text" aria-required="true">
                            <dfn>minimal 20% dari OTR</dfn>
                        </div>
                        <div class="col-sm-5">
                            <input  id="dp_nominal" required="required" class="form-control nominal" maxlength="12" placeholder="Rp,-" required="required" type="text" aria-required="true">    
                            <dfn>Input Nominal DP</dfn>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="col-sm-3 control-label">Pokok Hutang * :</label>
                        <div class="col-sm-9">
                            <input id="pokok_hutang" disabled class="form-control"  placeholder="" required="required" type="text" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tenor * :</label>
                        <div class="col-sm-9">
                            <!-- <input name="data[tenor]" id="tenor" required="required" class="form-control" maxlength="50" minlength="3" placeholder="" type="text" aria-required="true">    -->
                            <select class="form-control" id="tenor" required="required">
                                <option  tenor = "0" value="0" selected="selected"> select </option>
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
                    <!-- <div class="form-group">
                        <label class="col-sm-3 control-label">No. Handphone :</label>
                        <div class="col-sm-9">
                                                                   
                            <input name="data[CustHP]" id="custhp" required="required" class="form-control" maxlength="15" placeholder="Customer Phone No." type="number" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">E-Mail :</label>
                        <div class="col-sm-9">
                                                                    
                            <input name="data[CustEmail]" id="custemail" required="required" class="form-control" maxlength="50" placeholder="Customer Email" type="email" aria-required="true">                                    </div>
                    </div> -->
                    <!-- <div class="form-group">
                        <label class="col-sm-3 control-label">&nbsp;</label>
                        <div class="col-sm-9">
                            <label for="CaptCaptcha" class="clabel">Masukkan Captcha yang muncul dibawah:</label><br><img src="Pengajuan%20Calon%20Kustomer%20OTOKreditMobil_files/captcha.html" class="creload" alt="" vspace="2"><a href="javascript:void(0);" class="crlink">&nbsp;<span class="glyphicon glyphicon-repeat"></span></a><br><input name="data[Capt][captcha]" autocomplete="off" type="text" id="CaptCaptcha">                                    </div>
                    </div> -->

                    <!-- <p class="text-left">
                        Saya menyatakan data yang diberikan adalah benar dan setuju apabila data saya digunakan sehubungan pengajuan pembiayaan yang saya lakukan   </p> -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                                                                    <button type="button" class="btn btn-success" onclick="myFunction()" name="btn" id="submitBtn">Kalkulasi</button>                                        
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
class Block_84175fe2bfce8f6571_89382878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_84175fe2bfce8f6571_89382878',
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
$('#btnpengajuan').click(function(){
            /* when the submit button in the modal is clicked, submit the form */
            $('#tbl_simulasi').submit();
            
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

            var suku_bunga = "9%";

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

// $('.otr').keyup(function()
// {

//     $('#dp_nominal').val("");
//     $('#dp_percentage').val("");
//     $('#dp_nominal').attr("value",0);
//     $('#dp_percentage').attr("value",0);

// });


        


        
        // window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Secondassigner/remove_dtdeptassigner/" + $id_ms_prj + "/" + $pic_name;


//         function myFunction() {
//   var checkBox = document.getElementById("myCheck");
//   var task_container = document.getElementById("task_container");
//   $picname = $("#NTUserName").val();
//   if (checkBox.checked == true){
//         if($picname){
//             // text.style.display = "block";
//             task_container.style.display = "block";
//             $("#plan_start").attr("required","required");
//             $("#plan_end").attr("required","required");
//             $("#task_desc").attr("required","required");
//             alert("Please insert Task");
//         } else {
//             alert("You Must select PIC Project first");
//             checkBox.checked = false;
            
//             $("#plan_start").removeAttr("required");
//             $("#plan_end").removeAttr("required");
//             $("#task_desc").removeAttr("required");
//         }

//         $("#task_cek").val("1");

//   } else {
//     //  text.style.display = "none";
     
     
//      $("#task_desc").removeAttr("required");
//      $("#plan_start").removeAttr("required");
//      $("#plan_end").removeAttr("required");
//      $("#task_desc").val("");
//      $("#remark_task").val("");
//      $("#plan_start").val("");
//      $("#plan_end").val("");
//      $("#actual_start").val("");
//      $("#actual_end").val("");
//      $("#task_cek").val("");
//      task_container.style.display = "none";
//     //  alert("Check False");
//   }
// }
    

    


<?php echo '</script'; ?>
>
    
<?php
}
}
/* {/block 'bodyfooter'} */
}
