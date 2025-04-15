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
		<h1 class="display-4 font-weight-bold text-white" style="margin-top: 170px;">Sports Field</h1>
	</div>
</section>

<section class="container my-5">
	<h2 class="text-center mb-4">About the Sports Field</h2>
	<p class="lead text-center">A well-maintained sports field offering students a space for physical activities, competitions, and fitness programs.</p>
	<ul class="list-group">
		<li class="list-group-item">Professional football and cricket pitches</li>
		<li class="list-group-item">Fitness equipment and training zones</li>
		<li class="list-group-item">Regular inter-college tournaments</li>
		<li class="list-group-item">Coaching by certified trainers</li>
		<li class="list-group-item">Dedicated spectator seating</li>
	</ul>
</section>

<?php include('components/footer.php'); ?>
</body>
</html>