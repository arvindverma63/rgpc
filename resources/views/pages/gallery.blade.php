<!DOCTYPE html>
<html lang="en">
    @include('components.head')

<style>
    .gallery-img {
        width: 100%;
        height: 200px; /* Fixed height for consistency */
        object-fit: cover; /* Crops images to fit without distortion */
        aspect-ratio: 4/3; /* Consistent aspect ratio */
        border-radius: 10px; /* Rounded corners for modern look */
        transition: transform 0.3s ease; /* Smooth hover effect */
    }
    .gallery-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .gallery-card:hover {
        transform: translateY(-5px); /* Slight lift on hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
    }
    .gallery-img:hover {
        transform: scale(1.05); /* Subtle zoom on image hover */
    }
</style>

<body>
    @include('components.header')

<section class="banner-area bg-dark text-white py-5 text-center">
	<div class="container">
		<h1 class="display-4 font-weight-bold text-white" style="margin-top: 170px;">Gallery</h1>
	</div>
</section>

<section class="py-5 bg-light">
	<div class="container">
		<div class="card border-0 shadow-sm">
			<div class="card-body">
				<h4 class="text-orange mb-3 font-weight-bold">GIC Pharmacy Gallery</h4>
				<p>Explore the vibrant life at GIC Pharmacy through our curated gallery, showcasing state-of-the-art facilities, modern classrooms, advanced laboratories, and serene campus spaces.</p>

				<h5 class="text-orange mt-4">Highlights:</h5>
				<ul>
					<li>Modern laboratories equipped for cutting-edge pharmaceutical research</li>
					<li>Spacious lecture halls designed for interactive learning</li>
					<li>Picturesque campus areas fostering a dynamic student community</li>
				</ul>

				<!-- Gallery Section -->
				<h5 class="text-orange mt-5 mb-3 font-weight-bold">Explore Our Campus</h5>
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
					@php
						$galleryPath = public_path('img/gic_gallery');
						$imageFiles = File::files($galleryPath);
						$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
					@endphp
					@foreach ($imageFiles as $image)
						@if (in_array(strtolower($image->getExtension()), $allowedExtensions))
							@php
								$imageName = pathinfo($image->getFilename(), PATHINFO_FILENAME);
								$imageUrl = asset('img/gic_gallery/' . $image->getFilename());
							@endphp
							<div class="col">
								<div class="card h-100 border-0 shadow-sm gallery-card">
									<a href="{{ $imageUrl }}" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="{{ $imageUrl }}" data-bs-title="{{ ucwords(str_replace('_', ' ', $imageName)) }}">
										<img src="{{ $imageUrl }}" class="card-img-top gallery-img" alt="{{ ucwords(str_replace('_', ' ', $imageName)) }}">
									</a>
								</div>
							</div>
						@endif
					@endforeach
					@if (empty($imageFiles) || count(array_filter($imageFiles, fn($image) => in_array(strtolower($image->getExtension()), $allowedExtensions))) == 0)
						<div class="col-12 text-center">
							<p class="text-muted">No images found in the gallery.</p>
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Modal for Lightbox -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="imageModalLabel">Image Title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body text-center">
				<img src="" class="img-fluid" id="modalImage" alt="Gallery Image">
			</div>
		</div>
	</div>
</div>

@include('components.footer')

<!-- JavaScript for Modal Image Update -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const imageModal = document.getElementById('imageModal');
    imageModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const imageSrc = button.getAttribute('data-bs-image');
        const imageTitle = button.getAttribute('data-bs-title');
        const modalImage = imageModal.querySelector('#modalImage');
        const modalTitle = imageModal.querySelector('#imageModalLabel');
        modalImage.src = imageSrc;
        modalTitle.textContent = imageTitle;
    });
});
</script>

</body>
</html>
