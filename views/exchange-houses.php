<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/inc-header_links.php';?>
	<title>Directorio de Casas de Cambio | Precio del Dólar en el Perú</title>
</head>
<body>
	<?php require_once 'includes/inc-header_top.php';?>
	<main>
		<?php require_once 'includes/inc-header_top-fixed.php';?>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx">
				<div class="c_wrapper__c__cCurrPage">
					<div class="c_wrapper__c__cCurrPage__cBreadCrumb">
						<ul class="c_wrapper__c__cCurrPage__cBreadCrumb__list">
							<li class="c_wrapper__c__cCurrPage__cBreadCrumb__list__item">
								<span>
									<a href="/preciodeldolar" title="">Inicio</a>
								</span>
							</li>
							<li class="c_wrapper__c__cCurrPage__cBreadCrumb__list__item-divise">
								<span> / </span>
							</li>
							<li class="c_wrapper__c__cCurrPage__cBreadCrumb__list__item enabled">
								<span title="">Casas de cambio</span>
							</li>
						</ul>
					</div>
					<div class="c_wrapper__c__cCurrPage__cDTime">
						<span>19 ago 2022 / 13:54h</span>
						<span>| Datos actualizados</span>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx_wtout-p">
				<div class="c_wrapper__c__cTxtTitle">
					<div class="c_wrapper__c__cTxtTitle__txt">
						<div class="c_wrapper__c__cTxtTitle__txt__cIcon"></div>
						<div class="c_wrapper__c__cTxtTitle__txt__cTxt">
							<h2>Si tu cambio es un monto elevado, hazlo seguro vía ONLINE</h2>
						</div>
					</div>
					<div class="c_wrapper__c__cTxtTitle__cLink">
						<a href="/Preciodeldolar" title="Cambiar online">CAMBIAR ONLINE</a>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx_wtout-p">
				<div class="c_wrapper__c__cCtFilterExH">
					<div class="c_wrapper__c__cCtFilterExH__cTxt">
						<h2>Prueba buscar una casa de cambio</h2>
					</div>
					<div class="c_wrapper__c__cCtFilterExH__cFilter">
						<div class="c_wrapper__c__cCtFilterExH__cFilter__select">
							<select name="" class="sl-pronvicia" id="">
								<option value="lima">LIMA</option>
								<option value="cuzco">CUZCO</option>
								<option value="piura">PIURA</option>
								<option value="huancayo">HUANCAYO</option>
								<option value="arequipa">AREQUIPA</option>
								<option value="ayacucho">AYACUCHO</option>
								 <option value="huaral">HUARAL</option>
								<option value="huaura">HUAURA</option>
								<option value="barranca">BARRANCA</option>
								<option value="loreto">LORETO</option>
								<option value="puno">PUNO</option>
								<option value="tacna">TACNA</option>
								<option value="chiclayo">CHICLAYO</option>
								<option value="san-martin">SAN-MARTIN</option>
								<option value="trujillo">TRUJILLO</option>
							</select>
						</div>
						<div class="c_wrapper__c__cCtFilterExH__cFilter__select">
							<select name="" class="cl-distrito" id="">
								<option value="cercado-de-lima">CERCADO-DE-LIMA</option>
								<option value="ate">ATE</option>
								<option value="barranco">BARRANCO</option>
								<option value="brena">BRENA</option>
								<option value="callao">CALLAO</option>
								<option value="comas">COMAS</option>
								<option value="chorillos">CHORILLOS</option>
								<option value="jesus-maria">JESUS-MARIA</option>
								<option value="la-molina">LA-MOLINA</option>
								<option value="la-victoria">LA-VICTORIA</option>
								<option value="la-punta">LA-PUNTA</option>
								<option value="lince">LINCE</option>
								<option value="los-olivos">LOS-OLIVOS</option>
								<option value="lurin">LURIN</option>
								<option value="magdalena">MAGDALENA</option>
								<option value="miraflores">MIRAFLORES</option>
								<option value="pueblo-libre">PUEBLO-LIBRE</option>
								<option value="san-juan-de-miraflores">SAN-JUAN-DE-MIRAFLORES</option>
								<option value="san-juan-de-lurigancho">SAN-JUAN-DE-LURIGANCHO</option>
								<option value="san-borja">SAN-BORJA</option>
								<option value="san-luis">SAN-LUIS</option>
								<option value="san-isidro">SAN-ISIDRO</option>
								<option value="san-miguel">SAN-MIGUEL</option>
								<option value="surco">SURCO</option>
								<option value="san-martin-de-porres">SAN-MARTIN-DE-PORRES</option>
							</select>
						</div>
					</div>
					<div class="c_wrapper__c__cCtFilterExH__cBtn">
						<button type="button" class="c_wrapper__c__cCtFilterExH__cBtn__btn">BUSCAR</button>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx mgb-1">
				<div class="c_wrapper__c__cListExchH">
					<?php 
						if(isset($_GET) && count($_GET) > 0){
							if(isset($_GET['region']) && $_GET['region'] != ""){
					?>
						<div class="c_wrapper__c__cListExchH__cTitle">
							<h1>Casas de cambio en "<?= ucfirst(str_replace("-"," ",$_GET['region']));?>"</h1>
						</div>
					<?php  
								if(isset($_GET['region']) && $_GET['region'] != "" && isset($_GET['distrito']) && $_GET['distrito'] != ""){
					?>
							<div class="c_wrapper__c__cListExchH__cTitle">
								<h1>Casas de cambio en "<?= ucfirst(str_replace("-"," ",$_GET['distrito']));?>"</h1>
							</div>
					<?php
								}else{
									// echo "No hay valores de distrito";	
								}
							}else{
								// echo "No hay valores de región";
							}
						}else{
					?>				
					<div class="c_wrapper__c__cListExchH__cTitle">
						<h1>Casas de cambio en Perú</h1>
					</div>
					<div class="c_wrapper__c__cListExchH__cL">
						<ul class="c_wrapper__c__cListExchH__cL__m">
							<li class="c_wrapper__c__cListExchH__cL__m__i">
								<a href="casas-de-cambio/lima" class="c_wrapper__c__cListExchH__cL__m__link">
									<span class="c_wrapper__c__cListExchH__cL__m__link__cImg">
										<img src="<?= $url_admin;?>resources/images/exchange_houses/lima.jpg" alt="">
									</span>
									<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc">
										<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc--name">LIMA >></span>
									</span>
								</a>
							</li>
							<li class="c_wrapper__c__cListExchH__cL__m__i">
								<a href="casas-de-cambio/cuzco" class="c_wrapper__c__cListExchH__cL__m__link">
									<span class="c_wrapper__c__cListExchH__cL__m__link__cImg">
										<img src="<?= $url_admin;?>resources/images/exchange_houses/cuzco.jpg" alt="">
									</span>
									<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc">
										<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc--name">CUZCO >></span>
									</span>
								</a>
							</li>
							<li class="c_wrapper__c__cListExchH__cL__m__i">
								<a href="casas-de-cambio/piura" class="c_wrapper__c__cListExchH__cL__m__link">
									<span class="c_wrapper__c__cListExchH__cL__m__link__cImg">
										<img src="<?= $url_admin;?>resources/images/exchange_houses/piura.jpg" alt="">
									</span>
									<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc">
										<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc--name">PIURA >></span>
									</span>
								</a>
							</li>
							<li class="c_wrapper__c__cListExchH__cL__m__i">
								<a href="casas-de-cambio/lima" class="c_wrapper__c__cListExchH__cL__m__link">
									<span class="c_wrapper__c__cListExchH__cL__m__link__cImg">
										<img src="<?= $url_admin;?>resources/images/exchange_houses/lima.jpg" alt="">
									</span>
									<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc">
										<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc--name">LIMA >></span>
									</span>
								</a>
							</li>
							<li class="c_wrapper__c__cListExchH__cL__m__i">
								<a href="casas-de-cambio/cuzco" class="c_wrapper__c__cListExchH__cL__m__link">
									<span class="c_wrapper__c__cListExchH__cL__m__link__cImg">
										<img src="<?= $url_admin;?>resources/images/exchange_houses/cuzco.jpg" alt="">
									</span>
									<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc">
										<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc--name">CUZCO >></span>
									</span>
								</a>
							</li>
							<li class="c_wrapper__c__cListExchH__cL__m__i">
								<a href="casas-de-cambio/piura" class="c_wrapper__c__cListExchH__cL__m__link">
									<span class="c_wrapper__c__cListExchH__cL__m__link__cImg">
										<img src="<?= $url_admin;?>resources/images/exchange_houses/piura.jpg" alt="">
									</span>
									<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc">
										<span class="c_wrapper__c__cListExchH__cL__m__link__cDesc--name">PIURA >></span>
									</span>
								</a>
							</li>
						</ul>
					</div>
					<?php
						}
					?>
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
	<?php require_once 'includes/inc-footer.php';?>
	<script type="text/javascript" src="<?= $url;?>js/main.js"></script>
</body>
</html>