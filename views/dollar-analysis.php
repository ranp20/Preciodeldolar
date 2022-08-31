<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/inc-header_links.php';?>
	<title>Análisis del dólar | Precio del dólar</title>
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
								<span title="">Análisis del dólar</span>
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
				<div class="c_wrapper__c__cCtFilterVarDoll">
					<div class="c_wrapper__c__cCtFilterVarDoll__cTxt">
						<h2>Variación del dólar</h2>
					</div>
					<div class="c_wrapper__c__cCtFilterVarDoll__cFilter">
						<div class="c_wrapper__c__cCtFilterVarDoll__cFilter__select">
							<select name="" class="sl-history-mes" id="">
								<option value="01">Enero</option>
								<option value="02">Febrero</option>
								<option value="03">Marzo</option>
								<option value="04">Abril</option>
								<option value="05">Mayo</option>
								<option value="06">Junio</option>
								<option value="07">Julio</option>
								<option value="08" selected="">Agosto</option>
								<option value="09">Setiembre</option>
								<option value="10">Octubre</option>
								<option value="11">Noviembre</option>
								<option value="12">Diciembre</option>
							</select>
						</div>
						<div class="c_wrapper__c__cCtFilterVarDoll__cFilter__select">
							<select name="" class="cl-history-anio" id="">
								<option value="2022" selected="">2022</option>
								<option value="2021">2021</option>
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
							</select>
						</div>
					</div>
					<div class="c_wrapper__c__cCtFilterVarDoll__cBtn">
						<button type="button" class="c_wrapper__c__cCtFilterVarDoll__cBtn__btn">VER DATOS</button>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx_wtout-p mgb-2">
				<div class="c_wrapper__c__cPriceTrend">
					<div class="c_wrapper__c__cPriceTrend__cTitle talign-c">
						<h2>Tendencia del Precio de Dólar</h2>
					</div>
					<div class="c_wrapper__c__cPriceTrend__cCont">
						<div class="c_wrapper__c__cPriceTrend__cCont__c">
							<div class="c_wrapper__c__cPriceTrend__cCont__c__ct"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="c_wrapper">
			<div class="c_wrapper__c box-redx_wtout-p mgb-2">
				<div class="c_wrapper__c__cVarDrtDay">
					<div class="c_wrapper__c__cVarDrtDay__cTitle talign-c">
						<h2>Variación del Precio del dólar durante el día</h2>
						<p>19 de Agosto</p>
					</div>
					<div class="c_wrapper__c__cVarDrtDay__cCont">
						<div class="c_wrapper__c__cVarDrtDay__cCont__c">
							<div class="c_wrapper__c__cVarDrtDay__cCont__c__ct"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php require_once 'includes/inc-footer.php';?>
	<script type="text/javascript" src="<?= $url;?>js/main.js"></script>
</body>
</html>