<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FINeST&trade; - Financial Enhanced Supporting Tools</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?php
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/bootstrap/css/bootstrap.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/font-awesome/css/font-awesome.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/ionicons/css/ionicons.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/AdminLTE.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/sweetalert.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/skins/_all-skins.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/dist/css/animate.min.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/iCheck/flat/blue.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/morris/morris.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/plugins/select2now/select2.css');
        ?>
        <style media="screen">
            input[type="file"] {
                display: block;
                height: auto;
                padding: 5px;
            }
            .loader_page{
                z-index: 50;
                background: rgba(255,255,255,0.7);
                border-radius: 3px;
            }
            .loader_page{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .loader_page > .fa{
                position: absolute;
                top: 50%;
                left: 50%;
                margin-left: -15px;
                margin-top: -15px;
                color: #000;
                font-size: 30px;
            }
            /*.table > thead > tr > th {
                text-transform: uppercase;
                font-size: 10px;
            }
            .table > tbody > tr > td {
                text-transform: uppercase;
                font-size: 10px;
            }*/
        </style>
    </head>
    <body class="hold-transition skin-purple-light">
        <div class="wrapper">
            <header class="main-header">
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-fixed-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle nav-mobile-btn visible-sm visible-xs" onclick="showMenu()">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Logo -->
                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/" class="logo">
                        <b><img src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/img/logfin_.png" alt="FINeST" /></b>
                    </a>
                    <div class="navbar-custom-menu">
                        <a href="#" id="close-nav-mobile" onclick="hideMenu()" class="visible-sm visible-xs"><i class="fa fa-remove fa-fw"></i></a>
                        <ul class="nav navbar-nav rj-nav">
                            <!-- MENU TOP -->
                            <li><a href="<?php echo Yii::app()->homeUrl;?>"><i class="fa fa-home"></i> Home</a></li>
							
							
							
							
							<?php /*
                            <li class="hover-down">
                                <a><i class="fa fa-money"></i> BUDGET <i class="fa fa-caret-down"></i></a>
                                <ul>
                                    <li>
                                        <a>Upload Budget</a>
                                        <ul>
                                            <li><a href="<?php echo Yii::app()->createUrl('/budget/transfer/uploadactivity');?>">Upload Activity</a></li>
                                            <!-- <li><a href="<?php echo Yii::app()->createUrl('/budget/transfer/upload');?>">Upload OPEX's</a></li> -->
                                            <li><a href="<?php echo Yii::app()->createUrl('/budget/transfer/uploadNew');?>">Upload OPEX's</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/budget/distributions/index');?>">Distribution</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/budget/transfer/holding');?>">Hold Budget</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/budget/transfer/uploadbymhd');?>">Penyesuaian Saldo</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/budget/reportbudget/saldokpa');?>">Report Budget</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/budget/historybudget/detailrra');?>">Detail RRA</a></li>
                                </ul>
                            </li>
                            <li class="hover-down">
                                <a><i class="fa fa-list-alt"></i> CASH MANAGEMENT <i class="fa fa-caret-down"></i></a>
                                <ul>
                                    <li>
                                        <a>Cash-Out Invoices</a>
                                        <ul>
                                            <li><a href="<?php echo Yii::app()->createUrl('/cshman/release/kpaonline');?>">KPA Online</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/cshman/cashout/invoiceentry');?>">Archives, Invoice Entry</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/cshman/cashout/updateandverification');?>">Update & Verification</a></li>
                                            <!-- <li><a href="<?php echo Yii::app()->createUrl('/cshman/payment/index');?>">I/F's Payment</a></li> -->
                                            <!-- <li><a href="<?php echo Yii::app()->createUrl('/cshman/fkb/index');?>">Form Kebutuhan Barang</a></li> -->
                                            <li><a href="<?php echo Yii::app()->createUrl('/cshman/cashout/posteddocument');?>">Posted Document</a></li>
                                            <!-- <li><a href="<?php echo Yii::app()->createUrl('/cshman/cashout/weeklywp');?>">Weekly Workplan</a></li> -->
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/documentsDetail');?>">Documents Detail</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="hover-down">
                                <a><i class="fa fa-list-alt"></i> CASH CARD <i class="fa fa-caret-down"></i></a>
                                <ul>
                                    <li><a href="<?php echo Yii::app()->createUrl('/ccard/verifikasispb');?>">Top Up VA</a></li>
                                    <li><a href="<?php echo Yii::app()->createUrl('/ccard/spbvalid');?>">History Top Up</a></li>
									<li><a href="<?php echo Yii::app()->createUrl('/ccard/cashcard');?>">Manage Virtual Account</a></li>
                                </ul>
                            </li>
                            <li class="hover-down">
                                <a><i class="fa fa-list-alt"></i> TAX <i class="fa fa-caret-down"></i></a>
                                <ul>
                                    <li>
                                        <a>VAT</a>
                                        <ul>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/documentsDetail');?>">Document's Detail</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/reconciliation');?>">Reconciliation</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/uploadEspt');?>">Upload e-SPT</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/hasilUploadEspt');?>">Hasil Upload</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/laporanEsptArea');?>">Laporan e-SPT Area</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/laporanEsptCorporate');?>">Laporan e-SPT Corporate</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/laporanEspt');?>">Laporan</a></li>
                                            <!-- <li><a href="#">Input Setor PPN WaPu</a></li> -->
                                        </ul>
                                    </li>
                                    <li>
                                        <a>PPh Withholding</a>
                                        <ul>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/documentsDetail');?>">Document's Detail</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/ReconciliationPW');?>">Reconciliation</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/InternalReportPW');?>">Internal Report</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/ExternalReportPW');?>">External Report</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/HelpPW');?>">Help</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/UploadSAPPW');?>">Upload SAP</a></li>
                                            <!-- <li><a href="<?php echo Yii::app()->createUrl('/tax/UpdatePW');?>">Update</a></li> -->
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/AuditWorkingPapers');?>">Audit Working Papers</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a>PPh 21 Corp</a>
                                        <ul>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/UploadPPh21Corp');?>">Upload</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/HasilUploadPPh21Corp');?>">Hasil Upload</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/ReconciliationPPh21Corp');?>">Reconciliation</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/ValidasiPPh21Corp');?>">Validasi</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/LaporanPPh21Corp');?>">Laporan</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/tax/ParameterTaxPPh21Corp');?>">Parameter Tax</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                             <li class="hover-down">
                                <a><i class="fa fa-list-alt"></i> ADMINISTRATION <i class="fa fa-caret-down"></i></a>
                                <ul>
                                    <li>
                                        <a>Parameters Tables</a>
                                        <ul>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/MenuParameter');?>">Menu Parameter</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/AccountParameter');?>">Account Parameter</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/BusinessArea');?>">Business Area</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/Cdinas');?>">Dinas Id</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/costcenter');?>">Cost Center</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/PLGroupAccount');?>">P/L Group Account</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/BLGroupAccount');?>">Balance Group Account</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/Vendor');?>">Vendor</a></li>
                                            <!--<li><a href="<?php echo Yii::app()->createUrl('/myadmin/VendorBank');?>">Vendor Bank</a></li>-->
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/TaxTarif');?>">Tax Tarif</a></li>
                                            <li><a href="<?php echo Yii::app()->createUrl('/myadmin/Profile');?>">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a>User Administration</a>
                                            <ul>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/User');?>">User List</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/User/ChangePassword');?>">Change Password</a></li>
                                            </ul>
                                    </li>
                                    <li>
                                        <a>Content Administration</a>
                                            <ul>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/ContentList');?>">Content List</a></li>
                                            </ul>
                                    </li>
                                    <li>
                                        <a>Upload & Updating Data</a>
                                            <ul>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/DownloadTrialBalance');?>">Download Trial Balance</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/DownloadSapPlan');?>">Download SAP's Plan</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/DownloadSapRelease');?>">Download SAP's Release</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/ProsesTrial');?>">Proses Trial Balance</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/ProsesMonthlyReport');?>">Proses Monthly Report</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/DownloadVendor');?>">Download Vendor</a></li>
                                            </ul>
                                    </li>

                                    <li>
                                        <a>Helpdesk</a>
                                            <ul>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/HelpdeskReport');?>">Helpdesk Report</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/NewVendorReport');?>">New Vendor Report</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/ImprestFund');?>">Imprest Fund</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/DoubleDocument');?>">Double Document</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/DocumentUpdate');?>">Document Update</a></li>
                                                <li><a href="<?php echo Yii::app()->createUrl('/myadmin/ParameterVendor');?>">Parameter Vendor</a></li>
                                            </ul>
                                    </li>
									
                                </ul>
                            </li>
							*/ ?>
							
							
							<?php
								$dataMenu = MenuNew::getMenuData();
								//echo '<pre>';
								//print_r($dataMenu);
								//echo'</pre>';
								foreach ($dataMenu as $menu){
									echo '<li class="hover-down">';
										echo '<a><i class="'.$menu["icon"].'"></i> '.$menu["name"].' <i class="fa fa-caret-down"></i></a>';
										if($menu["has_children"]==1){
											echo '<ul>';
												foreach ($menu["children"] as $child1){
													if($child1["has_children"]==1){
														echo '<li>';
															echo '<a>'.$child1["name"].'</a>';
															echo '<ul>';
																foreach ($child1["children"] as $child2){
																echo'<li><a href="'.Yii::app()->createUrl($child2["url"]).'">'.$child2["name"].'</a></li>';
																}
																
															echo '</ul>';
														echo '</li>';
													}else{
														echo '<li>';
														echo '<a href="'.Yii::app()->createUrl($child1["url"]).'">'.$child1["name"].'</a>';
														echo '</li>';
													}
												}
											echo '</ul>';
										}
										
									echo '</li>';
								}  
							?>
									
							
							
							
							
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo Photo::photoUrl(CHtml::encode(Yii::app()->user->getId())); ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs">&nbsp;</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo Photo::photoUrl(CHtml::encode(Yii::app()->user->getId())); ?>" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo Yii::app()->user->name; ?>
                                            <small>Jabatan</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo Yii::app()->createUrl('site/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="alert_template" style="display:none">
                                <button type="button" class="close" aria-label="Close" onclick="$('#alert_template').fadeOut('slow');">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert_content">
                                    Loader......
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo $content; ?>
                </div>
                 <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">

                      <div class="modal-dialog modal-md">

                          <div class="modal-content">

                          </div>

                          <!-- /.modal-content -->
                      </div>

                </div>

                <div class="modal fade" id="myModals" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
                </div>
                <footer class="main-footer" style="padding: 5px;">
                Designed & Developed by : PT. Telekomunikasi Indonesia. Copyright © 2018 .
                <!-- Designed & Developed by : Div IT & HCBP. Copyright © 2016 - PT. Telekomunikasi Indonesia. -->
            </footer>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.2.3 -->
        <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/typeahead/bootstrap-typeahead.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/sparkline/jquery.sparkline.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/slimScroll/jquery.slimscroll.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/dist/js/app.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/dist/js/sweetalert.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/javascriptHelper.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.MultiFile.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/autosize.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery-validation/jquery.validate.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/select2now/select2.js', CClientScript::POS_BEGIN);
        // Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/finance.js', CClientScript::POS_BEGIN);
        // Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.number.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.number.min.js', CClientScript::POS_BEGIN);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/plugins/chartjs/Chart.min.js', CClientScript::POS_BEGIN);
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('.uang').number( true , 0 , ',' , '.' );
                autosize(document.querySelectorAll('textarea'));
            })
            function getDocHeight(doc){
           	     doc = doc || document;
           	     // stackoverflow.com/questions/1145850/
           	     var body = doc.body, html = doc.documentElement;
           	     var height = Math.max( body.scrollHeight, body.offsetHeight,
           	     html.clientHeight, html.scrollHeight, html.offsetHeight );
           	     return height;
            }

            function setIframeHeight(id) {
           	     var ifrm = document.getElementById(id);
           	     var doc = ifrm.contentDocument? ifrm.contentDocument:
           	     ifrm.contentWindow.document;
           	     ifrm.style.visibility = 'hidden';
           	     ifrm.style.height = "10px"; // reset to minimal height ...
           	     // IE opt. for bing/msn needs a bit added or scrollbar appears
           	     ifrm.style.height = getDocHeight( doc ) + 4 + "px";
           	     ifrm.style.visibility = 'visible';
            }

            function showMenu() {
                $('.main-header .navbar-custom-menu').addClass('show');
            }

            function hideMenu() {
                $('.main-header .navbar-custom-menu').removeClass('show');
            }

              $("#myModal").on("hidden.bs.modal", function(){
                $(".modal-content").html("");
                $(this).removeData('bs.modal');
                // location.reload();
            });
        </script>
    </body>
</html>
