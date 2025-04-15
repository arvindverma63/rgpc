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
		<h1 class="display-4 font-weight-bold text-white" style="margin-top: 170px;">Canteen</h1>
	</div>
</section>

<section class="container my-5">
	<h2 class="text-center mb-4">About the Canteen</h2>
	<p class="lead text-center">A hygienic and affordable canteen providing a variety of nutritious meals and snacks for students and staff in a welcoming environment.</p>
	<ul class="list-group">
		<li class="list-group-item">Freshly prepared food with daily menus</li>
		<li class="list-group-item">Spacious seating for over 200 people</li>
		<li class="list-group-item">Clean and sanitized dining area</li>
		<li class="list-group-item">Reasonable pricing with student discounts</li>
		<li class="list-group-item">Special dietary options available</li>
	</ul>
</section>

<?php include('components/footer.php'); ?>
</body>
</html>