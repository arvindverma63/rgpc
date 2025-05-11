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
        border-radius: 8px;
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
        display: flex;
        overflow: hidden;
        position: relative;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .carousel input[type="radio"] {
        position: absolute;
        display: none;
    }

    .slide {
        width: 100%;
        height: 100%;
        flex-shrink: 0;
        transition: transform 0.6s ease-in-out, opacity 0.6s ease-in-out;
        position: relative;
        opacity: 0;
    }

    .slide.active {
        opacity: 1;
    }

    .slide-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        z-index: 1;
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

    input:nth-of-type(1):checked ~ .control-1,
    input:nth-of-type(2):checked ~ .control-2,
    input:nth-of-type(3):checked ~ .control-3 {
        display: block;
    }

    input:nth-of-type(1):checked ~ .navigation .radio-btn-1,
    input:nth-of-type(2):checked ~ .navigation .radio-btn-2,
    input:nth-of-type(3):checked ~ .navigation .radio-btn-3 {
        background-color: #fc9928;
        border-color: #fff;
    }

    input:nth-of-type(1):checked ~ .slide-1,
    input:nth-of-type(2):checked ~ .slide-2,
    input:nth-of-type(3):checked ~ .slide-3 {
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
        background: #fff;
        padding: 1rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .marquee-content {
        display: inline-block;
        white-space: nowrap;
        animation: marquee 20s linear infinite;
    }

    .marquee-content span {
        margin-right: 3rem;
        color: #333;
        font-weight: 500;
    }

    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-100%); }
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translate(-50%, -60%); }
        to { opacity: 1; transform: translate(-50%, -50%); }
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
    }
</style>

<section class="page p-0" style="margin-top: 20px;">
    <div class="header">
        Gurudev Innovative College of Pharmacy
    </div>
    <div class="content">
        <div class="carousel">
            <input type="radio" id="carousel-1" name="carousel" checked autofocus>
            <input type="radio" id="carousel-2" name="carousel">
            <input type="radio" id="carousel-3" name="carousel">

            <div class="slide slide-1">
                <div class="slide-background"></div>
                <div class="slide-content">
                    <h2 style="color: #fc9928">Welcome to Our College</h2>
                    <p>Kakor-Auraiya (UP) - Excellence in Pharmaceutical Education</p>
                </div>
            </div>
            <div class="slide slide-2">
                <div class="slide-background"></div>
                <div class="slide-content">
                    <h2>State-of-the-Art Facilities</h2>
                    <p>Explore our modern laboratories and learning spaces</p>
                </div>
            </div>
            <div class="slide slide-3">
                <div class="slide-background"></div>
                <div class="slide-content">
                    <h2>Expert Faculty</h2>
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
            <div class="marquee-content">
                <span>Admissions Open for 2025-26! Apply Now!</span>
                <span>Guest Lecture on Pharmaceutical Innovations - Nov 15</span>
                <span>Campus Placement Drive - Dec 10</span>
            </div>
        </div>
    </div>
</section>
