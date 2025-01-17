<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>SmartHR - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>
    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>
 	<!-- Page Wrapper -->
	 <div class="page-wrapper">
                <div class="content container-fluid pb-0">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="content-page-header">
							<h5>Typography</h5>
						</div>	
					</div>
					<!-- /Page Header -->
											
					<!-- Typography -->
					<div class="row">

						<!-- Headings Tags -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Headings</h5>
								</div>
								<div class="card-body">
									<h1 class="mb-3">h1. Bootstrap heading</h1>
									<h2 class="mb-3">h2. Bootstrap heading</h2>
									<h3 class="mb-3">h3. Bootstrap heading</h3>
									<h4 class="mb-3">h4. Bootstrap heading</h4>
									<h5 class="mb-3">h5. Bootstrap heading</h5>
									<h6 class="mb-0">h6. Bootstrap heading</h6>
								</div>
							</div>
						</div>
						<!-- /Headings Tags -->

						<!-- Headings Class Names -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Heading Class Names</h5>
								</div>
								<div class="card-body">
								   <p class="h1 mb-3">h1. Bootstrap heading</p>
								   <p class="h2 mb-3">h2. Bootstrap heading</p>
								   <p class="h3 mb-3">h3. Bootstrap heading</p>
								   <p class="h4 mb-3">h4. Bootstrap heading</p>
								   <p class="h5 mb-3">h5. Bootstrap heading</p>
								   <p class="h6 mb-0">h6. Bootstrap heading</p>
							   </div>
							</div>
						</div>
						<!-- /Headings Class Names -->							

						<!-- Display Headings -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Display Headings</h5>
								</div>
								<div class="card-body">
									   <h1 class="mb-0 display-1">Display 1</h1>
									   <h1 class="mb-0 display-2">Display 2</h1>
									   <h1 class="mb-0 display-3">Display 3</h1>
									   <h1 class="mb-0 display-4">Display 4</h1>
									   <h1 class="mb-0 display-5">Display 5</h1>
									   <h1 class="mb-0 display-6">Display 6</h1>
								   </div>
							</div>
						</div>
						<!-- /Display Headings -->

						<!-- Text Element -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Text Element</h5>
								</div>
								<div class="card-body">
									<p>You can use the mark tag to <mark>highlight</mark> text.</p>
									<p><del>This line of text is meant to be treated as deleted text.</del></p>
									<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
									<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
									<p><u>This line of text will render as underlined</u></p>
									<p><small>This line of text is meant to be treated as fine print.</small></p>
									<p><strong>This line rendered as bold text.</strong></p>
									<p><em>This line rendered as italicized text.</em></p>
									<p class="font-monospace mb-0">This is in monospace</p>
								</div>
							</div>
						</div>
						<!-- /Text Element -->

						<!-- Coloured Link -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Coloured Link</h5>
								</div>
								<div class="card-body">
									<p><a href="#" class="text-primary">Primary link</a></p>
									<p><a href="#" class="text-secondary">Secondary link</a></p>
									<p><a href="#" class="text-success">Success link</a></p>
									<p><a href="#" class="text-danger">Danger link</a></p>
									<p><a href="#" class="text-warning">Warning link</a></p>
									<p><a href="#" class="text-info">Info link</a></p>
									<p><a href="#" class="text-light bg-dark">Light link</a></p>
									<p><a href="#" class="text-dark">Dark link</a></p>
									<p><a href="#" class="text-muted">Muted link</a></p>
									<p class="mb-0"><a href="#" class="text-white bg-dark">White link</a></p>
								</div>
							</div>
						</div>
						<!-- /Coloured Link -->

						<!-- Coloured Text -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Coloured Text</h5>
								</div>
								<div class="card-body">
									<p class="text-primary">.text-primary</p>
									<p class="text-secondary">.text-secondary</p>
									<p class="text-success">.text-success</p>
									<p class="text-danger">.text-danger</p>
									<p class="text-warning">.text-warning</p>
									<p class="text-info">.text-info</p>
									<p class="text-light bg-dark">.text-light</p>
									<p class="text-dark">.text-dark</p>
									<p class="text-muted">.text-muted</p>
									<p class="text-white bg-dark mb-0">.text-white</p>
								</div>
							</div>
						</div>
						<!-- /Coloured Text -->

						<!-- Bullet Lists -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Bullet Lists</h5>
								</div>
								<div class="card-body">
									<ul class="mb-0 bullets">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit
											<ul>
												<li>Phasellus iaculis neque</li>
												<li>Purus sodales ultricies</li>
												<li>Vestibulum laoreet porttitor sem</li>
												<li>Ac tristique libero volutpat at</li>
											</ul>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Bullet Lists -->

						<!-- Number Lists -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Number Lists</h5>
								</div>
								<div class="card-body">
									<ol class="mb-0">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit
											<ul>
												<li>Phasellus iaculis neque</li>
												<li>Purus sodales ultricies</li>
												<li>Vestibulum laoreet porttitor sem</li>
												<li>Ac tristique libero volutpat at</li>
											</ul>
										</li>
										<li>Faucibus porta lacus fringilla vel</li>
										<li>Aenean sit amet erat nunc</li>
										<li>Eget porttitor lorem</li>
									</ol>
								</div>
							</div>
						</div>
						<!-- /Number Lists -->

						<!-- Lead Paragraph -->
						<div class="col-md-12">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Lead Paragraph</h5>
								</div>
								<div class="card-body">
									<p class="lead mb-0">
										<b>This is a lead paragraph. It stands out from regular paragraphs</b>. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
									</p>
								</div>
							</div>
						</div>
						<!-- /Lead Paragraph -->

						<!-- Blockquote Left Aligned -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Blockquote Left Aligned</h5>
								</div>
								<div class="card-body">
								   <figure class="blockquote-container">
									   <blockquote class="blockquote mb-2">
										   <h6>The greatest glory in living lies not in never falling, but in rising every time we fall.</h6>
									   </blockquote>
									   <figcaption class="blockquote-footer mt-0 mb-0 text-muted op-7"><cite title="Source Title">Nelson Mandela</cite>
									   </figcaption>
								   </figure>
								</div>
							</div>
						</div>
						<!-- /Blockquote Left Aligned -->

						<!-- Blockquote Right Aligned -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Blockquote Right Aligned</h5>
								</div>
								<div class="card-body">
								   <figure class="blockquote-container text-end">
									   <blockquote class="blockquote mb-2">
										   <h6>The greatest glory in living lies not in never falling, but in rising every time we fall.</h6>
									   </blockquote>
									   <figcaption class="blockquote-footer mt-0 mb-0 text-muted op-7"><cite title="Source Title">Nelson Mandela</cite>
									   </figcaption>
								   </figure>
								</div>
							</div>
						</div>
						<!-- /Blockquote Right Aligned -->

						<!-- Custom Color Blockquote -->
						<div class="col-md-12">
							<div class="card bg-white">
								<div class="card-header">
									<h5 class="card-title">Custom Color Blockquote</h5>
								</div>
								<div class="card-body pb-0">
									<div class="row">
										<div class="col-xl-4">
											<blockquote class="blockquote custom-blockquote primary text-center">
												<h6>The future belongs to those who believe in the beauty of their dreams..</h6>
												<footer class="blockquote-footer mt-3 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
											</blockquote>
										</div>
										<div class="col-xl-4">
											<blockquote class="blockquote custom-blockquote secondary text-center">
												<h6>The future belongs to those who believe in the beauty of their dreams..</h6>
												<footer class="blockquote-footer mt-3 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
											</blockquote>
										</div>
										<div class="col-xl-4">
											<blockquote class="blockquote custom-blockquote info text-center">
												<h6>The future belongs to those who believe in the beauty of their dreams..</h6>
												<footer class="blockquote-footer mt-3 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
											</blockquote>
										</div>
										<div class="col-xl-4">
											<blockquote class="blockquote custom-blockquote warning text-center">
												<h6>The future belongs to those who believe in the beauty of their dreams..</h6>
												<footer class="blockquote-footer mt-3 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
											</blockquote>
										</div>
										<div class="col-xl-4">
											<blockquote class="blockquote custom-blockquote success text-center">
												<h6>The future belongs to those who believe in the beauty of their dreams..</h6>
												<footer class="blockquote-footer mt-3 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
											</blockquote>
										</div>
										<div class="col-xl-4">
											<blockquote class="blockquote custom-blockquote danger text-center">
												<h6>The future belongs to those who believe in the beauty of their dreams..</h6>
												<footer class="blockquote-footer mt-3 text-muted op-7 mb-0">Someone famous as <cite title="Source Title">-Eleanor Roosevelt</cite></footer>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<!-- /Custom Color Blockquote -->

						<!-- Monospace -->		
						<div class="col-md-3">
							<div class="card bg-white">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Monospace
									</div>
								</div>
								<div class="card-body">
									<p class="font-monospace mb-0">This is in monospace</p>
								</div>
							</div>
						</div>
						<!-- /Monospace -->
						
						<!-- Reset Color -->
						<div class="col-md-3">
							<div class="card bg-white">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Reset Color
									</div>
								</div>
								<div class="card-body">
									<p class="text-muted mb-0">
										Muted text with a <a href="#" class="text-reset text-decoration-underline text-dark">reset link</a>.
									</p>
								</div>
							</div>
						</div>
						<!-- /Reset Color -->
						
						<!-- Visible Text -->
						<div class="col-md-3">
							<div class="card bg-white">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Visible Text
									</div>
								</div>
								<div class="card-body">
									<p class="visible mb-0">This is visible text</p>
								</div>
							</div>
						</div>
						<!-- /Visible Text -->
						
						<!-- Invisible Text -->
						<div class="col-md-3">
							<div class="card bg-white">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Invisible Text
									</div>
								</div>
								<div class="card-body">
									<p class="invisible mb-0">This is invisible text</p>
								</div>
							</div>
						</div>
						<!-- /Invisible Text -->

						<!-- Font Weight and Italics -->		
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Font Weight and Italics
									</div>
								</div>
								<div class="card-body">
									<p class="fw-bold">Bold text.</p>
									<p class="fw-bolder">Bolder weight text (relative to the parent element).</p>
									<p class="fw-semibold">Semibold weight text.</p>
									<p class="fw-normal">Normal weight text.</p>
									<p class="fw-light">Light weight text.</p>
									<p class="fw-lighter">Lighter weight text (relative to the parent element).</p>
									<p class="fst-italic">Italic text.</p>
									<p class="fst-normal mb-0">Text with normal font style</p>
								</div>
							</div>
						</div>
						<!-- /Font Weight and Italics -->
						
						<!-- Line Height -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Line Height
									</div>
								</div>
								<div class="card-body">
									<p class="lh-1">This is a long paragraph written to show how the line-height of
										an
										element is affected by our utilities. Classes are applied to the element
										itself
										or sometimes the parent element. These classes can be customized as needed
										with
										our utility API.
									</p>
									<p class="lh-sm">This is a long paragraph written to show how the line-height of
										an
										element is affected by our utilities. Classes are applied to the element
										itself
										or sometimes the parent element. These classes can be customized as needed
										with
										our utility API.
									</p>
									<p class="lh-base">This is a long paragraph written to show how the line-height
										of
										an element is affected by our utilities. Classes are applied to the element
										itself or sometimes the parent element. These classes can be customized as
										needed with our utility API.
									</p>
									<p class="lh-lg mb-0">This is a long paragraph written to show how the
										line-height
										of an
										element is affected by our utilities. Classes are applied to the element
										itself
										or sometimes the parent element. These classes can be customized as needed
										with
										our utility API.
									</p>
								</div>
							</div>
						</div>
						<!-- /Line Height -->

						<!-- Text Transform -->	
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Text Transform
									</div>
								</div>
								<div class="card-body">
									<p class="text-lowercase">Lowercased text.</p>
									<p class="text-uppercase">Uppercased text.</p>
									<p class="text-capitalize mb-0">CapiTaliZed text.</p>
								</div>
							</div>
						</div>
						<!-- /Text Transform -->
						
						<!-- Text Decoration -->
						<div class="col-md-6">
							<div class="card bg-white">
								<div class="card-header justify-content-between">
									<div class="card-title">
										Text Decoration
									</div>
								</div>
								<div class="card-body">
									<p class="text-decoration-underline">This text has a line underneath it.
									</p>
									<p class="text-decoration-line-through">This text has a line going
										through
										it.
									</p>
									<a href="#" class="text-decoration-none">This link has its text
										decoration
										removed
									</a>
								</div>
							</div>
						</div>
						<!-- /Text Decoration -->

					</div>
					<!-- /Typography -->
										
				</div>			
			</div>
			<!-- /Page Wrapper -->
</div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>

</html>