<?php
/* Smarty version 3.1.32, created on 2020-05-11 11:34:14
  from 'D:\ano site\Assigners\Views\Report\Report_unassign_prj_per_dept_pdf.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eb8d5c639d022_95729472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6594a390e6a2086823ffd87cfb48a2b9baf43e2' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Report\\Report_unassign_prj_per_dept_pdf.html',
      1 => 1589171650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb8d5c639d022_95729472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('papersize', "A4" ,false ,32);
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

td.h30 {
  width: 30px;
}

td.h50 {
  width: 50px;
}

td.h150 {
  width: 150px;
}

td.h140 {
  width: 140px;
}

td.h400 {
  width: 500px;
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

        <h2>Report Unassign PIC per Dept</h2>

            
        <!-- <?php echo '<script'; ?>
 type="text/php">

        <?php echo '</script'; ?>
> -->

        <!-- <br>  -->
        Printed by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>
 

        <table style="width: 1070px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                <tr>
                    <td class="auto-style3 h30"><strong>#</strong></td>
                    <td class="auto-style3 h150" ><strong>Documen Number</strong></td>
                    <td class="auto-style3 h150" ><strong>Project Category</strong></td>
                    <td class="auto-style3 h400" ><strong>Project Title</strong></td>
                    <td class="auto-style3 h140" ><strong>Project Status</strong></td>
                </tr> 
                
        </table>
    <!-- Print by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>
 -->
    </header>


    <footer>


                <table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                    <tr>
                        <td></td>
                        <td>Printed : <?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>
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
                 
                <table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'ini');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ini']->value) {
?>	

                    <tr>
                        <td colspan="5" class="auto-style5" style="font-weight:bolder;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><?php echo $_smarty_tpl->tpl_vars['ini']->value['dept_cd'];?>
</td>
                    </tr>

	                <tr>
                        <td colspan="5" class="auto-style5">Total : <?php echo $_smarty_tpl->tpl_vars['ini']->value['total'];?>
</td>
    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ini']->value['detail'], 'isi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['isi']->value) {
?>	
                    <tr>
                        <td class="h30"><?php echo $_smarty_tpl->tpl_vars['isi']->value['no'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_doc_no'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_ctgry_desc'];?>
</td>
                        <td class="h400"><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_title'];?>
</td>
                        <td class="h140"><?php echo $_smarty_tpl->tpl_vars['isi']->value['prj_sts_desc'];?>
</td>
                        
					</tr>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tr>
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
