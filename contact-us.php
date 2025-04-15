<script type="text/javascript">
        var gk_isXlsx = false;
        var gk_xlsxFileLookup = {};
        var gk_fileData = {};
        function loadFileData(filename) {
        if (gk_isXlsx && gk_xlsxFileLookup[filename]) {
            try {
                var workbook = XLSX.read(gk_fileData[filename], { type: 'base64' });
                var firstSheetName = workbook.SheetNames[0];
                var worksheet = workbook.Sheets[firstSheetName];

                // Convert sheet to JSON to filter blank rows
                var jsonData = XLSX.utils.sheet_to_json(worksheet, { header: 1, blankrows: false, defval: '' });
                // Filter out blank rows (rows where all cells are empty, null, or undefined)
                var filteredData = jsonData.filter(row =>
                    row.some(cell => cell !== '' && cell !== null && cell !== undefined)
                );

                // Convert filtered JSON back to CSV
                var csv = XLSX.utils.aoa_to_sheet(filteredData); // Create a new sheet from filtered array of arrays
                csv = XLSX.utils.sheet_to_csv(csv, { header: 1 });
                return csv;
            } catch (e) {
                console.error(e);
                return "";
            }
        }
        return gk_fileData[filename] || "";
        }
        </script><!DOCTYPE html>
<html lang="en">
<?php include('components/head.php'); ?>

<body>
<?php include('components/header.php'); ?>

<section class="banner-area bg-dark text-white py-5 text-center">
	<div class="container">
		<h1 class="display-4 font-weight-bold text-white" style="margin-top: 170px;">Contact Us</h1>
	</div>
</section>

<section class="container my-5">
	<h2 class="text-center mb-4">Get in Touch</h2>
	<p class="lead text-center">We are here to assist you. Feel free to reach out to us with any questions or inquiries regarding our programs and facilities.</p>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<ul class="list-group">
				<li class="list-group-item"><strong>Address:</strong> Jila Mukhyalay ke Samne, Dibiyapur-Auraiya Road, Kakori, District-Auraiya (UP) Pincode-206244</li>
				<li class="list-group-item"><strong>Email:</strong> gicpharmacy24@gmail.com</li>
				<li class="list-group-item"><strong>Website:</strong> www.gicpharmacy.com</li>
				<li class="list-group-item"><strong>Chairman (R.C. Rajput):</strong> 8171135163</li>
				<li class="list-group-item"><strong>Director (Dr. Narendra Kumar):</strong> 9911743624, 8318366521, 9140809882</li>
			</ul>
		</div>
	</div>
</section>

<?php include('components/footer.php'); ?>
</body>
</html>