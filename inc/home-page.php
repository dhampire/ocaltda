<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Inicio
 * Description: Pagina de Inicio

 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @description hola
 * @package ocaltda
 */

get_header(); ?>
<!-- Slide -->
	<div class="row">
	                <div class="col-md-12 p-0">
	                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	                        <!-- Indicators -->
	                        <ol class="carousel-indicators slide__indicador">
	                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	                        </ol>

	                        <!-- Wrapper for slides -->
	                        <div class="carousel-inner" role="listbox">
	                            <div class="item active">
	                                <picture>
	                            		<source srcset="<?php echo get_template_directory_uri(); ?>/img/cromo-duro-industrial-min.png" media="(max-width: 40em)">
	                                	<img class="slide__picture--img" src="<?php echo get_template_directory_uri(); ?>/img/cromo-duro-industrial.png" alt="">
	                            	</picture>

	                                <div class="carousel-caption slide__cuadro">
	                                    <div class="slide__texto">
	                                    	<h3>Expertos en Cromo Duro Industrial</h3>
	                                    	<p><strong>La única Planta de Cromo Duro Industrial en BOLIVIA</strong> montada con tecnología ALEMANA.</p>
	                                    	<a class="text-rigth btn fondo__general btn--oca" rol="button" href="<?php echo esc_url( home_url( '/' ) ); ?>cromo-duro">SOLICITA INFORMACIÓN</a>
	                                	</div>
	                                </div>
	                            </div>
                            <div class="item">
	                                <picture>
	                            		<source srcset="<?php echo get_template_directory_uri(); ?>/img/vastago-hidraulico-min.png" media="(max-width: 600px)">
	                                	<img class="slide__picture--img" src="<?php echo get_template_directory_uri(); ?>/img/vastago-hidraulico.png' ?>" alt="">
	                            	</picture>
	                                <div class="carousel-caption slide__cuadro">
	                                	<div class="slide__texto">
		                                    <h3>Recuperamos y Frabricamos</h3>
		                                    <p><strong>Cilindros Hidráulicos y Neumáticos</strong>, tanto de cilindros completos como de sus partes</p>
		                                    <a class="text-rigth btn fondo__general btn--oca" rol="button" href="<?php echo esc_url( home_url( '/' ) ); ?>cromo-duro">SOLICITA INFORMACIÓN</a>
		                                </div>
	                                </div>	                                
	                            </div>
		                            <div class="item">
	                                <picture>
	                            		<source srcset="<?php echo get_template_directory_uri(); ?>/img/banner-min.png" media="(max-width: 600px)">
	                                	<img class="slide__picture--img" src="<?php echo get_template_directory_uri(); ?>/img/banner.png' ?>" alt="">
	                            	</picture>
	                                <div class="carousel-caption slide__cuadro">
	                                    <div class="slide__texto">
	                                    	<h3>Construcciones Civiles</h3>
	                                    	<p>Realizamos el servicio de Ingeniería, Planificación, Presupuesto y Ejecución de Obras</p>
	                                    	<a class="text-rigth btn fondo__general btn--oca" rol="button" href="<?php echo esc_url( home_url( '/' ) ); ?>constructora">SOLICITA INFORMACIÓN</a>
	                                	</div>
	                                </div>	                                
	                            </div> 
	                        </div>
	                        </a>
	                    </div>
	                </div>
	</div>
<!-- QUIENES SOMOS -->
	<div class="row quienes-somos">
		<div class="col-xs-12 col-md-10 col-md-offset-1">
			<div class="col-md-3">
				<h2>QUIENES SOMOS</h2>
			</div>
			<div class="col-md-9 quienes--somos--descripcion">
				<p>Somos una empresa que ofrece Servicios Integrales de: <br>
					<ul>
						<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Metalúrgica</li>
						<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Metalmecánica </li>
						<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Aplicación de <strong>CROMO DURO INDUSTRIAL</strong> en Cualquier Superficie.</li>
						<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Construcciones Civiles</li>
						<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Contamos con la única planta de cromo duro industrial en el país con tecnología alemana.</li>
					</ul>
				</p>
			</div>
		</div>
	</div>
<!-- CROMO DURO -->
	<div class="row cromo-duro">
		<div class="col-xs-12">
			<div class="col-md-4">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		            <div class="carousel-inner" role="listbox">
		                <div class="item active">
		                    <img class="cromo-duro__img" src="<?php echo get_template_directory_uri() ?>/img/OCA-vastago-cromo-duro.png" alt="">
		                </div>
		                <div class="item">
							<img class="cromo-duro__img" src="<?php echo get_template_directory_uri(); ?>/img/OCA-cromo-duro.png" alt="">
	   
		                </div>
		            </div>
		        </div>

				<!--img class="cromo-duro__img" src="<?php echo get_template_directory_uri() ?>/img/OCA-vastago-cromo-duro.jpeg" alt="" -->	
			</div>
			<div class="col-xs-12 col-md-8 cromo-duro--recaudro">
				<h2>
					CROMO DURO INDUSTRIAL
				</h2>
				<p>
					Contamos con una moderna tecnología en galvanoplastia, baños de gran capacidad, control automatizado y personal capacitado, lo que nos permite cumplir con los requerimientos y expectativas de nuestros clientes
				</p>
				<ul class="col-xs-6">
					<h3>Realizamos servicios para:</h3>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Industria Minera</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Industria Petrolera</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Industria Papelera</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Industria Gráfica</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Industria Hidráulica</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Construcción General de Máquinas</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Industria de Plásticos</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Agricultura y Horticultura</li>
				</ul>
				<ul class="col-xs-6">
					<h3>Servicio de Fabricación y/o Recuperación de Piezas y partes:</h3>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Hidráulicas: (Vástagos, Cilindros o Camisas, Pistones, etc.).</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Neumáticas: (Vástagos, Cilindros o Camisas, Pistones, etc.).</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Rodillos para todo tipo de Industria.  Sin restricción. (Ø15 mm - Ø80 mm) y (5cm - 6000 Cm. De largo)</li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Moldes, Matrices, Tornillo Extrusor, Gusano Extrusor. </li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Comandos de Cajas. </li>
					<li class="listas--sin"><i class="fa fa-check-circle-o icon"></i> Válvulas Hidráulicas.</li>
				</ul>
				<a rol="button" class="text-rigth btn fondo__general btn--oca" href="<?php echo esc_url( home_url( '/' ) );?>cromo-duro"> Realiza su cotización <i class="fa fa-check"></i></a>
			</div>
		</div>
	</div>
<!-- SERVICIOS -->

	<div class="row servicios fondo__general">
			<div class="col-xs-12 home__servicios">
				<h3 class="col-xs-12 home__servicios_titulo">NUESTROS SERVICIOS</h3>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<img class="home__servicios--img" src="<?php echo get_template_directory_uri() ?>/img/metalurgica.png" alt="">
						<div class="home__servicios--des col-xs-10 col-xs-offset-1">
							<h4 class="text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>metalurgica">METALÚRGICA</a></h4>
							<p class="text-justify">Diseño, Montaje y Fabricación de Todo tipo de Estructuras Metálicas para satisfacer las necesidades de su Empresa o Industria.<!--Fabricamos estructuras metálicas para satisfacer preferentemente las necesidades de las Industrias Metalmecánicas. La diversidad de trabajos realizados, nos ha permitido adquirir una sólida experiencia, capacitándonos para dar una respuesta precisa en tiempo y forma a los requerimientos de nuestros clientes. --></p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>metalurgica" role="button" class="btn btn--oca fondo__general">Más información <i class="fa fa-chevron-circle-right"></i></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<img class="home__servicios--img" src="<?php echo get_template_directory_uri() ?>/img/metalmecanica.png" alt="">
						<div class="home__servicios--des col-xs-10 col-xs-offset-1">
							<h4 class="text-center"><a src="<?php echo esc_url( home_url( '/' ) ); ?>metalmecanica">METALMECÁNICA</a></h4>
							<p class="text-justify">Soluciones integrales a las necesidades del área de metal mecánica que cubren los requerimientos de la industria innovando y desarrollando en la fabricación de productos, partes, piezas, matrices, etc. con altos estándares de calidad Internacional</p>
							<button class="btn btn--oca fondo__general">Más información <i class="fa fa-chevron-circle-right"></i></button>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<img class="home__servicios--img" src="<?php echo get_template_directory_uri() ?>/img/puentes.png" alt="">
						<div class="home__servicios--des col-xs-10 col-xs-offset-1">
							<h4 class="text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>constructora">CONSTRUCCIONES CIVILES</a></h4>
							<p class="text-justify">Diseño Corporativo Industrial, realizamos el servicio de Ingeniería, Planificación, Presupuesto y Ejecución de Obras, en todo el territorio Boliviano.</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>constructora" class="btn btn--oca fondo__general">Más información <i class="fa fa-chevron-circle-right"></i></a>
						</div>
					</div>
			</div>
	</div>

<?php
get_footer();
