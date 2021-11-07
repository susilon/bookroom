<?php
/* Smarty version 3.1.32, created on 2020-05-08 11:45:02
  from 'D:\ano site\Assigners\Views\Report\Report_daily_activity_pdf.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eb4e3ceb6f463_39214591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f10436dfeea61612ffec778a7e71041278c4df2' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Report\\Report_daily_activity_pdf.html',
      1 => 1588913096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb4e3ceb6f463_39214591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('papersize', "legal" ,false ,32);
$_smarty_tpl->_assignInScope('pageorientation', "landscape" ,false ,32);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>APPLICATION DELIVERY FORM</title>
<style type="text/css">
.auto-style1 {
	border: 1px solid #000000;
	text-align: center;
}
.auto-style2 {
	border: 1px solid #000000;
	background-color: #C0C0C0;
}
.auto-style3 {
	border: 1px solid #000000;
}
.auto-style4 {
	text-align: center;
	background-color: #C0C0C0;
}

.auto-style5 {
	text-align: left;
	background-color: #C0C0C0;
}

.auto-style6 {
	text-align: center;

}

.warna-row {
	background-color: rgba(206, 194, 194, 0.479);
}

td.h15 {
  width: 15px;
}

td.h20 {
  width: 20px;
}

td.h25 {
  width: 25px;
}

td.h30 {
  width: 30px;
}

td.no {
  width: 15px;
  vertical-align: top;
}

td.isiprjsts {
  width: 30px;
  text-indent: 5px;
  vertical-align: top;
}


td.h35 {
  width: 35px;
}

td.h40 {
  width: 40px;
}

td.hd50 {
  width: 50px;
}

td.isi_task_sts_cd {
  width: 50px;
  padding-left: 15px;
  vertical-align: top;
}


td.h100 {
  width: 100px;
}

td.h120 {
  width: 140px;
}

td.h150 {
  width: 150px;
  text-indent: 8px;
}
td.pic_name {
  width: 150px;
  text-indent: 8px;
  vertical-align: top;
}



td.isiplan {
  width: 150px;
  padding-left: 15px;
  vertical-align: top;
}

td.h200 {
  width: 200px;
}

td.h300 {
  width: 300px;
}

td.isiremark {
  width: 300px;
  /* text-indent: 15px; */
  padding-left: 5px;
  vertical-align: top;
}

td.h400 {
  width: 400px;
}

td.isititle {
  width: 400px;
  padding-left: 1px;
  vertical-align: top;
  /* text-indent: 15px;
  margin-left: 60px; */
  /* text-align:justify; */
}

/** Define the margins of your page **/
            @page {
                margin: 100px 25px;
            }

            header {
                position: fixed;
                top: -90px;
                left: 0px;
                right: 0px;
                height: 160px;

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color: black;
                text-align: center;
                line-height: 15px;

                font-family: verdana;
                font-size: 12px;
            }

            body {
                margin-top: 0.5cm;
                margin-left: 0cm;
                margin-right: 0cm;
                margin-bottom: 0cm;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 

                /** Extra personal styles **/
                /* background-color: #03a9f4; */
                color: black;
                text-align: right;
                line-height: 35px;

                font-family: verdana;
                font-size: 12px;
            }

                        /* Show current page number via CSS counter feature */
            .page-number:before {
                content: counter(page);
            }


</style>
</head>

<body>
        <!-- Define header and footer blocks before your content -->
    <header>

        <h2>Report Daily Activity</h2>

            <?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>

        <!-- <?php echo '<script'; ?>
 type="text/php">

        <?php echo '</script'; ?>
> -->

        <br> 
        Print by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>
 

        <table style="width: 1070px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                <tr>
                    <td class="auto-style3 h15"><strong>#</strong></td>
                    <td class="auto-style3 h150" ><strong>System Name</strong></td>
                    <td class="auto-style3 h150" ><strong>PIC Name</strong></td>
                    <td class="auto-style3 hd50" ><strong>Company</strong></td>
                    <td class="auto-style3 h150" ><strong>Milestone</strong></td>
                    <td class="auto-style3 h300" ><strong>Activity</strong></td>
                    <td class="auto-style3 h400" ><strong>Project Title</strong></td>
                    <td class="auto-style3 h30" ><strong>Prj sts</strong></td>
                </tr> 
                
        </table>
    <!-- Print by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>
 -->
    </header>


    <footer>


                <table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                    <tr>
                        <td></td>
                        <td>Print by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>
</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="auto-style6">Page <span class="page-number"></span></td>
                    </tr> 
                
                </table>

    </footer>



        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <p style="page-break-after: never;">
                 
                <table style="width: 1070px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                  
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'ini');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ini']->value) {
?>	

                    <tr>
                        <td colspan="9" class="auto-style5" style="font-weight:bolder;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><?php echo $_smarty_tpl->tpl_vars['ini']->value['dept_cd'];?>
</td>
                    </tr>
                    <!-- <?php $_smarty_tpl->_assignInScope('a', 0);?>
                    <?php $_smarty_tpl->_assignInScope('isi', $_smarty_tpl->tpl_vars['ini']->value['detail_per_dept_cd'][$_smarty_tpl->tpl_vars['a']->value]);?>
                    <?php
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['data']->step = 1;$_smarty_tpl->tpl_vars['data']->total = (int) ceil(($_smarty_tpl->tpl_vars['data']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value)+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value))+1)/abs($_smarty_tpl->tpl_vars['data']->step));
if ($_smarty_tpl->tpl_vars['data']->total > 0) {
for ($_smarty_tpl->tpl_vars['data']->value = 0, $_smarty_tpl->tpl_vars['data']->iteration = 1;$_smarty_tpl->tpl_vars['data']->iteration <= $_smarty_tpl->tpl_vars['data']->total;$_smarty_tpl->tpl_vars['data']->value += $_smarty_tpl->tpl_vars['data']->step, $_smarty_tpl->tpl_vars['data']->iteration++) {
$_smarty_tpl->tpl_vars['data']->first = $_smarty_tpl->tpl_vars['data']->iteration === 1;$_smarty_tpl->tpl_vars['data']->last = $_smarty_tpl->tpl_vars['data']->iteration === $_smarty_tpl->tpl_vars['data']->total;?>
                    <?php $_smarty_tpl->_assignInScope('a', $_smarty_tpl->tpl_vars['a']->value+1);?>
                    <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['isi']->value['activity_date'];?>
</td>
                    </tr>
                    
                    <?php }
}
?> -->

                    <!-- <?php $_smarty_tpl->_assignInScope('a', 0);?>
                    <?php $_smarty_tpl->_assignInScope('isi', $_smarty_tpl->tpl_vars['ini']->value['detail_per_dept_cd'][$_smarty_tpl->tpl_vars['a']->value]);?> -->
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ini']->value['detail_per_dept_cd'], 'isi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['isi']->value) {
?>	
                    <tr>
                        <!-- <td><?php echo $_smarty_tpl->tpl_vars['isi']->value['activity_date'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['isi']->value['total'];?>
</td> -->
                        <td colspan="9" class="auto-style5"><?php echo $_smarty_tpl->tpl_vars['isi']->value['activity_date'];?>
, Total : <?php echo $_smarty_tpl->tpl_vars['isi']->value['total'];?>
</td>
                    </tr>
                        <?php $_smarty_tpl->_assignInScope('no', 1);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['isi']->value['detail_per_date'], 'iku');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iku']->value) {
?>
                        <tr <?php if ($_smarty_tpl->tpl_vars['no']->value%2 == 0) {?> class = "warna-row" <?php }?>>
                          <!-- <td><?php echo $_smarty_tpl->tpl_vars['iku']->value['daily_activity'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['iku']->value['nt_username'];?>
</td> -->

                          <td class="no"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                        <td class="pic_name"><?php echo $_smarty_tpl->tpl_vars['iku']->value['nt_username'];?>
</td>
                        <td class="pic_name"><?php echo $_smarty_tpl->tpl_vars['iku']->value['group_system_desc'];?>
 - <?php echo $_smarty_tpl->tpl_vars['iku']->value['system_name'];?>
</td>
                        
                        <td class="isi_task_sts_cd"> <?php echo $_smarty_tpl->tpl_vars['iku']->value['company_name'];?>
</td>
                        <td class="isiplan"><?php echo $_smarty_tpl->tpl_vars['iku']->value['milestone'];?>
</td>
                        <td class="isiremark"><?php echo $_smarty_tpl->tpl_vars['iku']->value['daily_activity'];?>
</td>
                        <td class="isititle"><?php echo $_smarty_tpl->tpl_vars['iku']->value['prj_ctgry_cd'];?>
 - <?php echo $_smarty_tpl->tpl_vars['iku']->value['prj_doc_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['iku']->value['prj_title'];?>
</td>
                        <td class="isiprjsts"> <?php echo $_smarty_tpl->tpl_vars['iku']->value['prj_sts_cd'];?>
</td>
                        </tr>
                        <?php $_smarty_tpl->_assignInScope('no', $_smarty_tpl->tpl_vars['no']->value+1);?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    

	                <!-- <tr>
                        <td colspan="9" class="auto-style5">Total : <?php echo $_smarty_tpl->tpl_vars['ini']->value['total'];?>
</td>
                    <?php $_smarty_tpl->_assignInScope('a', 0);?>
                    <?php $_smarty_tpl->_assignInScope('isi', $_smarty_tpl->tpl_vars['ini']->value['detail_per_dept_cd'][$_smarty_tpl->tpl_vars['a']->value]);?>

                    <?php
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['data']->step = 1;$_smarty_tpl->tpl_vars['data']->total = (int) ceil(($_smarty_tpl->tpl_vars['data']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value)+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value))+1)/abs($_smarty_tpl->tpl_vars['data']->step));
if ($_smarty_tpl->tpl_vars['data']->total > 0) {
for ($_smarty_tpl->tpl_vars['data']->value = 0, $_smarty_tpl->tpl_vars['data']->iteration = 1;$_smarty_tpl->tpl_vars['data']->iteration <= $_smarty_tpl->tpl_vars['data']->total;$_smarty_tpl->tpl_vars['data']->value += $_smarty_tpl->tpl_vars['data']->step, $_smarty_tpl->tpl_vars['data']->iteration++) {
$_smarty_tpl->tpl_vars['data']->first = $_smarty_tpl->tpl_vars['data']->iteration === 1;$_smarty_tpl->tpl_vars['data']->last = $_smarty_tpl->tpl_vars['data']->iteration === $_smarty_tpl->tpl_vars['data']->total;?>
                    <?php $_smarty_tpl->_assignInScope('a', $_smarty_tpl->tpl_vars['a']->value+1);?>
                    <tr <?php if ($_smarty_tpl->tpl_vars['a']->value%2 == 0) {?> class = "warna-row" <?php }?>>
                        <td class="no"><?php echo $_smarty_tpl->tpl_vars['isi']->value['no'];?>
</td>
                        <td class="pic_name"><?php echo $_smarty_tpl->tpl_vars['isi']->value['pic_name'];?>
</td>
                        <td class="pic_name"><?php echo $_smarty_tpl->tpl_vars['isi']->value['task_desc'];?>
</td>
                        <td class="isi_task_sts_cd"><?php echo $_smarty_tpl->tpl_vars['isi']->value['task_sts_cd'];?>
</td>
                        <td class="isiplan"><?php echo $_smarty_tpl->tpl_vars['isi']->value['plan_start'];?>
 - <?php echo $_smarty_tpl->tpl_vars['isi']->value['plan_end'];?>
</td>
                        <td class="isiremark"><?php echo $_smarty_tpl->tpl_vars['isi']->value['remark'];?>
</td>
                        <td class="isititle"><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_doc_no'];?>
 - <?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_title'];?>
</td>
                        <td class="isiprjsts"> <?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_sts_cd'];?>
</td>
                        
                        
          </tr>
                    <?php }
}
?>
                    </tr> -->



                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> 

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </table>
            </p>
            <!-- <p style="page-break-after: always;">
                Content Page 2
            </p>
            <p style="page-break-after: never;">
                Content Page 3
            </p>  -->


        </main>



</body>


</html>
<?php }
}
