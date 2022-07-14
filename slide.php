
            
            
    
    <!-- Google Font Roboto -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <!-- Animate.css - http://daneden.me/animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Presentation CSS -->
    <link type="text/css" rel="stylesheet" href="css/presentation.css">
    <!-- Other CSS -->
    <link type="text/css" rel="stylesheet" href="css/other.css">
    <style>
        .lead { text-align: center; }
        h1 { margin: 150px auto 2rem auto; }
    </style>
</head>
<body>
    <!-- Page title -->
     
    <!-- Presentation container -->
    <div id="presentationDiv"></div>
    
    
    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Presentation js -->
    <script src="js/presentation.js"></script>   
    <script>
    // Presentation data array
    var data = [{
        // ************************ Slide 1 ************************
        
        //  HTML:
        //  <h1 class="companyName">Your Company Name</h1>

        //  below CSS styles apply to <h1>:
        //  #presentationDiv .slide * { position: absolute; font-weight: 300; margin: 0; padding: 0; }
        //  .companyName { left: 100px; top: -60px; }

        //  after 1 second HTML will be <h1 class="companyName" style="top: 150px">Your Company Name</h1>

        //  after 9 seconds HTML will be <h1 class="companyName" style="top: 150px; opacity: 0;">Your Company Name</h1>
        name: 'h1', // <h1></h1>
        content: "Green Hoods", // <h1>Your Company Name</h1>
        attr: { // <h1 class="companyName">Your Company Name</h1>
            'class': 'companyName'
        },
        animation: ['top', 150, 500, 1000], // 1st and 2nd proparties are style {top: 150px; } and 3rd is a animaton speed "0.5 second" and 4th is time duration "1 second". So after 1 second <h1> has this animation and it will appear in the presentation
        cssEffect: { // after 1 second <h1> has flipInY css effect
            type: 'flipInY', // CSS effect
            time: 1000 // time duration
        },
        afterAnimation: ['opacity', 0, 1000, 9000] // 1st and 2nd proparties are style {opacity: 0; } and 3rd is a animaton speed "1 second" and 4th is time duration "9 second". So after 9 second <h1> has this animation and it will hide from the presentation
    }, {
        name: 'h2',
        content: "",
        attr: {
            'class': 'subTitle'
        },
        animation: ['left', 200, 500, 3000],
        cssEffect: {
            type: 'rotateInUpLeft',
            time: 3000
        },
        afterAnimation: ['opacity', 0, 1000, 9000]
    },  {
        name: 'img',
        attr: {
            'src': 'images/logo.jpg',
            'class': 'firefox'
        },
        animation: ['right', 104, 1000, 5000],
        cssEffect: {
            type: 'flip',
            time: 5000
        },
        afterAnimation: ['opacity', 0, 1000, 9000]
    },   {
        name: 'h1', // ************************ Slide 2 ************************
        content: "About Us  ",
        attr: {
            'class': 'aboutUs center fullWidth'
        },
        animation: ['left', 0, 1000, 10000],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 10000
        },
        afterAnimation: ['opacity', 0, 1000, 16500]
    }, {
        name: 'h2',
        content: "GREEN HOODS is non-profit organisation which aims to study the state of presant and future needs for environmental management and combating the adverse effects of climate change. ",
        attr: {
            'class': 'professional center fullWidth noOpacity'
        },
        animation: ['opacity', 1, 1500, 10500],
        cssEffect: {
            type: 'flipInY',
            time: 10700
        },
        afterAnimation: ['opacity', 0, 1000, 16500]
    },  {
        name: 'h1', // ************************ Slide 3 ************************
        content: "What We Do",
        attr: {
            'class': 'servicesTitle'
        },
        animation: ['top', 50, 500, 17500],
        cssEffect: {
            type: 'rotateIn',
            time: 17600
        },
        afterAnimation: ['opacity', 0, 1000, 25500]
    }, {
        name: 'h4',
        content: " Enveronmental Assessment",
        attr: {
            'class': 'services ns'
        },
        animation: ['left', 150, 500, 18000],
        cssEffect: {
            type: 'rotateInUpLeft',
            time: 18000
        },
        afterAnimation: ['opacity', 0, 1000, 25500]
    }, {
        name: 'h4',
        content: "Wastes Management ",
        attr: {
            'class': 'services dsam'
        },
        animation: ['left', 150, 500, 18500],
        cssEffect: {
            type: 'rotateInUpLeft',
            time: 18500
        },
        afterAnimation: ['opacity', 0, 1000, 25500]
    },   {
        name: 'h1', // ************************ Slide 4 ************************
        content: "Our Team",
        attr: {
            'class': 'ourTeam fullWidth center'
        },
        animation: ['left', 0, 1000, 26500],
        cssEffect: {
            type: 'rotateIn',
            time: 26500
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'img',
        attr: {
            src: 'images/mugabo.jpg',
            class: 'emp emp1'
        },
        animation: ['opacity', 1, 1000, 27500],
        cssEffect: {
            type: 'pulse',
            time: 27500
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h4',
        content: "Charles MUGABO",
        attr: {
            'class': 'empName empName1'
        },
        animation: ['opacity', 1, 1000, 28000],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 28000
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h4',
        content: "Managing Director",
        attr: {
            'class': 'empTitle empTitle1'
        },
        animation: ['opacity', 1, 1000, 28500],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 28500
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'img',
        attr: {
            src: 'images/gaelle.jpg',
            class: 'emp emp2'
        },
        animation: ['opacity', 1, 1000, 29000],
        cssEffect: {
            type: 'pulse',
            time: 29000
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h4',
        content: "Gaelle IZERE",
        attr: {
            'class': 'empName empName2'
        },
        animation: ['opacity', 1, 1000, 29500],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 29500
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h4',
        content: "Administration & Finance",
        attr: {
            'class': 'empTitle empTitle2'
        },
        animation: ['opacity', 1, 1000, 30000],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 30000
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'img',
        attr: {
            src: 'images/innocent.jpg',
            class: 'emp emp3'
        },
        animation: ['opacity', 1, 1000, 30500],
        cssEffect: {
            type: 'pulse',
            time: 30500
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h4',
        content: "Innocent CYUZUZO",
        attr: {
            'class': 'empName empName3'
        },
        animation: ['opacity', 1, 1000, 31000],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 31000
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h4',
        content: "Technical Director",
        attr: {
            'class': 'empTitle empTitle3'
        },
        animation: ['opacity', 1, 1000, 31500],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 31500
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h4',
        content: " ",
        attr: {
            'class': 'empName empName4'
        },
        animation: ['opacity', 1, 1000, 32500],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 32500
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h4',
        content: " ",
        attr: {
            'class': 'empTitle empTitle4'
        },
        animation: ['opacity', 1, 1000, 33000],
        cssEffect: {
            type: 'rotateInUpRight',
            time: 33000
        },
        afterAnimation: ['opacity', 0, 1000, 37000]
    }, {
        name: 'h1', // ************************ Slide 5 ************************
        content: "Contact Us",
        attr: {
            'class': 'contactUs noOpacity'
        },
        animation: ['opacity', 1, 1000, 38000],
        cssEffect: {
            type: 'bounceIn',
            time: 38000
        },
        afterAnimation: ['opacity', 0, 1000, 46500]
    },    {
        name: 'img',
        attr: {
            'src': 'images/call.png',
            'class': 'call'
        },
        animation: ['left', 100, 1000, 40500],
        cssEffect: {
            type: 'flip',
            time: 40800
        },
        afterAnimation: ['opacity', 0, 1000, 46500]
    }, {
        name: 'h4',
        content: "+250788215484",
        attr: {
            'class': 'calltext noOpacity'
        },
        animation: ['opacity', 1, 1000, 41000],
        cssEffect: {
            type: 'bounceInUp',
            time: 41000
        },
        afterAnimation: ['opacity', 0, 1000, 46500]
    }, 
    {
        name: 'img',
        attr: {
            'src': 'images/call.png',
            'class': 'youtube'
        },
        animation: ['left', 100, 1000, 40500],
        cssEffect: {
            type: 'flip',
            time: 40800
        },
        afterAnimation: ['opacity', 0, 1000, 46500]
    }, {
        name: 'h4',
        content: "+250785027826",
        attr: {
            'class': 'youtubetext noOpacity'
        },
        animation: ['opacity', 1, 1000, 41000],
        cssEffect: {
            type: 'bounceInUp',
            time: 41000
        },
        afterAnimation: ['opacity', 0, 1000, 46500]
    }, 
    {
        name: 'img',
        attr: {
            'src': 'images/call.png',
            'class': 'skype'
        },
        animation: ['left', 100, 1000, 40500],
        cssEffect: {
            type: 'flip',
            time: 40800
        },
        afterAnimation: ['opacity', 0, 1000, 46500]
    }, {
        name: 'h4',
        content: "+250785209871",
        attr: {
            'class': 'skypetext noOpacity'
        },
        animation: ['opacity', 1, 1000, 41000],
        cssEffect: {
            type: 'bounceInUp',
            time: 41000
        },
        afterAnimation: ['opacity', 0, 1000, 46500]
    },   
    
    {
        name: 'over', // ************************ Presentatin Over after 46.5 seconds ************************
        time: 46500
    }];

    // Call jPresentation function
    $('#presentationDiv').jPresentation({
        'data': data
    });
    </script>
            
</body>
</html>


        </div>
