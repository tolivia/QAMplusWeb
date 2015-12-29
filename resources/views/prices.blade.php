@extends('layouts.sitio')

@section('main')

	<section id="prices" class="clearfix">
		
		<div class="bg" data-bottom-top="background-position: center 0%;"
		data-top-bottom="background-position: center 150%;"></div>

		<div class="separador text-center">
			<div class="separador-lg">
				<h3>Plans for every business. <span>No long-terms contracts.</span></h3>
			</div>
			<div class="separador-sm">Plans are based on the number of service calls executedto <span class="qamplus">QAM<span>plus</span></span> services.</div>
			<div class="separador-lg">
				<h3><span>API</span> + Communications</h3>
			</div>
		</div>

		<article class="col-md-offset-1 col-md-2 free">
			<div class="col clearfix">
				<div class="col-xs-5 col-md-12">
					<div class="text-center icon">
						<img src="images/icono_price_free.svg" alt="Automate" width="100%">
						<span>FREE</span>
					</div>
					<h4>Free <small>you'll love us</small></h4>
				</div>
				<div class="col-xs-7 col-md-12">
					<ul>
						<li>25,000 API</li>
						<li>50 Voice Credits*</li>
						<li>50 SMS Credits*</li>
						<li>500 emails*</li>
					</ul>
					<div class="text-center">
						<a href="#contact" class="boton bt-bg bt-blue contact">Start <i class="glyphicon glyphicon-log-out"></i></a>
					</div>
				</div>
			</div>
		</article>
		<article class="col-md-2 small">
			<div class="col clearfix">
				<div class="col-xs-5 col-md-12">
					<div class="text-center icon">
						<img src="images/icono_price_small.svg" alt="Save" width="100%">
						<span>SMALL</span>
					</div>
					<h4><span>$</span>49 <small>per month</small></h4>
				</div>
				<div class="col-xs-7 col-md-12">
					<ul>
						<li>250,000 API</li>
						<li>500 Voice Credits*</li>
						<li>500 SMS Credits*</li>
						<li>5,000 emails</li>
					</ul>
					<div class="text-center">
						<a href="#contact" class="boton bt-bg bt-blue contact">Start <i class="glyphicon glyphicon-log-out"></i></a>
					</div>
				</div>
			</div>
		</article>
		<article class="col-md-2 medium">
			<div class="col clearfix">
				<div class="col-xs-5 col-md-12">
					<div class="text-center icon">
						<img src="images/icono_price_medium.svg" alt="Improve" width="100%">
						<span>MEDIUM</span>
					</div>
					<h4><span>$</span>99 <small>per month</small></h4>
				</div>
				<div class="col-xs-7 col-md-12">
					<ul>
						<li>500,000 API</li>
						<li>2,000 Voice Credits*</li>
						<li>2,000 SMS Credits*</li>
						<li>20,000 emails</li>
					</ul>
					<div class="text-center">
						<a href="#contact" class="boton bt-bg bt-blue contact">Start <i class="glyphicon glyphicon-log-out"></i></a>
					</div>
				</div>
			</div>
		</article>
		<article class="col-md-2 large">
			<div class="col clearfix">
				<div class="col-xs-5 col-md-12">
					<div class="text-center icon">
						<img src="images/icono_price_large.svg" alt="Improve" width="100%">
						<span>LARGE</span>
					</div>
					<h4><span>$</span>199 <small>per month</small></h4>
				</div>
				<div class="col-xs-7 col-md-12">
					<ul>
						<li>1,000,000 API</li>
						<li>5,000 Voice Credits*</li>
						<li>5,000 SMS Credits*</li>
						<li>50,000 emails</li>
					</ul>
					<div class="text-center">
						<a href="#contact" class="boton bt-bg bt-blue contact">Start <i class="glyphicon glyphicon-log-out"></i></a>
					</div>
				</div>
			</div>
		</article>
		<article class="col-md-2 custom">
			<div class="col clearfix">
				<div class="col-xs-5 col-md-12">
					<div class="text-center icon">
						<img src="images/icono_price_custom.svg" alt="Improve" width="100%">
						<span>CUSTOM</span>
					</div>
					<h4>You <small>decide</small></h4>
				</div>
				<div class="col-xs-7 col-md-12">
					<ul>
						<li class="full-h">We'll adapt the package to your business need.</li>
					</ul>
					<div class="text-center">
						<a href="#contact" class="boton bt-bg bt-blue contact">Contact</a>
					</div>
				</div>
			</div>
		</article>

		<br style="clear:both;">
		<div class="text-center col-xs-12">* Credits are a conditional value which equals to one call in US. In some other counrties customer will be able to make less calls or sms. Support is included with all paying options.</div>
	</section>
	
	<div id="automation" class="clearfix rows-features">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-0 text-center imagen vertical-align">
					<img src="images/icono_automation.svg" alt="" width="60%">
				</div>
				<div class="col-md-6 vertical-align">
					<span><h3>Easy Test <span class="white">AUTOMATION</span></h3></span>
				</div>
				<div class="col-md-3 vertical-align">
					<span><img src="images/tilde_verde.svg" width="60px" alt=""></span>
				</div>
			</div>
		</div>
	</div>

	<div id="satisfaction" class="clearfix rows-features">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-0 text-center imagen vertical-align">
					<img src="images/icono_customer_satisfaction.svg" alt="" width="60%">
				</div>
				<div class="col-md-6 vertical-align">
					<span><h3>Increase Customer <span class="green">SATISFACTION</span></h3></span>
				</div>
				<div class="col-md-3 vertical-align">
					<span><img src="images/tilde_verde.svg" width="60px" alt=""></span>
				</div>
			</div>
		</div>
	</div>
	<div id="market" class="clearfix rows-features">
		<div class="col-md-offset-2 col-md-8">
			<div class="row">
				<div class="col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-0 text-center imagen vertical-align">
					<img src="images/icono_market.svg" alt="" width="60%">
				</div>
				<div class="col-md-6 vertical-align">
					<span><h3>Accelerate Time <br> <span class="white">TO MARKET</span></h3></span>
				</div>
				<div class="col-md-3 vertical-align">
					<span><img src="images/tilde_verde.svg" width="60px" alt=""></span>
				</div>
			</div>
		</div>
	</div>
@stop