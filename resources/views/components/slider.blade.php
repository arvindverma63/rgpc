<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GicPharmacy kanpur</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            font-size: 62.5%;
        }

        body {
            font-family: 'Roboto', sans-serif;
            font-size: 1.6rem;
            background-color: #f5f5f5;
        }

        .page {
            width: 100%;
            min-height: 100vh;
            padding: 2rem;
            margin: 0 auto;
            position: relative;
        }

        .header {
            width: 100%;
            height: 60px;
            background: linear-gradient(90deg, #fc9928, #ff6200);
            border-radius: 0px;
            display: flex;
            align-items: center;
            padding: 0 2rem;
            color: white;
            font-size: 2rem;
            font-weight: 700;
        }

        .content {
            width: 100%;
            margin-top: 1rem;
        }

        .carousel {
            width: 100%;
            height: 600px;
            position: relative;
            overflow: hidden;
            border-radius: 0px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .slide {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.6s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .slide-background {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            filter: brightness(0.8);
        }

        .slide-1 .slide-background {
            background: url("https://www.innovativepharmacy.in/photos/teachers-days-2024/4.webp") no-repeat center/cover;
        }

        .slide-2 .slide-background {
            background: url("https://content.jdmagicbox.com/comp/patna/dc/9999px612.x612.100911121204.j6s7dc/catalogue/bihar-college-of-pharmacy-danapur-cantt-patna-pharmacy-colleges-tglc0j7ko8.jpg") no-repeat center/cover;
        }

        .slide-3 .slide-background {
            background: url("https://biharcollegeofpharmacy.com/wp-content/uploads/2022/04/img_2.jpg") no-repeat center/cover;
        }

        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            background: rgba(0, 0, 0, 0.4);
            padding: 3rem;
            border-radius: 12px;
            z-index: 2;
            animation: fadeIn 1s ease-in-out;
        }

        .slide-content h2 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .slide-content p {
            font-size: 2rem;
            line-height: 1.5;
        }

        .control {
            width: 50px;
            height: 50px;
            display: none;
            clip-path: circle(50% at 50% 50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            font-size: 2.5rem;
            text-align: center;
            cursor: pointer;
            position: absolute;
            top: 50%;
            z-index: 3;
            transition: background-color 0.3s ease;
        }

        .control:hover {
            background-color: #fc9928;
        }

        .next {
            right: 1rem;
            transform: translateY(-50%);
        }

        .prev {
            left: 1rem;
            transform: translateY(-50%);
        }

        input:nth-of-type(1):checked~.control-1,
        input:nth-of-type(2):checked~.control-2,
        input:nth-of-type(3):checked~.control-3 {
            display: block;
        }

        input:nth-of-type(1):checked~.navigation .radio-btn-1,
        input:nth-of-type(2):checked~.navigation .radio-btn-2,
        input:nth-of-type(3):checked~.navigation .radio-btn-3 {
            background-color: #fc9928;
            border-color: #fff;
        }

        input:nth-of-type(1):checked~.slide-1,
        input:nth-of-type(2):checked~.slide-2,
        input:nth-of-type(3):checked~.slide-3 {
            transform: translateX(0);
            opacity: 1;
        }

        .navigation {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 1rem;
            z-index: 3;
        }

        .radio-btn {
            cursor: pointer;
            width: 15px;
            height: 15px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            border: 2px solid #fff;
            transition: background-color 0.3s ease;
        }

        .radio-btn:hover {
            background-color: #fc9928;
        }

        .marquee {
            width: 100%;
            margin-top: 1rem;
            background: #d32f2f;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            display: flex;
            align-items: center;
            position: relative;
        }

        .marquee-prefix {
            color: #fff;
            font-weight: 700;
            font-family: 'Roboto', sans-serif;
            font-size: 1.8rem;
            background: #b71c1c;
            padding: 0.5rem 1rem;
            margin-right: 1rem;
            border-radius: 3px;
            flex-shrink: 0;
        }

        .marquee-content {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 15s linear infinite;
        }

        .marquee-content a {
            margin-right: 3rem;
            color: #fff;
            font-weight: 500;
            font-family: 'Roboto', sans-serif;
            font-size: 1.6rem;
            text-decoration: none;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .marquee-content a:hover {
            color: #ffeb3b;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        @media (max-width: 768px) {
            .carousel {
                height: 400px;
            }

            .slide-content h2 {
                font-size: 2.5rem;
            }

            .slide-content p {
                font-size: 1.6rem;
            }

            .control {
                width: 40px;
                height: 40px;
                font-size: 2rem;
            }

            .marquee-prefix {
                font-size: 1.4rem;
                padding: maths 0.3rem 0.8rem;
            }

            .marquee-content a {
                font-size: 1.4rem;
                margin-right: 2rem;
            }
        }
    </style>
</head>

<body>
    <section style="margin-top: 40px; margin-bottom: 0px;">
        <div class="content">
            <div class="carousel">
                <input type="radio" id="carousel-1" name="carousel" checked autofocus>
                <input type="radio" id="carousel-2" name="carousel">
                <input type="radio" id="carousel-3" name="carousel">

                <div class="slide slide-1">
                    <div class="slide-background"></div>
                    <div class="slide-content">
                        <h2 style="color: #fc9928">GIC Pharmacy</h2>
                        <p>Kakor-Auraiya (UP) - Excellence in Pharmaceutical Education</p>
                    </div>
                </div>
                <div class="slide slide-2">
                    <div class="slide-background"></div>
                    <div class="slide-content">
                        <h2 style="color: #fc9928">State-of-the-Art Facilities</h2>
                        <p>Explore our modern laboratories and learning spaces</p>
                    </div>
                </div>
                <div class="slide slide-3">
                    <div class="slide-background"></div>
                    <div class="slide-content">
                        <h2 style="color: #fc9928">Expert Faculty</h2>
                        <p>Learn from experienced professionals in the field</p>
                    </div>
                </div>

                <label for="carousel-3" class="control control-1 prev"><span>⤺</span></label>
                <label for="carousel-2" class="control control-1 next"><span>⤼</span></label>
                <label for="carousel-1" class="control control-2 prev"><span>⤺</span></label>
                <label for="carousel-3" class="control control-2 next"><span>⤼</span></label>
                <label for="carousel-2" class="control control-3 prev"><span>⤺</span></label>
                <label for="carousel-1" class="control control-3 next"><span>⤼</span></label>

                <div class="navigation">
                    <label for="carousel-1" class="radio-btn radio-btn-1"></label>
                    <label for="carousel-2" class="radio-btn radio-btn-2"></label>
                    <label for="carousel-3" class="radio-btn radio-btn-3"></label>
                </div>
            </div>
            <div class="marquee">
                <span class="marquee-prefix bg-danger">Latest</span>
                <div class="marquee-content" id="marquee-content">
                    <!-- Notices will be populated here -->
                </div>
            </div>
        </div>
    </section>

    <script>
        // Fallback notices data
        const fallbackNotices = [{
            id: 4,
            title: "Currently No Notice (or update)",
            file_path: "/storage/notices/uKDLgjAT4HJXp6O85AbjBAZmjqIeDxS057oiOI1i.pdf",
            description: "Ghfgh",
            user_id: 1,
            created_at: "2025-05-05T18:05:20.000000Z",
            updated_at: "2025-05-05T18:05:20.000000Z"
        }];

        async function fetchNotices() {
            const marqueeContent = document.getElementById('marquee-content');
            try {
                const response = await fetch('/getNotices', {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                    }
                });

                console.log('Response Status:', response.status);
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }

                const notices = await response.json();
                console.log('Fetched Notices:', notices);
                if (!Array.isArray(notices) || notices.length === 0) {
                    throw new Error('No valid notices received');
                }

                marqueeContent.innerHTML = notices
                    .map((notice, index) => {
                        if (!notice.file_path) {
                            console.warn(`Notice ${notice.id} has no file_path`);
                            return '';
                        }
                        return `
                            <a href="/storage/app/public/${notice.file_path}">
                                ${notice.title || notice.description || 'No title'}
                            </a>
                        `;
                    })
                    .join('');
            } catch (error) {
                console.error('Error fetching notices:', error.message);
                // Use fallback notices
                marqueeContent.innerHTML = fallbackNotices
                    .map((notice, index) => `
                        <a href="/storage/app/public/notices/${notice.file_path.split('/').pop()}" download>
                            ${notice.title || notice.description || 'No title'}
                        </a>
                    `)
                    .join('');
            }
        }

        document.addEventListener('DOMContentLoaded', fetchNotices);
    </script>
</body>

</html>
