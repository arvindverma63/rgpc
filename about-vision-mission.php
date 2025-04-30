<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include('components/head.php'); ?>

<body>
	<?php include('components/header.php'); ?>


    <!-- Banner Section -->
	<section class="banner-area bg-dark text-white py-5 text-center">
		<div class="container">
			<h1 class="display-4 font-weight-bold text-white" style="margin-top: 170px;">Vision & Mission</h1>
			<p class="lead">>Our Guiding Principles Towards Excellence in Pharmaceutical Education</p>
			<p>Email: <a href="mailto:gicpharmacy24@gmail.com" class="text-warning">gicpharmacy24@gmail.com</a> | Website: <a href="http://www.gicpharmacy.com" class="text-warning">www.gicpharmacy.com</a></p>
		</div>
	</section>

	<!-- Vision & Mission Section -->
	<section class="py-5">
		<div class="container">
			<div class="row">
				<!-- Vision -->
				<div class="col-md-6 mb-4">
					<div class="p-4 bg-light shadow-sm rounded h-100">
						<h3 class="text-primary">Our Vision</h3>
						<p>
							To emerge as a center of excellence in the field of pharmaceutical education and research by nurturing responsible, skilled, and ethical professionals committed to advancing healthcare and community welfare.
						</p>
						<ul class="mt-3 list-unstyled">
							<li>🌱 Foster innovation and critical thinking</li>
							<li>🌍 Promote global standards in education</li>
							<li>🏥 Bridge academics with healthcare needs</li>
							<li>🤝 Build industry and institutional partnerships</li>
						</ul>
					</div>
				</div>

				<!-- Mission -->
				<div class="col-md-6 mb-4">
					<div class="p-4 bg-white shadow-sm rounded border h-100">
						<h3 class="text-primary">Our Mission</h3>
						<p>
							Our mission is to deliver high-quality pharmaceutical education through a blend of theoretical knowledge, hands-on training, research, and ethical values. We aim to empower students with lifelong skills for personal and professional success.
						</p>
						<ul class="mt-3 list-unstyled">
							<li>✅ Provide state-of-the-art facilities and infrastructure</li>
							<li>✅ Encourage faculty development and academic excellence</li>
							<li>✅ Support research and innovation at all levels</li>
							<li>✅ Develop compassionate and competent healthcare professionals</li>
							<li>✅ Serve society through healthcare outreach and community programs</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Core Values Section -->
			<div class="row mt-5">
				<div class="col-12">
					<h3 class="text-center mb-4">Our Core Values</h3>
					<div class="row">
						<?php
						$core_values = [
							["icon" => "🎯", "title" => "Excellence", "desc" => "We strive for academic and professional excellence in all our endeavors."],
							["icon" => "🤝", "title" => "Integrity", "desc" => "We uphold honesty, transparency, and ethical conduct."],
							["icon" => "💡", "title" => "Innovation", "desc" => "We encourage curiosity, creativity, and research-driven learning."],
							["icon" => "🌍", "title" => "Inclusivity", "desc" => "We respect diversity and provide equal opportunities for all."],
							["icon" => "📘", "title" => "Discipline", "desc" => "We maintain a structured and focused academic environment."],
						];
						foreach ($core_values as $value) {
							echo '
								<div class="col-md-4 mb-4">
									<div class="p-3 bg-light text-center shadow-sm rounded h-100">
										<div class="display-4">' . $value['icon'] . '</div>
										<h5 class="mt-3">' . $value['title'] . '</h5>
										<p class="text-muted small">' . $value['desc'] . '</p>
									</div>
								</div>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('components/footer.php'); ?>
</body>
</html>
