<!-- <?php 
// session_start(); 
// include_once "include/_session.php";

// if(isset($_SESSION['cid'])){
//   unset($_SESSION['cid']);
// }
// include_once "include/classes/company/company.class.php"; 

// $companiesList = new CompanyList();

// http://www.pregatire.net/contapro2/contapro2/home.php
// http://app.contabilitate.ro/demo/web/webclient/home
?> -->
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>CONPRIM | Privire de ansamblu</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="../favicon.ico"/>

<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->

<?php include_once "include/_header.php" ?>

<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	
<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div id="sidebar" class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true">

    <li class="sidebar-toggler-wrapper">
        <div class="sidebar-toggler hidden-phone"></div>
    </li>
    <li class="start active">
        <a href="index.php">
            <i class="fa fa-building-o"></i>
            <span class="title">
                Firme
            </span>
            <span class="selected"></span>
        </a>
    </li>
    <li>
        <a href="datefirma.php">
            <i class="fa fa-building-o"></i>
            <span class="title">

                Date Firmă

            </span>
        </a>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-book"></i>
            <span class="title">

                Nomenclatoare

            </span>
            <span class="selected"></span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu" style="display: none;">
            <li>
                <a href="furnizori.php">
                    <i class="fa fa-truck"></i>

                    Furnizori

                </a>
            </li>
            <li>
                <a href="clienti.php">
                    <i class="fa fa-group"></i>

                    Clienți

                </a>
            </li>
            <li>
                <a href="salariati.php">
                    <i class="fa fa-umbrella"></i>

                    Salariați

                </a>
            </li>
            <li>
                <a href="gestiuni.php">
                    <i class="fa fa-folder-open"></i>

                    Gestiuni

                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-stack-exchange"></i>

                    Stocuri

                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu" style="display: none;">
                    <li>
                        <a href="categorii.php">
                            <i class="fa fa-bars"></i>

                            Categorii

                        </a>
                    </li>
                    <li>
                        <a href="produse.php">
                            <i class="fa fa-barcode"></i>

                            Produse

                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;">
            <i class="fa fa-file-text"></i>
            <span class="title">

                Documente

            </span>
            <span class="selected"></span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="facturiemise.php">
                    <i class="fa fa-files-o"></i>

                    Facturi emise

                </a>
            </li>
            <li>
                <a href="niruri.php">
                    <i class="fa fa-clipboard"></i>

                    N.I.R.-uri

                </a>
            </li>
            <li>
                <a href="bonuriconsum.php">
                    <i class="fa fa-shopping-cart"></i>

                    Bonuri consum

                </a>
            </li>
            <li>
                <a href="bonuritransfer.php">
                    <i class="fa fa-arrows-h"></i>

                    Bonuri Transfer

                </a>
            </li>
            <li>
                <a href="avizeemise.php">
                    <i class="fa fa-check-square-o"></i>

                    Avize Emise

                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;">
            <i class="fa fa-money"></i>
            <span class="title">

                Mijloace bănești

            </span>
            <span class="selected"></span>
            <span class="arrow"></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="javascript:;">
                    <i class="fa fa-inbox"></i>

                    Casa

                    <span class="selected"></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="chitanteemise.php">
                            <i class="fa fa-file-text-o"></i>

                            Chitanțe emise

                        </a>
                    </li>
                    <li>
                        <a href="chitanteprimite.php">
                            <i class="fa fa-file-text-o"></i>

                            Chitanțe primite

                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-sign-in"></i>

                            Decontări

                            <span class="selected"></span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="dispozitiiplata.php">
                                    <i class="fa fa-sign-in"></i>

                                    Dispoziții de plată

                                </a>
                            </li>
                            <li>
                                <a href="deconturi.php">
                                    <i class="fa fa-sign-in"></i>

                                    Deconturi

                                </a>
                            </li>
                            <li>
                                <a href="dispozitiiincasare.php">
                                    <i class="fa fa-reply-all"></i>

                                    Dispoziții de încasare

                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="casadiverse.php">
                            <i class="fa fa-th"></i>

                            Casa - diverse

                        </a>
                    </li>
                    <li>
                        <a href="registrucasa.php">
                            <i class="fa fa-list-alt"></i>

                            Registru de casă

                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="banca.php">
                    <i class="fa fa-eur"></i>

                    Banca

                </a>
            </li>
        </ul>
    </li>

</ul>
		</div>
	</div>
	<!-- END SIDEBAR -->

	
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">

			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
					<!--  <small>Firme gestionate</small> -->
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
						    <i class="fa fa-home"></i>
							<a href="/conprim/index.php">Firme gestionate</a>
							<i class="fa fa-angle-right"></i>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<div id="addNewCompany" class="modal fade" role="dialog" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Adaugă firmă nouă: </h4>
										</div>
										<div class="modal-body form">
											<form action="#" class="form-horizontal form-row-seperated">
											    <div class="form-group">
											        <div class="col-sm-12">
											            <div id="NewCompanyMessage"></div>
											        </div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Nume Firmă*</label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="c_CompanyName" name="c_CompanyName" class="form-control"/>
														</div>
														<p class="help-block">
															 Introduceți numele firmei<br>
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Atribut Fiscal: </label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="C_FiscalAttribute" name="C_FiscalAttribute" class="form-control"/>
														</div>
														<p class="help-block">
                              Dacă nu aveți atribut fiscal, introduceți RO pentru a fi identificată firma ca plătitoare TVA.
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Cod Unic de Înregistrare (CUI)* </label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="CUI" name="CUI" class="form-control"/>
														</div>
														<p class="help-block">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Nr. ord. Reg. Comerțului* </label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="C_RegistryOfCommerce" name="C_RegistryOfCommerce" class="form-control"/>
														</div>
														<p class="help-block">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Adresă* </label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="ca_address" name="ca_address" class="form-control"/>
														</div>
														<p class="help-block">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Județul* </label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="ca_county" name="ca_county" class="form-control"/>
														</div>
														<p class="help-block">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Cont bancar (IBAN)* </label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="cb_iban" name="cb_iban" class="form-control"/>
														</div>
														<p class="help-block">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Banca* </label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="cb_bank" name="cb_bank" class="form-control"/>
														</div>
														<p class="help-block">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-4">Capital social* </label>
													<div class="col-sm-8">
														<div class="input-group">
															<input type="text" id="c_Capital_Social" name="c_Capital_Social" class="form-control"/>
														</div>
														<p class="help-block">
														</p>
													</div>
												</div>
												<div class="form-group">
									                <label class="col-sm-4">NOTĂ: </label>
									                <div class="col-sm-8">
										                <p class="help-block">
                                                            Pentru a vedea informațiile salvate trebuie să <a href="index.php">reactualizați pagina</a>.
										                </p>
									                </div>
								                </div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Închide</button>
											<button type="button" class="btn btn-primary" id="SaveNewCompany"><i class="fa fa-check"></i> Salvează firmă nouă</button>
										</div>
									</div>
								</div>
							</div>
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
                    <div class="add-portfolio">
					    <span>
						Aveți în gestiune </span>
						<a href="#addNewCompany" data-toggle="modal" class="btn icn-only green">
						    Adaugă o firmă nouă <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
      </div>
			<!--end add-portfolio-->
			<div><font style="color: #a40000">Pentru a prelucra informații în contul unei firme trebuie să alegeți firma întotdeauna din această pagină!</font></div>
<?php
// if(count($companiesList)==0){
//   echo "Nu aveți nici o firmă atribuită contului dumneavoastră. Adăugați o firmă nouă.";
// }
// else{
//   $cids = $companiesList->getCompanyListForUser($user->uid);
//     foreach($cids as $cid){
//       $company = new Company();
//       $company->cid = $cid;
//       $company->getCompanyFullInfo();
      
?>			
			<div class="row portfolio-block">
			    <div class="col-md-5">
				    <div class="portfolio-text">
					    <!--<img src="../assets/admin/pages/media/profile/logo_metronic.jpg" alt=""/>-->
						    <div class="portfolio-text-info">
							    <a href="include/functions/index/manage.php?cid="><h4>Company Name</h4></a>
								<p style="font-size:12px;">
								    Plătitor TVA: 
								    DA<br/>
								    Nr. Ordin la Registrul Comerțului: <br/>
								    Adresa: <br/>
								    Județ: <br/>
								    Banca: <br/>
								    Capital social: <br/> -->
                    			</p>
					        </div>
                        </div>
                    </div>
					<div class="col-md-5 portfolio-stat">
						<div class="portfolio-info">
						    CUI <span>
							</span>
						</div>
						<div class="portfolio-info">
						    Cont Bancar (IBAN) <span>
							</span>
            			</div>
                    </div>
					<div class="col-md-2">
					    <div class="portfolio-btn">
						<a href="include/functions/index/manage.php?cid=" class="btn bigicn-only">
						<span>
						Administrează </span>
						</a>
					</div>
				</div>
			</div>
			<!--end row-->


			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<?php include "include/_footer.php"?>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/custom/index.js"></script>
<script src="../assets/admin/pages/scripts/custom/jquery.form.malsup.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {       
  // initiate layout and plugins
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Index.init(); 
  
  });
 
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>