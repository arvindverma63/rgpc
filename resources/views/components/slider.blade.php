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
        font-family: Lato, sans-serif;
        font-size: 1.6rem;
    }

    .page {
        width: 100%;
        height: 102vh;
        padding: 2rem;
        margin: 0 auto;
    }

    .header {
        width: 100%;
        height: 5%;
    }

    .content {
        width: 100%;
        height: 95%;
    }

    .carousel {
        width: 100%;
        height: 100%;
        display: flex;
        overflow: hidden;
        position: relative;
    }

    .carousel input[type="radio"] {
        position: absolute;
        display: none;
    }

    .slide {
        width: 100%;
        height: 100%;
        flex-shrink: 0;
        opacity: 80%;
        transition: ease-in-out 0.6s;
        position: relative;
    }

    .slide-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter: blur(5px); /* Apply blur only to the background */
        z-index: 1;
    }

    .slide-1 .slide-background {
        background: url("https://i.etsystatic.com/15857612/r/il/540084/4792907904/il_fullxfull.4792907904_h1pe.jpg");
    }

    .slide-2 .slide-background {
        background: url("https://wallpapercave.com/wp/wp7925366.jpg");
    }

    .slide-3 .slide-background {
        background: url("https://wallpapercave.com/wp/wp4511676.jpg");
    }

    .slide-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent background for readability */
        padding: 2rem;
        border-radius: 10px;
        z-index: 2; /* Ensure text is above the blurred background */
    }

    .slide-content h2 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .slide-content p {
        font-size: 1.8rem;
    }

    .control {
        width: 6rem;
        height: 6rem;
        display: none;
        clip-path: circle(50% at 50% 50%);
        background-color: rgba(0, 0, 0, 0.26);
        color: #fff;
        font-size: 5rem;
        text-align: center;
        cursor: pointer;
        position: absolute;
        top: 50%;
        z-index: 3; /* Ensure controls are above all elements */
    }

    .next {
        right: 0;
        transform: translate(-20%, -50%);
    }

    .prev {
        transform: translate(20%, -50%);
    }

    input:nth-of-type(1):checked ~ .control-1,
    input:nth-of-type(2):checked ~ .control-2,
    input:nth-of-type(3):checked ~ .control-3 {
        display: block peep;
    }

    input:nth-of-type(1):checked ~ .navigation .radio-btn-1,
    input:nth-of-type(2):checked ~ .navigation .radio-btn-2,
    input:nth-of-type(3):checked ~ .navigation .radio-btn-3 {
        background-color: #fff;
    }

    input:nth-of-type(1):checked ~ .slide {
        transform: translateX(0);
    }

    input:nth-of-type(2):checked ~ .slide {
        transform: translateX(-100%);
    }

    input:nth-of-type(3):checked ~ .slide {
        transform: translateX(-200%);
    }

    .navigation {
        position: absolute;
        width: 90px;
        height: 20px;
        bottom: 4%;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        justify-content: space-between;
        z-index: 3; /* Ensure navigation is above all elements */
    }

    .radio-btn {
        cursor: pointer;
        width: 25px;
        height: 25px;
        background-color: rgba(0, 0, 0, 0.26);
        display: block;
        border-radius: 50%;
        border: 0.4rem solid rgba(255, 255, 255, 0.9);
    }
</style>

<section class="page p-0" style="margin-top: 20px;">
    <div class="content">
        <div class="carousel">
            <input type="radio" id="carousel-1" name="carousel" checked autofocus>
            <input type="radio" id="carousel-2" name="carousel">
            <input type="radio" id="carousel-3" name="carousel">

            <div class="slide slide-1">
                <div class="slide-background"></div>
                <div class="slide-content">
                    <h2>Slide 1 Title</h2>
                    <p>This is the description for the first slide.</p>
                </div>
            </div>
            <div class="slide slide-2">
                <div class="slide-background"></div>
                <div class="slide-content">
                    <h2>Slide 2 Title</h2>
                    <p>This is the description for the second slide.</p>
                </div>
            </div>
            <div class="slide slide-3">
                <div class="slide-background"></div>
                <div class="slide-content">
                    <h2>Slide 3 Title</h2>
                    <p>This is the description for the third slide.</p>
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
    </div>
</section>
