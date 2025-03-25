<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results Page</title>
    {{-- <link rel="stylesheet" href="index.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    

    <style>
        /* External  */

        
            /* Set entire website background to black */
            body {
                background-color: #000;
                color: #ccc; /* Light gray text for readability */
                font-family: "Montserrat", sans-serif;
            }


            .button-47 {
                align-items: center;
                background: #000000;
                border: 0 solid #E2E8F0;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                box-sizing: border-box;
                color: #ffffff;
                display: inline-flex;
                font-family: Inter, sans-serif;
                font-size: 1rem;
                height: 30px;
                justify-content: center;
                line-height: 24px;
                overflow-wrap: break-word;
                padding: 18px;
                text-decoration: none;
                letter-spacing: 1px;

                width: auto;
                border-radius: 8px;
                cursor: pointer;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
            }
            

            /* Navbar Text Color */
            .nav-link {
                color: #ccc !important;
            }

            .nav-link:hover {
                color: #fff !important;
            }

            /* Custom Button Styling */
            .custom-btn {
                background-color: #000!important;
                color: #ccc;
                border: 1px solid #ccc;
                border-radius: 20px;
                padding: 8px 16px;
                transition: all 0.3s ease-in-out;
            }

            .custom-btn:hover {
                background-color: white;
                color: black;
            }


            /* Card Styles */
            .card {
                background-color: #222; /* Dark gray background */
                color: #ccc; /* Light gray text */
                border: 1px solid #444; /* Medium gray border */
                box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.1);
            }

            /* Card Header */
            .card .card-header {
                background: #111; /* Very dark gray */
                color: #ddd;
                border-bottom: 1px solid #444;
            }

            /* Date Circle Styles */
            .widget-49 .widget-49-title-wrapper .widget-49-date-primary,
            .widget-49 .widget-49-title-wrapper .widget-49-date-secondary,
            .widget-49 .widget-49-title-wrapper .widget-49-date-success,
            .widget-49 .widget-49-title-wrapper .widget-49-date-info,
            .widget-49 .widget-49-title-wrapper .widget-49-date-warning,
            .widget-49 .widget-49-title-wrapper .widget-49-date-danger,
            .widget-49 .widget-49-title-wrapper .widget-49-date-light,
            .widget-49 .widget-49-title-wrapper .widget-49-date-dark,
            .widget-49 .widget-49-title-wrapper .widget-49-date-base {
                background-color: #333; /* Dark gray */
                width: 4rem;
                height: 4rem;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            /* Date Text */
            .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day,
            .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day,
            .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day,
            .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day,
            .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day,
            .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day,
            .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day,
            .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day,
            .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
                color: #fff; /* White text */
                font-weight: 500;
                font-size: 1.5rem;
            }

            .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month,
            .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month,
            .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month,
            .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month,
            .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month,
            .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month,
            .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month,
            .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month,
            .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
                color: #aaa; /* Light gray */
                font-size: 1rem;
                text-transform: uppercase;
            }

            /* Meeting Info */
            .widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
                display: flex;
                flex-direction: column;
                margin-left: 1rem;
            }

            .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
                color: #eee;
                font-size: 14px;
            }

            .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
                color: #bbb;
                font-size: 13px;
            }

            /* Meeting Points */
            .widget-49 .widget-49-meeting-points {
                font-weight: 400;
                font-size: 13px;
                margin-top: .5rem;
                color: #ccc;
            }

            .widget-49 .widget-49-meeting-points .widget-49-meeting-item {
                display: list-item;
                color: #aaa;
            }

            .widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
                margin-left: .5rem;
            }

            /* Buttons & Links */
            .widget-49 .widget-49-meeting-action {
                text-align: right;
            }

            .widget-49 .widget-49-meeting-action a {
                text-transform: uppercase;
                color: #fff;
                font-weight: bold;
                border: 1px solid #ccc;
                padding: 5px 10px;
                border-radius: 4px;
                text-decoration: none;
                background-color: #333;
            }

            .widget-49 .widget-49-meeting-action a:hover {
                background-color: #fff;
                color: #000;
            }

            /* General Text Elements */
            h1, h2, h3, h4, h5, h6 {
                color: #ddd;
            }

            p {
                color: #bbb;
            }

            /* Input Fields */
            input, textarea, select {
                background-color: #222;
                color: #fff;
                border: 1px solid #555;
                padding: 10px;
                border-radius: 4px;
            }

            input::placeholder, textarea::placeholder {
                color: #777;
            }

            /* Tables */
            table {
                background-color: #222;
                color: #fff;
                border: 1px solid #444;
            }

            th, td {
                border: 1px solid #555;
                padding: 8px;
            }

            th {
                background-color: #333;
                color: #fff;
            }

            td {
                background-color: #222;
                color: #ccc;
            }


            /* Apply dark background and grayscale effect */
            body {
                background-color: black !important;
                color: white !important;
            }

            /* Convert all images and sections to grayscale */
            img {
                filter: grayscale(100%);
            }

            /* Navbar */
            .navbar {
                background-color: #222 !important;
            }

            /* Make cards and other sections dark */
            .card {
                background-color: #333 !important;
                color: white !important;
                border: 1px solid #555 !important;
            }

            /* Make table dark */
            .table {
                background-color: #222 !important;
                color: white !important;
            }

            .table th, .table td {
                border-color: #555 !important;
            }

            .table-dark {
                background-color: #444 !important;
                color: white !important;
            }

            /* Buttons */
            .btn {
                background-color: #555 !important;
                color: white !important;
                border: none;
            }

            .btn:hover {
                background-color: #777 !important;
            }

            /* Footer */
            footer {
                background-color: #111 !important;
                color: white !important;
            }
        /* External  */



        .hero-section {
            background: url('https://via.placeholder.com/1920x600') no-repeat center center/cover;
            height: 300px;
            position: relative;
        }
        .hero-section .carousel-item img {
            height: 300px;
            object-fit: cover;
        }
        .banner-section {
            /* background: url('https://via.placeholder.com/1920x400') no-repeat center center/cover; */
            height: 200px;
        }
        .results-section .card {
            min-width: 250px;
        }
        .secondSection{
            background-color: black;
            text-align: center;
            color: white;
            padding: 12px;

        }
        .paratexst{
            color: black!important;
        }
    </style>
</head>
<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg" style="background-color: #000!important; border-bottom: 1px solid rgb(136, 127, 127);">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: #ccc;">Satta Matka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #ccc;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #ccc;">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #ccc;">Contact</a></li>
                </ul>
                <!-- <a class="custom-btn" href="#">Login</a> -->
                <a href="{{ route('admin.login') }}" class="button-47" role="button">Login</a>

            </div>
        </div>
    </nav>

    <div class="secondSection">
        <marquee behavior="scroll" direction="right"><h5>खाईवाल  भाई अपना पर्चा कमीशन पर भी डाल सकते हैं रेट 90/10, 95/5</h5></marquee>
    </div>
    <!-- Hero Section with Slider -->
        <!-- Hero Section with Slider -->
        <div id="heroCarousel" class="carousel slide hero-section" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('uploads/sliders/BANNER.PNG') }}" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('uploads/sliders/BANNER2.JPG') }}" class="d-block w-100" alt="Slide 2">
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>


    <div class="secondSection">
        <h5>16 Mar 2025 , 01:10 AM</h5>
    </div>
    
    <!-- Results Section -->
    <div class="container my-5">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-margin">
                        <div class="card-header no-border">
                            <h5 class="card-title">(GL) गली</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-primary">
                                        <span class="widget-49-date-day">55</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">Result announce at</span>
                                        <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-margin">
                        <div class="card-header no-border">
                            <h5 class="card-title">(MDN) मोदी नगर</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-warning">
                                        <span class="widget-49-date-day">97</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">Result announce at</span>
                                        <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-margin">
                        <div class="card-header no-border">
                            <h5 class="card-title">(GB) गाज़ियाबाद</h5>
                        </div>
                        <div class="card-body pt-0">
                            <div class="widget-49">
                                <div class="widget-49-title-wrapper">
                                    <div class="widget-49-date-success">
                                        <span class="widget-49-date-day">72</span>
                                    </div>
                                    <div class="widget-49-meeting-info">
                                        <span class="widget-49-pro-title">Result announce at</span>
                                        <span class="widget-49-meeting-time">12:00 to 13.30 Hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
    
    <!-- Content Section -->
    <div class="container my-5">
        <h2 class="text-center fw-bold text-primary mb-4">📊 आज के सट्टा रिजल्ट 📊</h2>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>⏰ रिजल्ट आने का समय</th>
                        <th>🎯 सट्टा का नाम</th>
                        <th>📅 कल आया था</th>
                        <th>🏆 आज का रिज़ल्ट</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>01:15 PM</td><td>(GC) गौर सिटी</td><td>82</td><td>85</td></tr>
                    <tr><td>02:15 PM</td><td>(SC) सादुलपुर सिटी</td><td>53</td><td>43</td></tr>
                    <tr><td>03:07 PM</td><td>(DB) दिल्ली-बाजार</td><td>03</td><td>57</td></tr>
                    <tr><td>04:42 PM</td><td>(SG) श्री गणेश</td><td>24</td><td>98</td></tr>
                    <tr><td>06:06 PM</td><td>(FB) फरीदाबाद</td><td>37</td><td>06</td></tr>
                    <tr><td>07:15 PM</td><td>(AMC) आमेर सिटी</td><td>32</td><td>51</td></tr>
                    <tr><td>09:20 PM</td><td>(GB) गाज़ियाबाद</td><td>95</td><td>72</td></tr>
                    <tr><td>10:00 PM</td><td>(MDN) मोदी नगर</td><td>44</td><td>97</td></tr>
                    <tr><td>11:30 PM</td><td>(GL) गली</td><td>30</td><td>55</td></tr>
                    <tr><td>05:20 AM</td><td>(DS) दिसावर</td><td>47</td><td>31</td></tr>
                </tbody>
            </table>
        </div>
    </div>
    
    
    <!-- Banner Section -->
    <div class="banner-section w-100 my-5">
        <img src="BANNER.PNG" class="d-block w-100" alt="Slide 1" height="200px">
    </div>

    
    <div class="container my-5 text-center">
        <h2 class="fw-bold text-primary display-5">👉 सीधे सट्टा कंपनी का <span class="text-warning">No.1 खाईवाल</span> 👈</h2>
        <p class="fs-3 text-danger fw-bold">👑 KRISHNA BHAI KHAIWAL 👑👇</p>
    
        <div class="card p-4 my-4 shadow-lg border-0" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); border-radius: 15px;">
            <h4 class="text-dark fw-bold">💰 Rate 💰</h4>
            <p class="mb-2 paratexst">जोड़ी — <span class="fw-bold text-success">100 = 9500</span></p>
            <p class="mb-2 paratexst">हरूफ — <span class="fw-bold text-success">1000 = 9500</span></p>
        </div>
    
        <div class="card p-4 my-4 shadow-lg border-0" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef); border-radius: 15px;">
            <h4 class="text-dark fw-bold">⏳ BEST TIMING FOR GAME ⏳</h4>
            <div class="row text-center">
                <div class="col-md-6"><p class="paratexst"><strong>(GC)</strong> गौर सिटी - <span class="text-primary fw-bold">12:50PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(SC)</strong> सादुलपुर सिटी - <span class="text-primary fw-bold">01:50PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(DB)</strong> दिल्ली-बाजार - <span class="text-primary fw-bold">02:50PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(SG)</strong> श्री गणेश - <span class="text-primary fw-bold">04:10PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(FB)</strong> फरीदाबाद - <span class="text-primary fw-bold">05:45PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(AMC)</strong> आमेर सिटी - <span class="text-primary fw-bold">07:00PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(GB)</strong> गाज़ियाबाद - <span class="text-primary fw-bold">08:20PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(MDN)</strong> मोदी नगर - <span class="text-primary fw-bold">09:50PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(GL)</strong> गली - <span class="text-primary fw-bold">11:10PM</span></p></div>
                <div class="col-md-6"><p class="paratexst"><strong>(DS)</strong> दिसावर - <span class="text-primary fw-bold">03:30AM</span></p></div>
            </div>
        </div>
    
        <div class="alert alert-danger my-4 shadow-lg fs-5" style="border-radius: 10px;">
            💓 <strong>Payment Option:</strong> PAYTM / BANK TRANSFER / PHONE PAY / GOOGLE PAY  
            👉 <strong class="fs-4 text-dark">9306207081 📲</strong>
        </div>
    
        <p class="fw-bold text-success fs-4">👉 बिना किसी डर के गेम खेल सकते हो, पेमेंट में कोई दिक्कत नहीं आएगी</p>
    
        <div class="mt-4">
            <a href="tel:9306207081" class="btn btn-warning btn-lg fw-bold shadow-lg" style="border-radius: 30px; padding: 15px 25px; font-size: 20px;">
                👇 गेम भेजने के लिए क्लिक करें 👇
            </a>
        </div>
    </div>
    
    <div class="container my-5">
        <h2 class="text-center fw-bold text-success mb-4 display-5">📅 सट्टा रिजल्ट चार्ट - <span class="text-warning">मार्च 2025</span> 📅</h2>
    
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
            <table class="table table-bordered table-striped text-center shadow-lg">
                <thead class="table-dark sticky-top">
                    <tr>
                        <th>📆 Date</th>
                        <th>(GC) गौर सिटी</th>
                        <th>(SC) सादुलपुर सिटी</th>
                        <th>(DB) दिल्ली-बाजार</th>
                        <th>(SG) श्री गणेश</th>
                        <th>(FB) फरीदाबाद</th>
                        <th>(AMC) आमेर सिटी</th>
                        <th>(GB) गाज़ियाबाद</th>
                        <th>(MDN) मोदी नगर</th>
                        <th>(GL) गली</th>
                        <th>(DS) दिसावर</th>
                    </tr>
                </thead>
                <tbody class="fw-bold">
                    <tr><td>15</td><td>85</td><td>43</td><td>57</td><td>98</td><td>06</td><td>51</td><td>72</td><td>97</td><td>55</td><td>31</td></tr>
                    <tr><td>14</td><td>82</td><td>53</td><td>03</td><td>24</td><td>37</td><td>32</td><td>95</td><td>44</td><td>30</td><td>47</td></tr>
                    <tr><td>13</td><td>37</td><td>86</td><td>33</td><td>16</td><td>35</td><td>47</td><td>54</td><td>28</td><td>11</td><td>71</td></tr>
                    <tr><td>12</td><td>12</td><td>53</td><td>15</td><td>51</td><td>98</td><td>52</td><td>23</td><td>93</td><td>68</td><td>55</td></tr>
                    <tr><td>11</td><td>74</td><td>48</td><td>55</td><td>52</td><td>78</td><td>35</td><td>19</td><td>25</td><td>72</td><td>79</td></tr>
                    <tr><td>10</td><td>32</td><td>84</td><td>50</td><td>14</td><td>69</td><td>11</td><td>42</td><td>83</td><td>26</td><td>94</td></tr>
                    <tr><td>09</td><td>56</td><td>49</td><td>72</td><td>12</td><td>15</td><td>26</td><td>41</td><td>-</td><td>-</td><td>-</td></tr>
                </tbody>
            </table>
        </div>
    </div>
    
                      
    
    

    <!-- DISCLAIMER SECTION -->
        <div class="container my-5">
            <div class="alert alert-warning text-center p-4 shadow-lg">
                <h4 class="fw-bold text-danger">⚠️ DISCLAIMER ⚠️</h4>
                <p class="mb-1 paratexst">
                    <a href="https://super-satta.com" class="text-primary text-decoration-none" target="_blank">
                        https://super-satta.com
                    </a> is a non-commercial website. By accessing this website, you acknowledge that you do so at your own risk.
                </p>
                <p class="mb-1 paratexst">
                    All the information provided on this site is sponsored, and we urge users to be aware that Matka gambling/Satta 
                    may be illegal or prohibited in some countries.
                </p>
                <p class="mb-1 paratexst">
                    We are not responsible for any consequences, losses, or scams that may arise from the use of the information presented 
                    on this site. We fully respect the laws and regulations of all countries.
                </p>
                <p class="fw-bold text-danger paratexst">
                    If you do not agree with our disclaimer or the terms of use, we kindly ask that you exit the website immediately.
                </p>
                <p class="fw-bold paratexst">Thank you for your understanding.</p>
            </div>
        </div>

<!-- FOOTER SECTION -->
<footer class="bg-dark text-light py-4">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo on Left -->
            <div class="col-md-4 text-md-start text-center mb-3 mb-md-0">
                <h4 class="fw-bold">Satta Matka</h4>
            </div>

            <!-- Privacy Policy & Terms Links in Center -->
            <div class="col-md-4 text-center">
                <a href="#" class="text-light text-decoration-none mx-2">Privacy Policy</a> | 
                <a href="#" class="text-light text-decoration-none mx-2">Terms and Conditions</a>
            </div>

            <!-- Copyright Text at Bottom -->
            <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                <p class="mb-0">&copy; All rights reserved to Satta Matka 2025</p>
            </div>
        </div>
    </div>
</footer>

    
</body>
</html>
