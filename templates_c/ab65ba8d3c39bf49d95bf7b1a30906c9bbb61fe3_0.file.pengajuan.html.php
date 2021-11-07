<?php
/* Smarty version 3.1.32, created on 2021-03-18 18:20:05
  from 'D:\ano site\UI-skeletonhahuyy\Views\Auction\pengajuan.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60533765628e49_36724174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab65ba8d3c39bf49d95bf7b1a30906c9bbb61fe3' => 
    array (
      0 => 'D:\\ano site\\UI-skeletonhahuyy\\Views\\Auction\\pengajuan.html',
      1 => 1616066292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60533765628e49_36724174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4560533765609956_43484916', 'bodycontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1606360533765622ac5_28555961', 'bodyfooter');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../Shared/otocovid.master.html");
}
/* {block 'bodycontent'} */
class Block_4560533765609956_43484916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodycontent' => 
  array (
    0 => 'Block_4560533765609956_43484916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 


<div class="container">
  <div class="row">
      <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Pengajuan Pembiayaan Kendaraan Lelang</li>
      </ol>
  </div>
</div>
<section class="first-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1 class="title-top">Pengajuan Pembiayaan Kendaraan Lelang</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-8">
                                    
        <p class="text-left">
            Selamat datang, saat ini Anda berada di halaman Pengajuan Pembiayaan Kendaraan Lelang. Silakan melengkapi informasi di bawah ini untuk pengajuan.
        </p>

        <br>

        <button type="button" class="btn btn-primary" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit2">Tata Cara</button>
        <button type="button" class="btn btn-primary" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit3">Syarat dan Ketentuan</button>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <form id="frmPengajuan" class="form-horizontal form-pengajuan" method="post" novalidate="novalidate">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Auction Source :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50" type="text" aria-required="true" value="JBA">                                    </div>
                    </div>
                    <u>Data Pemohon :</u>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">KTP ID * :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50" minlength="14" type="text" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">NPWP ID * :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50" minlength="14" type="text" aria-required="true">                                    </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nama Pemohon :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" value="<?php echo $_smarty_tpl->tpl_vars['custname']->value;?>
" required="required" class="form-control" maxlength="50" type="text" aria-required="true">                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nama Gadis Ibu Kandung * :</label>
                        <div class="col-sm-8">
                            <input name="data[nama_ibu]" id="nama_ibu" required="required" class="form-control" maxlength="50"  type="text" aria-required="true">                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nomor Telp :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" value="<?php echo $_smarty_tpl->tpl_vars['no_telp']->value;?>
" disabled class="form-control" maxlength="50"  type="text" aria-required="true" data-original-title="tesssss">                                    
                            <dfn>hanya diisi dengan angka (Maks. 15 Char)</dfn>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Alamat Email * :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50"   type="text" aria-required="true">
                            <dfn>Pastikan Email dan No. Telp aktif untuk proses verifikasi lebih lanjut</dfn> 
                                                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Marital Status :</label>
                        <div class="col-sm-8">
                            <!-- <input name="data[CustName]" value="TLO" disabled id="marital_sts" required="required" class="form-control" maxlength="50"  type="text" aria-required="true"> -->
                            <select name="data[marital_status]" class="form-control" id="marital_status">
                                <option value="0" selected="selected"> Pilih Salah Satu </option>
                                <option value="1" >Single</option>
                                <option value="2">Menikah</option>
                                </select>                                     
                            </div>
                    </div>
                    
                    <u>Data Pasangan :</u>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">KTP ID * :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50"  type="text" aria-required="true">                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nama * :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50"   type="text" aria-required="true">                                    
                        </div>
                    </div>
                    
                    <u>Photo :</u>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Customer Photo * :</label>
                        <div class="col-sm-8">
                            <!-- <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50"  type="text" aria-required="true">  -->
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50"  type="file" aria-required="true">
                            <!-- <dfn>Image size < 500 KB</dfn>                                     -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">KTP * :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50"  type="file" aria-required="true">  
                            <!-- <dfn>Image size < 500 KB</dfn>                                      -->
                        </div>
                    </div>
                    
                    
                    <u>Financial Info  :</u>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Plafon Pinjaman :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" value="<?php echo $_smarty_tpl->tpl_vars['pokok_hutang']->value;?>
" disabled class="form-control" maxlength="50"  type="text" aria-required="true">                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Tenor :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" value="<?php echo $_smarty_tpl->tpl_vars['tenor']->value;?>
" disabled class="form-control" maxlength="50"  type="text" aria-required="true">                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Merk/Type Kendaraan * :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50"  type="text" aria-required="true">                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Pertanggungan Asuransi :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" value="TLO" disabled id="custname" required="required" class="form-control" maxlength="50"  type="text" aria-required="true">
                            <!-- <select name="data[CustGender]" class="form-control" id="CustGender">
                                <option value="1" selected="selected"> select </option>
                                <option value="1" >TLO</option>
                                <option value="2">Comprehensive</option>
                                </select>                                      -->
                            </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-sm-4 control-label">Insurance Premium :</label>
                        <div class="col-sm-8">
                            <select name="data[CustGender]" class="form-control" id="CustGender">
                                <option value="1" selected="selected"> select </option>
                                <option value="1" >Value 1</option>
                                <option value="2">Value 2</option>
                                <option value="2">Value 3</option>
                                <option value="2">Value 4</option>
                                <option value="2">Value 5</option>
                                </select>                                     </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Administration Fee :</label>
                        <div class="col-sm-8">
                            <input name="data[CustName]" id="custname" required="required" class="form-control" maxlength="50"  type="text" aria-required="true">                                    </div>
                    </div> -->
                    <!-- <dfn>Disclaimer :</dfn>

                    <ul>
                        <li>Data kendaraan nilai perhitungan ini merupakan perkiraan sementara (estimasi).</li>
                        <li>Pokok Hutang adalah maksimal plafon pinjaman yang disetujui atau 80% dari nilai hasil lelang (digunakan mana yang lebih rendah).</li>
                        <li>Premi Asuransi, Biaya Administrasi dan Uang Muka dibayar dimuka setelah dinyatakan sebagai pemenang lelang</li>
                    </ul>  -->
                    <dfn>Disclaimer :</dfn>
                    <br>
                    <dfn>- Data kendaraan nilai perhitungan ini merupakan perkiraan sementara (estimasi).</dfn>
                    <br>
                    <dfn>- Plafon Pinjaman adalah maksimal plafon pinjaman yang disetujui atau 80% dari nilai hasil lelang (digunakan mana yang lebih rendah).</dfn>
                    <br>
                    <dfn>- Premi Asuransi, Biaya Administrasi dan Uang Muka dibayar dimuka setelah dinyatakan sebagai pemenang lelang</dfn>
                    
                    <!-- <br>
                    <dfn>
                        <ul>Data kendaraan nilai perhitungan ini merupakan perkiraan sementara (estimasi).</ul>
                        Pokok Hutang adalah maksimal plafon pinjaman yang disetujui atau 80% dari nilai hasil lelang (digunakan mana yang lebih rendah).
                        Premi Asuransi, Biaya Administrasi dan Uang Muka dibayar dimuka setelah dinyatakan sebagai pemenang lelang
                    </dfn>  -->
                    <br>
                    <br>
                    <dfn>Contoh Hasil Lelang terhadap Pokok Hutang dan Maksimal Nilai Pinjaman (Final Approval)</dfn>
                    <table class="table table-bordered table-bordered4" >
                        <thead>
                            <tr>
                                <th>Plafon Pinjaman</th>
                                <th>Hasil Lelang</th>
                                <th>80 % dari Hasil Lelang</th>
                                <th>Final Approval</th>
                                <!-- <th>Perusahaan</th> -->
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td >100.000.000</td>
                                    <td >200.000.000</td>
                                    
                                    <td >160.000.000</td>
                                    <td >100.000.000</td>
                                </tr>
                                <tr>
                                    <td >100.000.000</td>
                                    <td >100.000.000</td>
                                    
                                    <td >80.000.000</td>
                                    <td >80.000.000</td>
                                </tr>
                                <tr>
                                    <td >100.000.000</td>
                                    <td >85.000.000</td>
                                    
                                    <td >68.000.000</td>
                                    <td >68.000.000</td>
                                </tr>
                                                </tbody>
                    </table>

                

                    <div class="form-group">
                        <label class="col-sm-4 control-label">&nbsp;</label>
                        <div class="col-sm-8">
                            <!-- <div class="g-recaptcha" data-sitekey="6LdPvBUTAAAAAPF4av_yx-px2ULiJ1oeHgr20-cQ"></div> -->
                            <label for="CaptCaptcha" class="clabel">Masukkan Captcha yang muncul dibawah:</label><br><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/captcha.html" class="creload" alt="" vspace="2"><a href="javascript:void(0);" class="crlink">&nbsp;<span class="glyphicon glyphicon-repeat"></span></a><br><input name="data[Capt][captcha]" autocomplete="off" type="text" id="CaptCaptcha">                                    </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-6">
                                                                    <button type="button" class="btn btn-success" name="btn" id="submitBtn" data-toggle="modal" data-target="#confirm-submit">Setuju</button>                                        <button type="reset" id="simulasi_ulang" class="btn btn-warning">Simulasi Ulang</button>                                        
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

                <div class="col-sm-1">
                    <input type="checkbox" class="form-control" >
                </div>
                <div class="col-sm-11">
                    Saya menyatakan data yang diberikan adalah benar dan setuju apabila data saya digunakan sehubungan pengajuan pembiayaan yang saya lakukan
                </div>
                
                
            </div>

            <div class="modal-footer">
                <a href="#" id="submit" class="btn btn-success success" data-dismiss="modal">Kirim</a>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Koreksi</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-submit2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Tata Cara
            </div>
            
            <div class="modal-body">

                <div class="col-sm-12 cntr">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/cb-ajukan.png" width="40%">

                </div>
                <div class="col-sm-12">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                </div>

                <div class="col-sm-12 cntr">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/cb-bawa-pulang.png" style="align-items: flex-end;align-items: flex-start;" width="40%">

                </div>
                <div class="col-sm-12">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                </div>

                <div class="col-sm-12 cntr">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/cb-cash-payment.png" style="align-items: flex-end;align-items: flex-start;" width="40%">

                </div>
                <div class="col-sm-12">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                </div>

                <div class="col-sm-12 cntr">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/cb-dipo-bayar.png" style="align-items: flex-end;align-items: flex-start;" width="40%">

                </div>
                <div class="col-sm-12">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                </div>

                <div class="col-sm-12 cntr">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/cb-pilih.png" style="align-items: flex-end;align-items: flex-start;" width="40%">

                </div>
                <div class="col-sm-12">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                </div>

                <!-- <div class="col-sm-12 ex1">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/Syarat-Kredit.jpg" style="align-items: flex-end;align-items: flex-start;" >

                </div>

                <div class="col-sm-12 ex1">

                <table style="width:700px">
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th> 
                      <th>Age</th>
                    </tr>
                    <tr>
                      <td>Jill</td>
                      <td>Smith fgfg gffdg dgfdfg dfgdfg</td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td>Eve</td>
                      <td>✔</td>
                      <td>94</td>
                    </tr>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>✔</td>
                    </tr>
                  </table>

                </div> -->
                
                
            </div>

            <div class="modal-footer">
                <!-- <a href="#" id="submit" class="btn btn-success success" data-dismiss="modal">Kirim</a> -->
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
                <h3 style="text-align:left;">Dana Tunai</h3>
                <br>

                <p><strong><span style="text-decoration: underline;">Car Financing</span></strong></p>
<p><span>Solusi pembiayaan mobil baru/bekas dengan pilihan tenor 1-4 tahun dan 5-6 tahun (Fix And Cap) sehingga anda dapat menentukan pilihan terbaik sesuai kebutuhan.</span></p>
<br>
<p><strong><span style="text-decoration: underline;">Fix And Cap</span></strong></p>
<p><span>Pembiayaan mobil dengan cicilan rendah dan bunga ringan.</span></p>
<p><span>Angsuran Fix And Cap terbagi dalam 2 periode bunga yang berbeda agar konsumen dapat menggunakan bunga yang kompetitif di awal periode kreditnya:</span></p>
<!-- <div class="table-responsive"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/FIXCAP.jpg" width="608" height="68"></div> -->

<div class="col-sm-12 ex1">
    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/FIXCAP.jpg" style="align-items: flex-end;align-items: flex-start;" >

</div>
<!-- <div class="table-responsive"></div>
<div class="table-responsive"></div>
<div class="table-responsive">
<p><strong><span style="text-decoration: underline;">Merk kendaraan yang dapat dibiayai, antara lain:</span></strong></p>
<p><span>Suzuki, Toyota, Honda, Nissan, Daihatsu, Mitsubishi, Datsun, Mazda, Isuzu, Hyundai, Wuling, Renault, DFSK.</span></p>
<p><strong><span style="text-decoration: underline;">Persyaratan umum pembiayaan adalah sebagai berikut :</span></strong></p>
</div>

<div>

<ul>
<li>1. Warga Negara Indonesia</li>
<li>2. Minimum uang muka 25% (mobil baru) dan 30% (mobil bekas)</li>
<li>3. Usia konsumen saat lunas maksimum 64 tahun</li>
<li>4. Usia kendaraan maksimum 11 tahun pada saat lunas</li>
</ul>
</div>

<div class="col-sm-12">
    <ul>
        <li>1. Warga Negara Indonesia</li>
        <li>2. Minimum uang muka 25% (mobil baru) dan 30% (mobil bekas)</li>
        <li>3. Usia konsumen saat lunas maksimum 64 tahun</li>
        <li>4. Usia kendaraan maksimum 11 tahun pada saat lunas</li>
        </ul>

</div> -->



<!-- <div class="table-responsive"><strong><span style="text-decoration: underline;"></span></strong></div> -->
<!-- <div><strong><span style="text-decoration: underline;">Dokumen yang dibutuhkan untuk pengajuan kredit :</span></strong></div> -->
<br>
<p><strong><span style="text-decoration: underline;">Dokumen yang dibutuhkan untuk pengajuan kredit :</span></strong></p>

                <div class="col-sm-12 ex1">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/assets/oto/Syarat-Kredit.jpg" style="align-items: flex-end;align-items: flex-start;" >

                </div>

                <!-- <div class="col-sm-12 ex1">

                <table style="width:700px">
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th> 
                      <th>Age</th>
                    </tr>
                    <tr>
                      <td>Jill</td>
                      <td>Smith fgfg gffdg dgfdfg dfgdfg</td>
                      <td>50</td>
                    </tr>
                    <tr>
                      <td>Eve</td>
                      <td>✔</td>
                      <td>94</td>
                    </tr>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>✔</td>
                    </tr>
                  </table>

                </div> -->
                
                
            </div>

            <div class="modal-footer">
                <!-- <a href="#" id="submit" class="btn btn-success success" data-dismiss="modal">Kirim</a> -->
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
class Block_1606360533765622ac5_28555961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyfooter' => 
  array (
    0 => 'Block_1606360533765622ac5_28555961',
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

        $('#simulasi_ulang').click(function(){

            window.location = "<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/Auction/simulasi/";

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
