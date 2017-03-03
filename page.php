<?php 
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
*/
get_header("page"); ?>

<div class="container-page">
	<div id="splitlayout" class="splitlayout">
		<div class="intro">
			<div class="side side-left">
				<div class="filter-side"></div>
				<div class="intro-content">
					<h1>Hogar</h1>
				</div>
				<div class="overlay"></div>
			</div>
			<div class="side side-right">
				<div class="filter-side"></div>
				<div class="intro-content">
					<h1>Industria</h1>
				</div>
				<div class="overlay"></div>
			</div>
		</div><!-- /intro -->
		<div class="page page-right">
			<div class="page-inner">
				<section>
					<span class="bigger-title white">Industria</span>
					<h2>Industria</h2>
					<p>Our white label solution has jettisoned the boring old online grocery shop and turned it into an aptly appetising app that more closely resembles the best bits of the actual in-store shopping experience</p>
					<div class="loop">
						<?php echo photo_gallery(1); ?>
					</div>
				</section>
			</div><!-- /page-inner -->
		</div><!-- /page-right -->
		<div class="page page-left">
			<div class="page-inner">
				<section>
					<span class="bigger-title white">Industria</span>
					<h2>Industria</h2>
					<p>Our white label solution has jettisoned the boring old online grocery shop and turned it into an aptly appetising app that more closely resembles the best bits of the actual in-store shopping experience</p>
					<div class="loop">
						<?php echo photo_gallery(1); ?>
					</div>
				</section>
			</div><!-- /page-inner -->
		</div><!-- /page-left -->
		<a href="#" class="back back-right" title="back to intro">&rarr;</a>
		<a href="#" class="back back-left" title="back to intro">&larr;</a>
	</div><!-- /splitlayout -->
	
</div>
<?php get_footer('page'); ?>