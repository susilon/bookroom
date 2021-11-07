<?php
/* Smarty version 3.1.32, created on 2019-12-12 14:20:10
  from 'C:\xampp\htdocs\Assigner\Views\Reportnumber\Report_book_number.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5df1ea2a8257c2_13184921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0aa540511c6552b07904ba8c3bfebec97774ecb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Assigner\\Views\\Reportnumber\\Report_book_number.html',
      1 => 1576135207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1ea2a8257c2_13184921 (Smarty_Internal_Template $_smarty_tpl) {
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

td.h340 {
  width: 240px;
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

    <h2>Report Booked Number</h2>

        <?php echo $_smarty_tpl->tpl_vars['tanggal']->value;?>

    <!-- <?php echo '<script'; ?>
 type="text/php">

    <?php echo '</script'; ?>
> -->

      <br> 
        Print by : <?php echo $_smarty_tpl->tpl_vars['nt_user_name']->value;?>
 

         <table style="width: 1070px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
	        <tr>
                <td class="auto-style3 h30"><strong>#</strong></td>
                <td class="auto-style3 h50" ><strong>Seq No</strong></td>
                <td class="auto-style3 h150" ><strong>MI Number</strong></td>
                <td class="auto-style3 h400" ><strong>Title</strong></td>
                <td class="auto-style3 h340" ><strong>Referece</strong></td>
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
                 
                <table style="width: 100%; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'ini');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ini']->value) {
?>	

    <tr>
            <td colspan="5" class="auto-style5">Number Of : <?php echo $_smarty_tpl->tpl_vars['ini']->value['descr'];?>
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
						<td class="h50"><?php echo $_smarty_tpl->tpl_vars['isi']->value['seq_numb'];?>
</td>
						<td class="h150"><?php echo $_smarty_tpl->tpl_vars['isi']->value['mi_numb'];?>
</td>
						<td class="h400"><?php echo $_smarty_tpl->tpl_vars['isi']->value['mi_title'];?>
</td>
                        <td class="h340"><?php echo $_smarty_tpl->tpl_vars['isi']->value['mi_ref'];?>
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
    
    <!-- <br>     -->
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- 
    <tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td align="right">Total :</td>
		<td align="right"><?php echo $_smarty_tpl->tpl_vars['totalprice']->value;?>
</td>
	</tr> -->

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
