<!DOCTYPE html>
<html lang="en">
    @include('components.head')

<body>
    @include('components.header')

<section class="banner-area bg-dark text-white py-5 text-center">
	<div class="container">
		<h1 class="display-4 font-weight-bold text-white" style="margin-top: 170px;">Fee Structre</h1>
	</div>
</section>

<section class="py-5 bg-light">
	<div class="container">
		<div class="card border-0 shadow-sm">
			<div class="card-body">
				<h2 class="h4 mb-4 text-center">Fee Structure (In Rupees)</h2>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<thead class="thead-dark">
							<tr>
								<th>S.No.</th>
								<th>Course Name</th>
								<th>Academic Year 2018-19, 2019-20</th>
								<th>Academic Year 2020-21</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>01</td><td>B.Pharma</td><td>63300.00</td><td>63300.00</td></tr>
							<tr><td>02</td><td>D.Pharma</td><td>45000.00</td><td>45000.00</td></tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

@include('components.footer')
</body>
</html>
