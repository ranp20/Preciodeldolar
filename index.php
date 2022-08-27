<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'views/includes/inc-header_links.php';?>
	<title>Tipo de cambio - dólares a soles | Precio del dólar</title>
	<link rel="stylesheet" href="<?= $url;?>js/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
	<script type="text/javascript" src="<?= $url;?>js/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
</head>
<body>
	<?php require_once 'views/includes/inc-header_top.php';?>
	<main>
		<section class="c_wrapper">
			<div class="c_wrapper__c">
				<div class="c_wrapper__c__cHFix">
					<div class="c_wrapper__c__cHFix__cFx">
						<div class="c_wrapper__c__cHFix__cFx__ct box-redx">
							<div class="c_wrapper__c__cHFix__cFx__ct__c">
								<div class="c_wrapper__c__cHFix__cFx__ct__c__cLogo">
									<a href="./" class="c_wrapper__c__cHFix__cFx__ct__c__cLogo__c" title="Ir al inicio">
										<img src="<?= $url;?>assets/img/logos/logo-negro.svg" alt="icon_logo_preciodeldolar" width="100" height="100">
									</a>
								</div>
								<div class="c_wrapper__c__cHFix__cFx__ct__c__cBtnMob">
									<button type="button" id="btn_Navmobile" title="Menú">
										<span></span>
										<span></span>
										<span></span>
									</button>
									<em>MENÚ</em>
								</div>
								<div class="c_wrapper__c__cHFix__cFx__ct__c__cOptions" id="h-m_list-opts">
									<div class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile">
										<div id="btn-sidebarl-close">
					            <div id="btn-sidebarl-close--btn">
					              <span></span>
					              <span></span>
					              <span></span>
					            </div>
					          </div>
										<ul class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m">
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="/preciodeldolar" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Cambio Online">
													<span>Cambiar Online</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="analisis-del-dolar" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Cambio Online">
													<span>Análisis del Dólar</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="casas-de-cambio" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Variación del Dólar">
													<span>Casas de Cambio</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="noticias" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Noticias">
													<span>Noticias</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="nosotros" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Noticias">
													<span>Nosotros</span>
												</a>
											</li>
										</ul>
										<!-- 
										<ul class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m l_m-social">
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Facebook">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 11 20"><path d="M7.61799 3.81375H10.248V0H7.14186V0.0221735C3.38955 0.155211 2.61868 2.2173 2.53933 4.37916V6.28603H0V10.0111H2.562V20H6.405V10.0111H9.56783L10.18 6.28603H6.42768V5.13304C6.41635 4.96674 6.42768 4.80044 6.48436 4.64523C6.54104 4.49002 6.62039 4.3459 6.73376 4.22395C6.84712 4.102 6.98315 4.00222 7.13053 3.92461C7.28923 3.85809 7.44795 3.82483 7.61799 3.81375Z"/></svg>
													</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Intagram">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 21 20"><path d="M11.3043 7.28557C10.6077 6.99986 9.84357 6.93392 9.10195 7.07678C8.36034 7.21964 7.68614 7.57129 7.15802 8.09876C6.6299 8.61524 6.2591 9.28558 6.11302 9.99986C5.96694 10.7251 6.0456 11.4724 6.32651 12.1537C6.61866 12.835 7.10184 13.4174 7.73108 13.824C8.36033 14.2306 9.09072 14.4504 9.84357 14.4504C10.8549 14.4504 11.81 14.0548 12.5291 13.3625C13.237 12.6702 13.6415 11.7251 13.6415 10.7361C13.6415 9.99986 13.4168 9.28557 13.0011 8.67019C12.5965 8.04381 12.001 7.57129 11.3043 7.28557Z"/><path d="M15.3155 0H5.13514C2.30351 0 0 2.25275 0 5.02198V14.978C0 17.7473 2.30351 20 5.13514 20H15.3155C18.1471 20 20.4506 17.7473 20.4506 14.978V5.02198C20.4394 2.25275 18.1359 0 15.3155 0ZM14.911 14.022C14.248 15 13.2929 15.7582 12.1805 16.2088C11.0681 16.6593 9.84328 16.7802 8.66344 16.5495C7.48359 16.3187 6.40488 15.7582 5.55089 14.9231C4.69691 14.0879 4.12384 13.033 3.88787 11.8791C3.65191 10.7253 3.77551 9.52747 4.23621 8.43956C4.69691 7.35165 5.47224 6.42857 6.4723 5.76923C7.47236 5.12088 8.6522 4.76923 9.85452 4.76923C11.4726 4.76923 13.012 5.3956 14.1581 6.50549C15.293 7.61538 15.9335 9.13187 15.9335 10.7143C15.9335 11.9011 15.574 13.044 14.911 14.022ZM16.383 5.12088C15.9335 5.12088 15.574 4.76923 15.574 4.32967C15.574 3.89011 15.9335 3.53846 16.383 3.53846C16.8325 3.53846 17.192 3.89011 17.192 4.32967C17.2033 4.76923 16.8325 5.12088 16.383 5.12088Z"/></svg>
													</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Twitter">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 25 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.77348 19.9985C17.0467 19.9985 22.0926 12.3278 22.0926 5.61582V4.93249C23.0476 4.20021 23.8759 3.32058 24.5455 2.32774C23.6326 2.72677 22.6693 3.00321 21.6816 3.14962C22.7009 2.50369 23.4696 1.5387 23.8637 0.410203C22.8809 0.960642 21.826 1.37573 20.7285 1.64386C20.272 1.12415 19.7064 0.708065 19.0708 0.424288C18.4352 0.140511 17.7446 -0.00421217 17.0467 9.33206e-05C15.7017 0.0341934 14.4229 0.582228 13.4811 1.52818C12.5393 2.47413 12.0084 3.74375 12.0008 5.06827C11.9697 5.43881 12.0161 5.81171 12.137 6.16392C10.1205 6.06122 8.15037 5.5307 6.36151 4.60868C4.57265 3.68667 3.00734 2.39494 1.77279 0.821974C1.32298 1.61854 1.08825 2.51536 1.09103 3.42672C1.10685 4.25051 1.31128 5.06016 1.68909 5.79537C2.06689 6.53058 2.60834 7.1724 3.2731 7.67301C2.45209 7.65481 1.65153 7.41727 0.957048 6.9858V6.9858C0.946435 8.14889 1.34976 9.27894 2.09704 10.1799C2.84432 11.0808 3.8884 11.6958 5.04814 11.9182C4.60458 12.0384 4.14371 12.0846 3.68463 12.0551C3.35934 12.0774 3.03298 12.0307 2.72759 11.9182C3.05051 12.9253 3.68315 13.8089 4.53811 14.4468C5.39308 15.0848 6.42818 15.4456 7.50044 15.4795C5.71824 16.8818 3.50873 17.6532 1.22727 17.6697C0.813283 17.692 0.398426 17.6457 0 17.5328C2.24464 19.175 4.9772 20.0417 7.77348 19.9985"/></svg>
													</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="Youtube">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 29 20"><path d="M27.601 3.13143C27.2741 1.90857 26.327 0.942857 25.1149 0.611429C22.9107 0 14.088 0 14.088 0C14.088 0 5.27103 0 3.06678 0.588571C1.88291 0.92 0.907633 1.90857 0.580659 3.13143C0 5.36571 0 10 0 10C0 10 0 14.6571 0.580659 16.8686C0.907633 18.0914 1.85473 19.0571 3.06678 19.3886C5.29358 20 14.088 20 14.088 20C14.088 20 22.9107 20 25.1149 19.4114C26.3213 19.08 27.2741 18.12 27.601 16.8914C28.1817 14.6571 28.1817 10.0229 28.1817 10.0229C28.1817 10.0229 28.2043 5.36571 27.601 3.13143ZM11.2806 14.28V5.72L18.6149 10L11.2806 14.28Z"/></svg>
													</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mMobile__m__link" title="linkedin">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 21 20"><path d="M20.4506 20V12.6645C20.4506 9.07895 19.6657 6.3158 15.3716 6.3158C13.3086 6.3158 11.9295 7.42325 11.3577 8.47588H11.3016V6.65571H7.23169V20H11.4698V13.3882C11.4698 11.6447 11.8062 9.96711 14.0149 9.96711C16.19 9.96711 16.2237 11.9518 16.2237 13.4978V20H20.4506Z"/><path d="M0.3479 6.6449H4.58603V19.9892H0.3479V6.6449Z"/><path d="M2.45542 0C1.09877 0 0 1.07456 0 2.40132C0 3.72807 1.09877 4.82456 2.45542 4.82456C3.81207 4.82456 4.91084 3.72807 4.91084 2.40132C4.91084 1.07456 3.81207 0 2.45542 0Z"/></svg>
													</span>
												</a>
											</li>
										</ul>
										 -->
									</div>
									<div class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk">
										<ul class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m">
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="/preciodeldolar" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Cambio Online">
													<span>Cambiar Online</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="analisis-del-dolar" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Cambio Online">
													<span>Análisis del Dólar</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="casas-de-cambio" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Variación del Dólar">
													<span>Casas de Cambio</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="noticias" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Noticias">
													<span>Noticias</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="nosotros" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Noticias">
													<span>Nosotros</span>
												</a>
											</li>
										</ul>
										<!-- 
										<ul class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m l_m-social">
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Facebook">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 11 20"><path d="M7.61799 3.81375H10.248V0H7.14186V0.0221735C3.38955 0.155211 2.61868 2.2173 2.53933 4.37916V6.28603H0V10.0111H2.562V20H6.405V10.0111H9.56783L10.18 6.28603H6.42768V5.13304C6.41635 4.96674 6.42768 4.80044 6.48436 4.64523C6.54104 4.49002 6.62039 4.3459 6.73376 4.22395C6.84712 4.102 6.98315 4.00222 7.13053 3.92461C7.28923 3.85809 7.44795 3.82483 7.61799 3.81375Z"/></svg>
													</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Intagram">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 21 20"><path d="M11.3043 7.28557C10.6077 6.99986 9.84357 6.93392 9.10195 7.07678C8.36034 7.21964 7.68614 7.57129 7.15802 8.09876C6.6299 8.61524 6.2591 9.28558 6.11302 9.99986C5.96694 10.7251 6.0456 11.4724 6.32651 12.1537C6.61866 12.835 7.10184 13.4174 7.73108 13.824C8.36033 14.2306 9.09072 14.4504 9.84357 14.4504C10.8549 14.4504 11.81 14.0548 12.5291 13.3625C13.237 12.6702 13.6415 11.7251 13.6415 10.7361C13.6415 9.99986 13.4168 9.28557 13.0011 8.67019C12.5965 8.04381 12.001 7.57129 11.3043 7.28557Z"/><path d="M15.3155 0H5.13514C2.30351 0 0 2.25275 0 5.02198V14.978C0 17.7473 2.30351 20 5.13514 20H15.3155C18.1471 20 20.4506 17.7473 20.4506 14.978V5.02198C20.4394 2.25275 18.1359 0 15.3155 0ZM14.911 14.022C14.248 15 13.2929 15.7582 12.1805 16.2088C11.0681 16.6593 9.84328 16.7802 8.66344 16.5495C7.48359 16.3187 6.40488 15.7582 5.55089 14.9231C4.69691 14.0879 4.12384 13.033 3.88787 11.8791C3.65191 10.7253 3.77551 9.52747 4.23621 8.43956C4.69691 7.35165 5.47224 6.42857 6.4723 5.76923C7.47236 5.12088 8.6522 4.76923 9.85452 4.76923C11.4726 4.76923 13.012 5.3956 14.1581 6.50549C15.293 7.61538 15.9335 9.13187 15.9335 10.7143C15.9335 11.9011 15.574 13.044 14.911 14.022ZM16.383 5.12088C15.9335 5.12088 15.574 4.76923 15.574 4.32967C15.574 3.89011 15.9335 3.53846 16.383 3.53846C16.8325 3.53846 17.192 3.89011 17.192 4.32967C17.2033 4.76923 16.8325 5.12088 16.383 5.12088Z"/></svg>
													</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Twitter">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 25 20"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.77348 19.9985C17.0467 19.9985 22.0926 12.3278 22.0926 5.61582V4.93249C23.0476 4.20021 23.8759 3.32058 24.5455 2.32774C23.6326 2.72677 22.6693 3.00321 21.6816 3.14962C22.7009 2.50369 23.4696 1.5387 23.8637 0.410203C22.8809 0.960642 21.826 1.37573 20.7285 1.64386C20.272 1.12415 19.7064 0.708065 19.0708 0.424288C18.4352 0.140511 17.7446 -0.00421217 17.0467 9.33206e-05C15.7017 0.0341934 14.4229 0.582228 13.4811 1.52818C12.5393 2.47413 12.0084 3.74375 12.0008 5.06827C11.9697 5.43881 12.0161 5.81171 12.137 6.16392C10.1205 6.06122 8.15037 5.5307 6.36151 4.60868C4.57265 3.68667 3.00734 2.39494 1.77279 0.821974C1.32298 1.61854 1.08825 2.51536 1.09103 3.42672C1.10685 4.25051 1.31128 5.06016 1.68909 5.79537C2.06689 6.53058 2.60834 7.1724 3.2731 7.67301C2.45209 7.65481 1.65153 7.41727 0.957048 6.9858V6.9858C0.946435 8.14889 1.34976 9.27894 2.09704 10.1799C2.84432 11.0808 3.8884 11.6958 5.04814 11.9182C4.60458 12.0384 4.14371 12.0846 3.68463 12.0551C3.35934 12.0774 3.03298 12.0307 2.72759 11.9182C3.05051 12.9253 3.68315 13.8089 4.53811 14.4468C5.39308 15.0848 6.42818 15.4456 7.50044 15.4795C5.71824 16.8818 3.50873 17.6532 1.22727 17.6697C0.813283 17.692 0.398426 17.6457 0 17.5328C2.24464 19.175 4.9772 20.0417 7.77348 19.9985"/></svg>
													</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="Youtube">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 29 20"><path d="M27.601 3.13143C27.2741 1.90857 26.327 0.942857 25.1149 0.611429C22.9107 0 14.088 0 14.088 0C14.088 0 5.27103 0 3.06678 0.588571C1.88291 0.92 0.907633 1.90857 0.580659 3.13143C0 5.36571 0 10 0 10C0 10 0 14.6571 0.580659 16.8686C0.907633 18.0914 1.85473 19.0571 3.06678 19.3886C5.29358 20 14.088 20 14.088 20C14.088 20 22.9107 20 25.1149 19.4114C26.3213 19.08 27.2741 18.12 27.601 16.8914C28.1817 14.6571 28.1817 10.0229 28.1817 10.0229C28.1817 10.0229 28.2043 5.36571 27.601 3.13143ZM11.2806 14.28V5.72L18.6149 10L11.2806 14.28Z"/></svg>
													</span>
												</a>
											</li>
											<li class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__i">
												<a href="javacript:void(0);" class="c_wrapper__c__cHFix__cFx__ct__c__cOptions__mDesk__m__link" title="linkedin">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 21 20"><path d="M20.4506 20V12.6645C20.4506 9.07895 19.6657 6.3158 15.3716 6.3158C13.3086 6.3158 11.9295 7.42325 11.3577 8.47588H11.3016V6.65571H7.23169V20H11.4698V13.3882C11.4698 11.6447 11.8062 9.96711 14.0149 9.96711C16.19 9.96711 16.2237 11.9518 16.2237 13.4978V20H20.4506Z"/><path d="M0.3479 6.6449H4.58603V19.9892H0.3479V6.6449Z"/><path d="M2.45542 0C1.09877 0 0 1.07456 0 2.40132C0 3.72807 1.09877 4.82456 2.45542 4.82456C3.81207 4.82456 4.91084 3.72807 4.91084 2.40132C4.91084 1.07456 3.81207 0 2.45542 0Z"/></svg>
													</span>
												</a>
											</li>
										</ul>
	 									-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx">
				<div class="c_wrapper__c__chtitle">
					<div class="c_wrapper__c__chtitle__ct" id="fromHereFixedHeadTop">
						<h1 class="c_wrapper__c__chtitle__ct__title-h1">Precio del dólar hoy en Perú</h1>
						<p>Actualizado 28 jul 2022 07:07 h | Dólares a soles/soles a dólares</p>
					</div>
					<div class="c_wrapper__c__chtitle__ctime">
						<span>28 Jul 2022 07:07h</span>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx mgb-1">
				<div class="c_wrapper__c__cdis d-fx ff-r-wrp alg-i-fs jc-sb">
					<div class="c_wrapper__c__cdis__crate">
						<div class="c_wrapper__c__cdis__crate__ctbl">						
							<table class="c_wrapper__c__cdis__crate__ctbl__tbl">
								<thead>
									<tr>
										<th class="fz_1-4rem talign-l">Presencial</th>
										<th class="talign-r">Compra</th>
										<th class="talign-r">Venta</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="c-descInfo">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" width="26" height="31" viewBox="0 0 26 31" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M20.067 20.5278C20.1878 19.7687 20.3339 18.9823 20.4547 18.2232C20.6265 17.3625 20.479 16.4633 20.0441 15.7187C19.6092 14.9742 18.9215 14.4437 18.1286 14.2411C16.7225 13.9011 15.2955 13.7963 13.8626 13.5594C12.5638 13.4408 11.2756 13.2129 10.0096 12.8777C9.08226 12.6654 8.24164 12.1393 7.60969 11.3758C6.97773 10.6122 6.58731 9.65089 6.49506 8.63129C6.43151 8.09098 6.47653 7.54221 6.62707 7.02241C6.7776 6.50262 7.03011 6.02403 7.36735 5.6193C8.91809 3.86433 10.518 2.13513 12.0941 0.405939C12.2202 0.272688 12.3698 0.168144 12.534 0.0984988C12.6982 0.0288534 12.8736 -0.0044768 13.0499 0.00048224C13.2262 0.00544128 13.3998 0.0485887 13.5604 0.127369C13.721 0.206149 13.8653 0.31896 13.9848 0.459121C15.5848 2.16253 17.2086 3.86433 18.7832 5.56773C19.8493 6.69582 20.8707 7.87225 21.9145 9.02612C22.9076 10.0994 23.9498 11.0954 24.8967 12.196C25.3082 12.6682 25.8898 13.034 25.9867 13.8205C26.1075 14.868 25.3813 15.3128 24.8475 15.8897C23.7575 17.042 22.6421 18.1684 21.5268 19.2949C21.0899 19.7397 20.6321 20.1861 20.1938 20.6309C20.1401 20.6067 20.1147 20.5568 20.067 20.5278Z" fill="#8E8E8E"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.98652 10.3653C5.8729 10.8925 5.78382 11.4256 5.71962 11.9624C5.65046 12.6495 5.6181 13.3404 5.62269 14.0316C5.68525 14.769 5.97078 15.4636 6.43516 16.008C6.89954 16.5524 7.51692 16.9164 8.19185 17.0436C9.89985 17.4752 11.6492 17.6862 13.4032 17.6721C14.9009 17.7017 16.3612 18.1822 17.6201 19.0597C18.2162 19.4616 18.7116 20.0161 19.0624 20.674C19.4133 21.332 19.6087 22.0733 19.6315 22.8323C19.6298 23.8329 19.264 24.7926 18.6131 25.5043C17.8855 26.368 17.1355 27.2061 16.3586 28.0457C15.534 28.9369 14.6856 29.8264 13.8625 30.7176C13.62 30.8923 13.337 30.9898 13.0457 30.9993C12.7544 31.0087 12.4665 30.9295 12.2148 30.7708C11.2933 29.828 10.4255 28.8369 9.50104 27.87C8.77338 27.0836 8.04722 26.273 7.31956 25.4865L4.0481 21.9427C3.02968 20.8404 1.9874 19.743 0.945125 18.6423C0.684115 18.3736 0.441427 18.085 0.218961 17.7785C0.0649735 17.551 -0.0118278 17.2732 0.00147908 16.9917C0.014786 16.7102 0.117389 16.4423 0.292025 16.233C0.752774 15.6835 1.26124 15.1597 1.74584 14.6617C3.1266 13.2661 4.50885 11.885 5.98652 10.3653Z" fill="#8E8E8E"/></svg>
												</span>
												<span>Sunat</span>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.890</div>
												<div class="c-descInfo__cCurrency curr_asc-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#009AB4" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. 0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.730</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. 0.12</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="c-descInfo">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" width="17" height="32" viewBox="0 0 17 32" fill="none"><path d="M12.1505 21.9892C12.1916 21.173 11.9105 20.3732 11.3677 19.7614C10.5223 19.0296 9.53569 18.4781 8.46875 18.141C6.35438 17.5925 4.37906 16.6068 2.67076 15.2477C2.03131 14.6291 1.53419 13.8792 1.21383 13.0499C0.893473 12.2206 0.757583 11.3318 0.815448 10.4449C0.781749 9.57788 0.929256 8.71334 1.24869 7.90636C1.56812 7.09939 2.05243 6.36759 2.67076 5.75766C4.03547 4.47337 5.8129 3.71461 7.68605 3.61664V0H10.3821V3.67447C11.3017 3.73305 12.2006 3.97343 13.0264 4.38155C13.8522 4.78967 14.5885 5.35748 15.1927 6.05195C15.7968 6.74643 16.2567 7.55372 16.5456 8.42705C16.8346 9.30037 16.9468 10.2223 16.8758 11.1393H12.0345C12.1286 10.1037 11.8284 9.07068 11.1938 8.24595C10.9033 7.91441 10.5407 7.65346 10.1338 7.48298C9.72682 7.3125 9.28624 7.237 8.84563 7.26224C8.42789 7.22385 8.00678 7.27636 7.61138 7.41623C7.21598 7.55609 6.85568 7.77999 6.5554 8.07236C6.03953 8.70769 5.78094 9.51289 5.83065 10.3291C5.81305 10.7088 5.87057 11.0881 5.9999 11.4456C6.12922 11.803 6.32786 12.1315 6.58442 12.4123C7.4414 13.1417 8.42356 13.7102 9.48341 14.0904C11.5487 14.6297 13.4691 15.6177 15.1075 16.9837C15.7459 17.6164 16.2437 18.3763 16.5684 19.2138C16.893 20.0513 17.0373 20.9477 16.9918 21.8445C17.0332 22.7168 16.8894 23.5879 16.5696 24.4006C16.2499 25.2134 15.7615 25.9495 15.1365 26.5606C13.753 27.8118 11.9845 28.5566 10.1212 28.6727V32H7.39613V28.6727C5.42769 28.5531 3.55332 27.7906 2.06199 26.5027C1.32941 25.7991 0.766163 24.9389 0.414678 23.9867C0.0631925 23.0345 -0.0674142 22.0153 0.032663 21.0055H4.87402C4.81762 21.5659 4.88153 22.1318 5.06149 22.6656C5.24145 23.1994 5.53327 23.6889 5.91762 24.1013C6.73136 24.7656 7.76761 25.0965 8.81661 25.0271C9.26525 25.0639 9.71678 25.0113 10.1448 24.8722C10.5729 24.7332 10.9689 24.5104 11.3098 24.217C11.6002 23.9264 11.8254 23.5775 11.9703 23.1934C12.1153 22.8093 12.1767 22.3988 12.1505 21.9892Z" fill="#8E8E8E"/></svg>
												</span>
												<span>Dólar</span>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.890</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"></polygon></g></g></svg>
													</span>
													<span>S/. -0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.730</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. -0.12</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="c-descInfo">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="28" viewBox="0 0 18 28" fill="none"><path d="M16.6909 18.5254H8.47635V18.6848C8.42629 19.3698 8.51622 20.0576 8.74092 20.7085C8.96562 21.3595 9.32071 21.9605 9.78552 22.477C10.2536 22.9361 10.8167 23.293 11.4375 23.5238C12.0582 23.7546 12.7222 23.854 13.3854 23.8155C14.1084 23.8111 14.8301 23.7579 15.5455 23.6562C16.2413 23.5343 16.9297 23.3746 17.6073 23.1781L18 27.4165C17.2582 27.606 16.5036 27.7444 15.7418 27.8308C14.9605 27.9314 14.1735 27.9846 13.3854 27.9901C10.6202 28.1054 7.91112 27.2071 5.79279 25.4725C4.82757 24.617 4.06659 23.5659 3.56337 22.3932C3.06014 21.2205 2.82686 19.9547 2.88002 18.6848V18.5254H0.0981778V15.6892H2.78184V12.8848H0V10.0167H2.78184V9.79364C2.72225 8.47857 2.94789 7.16602 3.44411 5.94156C3.94034 4.71709 4.69605 3.60816 5.66185 2.68709C7.72925 0.851573 10.4596 -0.11103 13.2546 0.0102085C13.9993 0.0145383 14.7427 0.0677332 15.48 0.169509C16.2328 0.169509 17.0182 0.392599 17.9018 0.583806L17.5091 4.88598C16.8167 4.66305 16.1046 4.50305 15.3819 4.40798C14.68 4.28268 13.9681 4.21869 13.2546 4.21678C12.5844 4.17897 11.9142 4.29144 11.2957 4.54559C10.6773 4.79974 10.127 5.18877 9.68724 5.68267C8.75844 6.83106 8.29288 8.27044 8.37817 9.72985V10.0167H16.5928V12.8848H8.37817V15.6892H16.5928L16.6909 18.5254Z" fill="#8E8E8E"/></svg>
												</span>
												<span>Euro</span>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.890</div>
												<div class="c-descInfo__cCurrency curr_asc-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#009AB4" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. 0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.730</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. -0.12</span>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="c_wrapper__c__cdis__cfrmrate">
						<div class="c_wrapper__c__cdis__cfrmrate__cont">
							<div class="c_wrapper__c__cdis__cfrmrate__cont__cTitle">
								<h3 class="c_wrapper__c__cdis__cfrmrate__cont__cTitle--title">Simula el tipo de cambio y obtén la mejor oferta</h3>
							</div>
							<div class="c_wrapper__c__cdis__cfrmrate__cont__frm">
								<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm">
									<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr">
										<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr__cNamCurr">									
											<span class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr__cNamCurr__cNType">TENGO DÓLARES</span>
											<!-- <span class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr__cNamCurr__cPrefix">$</span> -->
										</div>
										<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr__cIcon">
											<span>
												<img src="<?= $url;?>assets/img/utilities/flat_usa.svg" alt="" width="100" height="100">
											</span>
										</div>
									</div>
									<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cBtnCnvrt">
										<button type="button" id="btn-conver_divise" title="Convertir divisa">
											<span>
												<svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 34"><path d="M11.1405 26.92C11.2649 26.7096 11.3065 26.4601 11.2572 26.2204C11.2078 25.9807 11.071 25.7679 10.8736 25.6237C9.30801 24.5269 8.08876 23.0032 7.36064 21.2337C6.63252 19.4641 6.4261 17.5229 6.7659 15.6406C7.10569 13.7583 7.97743 12.014 9.2776 10.6147C10.5778 9.21538 12.2518 8.2199 14.1008 7.74644L12.7314 10.1254C12.5991 10.3553 12.5633 10.6285 12.6321 10.885C12.7008 11.1415 12.8684 11.3603 13.0979 11.4932C13.3274 11.6261 13.6001 11.6622 13.8559 11.5937C14.1118 11.5251 14.3298 11.3575 14.4622 11.1276L16.4577 7.66099C16.7224 7.20129 16.7938 6.65482 16.6563 6.14181C16.5189 5.62879 16.1838 5.19126 15.7248 4.92546L12.2632 2.92104C12.0337 2.78814 11.761 2.75199 11.5052 2.82054C11.2493 2.8891 11.0312 3.05674 10.8989 3.2866C10.7666 3.51645 10.7309 3.78968 10.7996 4.04619C10.8683 4.30269 11.0359 4.52146 11.2654 4.65436L13.3752 5.87606C11.1907 6.47989 9.22305 7.69353 7.7015 9.37563C6.17994 11.0577 5.16709 13.1391 4.7809 15.3772C4.3947 17.6154 4.65107 19.9183 5.52013 22.0177C6.38919 24.117 7.83517 25.9265 9.68969 27.2354C9.80376 27.3164 9.93337 27.3727 10.0703 27.4007C10.2072 27.4287 10.3484 27.4279 10.4849 27.3982C10.6214 27.3685 10.7501 27.3107 10.863 27.2283C10.9759 27.146 11.0704 27.041 11.1405 26.92Z"></path><path d="M22.3578 31.4868C22.4901 31.257 22.5258 30.9837 22.4571 30.7272C22.3884 30.4707 22.2208 30.252 21.9913 30.1191L19.8815 28.8974C22.066 28.2935 24.0337 27.0799 25.5552 25.3978C27.0768 23.7157 28.0896 21.6344 28.4758 19.3962C28.862 17.158 28.6057 14.8552 27.7366 12.7558C26.8675 10.6564 25.4216 8.84688 23.567 7.53801C23.453 7.45703 23.3234 7.40074 23.1864 7.3727C23.0495 7.34467 22.9083 7.34552 22.7719 7.3752C22.6354 7.40487 22.5066 7.46273 22.3937 7.54507C22.2808 7.62741 22.1863 7.73244 22.1162 7.85346C21.9918 8.06385 21.9502 8.31328 21.9996 8.55299C22.0489 8.79271 22.1857 9.00547 22.3831 9.14969C23.9487 10.2465 25.168 11.7702 25.8961 13.5398C26.6242 15.3093 26.8306 17.2505 26.4908 19.1328C26.151 21.0151 25.2793 22.7594 23.9791 24.1587C22.679 25.558 21.005 26.5535 19.1559 27.027L20.5253 24.648C20.6577 24.4181 20.6934 24.1449 20.6247 23.8884C20.5559 23.6319 20.3884 23.4131 20.1589 23.2802C19.9293 23.1473 19.6567 23.1112 19.4008 23.1797C19.145 23.2483 18.9269 23.4159 18.7946 23.6458L16.799 27.1124C16.5344 27.5721 16.4629 28.1186 16.6004 28.6316C16.7378 29.1446 17.0729 29.5822 17.532 29.848L20.9935 31.8524C21.223 31.9853 21.4957 32.0214 21.7516 31.9529C22.0074 31.8843 22.2255 31.7167 22.3578 31.4868Z"></path></svg>
											</span>
										</button>
									</div>
									<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr">
										<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr__cIcon">
											<span>
												<img src="<?= $url;?>assets/img/utilities/flat_peru.svg" alt="" width="100" height="100">
											</span>
										</div>
										<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr__cNamCurr">									
											<!-- <span class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr__cNamCurr__cPrefix">S/.</span> -->
											<span class="c_wrapper__c__cdis__cfrmrate__cont__frm__cvalfrm__cCurr__cNamCurr__cNType">QUIERO SOLES</span>
										</div>
									</div>
								</div>
								<form action="" method="POST" class="c_wrapper__c__cdis__cfrmrate__cont__frm__cfrm">
									<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cfrm__cFunc">
										<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cfrm__cFunc__cControl">
											<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cfrm__cFunc__cControl__cDiviseValue">
												<span>$</span>
												<input type="text" id="v-amm_cnvrt" placeholder="0.00" maxlength="20">
											</div>
										</div>
									</div>
									<div class="c_wrapper__c__cdis__cfrmrate__cont__frm__cfrm__cBtns">								
										<a href="javascript:void(0);" class="c_wrapper__c__cdis__cfrmrate__cont__frm__cfrm__cBtns--calc">
											<span>CONVERTIR</span>
										</a>
										<a href="javascript:void(0);" class="c_wrapper__c__cdis__cfrmrate__cont__frm__cfrm__cBtns--clean">
											<span>BORRAR</span>
										</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx mgb-1">
				<div class="c_wrapper__c__chtitle">
					<div class="c_wrapper__c__chtitle__ct">
						<h3 class="c_wrapper__c__chtitle__ct__title-h3">Cambio Online</h3>
						<p>Despliega para ver horarios y transferencias directas. Las Interbancarias son en todas las empresas.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx mgb-1">
				<div class="c_wrapper__c__cdis d-fx ff-r-wrp alg-i-fs jc-sb">
					<div class="c_wrapper__c__cdis__cinterbank">
						<div class="c_wrapper__c__cdis__cinterbank__cTitle">
							<h1 class="c_wrapper__c__cdis__cinterbank__cTitle__title-h3">Interbancario</h1>
						</div>
						<div class="c_wrapper__c__cdis__cinterbank__ctbl">						
							<table class="c_wrapper__c__cdis__cinterbank__ctbl__tbl">
								<thead>
									<tr>
										<th class="fz_1-4rem talign-l">&nbsp;</th>
										<th class="talign-r">Compra</th>
										<th class="talign-r">Venta</th>
										<th class="talign-r">Web</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="c-descInfo">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" width="61" height="16" viewBox="0 0 61 16" fill="none"><path d="M28.6821 1.63493C29.709 0.878936 30.8947 0.366735 32.149 0.137184C33.4034 -0.0923669 34.6936 -0.0332402 35.9217 0.31008C36.8498 0.548988 37.8837 0.973231 38.0936 1.87384C38.0261 2.61499 37.8656 3.34469 37.6158 4.04573C36.3434 3.13305 34.7613 2.76135 33.2156 3.01191C32.4558 3.1737 31.7461 3.51587 31.1463 4.00954C30.5465 4.50321 30.0743 5.13391 29.7695 5.8484C29.3709 6.59573 29.1293 7.41666 29.0596 8.26075C28.9899 9.10485 29.0935 9.95429 29.3641 10.7569C29.5524 11.2088 29.8424 11.6113 30.2116 11.933C30.5807 12.2546 31.0191 12.4869 31.4925 12.6117C32.2747 12.7908 33.0874 12.7884 33.8685 12.6046C34.6496 12.4209 35.3782 12.0608 35.9985 11.5518C35.7596 12.4799 35.6539 13.4341 35.3353 14.3622C35.0457 15.1311 34.0626 15.396 33.2416 15.5293C32.1602 15.7494 31.0434 15.728 29.9712 15.4667C28.899 15.2054 27.8976 14.7106 27.0387 14.0176C26.3753 13.3158 25.8728 12.4779 25.566 11.5623C25.2592 10.6466 25.1555 9.6751 25.2621 8.7153C25.3001 7.36058 25.6244 6.02925 26.2139 4.8089C26.8034 3.58854 27.6445 2.50684 28.6821 1.63493Z" fill="#818283"/><path d="M14.2066 0.63016C15.8088 0.359921 17.4324 0.235854 19.0571 0.25949C20.5575 0.230254 22.027 0.687415 23.246 1.56263C23.5455 1.82374 23.7906 2.14133 23.9673 2.49724C24.1439 2.85316 24.2487 3.2404 24.2756 3.63684C24.3025 4.03328 24.251 4.43113 24.124 4.80764C23.997 5.18416 23.7971 5.53194 23.5356 5.83112C22.8485 6.60668 21.9275 7.13733 20.9119 7.34275C21.7486 7.56023 22.4765 8.07693 22.9578 8.79503C23.4113 9.66095 23.5403 10.6605 23.3215 11.6131C23.1027 12.5658 22.5506 13.4089 21.7647 13.9902C20.3602 14.9629 18.695 15.4896 16.9866 15.5018C15.7128 15.5872 14.4334 15.4709 13.1959 15.1572C12.8889 15.0798 12.6044 14.9316 12.365 14.7244C12.1256 14.5172 11.9381 14.2568 11.8175 13.9641C11.5657 13.1437 11.5657 12.2666 11.8175 11.4462C12.6153 7.81333 13.3841 4.20944 14.2066 0.63016ZM17.2023 2.83101C16.9909 3.86483 16.7245 4.89865 16.5392 5.93247C16.4856 6.22206 16.8838 6.35672 17.1487 6.30314C18.2453 6.43079 19.3502 6.14759 20.2502 5.50823C20.4387 5.35546 20.5874 5.15928 20.6835 4.93648C20.7796 4.71369 20.8203 4.47092 20.8021 4.22896C20.7839 3.987 20.7073 3.75306 20.5789 3.54717C20.4505 3.34128 20.2741 3.16957 20.0649 3.04675C19.1411 2.74984 18.1602 2.67591 17.2023 2.83101ZM15.9296 8.63575C15.64 9.616 15.4793 10.6238 15.2404 11.6315C15.1607 12.0558 14.9218 12.5321 15.294 12.9042C16.4494 13.034 17.6186 12.8604 18.6864 12.4004C18.9702 12.2682 19.2185 12.0707 19.4112 11.824C19.6038 11.5774 19.7352 11.2885 19.7947 10.9813C19.8542 10.674 19.84 10.357 19.7533 10.0563C19.6666 9.75552 19.5099 9.4796 19.296 9.25112C18.266 8.69858 17.0885 8.48334 15.9296 8.63575Z" fill="#818283"/><path d="M40.4798 0.70971C41.6262 0.43964 42.802 0.315103 43.9795 0.33904C45.6003 0.200053 47.2304 0.464182 48.7244 1.10789C49.2319 1.36097 49.6692 1.73531 49.9975 2.19774C50.3258 2.66018 50.5351 3.19644 50.6067 3.75905C50.7581 4.99975 50.5076 6.25631 49.892 7.34413C49.2764 8.43194 48.3282 9.29366 47.1867 9.8027C45.503 10.501 43.6687 10.7568 41.8583 10.5455C41.5687 11.7125 41.3544 12.9042 41.0634 14.0712C40.9853 14.4054 40.8185 14.7123 40.5804 14.9595C40.3424 15.2067 40.042 15.3851 39.711 15.4757C38.8886 15.5553 38.0415 15.4757 37.2191 15.5017C38.3586 10.5701 39.3664 5.61384 40.4798 0.70971ZM43.7348 2.93662C43.4162 4.36862 43.0992 5.79918 42.8067 7.20511C42.701 7.4947 42.9399 7.76112 43.2309 7.89433C44.1144 8.02574 45.017 7.89694 45.8285 7.52366C46.512 7.19397 47.0406 6.61153 47.3027 5.89935C47.5648 5.18717 47.5398 4.40102 47.233 3.70692C46.5235 2.67744 44.9062 2.85699 43.7348 2.93662Z" fill="#818283"/><path d="M52.2747 3.99647C52.4877 3.41625 52.8155 2.8849 53.2384 2.43413C53.6613 1.98336 54.1707 1.62241 54.7361 1.37283C55.0399 1.28727 55.362 1.2918 55.6633 1.38588C55.9646 1.47996 56.232 1.65953 56.4331 1.90277C57.1005 3.54445 57.0911 5.3835 56.4071 7.0183C55.2412 5.74961 53.8371 4.72282 52.2747 3.99647Z" fill="#818283"/><path d="M56.411 1.90289C57.752 2.62169 58.9263 3.61538 59.857 4.81902C60.2391 5.2047 60.5375 5.66506 60.7336 6.1713C60.9296 6.67755 61.0192 7.21879 60.9966 7.76121C60.8389 8.68164 60.4046 9.53219 59.7513 10.1995C58.4671 11.6259 56.9748 12.8501 55.325 13.8309C54.9903 14.0679 54.6111 14.2347 54.2102 14.3213C53.8093 14.4079 53.3951 14.4125 52.9924 14.3348C52.478 14.1858 52.0024 13.9258 51.5994 13.573C51.1964 13.2203 50.8756 12.7834 50.6598 12.2932C53.1365 11.2601 55.166 9.38098 56.3863 6.99091C56.7315 6.18784 56.9116 5.32351 56.9158 4.44941C56.9201 3.5753 56.7484 2.70927 56.411 1.90289Z" fill="#818283"/><path d="M1.59143 3.99652C1.80431 3.41603 2.13199 2.8844 2.55491 2.43337C2.97783 1.98234 3.4873 1.62117 4.05291 1.37142C4.3567 1.28586 4.6788 1.2904 4.98006 1.38448C5.28133 1.47856 5.54877 1.65813 5.74988 1.90137C6.41738 3.54302 6.40801 5.38213 5.72382 7.0169C4.55789 5.7487 3.15374 4.7224 1.59143 3.99652Z" fill="#818283"/><path d="M5.75262 1.90289C7.09368 2.62166 8.26796 3.61535 9.19869 4.81902C9.58075 5.2047 9.87915 5.66506 10.0752 6.1713C10.2713 6.67755 10.3608 7.21879 10.3382 7.76121C10.1806 8.68164 9.74622 9.53219 9.09299 10.1995C7.80874 11.6259 6.31648 12.8501 4.66667 13.8309C4.33194 14.0679 3.95273 14.2347 3.55186 14.3213C3.151 14.4079 2.73675 14.4125 2.33406 14.3348C1.81948 14.1861 1.34378 13.9264 0.940492 13.5739C0.537208 13.2214 0.216165 12.7847 0 12.2947C2.47676 11.2615 4.50618 9.38243 5.72656 6.99236C6.39759 5.36398 6.40694 3.53806 5.75262 1.90289Z" fill="#818283"/></svg>
												</span>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.890</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"></polygon></g></g></svg>
													</span>
													<span>S/. -0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.730</div>
												<div class="c-descInfo__cCurrency curr_asc-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#009AB4" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. 0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cLinkWeb">
													<a href="javascript:void(0);" class="c-descInfo__cLinkWeb__link">
														<span>Visitar</span>
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="c-descInfo">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" width="96" height="17" viewBox="0 0 96 17" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M61.9869 7.06745C62.3666 7.09454 62.7369 7.19877 63.075 7.37378C63.4131 7.54878 63.712 7.79088 63.9535 8.08528C64.1949 8.37969 64.3737 8.72022 64.4791 9.08607C64.5845 9.45193 64.6142 9.83543 64.5663 10.2131C64.6151 10.5914 64.5862 10.9756 64.4812 11.3422C64.3763 11.7088 64.1976 12.0502 63.9561 12.3453C63.7146 12.6404 63.4154 12.8831 63.0768 13.0585C62.7381 13.2339 62.3673 13.3384 61.9869 13.3654C61.6266 13.3887 61.2669 13.3124 60.9471 13.1447C60.6274 12.9771 60.3599 12.7247 60.1742 12.4151C59.7435 11.8392 59.5396 11.125 59.6014 10.4084C59.5448 9.61484 59.71 8.82113 60.0785 8.11601C60.287 7.7983 60.5703 7.53658 60.9034 7.35377C61.2366 7.17096 61.6095 7.07265 61.9895 7.06745H61.9869ZM59.5988 2.57566V6.68341C60.1064 6.12673 60.7658 5.7308 61.4957 5.54447C62.2257 5.35814 62.9942 5.38956 63.7065 5.63485C65.5219 6.11194 66.5717 7.83159 66.6674 10.2223C66.7139 10.8546 66.63 11.4897 66.4209 12.0883C66.2118 12.6868 65.882 13.236 65.4518 13.7018C65.0217 14.1675 64.5005 14.54 63.9204 14.796C63.3404 15.052 62.7139 15.186 62.0799 15.1899C61.4617 15.2194 60.8442 15.1178 60.268 14.8918C59.6918 14.6657 59.1699 14.3203 58.7367 13.8783C58.3034 13.4362 57.9686 12.9076 57.7542 12.3269C57.5397 11.7463 57.4505 11.1269 57.4925 10.5094V2.57566H59.5988ZM55.5867 5.15513H56.2552V7.35187H55.5867C55.1308 7.36562 54.6932 7.53385 54.3455 7.82897C54.0352 8.16748 53.8647 8.61101 53.8684 9.07021V15.089H51.6703V9.07152C51.7036 8.03933 52.1113 7.05449 52.8172 6.30069C53.178 5.93278 53.6094 5.64155 54.0856 5.44447C54.5617 5.24739 55.0727 5.14853 55.588 5.15382L55.5867 5.15513ZM47.0855 11.2683H43.9319C43.9319 11.3639 44.0276 11.4596 44.0276 11.5553C44.2075 12.0029 44.5081 12.3917 44.8959 12.6784C45.2838 12.9652 45.7437 13.1386 46.2243 13.1793C46.3592 13.1649 46.4948 13.1988 46.6071 13.2749H46.9898C47.7915 13.295 48.5837 13.0975 49.2822 12.7035C49.3301 13.1798 49.3301 13.6597 49.2822 14.1361C49.0909 15.0916 47.4669 15.0916 46.8941 15.0916H46.3213C46.1255 15.1066 45.9289 15.0738 45.7485 14.9959C44.6028 14.765 43.5814 14.1223 42.8774 13.1893C42.1734 12.2563 41.8356 11.0978 41.9278 9.93265C41.9298 8.96299 42.2347 8.01817 42.7999 7.23023C43.365 6.44229 44.1622 5.85061 45.0801 5.53786C45.7665 5.32554 46.4959 5.2931 47.1984 5.44366C47.901 5.59422 48.5531 5.92272 49.0922 6.39768C49.2786 6.56402 49.4394 6.75704 49.5693 6.97046C49.7514 7.15726 49.8831 7.38728 49.952 7.63892C50.1274 8.03007 50.2249 8.45168 50.239 8.88015C50.2426 9.33933 50.0721 9.78281 49.7619 10.1214C49.4875 10.4268 49.1647 10.685 48.8064 10.8855C48.283 11.1787 47.6851 11.3118 47.0868 11.2683H47.0855ZM43.9332 9.6443H47.1812C47.9453 9.6443 48.7094 9.26157 48.328 8.30738C48.328 8.2117 48.2323 8.11601 48.1367 8.02033L47.8496 7.73329C47.5791 7.43415 47.2271 7.22058 46.8368 7.11882C46.4465 7.01706 46.035 7.03155 45.6529 7.16051C45.4615 7.25619 45.3658 7.25619 45.2701 7.35187C45.1745 7.44755 44.9831 7.54323 44.8874 7.63892C44.5933 7.88509 44.3557 8.19176 44.1908 8.53805C44.0259 8.88434 43.9376 9.26211 43.9319 9.64561L43.9332 9.6443ZM38.2972 2.67134V5.25081H41.8361L41.7352 6.01888C41.6395 6.78303 41.2581 6.97439 40.3983 6.97439H38.2015V11.5619V12.1346C38.2972 12.8988 38.7743 13.0901 39.4427 13.0901C40.2189 13.19 41.0076 13.0913 41.7352 12.8031C41.8309 13.5672 41.7352 14.6184 41.2581 14.8098C40.6442 15.0195 39.9903 15.085 39.3471 15.0011C39.0571 15.0167 38.7667 14.9843 38.4872 14.9055C37.8842 14.7548 37.3268 14.4597 36.8633 14.0456C36.3262 13.296 36.0571 12.3874 36.0991 11.4662V2.67134H38.2972ZM29.7003 5.15513H30.4644C30.9788 5.15478 31.4882 5.25585 31.9636 5.45254C32.4389 5.64924 32.8708 5.93771 33.2345 6.30144C33.5982 6.66518 33.8867 7.09706 34.0834 7.57237C34.2801 8.04769 34.3811 8.55711 34.3808 9.07152V15.089H32.2837V9.07152C32.2953 8.84261 32.2588 8.6138 32.1766 8.39988C32.0943 8.18596 31.968 7.99169 31.8059 7.82962C31.6439 7.66755 31.4496 7.54129 31.2357 7.45899C31.0217 7.3767 30.7929 7.34021 30.564 7.35187H29.7999C29.344 7.36562 28.9064 7.53385 28.5587 7.82897C28.2485 8.16755 28.078 8.61103 28.0816 9.07021V15.089H25.8783V9.07152C25.9116 8.03933 26.3192 7.05449 27.0251 6.30069C27.3614 5.92718 27.7747 5.63118 28.2366 5.43316C28.6985 5.23514 29.1979 5.13983 29.7003 5.15382V5.15513ZM21.7705 2.47998H23.9673V14.9933H21.7705V2.47998ZM80.7103 5.15513H81.4744C82.5066 5.18846 83.4915 5.59609 84.2453 6.302C84.9669 7.04559 85.3771 8.03677 85.3921 9.07283V15.089H83.1941V9.07152C83.2058 8.84261 83.1693 8.6138 83.087 8.39988C83.0047 8.18596 82.8784 7.99169 82.7163 7.82962C82.5543 7.66755 82.36 7.54129 82.1461 7.45899C81.9322 7.3767 81.7034 7.34021 81.4744 7.35187H80.7103C80.4814 7.34021 80.2526 7.3767 80.0387 7.45899C79.8248 7.54129 79.6305 7.66755 79.4684 7.82962C79.3063 7.99169 79.1801 8.18596 79.0978 8.39988C79.0155 8.6138 78.979 8.84261 78.9907 9.07152V15.089H76.7939V9.07152C76.8273 8.03933 77.2349 7.05449 77.9408 6.30069C78.2959 5.92522 78.7262 5.62896 79.2037 5.43133C79.6812 5.23369 80.1951 5.13913 80.7116 5.15382L80.7103 5.15513ZM87.1105 2.47998H89.3072V14.9933H87.1105V2.47998ZM95.4217 5.53655H93.2236L89.3072 10.0257L93.702 14.9933H95.8988L91.5 10.027L95.4164 5.53786L95.4217 5.53655ZM73.4503 10.6955H72.0177C71.3993 10.6649 70.7812 10.7627 70.2024 10.9825C70.0048 11.0645 69.8311 11.195 69.6975 11.3621C69.5639 11.5291 69.4747 11.7273 69.4382 11.938V12.0337C69.4094 12.197 69.4139 12.3645 69.4514 12.5261C69.489 12.6876 69.5589 12.8399 69.6568 12.9737C69.7548 13.1076 69.8788 13.2202 70.0215 13.3049C70.1641 13.3895 70.3224 13.4444 70.4868 13.4663C71.1691 13.5903 71.8733 13.4896 72.4935 13.1793C72.7065 13.0437 72.886 12.8616 73.0184 12.6466C73.1508 12.4316 73.2326 12.1893 73.2576 11.938C73.4288 11.5481 73.4948 11.1202 73.449 10.6968L73.4503 10.6955ZM70.7752 5.25081C71.9028 5.08117 73.0541 5.3181 74.0231 5.91927C74.4071 6.17607 74.7063 6.54098 74.8829 6.96784C75.116 7.47566 75.2149 8.03483 75.1699 8.5918V11.457C75.2342 12.1432 75.0852 12.8326 74.7432 13.431C74.4012 14.0294 73.8828 14.5077 73.2589 14.8006C72.7355 14.9946 72.19 15.1232 71.635 15.1833C69.1512 15.279 67.3359 14.0365 67.5272 11.744C67.6229 10.1201 69.0555 9.45162 70.6795 9.26026C71.4436 9.16458 72.7766 9.35594 73.2589 9.26026C73.2483 8.74557 73.1842 8.23339 73.0676 7.73198C73.0079 7.55424 72.9078 7.39275 72.7752 7.26017C72.6427 7.12759 72.4812 7.02753 72.3034 6.96784C71.6525 6.7772 70.9695 6.7212 70.2961 6.80322C69.6228 6.88525 68.9732 7.10359 68.3871 7.44493V6.58511C68.3672 6.45141 68.3739 6.31511 68.4067 6.184C68.4395 6.05289 68.4979 5.92953 68.5784 5.82097C69.239 5.41958 70.0027 5.22046 70.7752 5.24819V5.25081Z" fill="#818283"/><path fill-rule="evenodd" clip-rule="evenodd" d="M0.468994 16.9999H15.28C15.8343 16.9938 16.3641 16.7709 16.7561 16.3789C17.148 15.987 17.371 15.4571 17.3771 14.9028V0.283203H2.56612C2.01183 0.289336 1.48198 0.512252 1.09001 0.904218C0.698043 1.29618 0.475127 1.82604 0.468994 2.38033V16.9999ZM4.48106 14.3248L13.2693 12.7965V3.62157L4.48106 5.1551V14.33V14.3248Z" fill="#818283"/></svg>
												</span>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.890</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"></polygon></g></g></svg>
													</span>
													<span>S/. -0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.730</div>
												<div class="c-descInfo__cCurrency curr_asc-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#009AB4" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. 0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cLinkWeb">
													<a href="javascript:void(0);" class="c-descInfo__cLinkWeb__link">
														<span>Visitar</span>
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="c-descInfo">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.9 30.05" width="68" height="20"><defs><style>.cls-1{fill:#818283;}</style></defs><title>Recurso 1</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M44.89,15.91a6.46,6.46,0,0,1,2.68,2.15c2.67,3.72.9,9.61-3.37,11.19a13,13,0,0,1-4.44.78c-4.11,0-8.23,0-12.34,0-.85,0-1.06-.2-1.06-1.05q0-12.1,0-24.2c0-.83.18-1,1-1,4.34,0,8.69,0,13,0A7.41,7.41,0,0,1,46,6.36c2.07,2.31,2.24,7.28-1,9.36A1.46,1.46,0,0,0,44.89,15.91ZM36,26h3.7a9.61,9.61,0,0,0,1.7-.17,3.09,3.09,0,0,0,2.79-2.61,9.81,9.81,0,0,0,.09-1.43A3.06,3.06,0,0,0,42,18.7a5.77,5.77,0,0,0-1.54-.31c-2.87-.2-5.75-.08-8.63-.12-.62,0-.91.24-.91.9q0,3,0,6c0,.61.22.86.84.85C33.14,26,34.56,26,36,26Zm-.34-11.68h3.64a4.78,4.78,0,0,0,2.37-.58A3.11,3.11,0,0,0,43,10.32a2.94,2.94,0,0,0-2.67-2.47,86.68,86.68,0,0,0-8.83-.14c-.49,0-.6.31-.6.73,0,1.72,0,3.43,0,5.15,0,.6.26.79.83.78C33,14.35,34.33,14.36,35.63,14.36Z"/><path class="cls-1" d="M18.52,15.88a6.77,6.77,0,0,1,3,2.77A7.55,7.55,0,0,1,16,29.77a21.59,21.59,0,0,1-3.41.28C8.77,30,5,30,1.22,30,.11,30,0,29.93,0,28.84V4.9c0-1,.08-1.11,1.08-1.11,4.34,0,8.69-.06,13,0a6.89,6.89,0,0,1,6.28,3.65c1.47,2.7.87,6.52-1.66,8.2A1.91,1.91,0,0,0,18.52,15.88Zm-3.58,10a3.18,3.18,0,0,0,2.91-3.32c0-2.41-.73-3.56-2.75-4A9.08,9.08,0,0,0,14,18.39c-2.85-.22-5.7-.08-8.56-.11-.77,0-.93.16-.94.92,0,2,0,4,0,6,0,.63.26.83.86.82C6.72,26,13.15,26.2,14.94,25.88ZM14,14.22a2.89,2.89,0,0,0,2.62-3,2.91,2.91,0,0,0-2.48-3.32,6.21,6.21,0,0,0-1.42-.18c-2.47,0-4.94,0-7.4,0-.66,0-.89.27-.88.9,0,1.63,0,3.25,0,4.87,0,.79.11.9.93.9A78.85,78.85,0,0,0,14,14.22Z"/><path class="cls-1" d="M51.45,3.79h.41c2.41,0,1.72-.37,2.87,1.76,2.56,4.77,5,9.59,7.56,14.38.14.25.22.58.59.6s.51-.34.66-.61l5-9.58c1-2,2.07-3.92,3.08-5.89a1.08,1.08,0,0,1,1.08-.67c1.16,0,2.33,0,3.49,0,.75,0,.92.29.57.94L66.06,24.8l-2.39,4.47c-.17.32-.32.7-.75.73s-.59-.39-.76-.7L54.22,14.42Q51.76,9.8,49.27,5.18c-.66-1.21-.56-1.39.81-1.39Z"/><path class="cls-1" d="M97.37,26.21c-2.43,0-2.42,0-3.53-2.13Q90.15,17,86.44,10c-.13-.26-.24-.58-.61-.56s-.42.32-.54.55l-5.2,9.89c-1,1.88-2,3.75-3,5.64a1.09,1.09,0,0,1-1.12.71c-1.14,0-2.29,0-3.43,0-.8,0-1-.28-.59-1L84.6,1.69c.2-.36.38-.74.58-1.09.46-.8.93-.8,1.38,0,.89,1.65,1.76,3.31,2.64,5l10.16,19c.16.3.32.6.46.92s0,.72-.46.74C98.7,26.23,98,26.21,97.37,26.21Z"/></g></g></svg>
												</span>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.890</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"></polygon></g></g></svg>
													</span>
													<span>S/. -0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.730</div>
												<div class="c-descInfo__cCurrency curr_asc-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#009AB4" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. 0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cLinkWeb">
													<a href="javascript:void(0);" class="c-descInfo__cLinkWeb__link">
														<span>Visitar</span>
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="c-descInfo">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M4.82042 11.83C4.15281 10.5965 3.83217 9.20503 3.89264 7.80374C3.97266 5.77893 4.81717 3.85971 6.256 2.43282C7.69482 1.00592 9.62101 0.177417 11.6464 0.114258L24 0.147034L19.201 4.90695L11.5468 4.89056C9.76427 5.00713 8.08868 5.78216 6.84561 7.06507C5.60253 8.34799 4.88072 10.0472 4.82042 11.8325V11.83ZM9.54252 8.42016C10.0054 7.23837 10.7917 6.21086 11.8115 5.45529C10.7482 5.47989 9.70644 5.76078 8.77483 6.27409C7.84323 6.7874 7.04928 7.51798 6.46042 8.40377L9.54252 8.42016ZM12.0271 6.04146C11.2605 6.70696 10.6255 7.5104 10.1552 8.41007L13.8663 8.43655C13.4092 7.52966 12.7853 6.71709 12.0271 6.04146ZM6.14654 9.02397C5.69868 9.84698 5.43299 10.7567 5.36751 11.6913L8.82399 11.714C8.82979 10.8039 8.99226 9.90163 9.30427 9.04666L6.14654 9.02397ZM9.92825 9.04036C9.62401 9.90007 9.4399 10.7977 9.38116 11.7077L14.6327 11.7241C14.5777 10.815 14.3992 9.91765 14.102 9.05675L9.92825 9.04036ZM17.5106 8.43655C16.9507 7.5434 16.1777 6.80331 15.2611 6.28274C14.3445 5.76216 13.3129 5.4774 12.2591 5.45403C13.233 6.2465 14.0006 7.26287 14.4966 8.41638L17.5106 8.43655ZM14.7272 9.04918C15.0378 9.90359 15.1894 10.8076 15.1747 11.7166L18.6375 11.7329C18.6034 10.796 18.344 9.881 17.8812 9.06557L14.7272 9.04918ZM6.44404 15.4277C7.01079 16.3332 7.79674 17.0813 8.7292 17.6026C9.66165 18.1239 10.7105 18.4016 11.7788 18.4102C10.7732 17.6369 9.99491 16.6065 9.52613 15.4277H6.44404ZM11.9905 17.8631C12.7491 17.1682 13.3775 16.3435 13.8461 15.4277L10.135 15.4113C10.5894 16.3406 11.221 17.1722 11.9943 17.8593L11.9905 17.8631ZM9.30679 14.8982C9.01029 14.0391 8.84829 13.1394 8.82651 12.2309L5.36373 12.2145C5.43054 13.146 5.68797 14.0539 6.12007 14.8818L9.30679 14.8982ZM14.078 14.9146C14.3769 14.0522 14.56 13.154 14.6226 12.2435L9.37108 12.2271C9.43896 13.1345 9.61718 14.0302 9.90178 14.8945L14.078 14.9146ZM14.4751 15.4453C13.966 16.5935 13.1965 17.6073 12.2275 18.4064C13.2858 18.4037 14.3257 18.1297 15.248 17.6107C16.1702 17.0916 16.944 16.3448 17.4955 15.4415L14.4751 15.4453ZM17.8547 14.9146C18.3155 14.1043 18.5821 13.1982 18.6338 12.2674L15.171 12.251C15.162 13.1594 15.0053 14.0603 14.7071 14.9184L17.8547 14.9146ZM19.1796 11.9498C19.1568 13.7583 18.4507 15.4912 17.203 16.8006C15.9554 18.1101 14.2585 18.899 12.4532 19.009L4.81538 18.9926L0 23.6894L12.3536 23.7222C14.3764 23.6696 16.3034 22.8493 17.7434 21.4278C19.1835 20.0062 20.0286 18.09 20.1074 16.068C20.1759 14.666 19.8548 13.2724 19.1796 12.0418V11.9498Z" fill="#818283"/></svg>
												</span>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.890</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"></polygon></g></g></svg>
													</span>
													<span>S/. -0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.730</div>
												<div class="c-descInfo__cCurrency curr_asc-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#009AB4" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. 0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cLinkWeb">
													<a href="javascript:void(0);" class="c-descInfo__cLinkWeb__link">
														<span>Visitar</span>
													</a>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="c-descInfo">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.94657 1.30672C8.74013 -1.30207 14.5917 0.263502 15.252 3.63732C16.0367 7.63264 11.0428 13.4036 0 16.9758C2.39673 15.5109 4.57558 13.7319 6.47541 11.6886C9.98938 7.74066 12.0052 1.18538 3.94657 1.30672Z" fill="#818283"/><path fill-rule="evenodd" clip-rule="evenodd" d="M13.6141 8.33253C18.4123 5.7415 24.2638 7.28931 24.9241 10.6631C25.7089 14.6584 20.7149 20.4295 9.67212 24.0016C12.0688 22.5367 14.2477 20.7577 16.1475 18.7144C19.6615 14.7502 21.6773 8.19344 13.6141 8.33253Z" fill="#818283"/></svg>
												</span>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.890</div>
												<div class="c-descInfo__cCurrency curr_des-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#9A4280" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g transform="rotate(180 245 245)"><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"></polygon></g></g></svg>
													</span>
													<span>S/. -0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cRateNumb">3.730</div>
												<div class="c-descInfo__cCurrency curr_asc-val">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#009AB4" width="13px" height="13px" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><g><g><polygon points="0,332.668 245.004,82.631 490,332.668 413.507,407.369 245.004,235.402 76.493,407.369"/></g></g></svg>
													</span>
													<span>S/. 0.12</span>
												</div>
											</div>
										</td>
										<td>
											<div class="c-descInfo">
												<div class="c-descInfo__cLinkWeb">
													<a href="javascript:void(0);" class="c-descInfo__cLinkWeb__link">
														<span>Visitar</span>
													</a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="c_wrapper__c__cdis__cpricevariation">
						<div class="c_wrapper__c__cdis__cpricevariation__cTitle">
							<h1 class="c_wrapper__c__cdis__cpricevariation__cTitle__title-h3">Variación del precio del dólar en el día >></h1>
							<div class="c_wrapper__c__cdis__cpricevariation__cTitle__csubParagrap">
								<p>16 de agosto</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx mgb-1">
				<div class="c_wrapper__c__cdis">
					<div class="c_wrapper__c__cdis__cNewSlider">
						<div class="c_wrapper__c__cdis__cNewSlider__cTitle">
							<h2>Noticias sobre el precio del dólar >></h2>
						</div>
						<div class="c_wrapper__c__cdis__cNewSlider__c">
							<div class="c_wrapper__c__cdis__cNewSlider__c__cBtnIconSlide ps-x-left">
								<span class="slider-arrow-left">
									<svg width="11" height="29" viewBox="0 0 22 37" xmlns="http://www.w3.org/2000/svg"><path d="M19.9688 2.00049L2.99825 18.5843L19.9688 35.168" stroke="#fff" stroke-width="2"></path></svg>
								</span>
							</div>
							<div class="c_wrapper__c__cdis__cNewSlider__c__cList owl-carousel owl-theme">
								<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i item">
									<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cImg" style="max-width: 290px;">
										<a href="javascript:void(0);" class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cImg__link">
											<img src="<?= $url_admin;?>resources/images/news/img-new.jpg" alt="noticia_17-25_24-06-2022">
										</a>
									</div>
									<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc">
										<a href="javascript:void(0};" class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link">
											<span class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link__cInfoDate cIcndate">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m350 112c92.586 0 168 75.414 168 168 0 92.582-75.414 168-168 168s-168-75.418-168-168c0-92.586 75.414-168 168-168zm0 33.602c-74.426 0-134.4 59.973-134.4 134.4s59.973 134.4 134.4 134.4 134.4-59.977 134.4-134.4c0-74.426-59.973-134.4-134.4-134.4zm0 33.602c9.2773 0 16.801 7.5234 16.801 16.801v84c0 9.2773-7.5234 16.801-16.801 16.801h-72.801c-9.2773 0-16.801-7.5195-16.801-16.801 0-9.2773 7.5234-16.801 16.801-16.801h56v-67.199c0-9.2773 7.5195-16.801 16.801-16.801z"/></g></svg>
												</span>
												<span>24 agosto, 2022</span>
											</span>
											<span class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link__cTitle cTcont">
												<h3>Día de la Madre Tierra</h3>
											</span>
										</a>
									</div>
								</div>
								<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i item">
									<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cImg" style="max-width: 290px;">
										<img src="<?= $url_admin;?>resources/images/news/img-new.jpg" alt="noticia_17-22_24-06-2022">
									</div>
									<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc">
										<a href="javascript:void(0};" class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link">
											<span class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link__cInfoDate cIcndate">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m350 112c92.586 0 168 75.414 168 168 0 92.582-75.414 168-168 168s-168-75.418-168-168c0-92.586 75.414-168 168-168zm0 33.602c-74.426 0-134.4 59.973-134.4 134.4s59.973 134.4 134.4 134.4 134.4-59.977 134.4-134.4c0-74.426-59.973-134.4-134.4-134.4zm0 33.602c9.2773 0 16.801 7.5234 16.801 16.801v84c0 9.2773-7.5234 16.801-16.801 16.801h-72.801c-9.2773 0-16.801-7.5195-16.801-16.801 0-9.2773 7.5234-16.801 16.801-16.801h56v-67.199c0-9.2773 7.5195-16.801 16.801-16.801z"/></g></svg>
												</span>
												<span>24 agosto, 2022</span>
											</span>
											<span class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link__cTitle cTcont">
												<h3>MINEDU PRESENTA PROPUESTAS EN EL CONSEJO DE MINISTROS</h3>
											</span>
										</a>
									</div>
								</div>
								<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i item">
									<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cImg" style="max-width: 290px;">
										<img src="<?= $url_admin;?>resources/images/news/img-new.jpg" alt="noticia_17-20_24-06-2022">
									</div>
									<div class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc">
										<a href="javascript:void(0};" class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link">
											<span class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link__cInfoDate cIcndate">
												<span>
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m350 112c92.586 0 168 75.414 168 168 0 92.582-75.414 168-168 168s-168-75.418-168-168c0-92.586 75.414-168 168-168zm0 33.602c-74.426 0-134.4 59.973-134.4 134.4s59.973 134.4 134.4 134.4 134.4-59.977 134.4-134.4c0-74.426-59.973-134.4-134.4-134.4zm0 33.602c9.2773 0 16.801 7.5234 16.801 16.801v84c0 9.2773-7.5234 16.801-16.801 16.801h-72.801c-9.2773 0-16.801-7.5195-16.801-16.801 0-9.2773 7.5234-16.801 16.801-16.801h56v-67.199c0-9.2773 7.5195-16.801 16.801-16.801z"/></g></svg>
												</span>
												<span>24 agosto, 2022</span>
											</span>
											<span class="c_wrapper__c__cdis__cNewSlider__c__cList__i__cDesc__link__cTitle cTcont">
												<h3>Consejo para conseguir el mejor tipo de cambio</h3>
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class="c_wrapper__c__cdis__cNewSlider__c__cBtnIconSlide ps-x-right">
								<span class='slider-arrow-right'>
									<svg width="11" height="29" viewBox="0 0 22 37" xmlns="http://www.w3.org/2000/svg"><path d="M19.9688 2.00049L2.99825 18.5843L19.9688 35.168" stroke="#fff" stroke-width="2"></path></svg>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx_wtout-p mgb-1">
				<div class="c_wrapper__c__cdis">
					<div class="c_wrapper__c__cdis__bgTitleWidth">
						<div class="c_wrapper__c__cdis__bgTitleWidth__cBgTitle talign-c btn_sTogg">
							<h2 class="c_wrapper__c__cdis__bgTitleWidth__cBgTitle__title">"Datos importantes sobre el dólar"</h2>
							<span class="c_wrapper__c__cdis__bgTitleWidth__cBgTitle__cIcon btnIcon_sTogg">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m627.67 82.832c-4.668-8.1641-12.836-12.832-21-12.832h-513.34c-8.1641 0-16.332 4.668-21 12.832-4.668 8.168-3.5 17.5 1.168 24.5l256.67 373.33c4.668 5.832 11.668 10.5 18.668 10.5s15.168-3.5 18.668-10.5l256.67-373.33c6.9961-8.1641 6.9961-17.5 3.4961-24.5z"/></g></svg>
							</span>
						</div>
						<div class="c_wrapper__c__cdis__bgTitleWidth__cCont">
							<div class="c_wrapper__c__cdis__bgTitleWidth__cCont__cCol">
								<section class="c_wrapper__c__cdis__bgTitleWidth__cCont__cCol__sec">
									<div class="c_wrapper__c__cdis__bgTitleWidth__cCont__cCol__sec__cTitle">
										<h2>¿Qué es COMPRA?</h2>
									</div>
									<div class="c_wrapper__c__cdis__bgTitleWidth__cCont__cCol__sec__cDesc">
										<p>Es cuando una casa de cambio te COMPRA tus dólares.</p>
									</div>
								</section>
								<section class="c_wrapper__c__cdis__bgTitleWidth__cCont__cCol__sec">
									<div class="c_wrapper__c__cdis__bgTitleWidth__cCont__cCol__sec__cTitle">
										<h2>¿Qué es VENTA?</h2>
									</div>
									<div class="c_wrapper__c__cdis__bgTitleWidth__cCont__cCol__sec__cDesc">
										<p>Es cuando una casa de cambio te VENDE sus dólares.</p>
									</div>
								</section>
							</div>
							<p>El <strong>dólar</strong> es una moneda oficial de los Estados Unidos de América, cuya economía es una de las más importantes a las que el Perú está asociada.</p>
							<p><strong>El dólar americano</strong> tiene un gran impacto en la economía mundial y se utiliza en las transacciones internacionales de todo el mundo, además es la divisa más utilizada por los turistas.</p>
							<p><strong>El precio del dólar en Perú</strong> puede verse afectado por intervenciones del Banco Central de Reserva (BCR) a fin de estabilizar la cotización o el tipo de cambio del sol peruano. Asimismo, por diversos indicadores como el crecimiento del Producto Bruto Interno (PIB), el comportamiento de las exportaciones peruanas, la situación geopolítica internacional, etc.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx_wtout-p mgb-1">
				<div class="c_wrapper__c__cdis">
					<div class="c_wrapper__c__cdis__bgTitleWidth">
						<div class="c_wrapper__c__cdis__bgTitleWidth__cBgTitle talign-c btn_sTogg">
							<h2 class="c_wrapper__c__cdis__bgTitleWidth__cBgTitle__title">Preguntas Frecuentes</h2>
							<span class="c_wrapper__c__cdis__bgTitleWidth__cBgTitle__cIcon btnIcon_sTogg">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m627.67 82.832c-4.668-8.1641-12.836-12.832-21-12.832h-513.34c-8.1641 0-16.332 4.668-21 12.832-4.668 8.168-3.5 17.5 1.168 24.5l256.67 373.33c4.668 5.832 11.668 10.5 18.668 10.5s15.168-3.5 18.668-10.5l256.67-373.33c6.9961-8.1641 6.9961-17.5 3.4961-24.5z"/></g></svg>
							</span>
						</div>
						<div class="c_wrapper__c__cdis__bgTitleWidth__cCont">
							<div class="c_wrapper__c__cdis__bgTitleWidth__cCont__item">
								<h3 class="c_wrapper__c__cdis__bgTitleWidth__cCont__item__title">¿Son seguras las casas de cambio online?</h3>
								<p>Sí. Las casas de cambio online suelen estar registradas en la Superintendencia de Banca, Seguros y AFP (SBS). Además, las transacciones y depósitos se realizan a través de entidades autorizadas por la SBS.</p>
								<p>Otras de las características de las casas de cambio online es que puedes relizar la transacción desde la comodidad de tu casa u oficina, ahorrándote tiempo que sueles perder en las colas o en el tráfico.</p>
								<p>Finalmente, y tal vez la característica más atractiva para los usuarios de las casas de cambio online es que su tipo de cambio es más competitivo, es decir, que obtienes un mejor tipo de cambio que en las agencias bancarias.</p>
							</div>
							<div class="c_wrapper__c__cdis__bgTitleWidth__cCont__item">
								<h3 class="c_wrapper__c__cdis__bgTitleWidth__cCont__item__title">¿En qué lugar puedo realizar un camio considerado?</h3>
								<p>Puedes cambiarlo en una entidad bancaria y consultar por el tipo de cambio preferencial de acuerdo a la cantidad a cambiar. Otra opción es cambiar tus dólares en casas de cambio online donde podrías conseguir un mejor tipo de cambio. Además, evitas desplazarte con dinero y exponerte a diversos riesgos, puedes hacerlo desde tu casa u oficina y te priorizas tu seguridad.</p>
							</div>
							<div class="c_wrapper__c__cdis__bgTitleWidth__cCont__item">
								<h3 class="c_wrapper__c__cdis__bgTitleWidth__cCont__item__title">¿Cuál es el impacto del dólar sobre el sol?</h3>
								<p>El dólar es la moneda oficial de los Estados Unidos de América, cuya economía tiene un gran impacto en el país a causa del volumen comercial que tiene en las importaciones.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx mgb-2">
				<div class="c_wrapper__c__cGrpBtn">
					<a href="/Preciodeldolar" class="c_wrapper__c__cGrpBtn__link" title="Comerzar cambio online">Comenzar cambio</a>
				</div>
			</div>
		</section>
	</main>
	<?php require_once 'views/includes/inc-footer.php';?>
	<script type="text/javascript" src="<?= $url;?>js/main.js"></script>
	<script type="text/javascript" src="<?= $url;?>js/actions/home_convert-divise.js"></script>
	<script type="text/javascript" src="<?= $url;?>js/actions/home_news-slider.js"></script>
</body>
</html>