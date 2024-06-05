<html>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>About</title>

        <!-- Styles -->
        <link href="{{ asset('css/about.css') }}" rel="stylesheet">
<head>

</head>

<body>
    <div class="content">
        <div class="loading">Loading</div>
        <div class="trigger"></div>
        <div class="section">

            <h1>Airplanes.</h1>
            <h3>The beginners guide.</h3>
            <p>You've probably forgotten what these are.</p>
            <!-- 		<div class="phonetic">/ ˈɛərˌpleɪn /</div> -->
            <div class="scroll-cta">Scroll</div>
        </div>

        <div class="section right">
            <h2>They're kinda like buses...</h2>
        </div>

        <div class="ground-container">
            <div class="parallax ground"></div>
            <div class="section right">
                <h2>..except they leave the ground.</h2>
                <p>Saaay what!?.</p>
            </div>

            <div class="section">
                <h2>They fly through the sky.</h2>
                <p>For realsies!</p>
            </div>

            <div class="section right">
                <h2>Defying all known physical laws.</h2>
                <p>It's actual magic!</p>
            </div>
            <div class="parallax clouds"></div>
        </div>

        <div class="blueprint">
            <svg width="100%" height="100%" viewbox="0 0 100 100">
                <line id="line-length" x1="10" y1="80" x2="90" y2="80" stroke-width="0.5">
                </line>
                <path id="line-wingspan" d="M10 50, L40 35, M60 35 L90 50" stroke-width="0.5"></path>
                <circle id="circle-phalange" cx="60" cy="60" r="15" fill="transparent" stroke-width="0.5">
                </circle>
            </svg>
            <div class="section dark ">
                <h2>The facts and figures.</h2>
                <p>Lets get into the nitty gritty...</p>
            </div>
            <div class="section dark length">
                <h2>Length.</h2>
                <p>Long.</p>
            </div>
            <div class="section dark wingspan">
                <h2>Wing Span.</h2>
                <p>I dunno, longer than a cat probably.</p>
            </div>
            <div class="section dark phalange">
                <h2>Left Phalange</h2>
                <p>Missing</p>
            </div>
            <div class="section dark">
                <h2>Engines</h2>
                <p>Turbine funtime</p>
            </div>
            <!-- 		<div class="section"></div> -->
        </div>
        <div class="sunset">
            <div class="section"></div>
            <div class="section end">
                <h2>Fin.</h2>
                <ul class="credits">
                    <li>Plane model by <a href="https://poly.google.com/view/8ciDd9k8wha" target="_blank">Google</a></li>
                    <li>Animated using <a href="https://greensock.com/scrolltrigger/" target="_blank">GSAP ScrollTrigger</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/about.js') }}" ></script>
</body>

</html>




