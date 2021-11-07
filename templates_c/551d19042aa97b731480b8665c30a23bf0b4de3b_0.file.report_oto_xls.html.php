<?php
/* Smarty version 3.1.32, created on 2020-05-17 16:15:18
  from 'D:\ano site\Assigners\Views\Restruct\report_oto_xls.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec100a6bdfcc6_81996031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '551d19042aa97b731480b8665c30a23bf0b4de3b' => 
    array (
      0 => 'D:\\ano site\\Assigners\\Views\\Restruct\\report_oto_xls.html',
      1 => 1589699116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec100a6bdfcc6_81996031 (Smarty_Internal_Template $_smarty_tpl) {
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
  vertical-align: top;
}

td.h50 {
  width: 50px;
  vertical-align: top;
}

td.h150 {
  width: 150px;
  vertical-align: top;
}

td.h140 {
  width: 140px;
  vertical-align: top;
}

td.h400 {
  width: 500px;
  vertical-align: top;
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

        <!-- <h2>Report Unassign Project</h2> -->

            <!-- <?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>
 -->
        <!-- <?php echo '<script'; ?>
 type="text/php">

        <?php echo '</script'; ?>
> -->

        <!-- <br>  -->
        <!-- Printed by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>
  -->

        <table style="width: 1070px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                <tr>
                    <td class="auto-style3 h150"><strong>NO</strong></td>
                    <td class="auto-style3 h150" ><strong>Source</strong></td>
                    <td class="auto-style3 h150" ><strong>FinanceType</strong></td>
                    <td class="auto-style3 h150" ><strong>BranchName</strong></td>
                    <td class="auto-style3 h150" ><strong>NoKontrak</strong></td>
                    <td class="auto-style3 h150" ><strong>ContractStatus</strong></td>
                    <td class="auto-style3 h150" ><strong>CustomerName</strong></td>
                    <td class="auto-style3 h150" ><strong>KTP</strong></td>
                    <td class="auto-style3 h150" ><strong>SpouseName</strong></td>
                    <td class="auto-style3 h150" ><strong>PhoneNumber</strong></td>
                    <td class="auto-style3 h150" ><strong>EmailAddress</strong></td>
                    <td class="auto-style3 h150" ><strong>Occupation</strong></td>
                    <td class="auto-style3 h150" ><strong>AssetMake</strong></td>
                    <td class="auto-style3 h150" ><strong>Tenor</strong></td>
                    <td class="auto-style3 h150" ><strong>RemainingTenor</strong></td>
                    <td class="auto-style3 h150" ><strong>FinanceAmount</strong></td>
                    <td class="auto-style3 h150" ><strong>InterestRate</strong></td>
                    <td class="auto-style3 h150" ><strong>Installment</strong></td>
                </tr> 
                
        </table>
    <!-- Print by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>
 -->
    </header>


    <footer>


                <table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                    <!-- <tr>
                        <td></td>
                        <td>Printed : <?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>
</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="auto-style6">Page <span class="page-number"></span></td>
                    </tr>  -->
                
                </table>

    </footer>



        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <p style="page-break-after: never;">
                 
                <table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'isi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['isi']->value) {
?>	

                    <?php $_smarty_tpl->_assignInScope('a', $_smarty_tpl->tpl_vars['a']->value+1);?>
                    <tr>
                        <td class="h30"><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['Source'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['FinanceType'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['BranchName'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['contract_nbr'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['ContractStatus'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['CustomerName'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['KTP'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['SpouseName'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['PhoneNumber'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['EmailAddress'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['Occupation'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['AssetMake'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['Tenor'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['RemainingTenor'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['FinanceAmount'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['InterestRate'];?>
</td>
                        <td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['Installment'];?>
</td>
                        
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
