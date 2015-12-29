@extends('layouts.sitio')

@section('main')
	<section class="text-center" data-bottom-top="background-position: center 300%;"
		data-top-bottom="background-position: center 0%;" id="hello">
		<h2>Completely Automated <br> Communications-Based Quality Solution</h2>
		<a href="#contact" class="boton bt-bg bt-green contact">Get started FREE <i class="glyphicon glyphicon-log-out"></i></a>
		
		<div class="separador">
			<div class="separador-sm text">
				<span>Automate</span> + <span class="blue">Faster</span> + <span>No Errors</span>
			</div>
			<a href="" name="features"></a>
			<div class="separador-lg">
				<h3>Features</h3>
			</div>
		</div>
	</section>

	<section id="features-section" class="clearfix" data-bottom-top="background-position: center 0%;"
		data-top-bottom="background-position: center 100%;">

		<div class="col-md-offset-2 col-md-8 col-lg-8">
			<div class="row">
				<article class="col-md-4 col-lg-4">
					<div class="col clearfix">
						<div class="col-xs-5 col-md-12">
							<div class="text-center">
								<img src="images/icono_automate.svg" alt="Automate">
							</div>
							<h4>Automate</h4>
						</div>
						<div class="col-xs-7 col-md-12">
							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> Automate QA Testing for Voice &amp; SMS.</li>
								<li><i class="glyphicon glyphicon-ok"></i> Eliminate Human Errors.</li>
							</ul>
						</div>
					</div>
				</article>
				<article class="col-md-4 col-lg-4">
					<div class="col clearfix">
						<div class="col-xs-5 col-md-12">
							<div class="text-center">
								<img src="images/icono_save.svg" alt="Save">
							</div>
							<h4>Save</h4>
						</div>
						<div class="col-xs-7 col-md-12">
							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> Decrease QA Costs by 50%.</li>
								<li><i class="glyphicon glyphicon-ok"></i> Decrease time to Deployment.</li>
								<li><i class="glyphicon glyphicon-ok"></i> Shorten Regression Testing.</li>
								<li><i class="glyphicon glyphicon-ok"></i> Eliminate Human Error.</li>
							</ul>
						</div>
					</div>
				</article>
				<article class="col-md-4 col-lg-4">
					<div class="col clearfix">
						<div class="col-xs-5 col-md-12">
							<div class="text-center">
								<img src="images/icono_improve.svg" alt="Improve">
							</div>
							<h4>Improve</h4>
						</div>
						<div class="col-xs-7 col-md-12">
							<ul>
								<li><i class="glyphicon glyphicon-ok"></i> Improve Quality of your Services.</li>
								<li><i class="glyphicon glyphicon-ok"></i> Improves Monitoring System for: 
									<ul>
										<li><i></i> Telephony Providers.</li>
										<li><i></i> Production Code.</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</article>
			</div>
		</div>

		<br style="clear:both;">

		<div class="text-center">
			<a href="#contact" class="boton bt-bg bt-blue contact">Get FREE Consultation <i class="glyphicon glyphicon-log-out"></i></a>
		</div>
	</section>

	<section id="company" class="">
		<h3 class="text-center">Company</h3>

		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-xs-offset-2 col-xs-8 col-md-offset-0 col-md-3 imagen vertical-align">
					<img src="images/icono_company.svg" alt="" width="60%">
				</div>
				<div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-6 vertical-align">
					<span class="text"><p><span class="qamplus">QAM<span>Plus</span></span> was founded in 2015 to market its QA test automation software. It was originally started in a home office, but plans moved into a full time office in the coming months. It has added several new features based on customer feedback, and has continued to add new customers month over month all by word of mouth.</p></span>
				</div>
				<div class="col-xs-12 col-md-3 vertical-align">
					<span><a href="{{url('company')}}" class="boton bt-blue">Read More <i class="glyphicon glyphicon-log-out"></i></a></span>
				</div>
			</div>
		</div>
	</section>
@stop