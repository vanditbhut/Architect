  // <!--Start header-->
    // <script>
    function menuresponsiveclose() {
        var element = document.getElementById("home");
        element.classList.remove("insomenu-active");
    }
    let body = document.querySelector('body')
    let toggle = document.querySelector('#menu-trigger')
    toggle.addEventListener('click', () => {
        body.classList.toggle('insomenu-active')
    })
// </script>
// <!--end header-->

// <!--Start Sticky header-->
// <script>
    lastScrollTop = 0;
    var lastScrollBottom = 0;

    window.addEventListener(
        "scroll",
        function() {
            var st = window.pageYOffset || document.documentElement.scrollTop;

            if (st > 20 || st > 20) {

                document.getElementById("header").classList.add("sticky");
            } else {

                document.getElementById("header").classList.remove("sticky");
            }
            lastScrollTop = st <= 0 ? 0 : st;
        },
        false
    );
// </script>
// <!--End Sticky header-->

// <!--Start Slider-->
// <script type="text/javascript">
    new Splide('#poster-slider', {
        type: 'loop',
        perPage: 1,
        padding: 0,
        perMove: 1,
        pagination: false,
        breakpoints: {
            1599: {
                perPage: 1,
                padding: {
                    right: '0px',
                    left: '0',
                },
            },
        }
    }).mount();

    new Splide('#works-slider', {
        type: 'loop',
        perPage: 1,
        padding: 0,
        perMove: 1,
        pagination: false,
        breakpoints: {
            1599: {
                perPage: 1,
                padding: {
                    right: '0px',
                    left: '0',
                },
            },
        }
    }).mount();

    new Splide('#testimonial-slider', {
        type: 'loop',
        perPage: 1,
        padding: 0,
        perMove: 1,
        pagination: false,
        breakpoints: {
            1599: {
                perPage: 1,
                padding: {
                    right: '0px',
                    left: '0',
                },
            },
        }
    }).mount();
