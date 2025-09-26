<!DOCTYPE html>
<html lang="en">
    @include('components.head')

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

                    <!-- Custom Gallery Section -->
                    <h5 class="text-orange mt-5 mb-3 font-weight-bold">Explore Our Campus</h5>
                    <div class="gallery-container" id="galleryContainer">
                        <!-- Images will be inserted here via JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Lightbox -->
    <div class="modal" id="imageModal">
        <span class="close-modal" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <img class="modal-img" id="modalImage">
        </div>
    </div>

    <style>
        .gallery-container {
            padding: 0 15px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 images per row */
            gap: 20px;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .gallery-img {
            width: 100%;
            height: 300px; /* Adjusted for your image aspect ratio */
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .modal-content {
            max-width: 80%;
            max-height: 80%;
        }
        .modal-img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
        }
        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }
        @media (max-width: 1024px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 per row on tablets */
            }
        }
        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr; /* 1 per row on mobile */
            }
            .gallery-img {
                height: 200px; /* Reduced height for mobile */
            }
        }
    </style>

    @php
        $galleryPath = public_path('img/gic_gallery');
        $imageFiles = File::files($galleryPath);
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $imageUrls = array_map(function ($image) {
            return asset('img/gic_gallery/' . $image->getFilename());
        }, array_filter($imageFiles, fn($image) => in_array(strtolower($image->getExtension()), $allowedExtensions)));
    @endphp

    <script>
        const images = @json($imageUrls);
        const galleryContainer = document.getElementById('galleryContainer');
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');

        // Populate gallery dynamically
        images.forEach((src, index) => {
            if (src) {
                const item = document.createElement('div');
                item.className = 'gallery-item';
                item.innerHTML = `<a href="#" onclick="openModal('${src}', 'Image ${index + 1}')"><img src="${src}" class="gallery-img" alt="Gallery Image ${index + 1}"></a>`;
                galleryContainer.classList.add('gallery-grid'); // Add grid class to container
                galleryContainer.appendChild(item);
            }
        });

        // Modal functions
        function openModal(src, title) {
            modalImage.src = src;
            modal.style.display = 'flex';
        }

        function closeModal() {
            modal.style.display = 'none';
        }

        // Close modal on outside click
        window.onclick = function(event) {
            if (event.target === modal) {
                closeModal();
            }
        };
    </script>

    @include('components.footer')
</body>
</html>