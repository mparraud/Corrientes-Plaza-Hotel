<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Corrientes Plaza Hotel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/hotelCorrientes.css" rel="stylesheet">


    <!-- Datepicker -->
    <link href="css/datepicker.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap-datetimepicker.js"></script>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

<script language="JavaScript" type="text/javascript" src="js/Calendar/calendar.js"></script>

<!-- ARCHIVOS VALIDA -->
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
 <style type="text/css">

			.my-div {
				background-color: #F9F9F9;
			    border: 1px solid #DDDDDD;
			    margin: 20px auto;
			    padding: 10px;
			    width: 55%;
			}

			/* rewrite some rules from bootstrap */
			.has-feedback .form-control-feedback {
				top: 0;
			}

			/*
			 * Special CSS classes
			 * for jQuery - Valida
			 *
			 * You can try to change the styles via Firebug (Firefox) or related plugin.
			 */

			.at-error {
				/* placed on a error labels */
				color: #A94442;
				margin: 6px 0;
			}

			.at-warning {
				/* placed on a warning (invalid) labels */
				color: #8A6D3B;
				margin: 6px 0;
			}

			.at-invalid {
				/* placed on a invalid fields (which do not match with their filters or masks) */
			}

			.at-required {
				/* placed on a required fields (which are not filled) */
			}

			.at-description {
				/* placed on description paragrapher, right after TEXTAREA fields. */
			}

			.at-description > span {
				/* into description paragrapher, right after TEXTAREA fields there are 2 span TAGs. */
			}

            .at-required-highlight {
                /* highlight required form fields */
                color: red;
            }

		</style>
</script>

</head>
<body id="contacto" class="contacto">

    <!-- Navigation -->
            <?php include 'inc_navigation.php';?>    


    <!-- Services Section --><!-- Home Banners Section -->
    <section id="contacto">
    	<div class="container">
        <h1>Reservas & Consultas</h1>
     	  <form name="form1" action="sendbymail.php" method="post" id="form1" class="valida">
				<!-- ROW 1-->
				<div class="row" >
                    <div class="col-xs-12 col-sm-5" >

                        <label for="field-1" >Nombre y Apellido</label>

				<div class="form-group" >
				<input type="text" name="first_name" id="field-1"  class="form-control" required data-validation-required-message="Please enter your name." title="Campo obligatorio"/>

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-7" >

                        <label for="field-2" >Apellido</label>
                        <div class="form-group" >
                             <input type="text" name="last_name" id="field-2" class="form-control"   required data-validation-required-message="Please enter your last name."/>

                        </div>
                    </div><!-- //form-group -->

                </div>
				<!-- // ROW 1-->
                
                
				<!-- ROW 2-->
				<div class="row" >
                    <div class="col-xs-12 col-sm-5" >

                        <label for="field-3" >E-mail</label>

				<div class="form-group" >
					<input type="text" name="email" id="field-3" filter="email" class="form-control" required  
                    oninvalid="InvalidMsg(this);" 
                    oninput="InvalidMsg(this);"
                     data-invalid="Must be a valid email address"  />
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-7" >

                        <label for="field-4" >Telefono</label>
                        <div class="form-group" >
                             <input type="text" name="telephone" id="field-4" class="form-control"/>
                        </div>
                    </div><!-- //form-group -->

                </div>
				<!-- // ROW 2--> 
                
                <!-- ROW 3-->
				<div class="row" >
                    <div class="col-xs-12 col-sm-5" >

                        <label for="field-12" >DNI</label>

				<div class="form-group" >
				<input type="text" name="dni" id="field-12"  class="form-control"/>

                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-7" >

                        <label for="field-2" >Horario de contacto</label>
                        <div class="form-group" >
                             <input type="text" name="last_name" id="field-2" class="form-control"   required data-validation-required-message="Please enter your last name."/>

                        </div>
                    </div><!-- //form-group -->

                </div>
				<!-- // ROW 3-->


                
				<!-- ROW 4-->
				<div class="row" >
                    <div class="col-xs-12 col-sm-5" >

                        <label for="field-7" >Desde *</label>

                        <div class="form-group" >
                            <div class='input-group date' id='datetimepicker'>
                                <input type="text" name="estadiadesde" id="field-7"  class="form-control" placeholder="dd-mm-aaaa"/>
                                <span class="input-group-addon" onClick="javascript:showCalendar('estadiadesde')">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
            
                    </div>

                    <div class="col-xs-12 col-sm-7" >

                        <label for="field-8" >Hasta</label>
                        <div class="form-group" >
                            <div class='input-group date' id='datetimepicker2'>
                                <input type="text" name="estadiahasta" id="field-8"  class="form-control" placeholder="dd-mm-aaaa"/>
                                <span class="input-group-addon" onClick="javascript:showCalendar('estadiahasta')">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div><!-- //form-group -->
                </div>

                </div>
				<!-- // ROW 4-->

				<!-- ROW 5-->
				<div class="row" >
                    <div class="col-xs-12 col-sm-5" >

                        <label for="field-10" >Cantidad de noches</label>

				<div class="form-group" >
					<input type="text" name="noches" id="field-10"  class="form-control" />
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-7" >

                        <label for="field-11" >Cantidad de pasajeros</label>
                       				<div class="form-group" >
					<input type="text" name="pasajeros" id="field-11"  class="form-control" />
                        </div>
                    </div><!-- //form-group -->

                </div>
				<!-- // ROW 5-->
				
				<label for="field-9" >Consulta</label>
				<div class="form-group" >
					<textarea name="comments" id="field-9" cols="100" rows="10" required class="form-control" style="resize:none" maxlength="999"></textarea>
				</div>

				<p>
                <input type="submit" name="enviar" value="Enviar" class="btn btn-primary" />
                
				</p>

			</form>
  	  </div>
      
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">Copyright Corrientes Plaza Hotel - Todos los derechos reservados 2006. - Términos y condiciones<br/>
               <img src="img/hotel/gr_footer_data.png" class="dataFiscal">
              </div>
              <div class="col-md-4">
                <img src="img/hotel/gr_footer_smoke-free.png" alt="100% Libre de Humo">
                <div class="text_smoke-free">Por lo dispuesto en la Ley 26687 y por el bien de su salud este hotel es un espacio libre de humo de cigarrillo y tabaco. Fumar está solo permitido en el exterior del Hotel. Absténgase de fumar en las habitaciones y en los espacios cerrados del Hotel. Al momento de realizar el Check in, se les informará a los huéspedes acerca de esta Política de No Fumador y se le informará del cargo correspondiente que el Hotel cobrará en concepto de limpieza y eliminación de humo, en caso que no se cumpla la política.</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                            <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">
                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">
                            <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">
                            <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                            <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<!--    <script src="js/cbpAnimatedHeader.js"></script> -->

    <!-- Contact Form JavaScript -->
<!--    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    -->

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

	<!-- VALIDA -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="src/valida.2.1.6.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},
/*
					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>


</body>

</html>
