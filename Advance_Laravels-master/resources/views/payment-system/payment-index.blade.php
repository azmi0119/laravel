<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment System</title>
	<style type="text/css">
		* {
		  margin: 0;
		  padding: 0;
		  -webkit-box-sizing: border-box;
		  -moz-box-sizing: border-box;
		  box-sizing: border-box;
		}

		body {
		  background: #2e2a2a;
		  color: #fff;
		  font-size: 62.5%;
		  font-family: "Roboto", Arial, Helvetica, Sans-serif, Verdana;
		}

		ul {
		  list-style-type: none;
		}

		a {
		  color: #e95846;
		  text-decoration: none;
		}

		.pricing-table-title {
		  text-transform: uppercase;
		  font-weight: 700;
		  font-size: 2.6em;
		  color: #fff;
		  margin-top: 15px;
		  text-align: left;
		  margin-bottom: 25px;
		  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
		}

		.pricing-table-title a {
		  font-size: 0.6em;
		}

		.clearfix:after {
		  content: "";
		  display: block;
		  height: 0;
		  width: 0;
		  clear: both;
		}
		/** ========================
		 * Contenedor
		 ============================*/
		.pricing-wrapper {
		  width: 960px;
		  margin: 40px auto 0;
		}

		.pricing-table {
		  margin: 0 10px;
		  text-align: center;
		  width: 300px;
		  float: left;
		  -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
		  box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
		  -webkit-transition: all 0.25s ease;
		  -o-transition: all 0.25s ease;
		  transition: all 0.25s ease;
		}

		.pricing-table:hover {
		  -webkit-transform: scale(1.06);
		  -ms-transform: scale(1.06);
		  -o-transform: scale(1.06);
		  transform: scale(1.06);
		}

		.pricing-title {
		  color: #fff;
		  background: #e95846;
		  padding: 20px 0;
		  font-size: 2em;
		  text-transform: uppercase;
		  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
		}

		.pricing-table.recommended .pricing-title {
		  background: #2db3cb;
		}

		.pricing-table.recommended .pricing-action {
		  background: #2db3cb;
		}

		.pricing-table .price {
		  background: #403e3d;
		  font-size: 3.4em;
		  font-weight: 700;
		  padding: 20px 0;
		  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
		}

		.pricing-table .price sup {
		  font-size: 0.4em;
		  position: relative;
		  left: 5px;
		}

		.table-list {
		  background: #fff;
		  color: #403d3a;
		}

		.table-list li {
		  font-size: 1.4em;
		  font-weight: 700;
		  padding: 12px 8px;
		}

		.table-list li:before {
		  content: "\f00c";
		  font-family: "FontAwesome";
		  color: #3fab91;
		  display: inline-block;
		  position: relative;
		  right: 5px;
		  font-size: 16px;
		}

		.table-list li span {
		  font-weight: 400;
		}

		.table-list li span.unlimited {
		  color: #fff;
		  background: #e95846;
		  font-size: 0.9em;
		  padding: 5px 7px;
		  display: inline-block;
		  -webkit-border-radius: 38px;
		  -moz-border-radius: 38px;
		  border-radius: 38px;
		}

		.table-list li:nth-child(2n) {
		  background: #f0f0f0;
		}

		.table-buy {
		  background: #fff;
		  padding: 15px;
		  text-align: left;
		  overflow: hidden;
		}

		.table-buy p {
		  float: left;
		  color: #37353a;
		  font-weight: 700;
		  font-size: 2.4em;
		}

		.table-buy p sup {
		  font-size: 0.5em;
		  position: relative;
		  left: 5px;
		}

		.table-buy .pricing-action {
		  float: right;
		  color: #fff;
		  background: #e95846;
		  padding: 10px 16px;
		  -webkit-border-radius: 2px;
		  -moz-border-radius: 2px;
		  border-radius: 2px;
		  font-weight: 700;
		  font-size: 1.4em;
		  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
		  -webkit-transition: all 0.25s ease;
		  -o-transition: all 0.25s ease;
		  transition: all 0.25s ease;
		}

		.table-buy .pricing-action:hover {
		  background: #cf4f3e;
		}

		.recommended .table-buy .pricing-action:hover {
		  background: #228799;
		}

		/** ================
		 * Responsive
		 ===================*/
		@media only screen and (min-width: 768px) and (max-width: 959px) {
		  .pricing-wrapper {
		    width: 768px;
		  }

		  .pricing-table {
		    width: 236px;
		  }

		  .table-list li {
		    font-size: 1.3em;
		  }
		}

		@media only screen and (max-width: 767px) {
		  .pricing-wrapper {
		    width: 420px;
		  }

		  .pricing-table {
		    display: block;
		    float: none;
		    margin: 0 0 20px 0;
		    width: 100%;
		  }
		}

		@media only screen and (max-width: 479px) {
		  .pricing-wrapper {
		    width: 300px;
		  }
		}
	</style>
</head>
<body>
<!-- Contenedor -->
	<div class="pricing-wrapper clearfix">
		<!-- Titulo -->
		<h1 class="pricing-table-title">Tabla de Precios <a href="http://creaticode.com">Creaticode.com</a></h1>

		<div class="pricing-table">
			<h3 class="pricing-title">Basico</h3>
			<div class="price">$60<sup>/ mes</sup></div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li>10 GB <span>De almacenamiento</span></li>
				<li>1 Dominio <span>incluido</span></li>
				<li>25 GB <span>De transferencia mensual</span></li>
				<li>Base de datos <span class="unlimited">ilimitadas</span></li>
				<li>Cuentas de correo <span class="unlimited">ilimitadas</span></li>
				<li>CPanel <span>incluido</span></li>
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<p>$60<sup>/ mes</sup></p>
				<a href="#" class="pricing-action">Comprar</a>
			</div>
		</div>
		
		<div class="pricing-table recommended">
			<h3 class="pricing-title">Premium</h3>
			<div class="price">$100<sup>/ mes</sup></div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li>35 GB <span>De almacenamiento</span></li>
				<li>5 Dominios <span>incluidos</span></li>
				<li>100 GB <span>De transferencia mensual</span></li>
				<li>Base de datos <span class="unlimited">ilimitadas</span></li>
				<li>Cuentas de correo <span class="unlimited">ilimitadas</span></li>
				<li>CPanel <span>incluido</span></li>
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<p>$100<sup>/ mes</sup></p>
				<a href="#" class="pricing-action">Comprar</a>
			</div>
		</div>

		<div class="pricing-table">
			<h3 class="pricing-title">Ultimate</h3>
			<div class="price">$200<sup>/ mes</sup></div>
			<!-- Lista de Caracteristicas / Propiedades -->
			<ul class="table-list">
				<li>100 GB <span>De almacenamiento</span></li>
				<li>8 Dominios <span>incluidos</span></li>
				<li>200 GB <span>De transferencia mensual</span></li>
				<li>Base de datos <span class="unlimited">ilimitadas</span></li>
				<li>Cuentas de correo <span class="unlimited">ilimitadas</span></li>
				<li>CPanel <span>incluido</span></li>
			</ul>
			<!-- Contratar / Comprar -->
			<div class="table-buy">
				<p>$200<sup>/ mes</sup></p>
				<a href="#" class="pricing-action">Comprar</a>
			</div>
		</div>
	</div>

</body>
</html>