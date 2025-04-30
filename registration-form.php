<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include('components/head.php'); ?>

<body>
	<?php include('components/header.php'); ?>

	<!-- Page Banner -->
	<section class="banner-area bg-dark text-white py-5 text-center">
		<div class="container">
			<h1 class="display-4 font-weight-bold text-white" style="margin-top: 170px;">Student Registration Form</h1>
			<p class="lead">Apply now to Gurudev Innovative College of Pharmacy</p>
		</div>
	</section>

	<!-- Registration Form -->
	<section class="py-5 bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card shadow-sm border-0">
						<div class="card-body">
							<h4 class="text-orange font-weight-bold mb-4">📝 Fill Your Details</h4>
							<form action="submit-registration.php" method="POST" enctype="multipart/form-data">
								
								<div class="form-group">
									<label for="fullname">Full Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="fullname" name="fullname" required>
								</div>

								<div class="form-group">
									<label for="fathername">Father's Name</label>
									<input type="text" class="form-control" id="fathername" name="fathername">
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group col-md-6">
										<label for="phone">Phone Number <span class="text-danger">*</span></label>
										<input type="tel" class="form-control" id="phone" name="phone" required>
									</div>
								</div>

								<div class="form-group">
									<label for="dob">Date of Birth</label>
									<input type="date" class="form-control" id="dob" name="dob">
								</div>

								<div class="form-group">
									<label for="course">Select Course <span class="text-danger">*</span></label>
									<select class="form-control" id="course" name="course" required>
										<option value="">-- Choose Course --</option>
										<option value="B.Pharma">B. Pharma (4 Years)</option>
										<option value="D.Pharma">D. Pharma (2 Years)</option>
									</select>
								</div>

								<div class="form-group">
									<label for="address">Full Address</label>
									<textarea class="form-control" id="address" name="address" rows="3"></textarea>
								</div>

								<div class="form-group">
									<label for="document">Upload Your 10+2 Marksheet (PDF/Image)</label>
									<input type="file" class="form-control-file" id="document" name="document">
								</div>

								<button type="submit" class="btn btn-warning btn-block font-weight-bold">Submit Registration</button>
							</form>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="text-center mt-4">
						<p class="text-muted">Need Help? Call <strong>+91 8171135163</strong> or email <a href="mailto:gicpharmacy24@gmail.com">gicpharmacy24@gmail.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include('components/footer.php'); ?>
</body>
</html>
