<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>AquaPrint</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.animatedheadline.css" />
    <link rel="stylesheet" type="text/css" href="/css/materialize.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/css/skins/yellow.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="/css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="/css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="/css/skins/goldrenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="/css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="/css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="/css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="/css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="/css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="/css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="js/modernizr.custom.js"></script>

</head>

<body class="dark">
<!-- Preloader Start -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- Preloader Ends -->
<!-- Wrapper Starts -->
<div class="wrapper">
    <div class="main-picture woman hide-on-med-and-down" style="background-image: url('/images/{{$main_img->img_name}}')">
    </div>
    <div id="bl-main" class="bl-main">
        <!-- Top Left Section Starts -->
        <section class="topleft">
            <div class="bl-box row valign-wrapper">
                <div class="row valign-wrapper mb-0">
                    <div class="title-heading">
                        <div class="selector uppercase" id="selector">
                            <h3 class="ah-headline p-none m-none">
                                <span class="font-weight-400">{{$main_text->first_line}}</span>
                                <span class="my-name">{{$main_text->second_line}}</span>
                                <span class="ah-words-wrapper">
										<b class="is-visible">{{$main_text->third_line_1}}</b>
										<b>{{$main_text->third_line_2}}</b>
										<b>{{$main_text->third_line_3}}</b>
									</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Left Section Ends -->
        <!-- About Section Starts -->
        <section>
            <!-- About Title Starts -->
            <div class="bl-box valign-wrapper">
                <div class="page-title center-align">
                    <h2 class="center-align">
                        <span data-hover="О">О </span>
                        <span data-hover="НАС">НАС</span>
                    </h2>
                </div>
            </div>
            <!-- About Title Ends -->
            <!-- About Expanded Starts -->
            <div class="bl-content">
                <!-- Main Heading Starts -->
                <div class="container page-title custom-page-title">
                    <h2 class="center-align">
                        <span>О</span>
                        <span>НАС</span>
                    </h2>
                </div>
                <!-- Main Heading Ends -->
                <div class="container infos">
                    <!-- Divider Starts -->
                    <div class="divider center-align">
                        <span class="outer-line"></span>
                        <span class="fa fa-vcard" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <!-- Divider Ends -->
                    <!-- Personal Informations Starts -->
                    <div class="row">
                        <!-- Picture Starts -->
                        <div class="col s12 m4 profile-picture show-on-medium-and-down section-padding">
                            <img src="images/woman.jpg" class="responsive-img my-picture" alt="My Photo">
                        </div>
                        <!-- Picture Ends -->
                        <div class="col s12 m8 l12 xl12 personal-info section-padding">
                            <h6 class="uppercase"><i class="fa fa-user"></i> {{$about->title}}</h6>
                            <div class="col m12 l12 xl9 p-none">
                                <p class="second-font">{{$about->text}}.
                                </p>
                            </div>
                            {{--<div class="col s12 m12 l6 p-none">--}}
                                {{--<ul class="second-font list-1">--}}
                                    {{--<li><span class="font-weight-700">First Name: </span>Linda</li>--}}
                                    {{--<li><span class="font-weight-700">Last Name: </span>Smith</li>--}}
                                    {{--<li><span class="font-weight-700">Date of birth: </span>21 june 1990 </li>--}}
                                    {{--<li><span class="font-weight-700">Nationality: </span>Russian</li>--}}
                                    {{--<li><span class="font-weight-700">Freelance: </span>Available</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="col s12 m12 l6 p-none">--}}
                                {{--<ul class="second-font list-2">--}}
                                    {{--<li><span class="font-weight-700">Phone: </span>+34 21 18 40 10</li>--}}
                                    {{--<li><span class="font-weight-700">Address: </span>Moscow, Russia</li>--}}
                                    {{--<li><span class="font-weight-700">Email: </span>you@yourwebsite.com</li>--}}
                                    {{--<li><span class="font-weight-700">Spoken Langages: </span>French - German</li>--}}
                                    {{--<li><span class="font-weight-700">Skype: </span>linda.smith</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<a href="#" class="btn font-weight-700">--}}
                                {{--Download Resume <i class="fa fa-file-pdf-o"></i>--}}
                            {{--</a>--}}
                            {{--<a href="blog-dark.html" class="btn btn-blog font-weight-700">--}}
                                {{--My Blog <i class="fa fa-edit"></i>--}}
                            {{--</a>--}}
                        </div>
                    </div>
                    <!-- Personal Informations Ends -->
                </div>
                <!-- Fun Facts Starts -->
                {{--<div class="container badges">--}}
                    {{--<div class="row">--}}
                        {{--<!-- Fact Badge Item Starts -->--}}
                        {{--<div class="col s12 m4 l4 center-align">--}}
                            {{--<h3>--}}
                                {{--<i class="fa fa-briefcase"></i>--}}
                                {{--<span class="font-weight-900">4+</span>--}}
                            {{--</h3>--}}
                            {{--<h6 class="uppercase font-weight-700">Years Experience</h6>--}}
                        {{--</div>--}}
                        {{--<!-- Fact Badge Item Ends -->--}}
                        {{--<!-- Fact Badge Item Starts -->--}}
                        {{--<div class="col s12 m4 l4 center-align">--}}
                            {{--<h3>--}}
                                {{--<i class="fa fa-handshake-o"></i>--}}
                                {{--<span class="font-weight-900">89+</span>--}}
                            {{--</h3>--}}
                            {{--<h6 class="uppercase font-weight-700">Done Projects</h6>--}}
                        {{--</div>--}}
                        {{--<!-- Fact Badge Item Ends -->--}}
                        {{--<!-- Fact Badge Item Starts -->--}}
                        {{--<div class="col s12 m4 l4 center-align">--}}
                            {{--<h3>--}}
                                {{--<i class="fa fa-heart-o"></i>--}}
                                {{--<span class="font-weight-900">77+</span>--}}
                            {{--</h3>--}}
                            {{--<h6 class="uppercase font-weight-700">Happy customers</h6>--}}
                        {{--</div>--}}
                        {{--<!-- Fact Badge Item Ends -->--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- Fun Facts Ends -->
            </div>
            <!-- End Expanded About -->
            <img alt="close" src="images/close-button.png" class="bl-icon-close" />
        </section>
        <!-- About Ends -->
        <!-- Portfolio Starts -->
        <section id="bl-work-section">
            <!-- Portfolio Title Starts -->
            <div class="bl-box valign-wrapper">
                <div class="page-title center-align">
                    <h2 class="center-align">
                        <span data-hover="наши">наши </span>
                        <span data-hover="работы">работы</span>
                    </h2>
                </div>
            </div>
            <!-- Portfolio Title Ends -->
            <!-- Portfolio Expanded Starts -->
            <div class="bl-content">
                <!-- Main Heading Starts -->
                <div class="container page-title center-align">
                    <h2 class="center-align">
                        <span data-hover="наши">наши </span>
                        <span data-hover="работы">работы</span>
                    </h2>
                </div>
                <!-- Main Heading Ends -->
                <div class="container">
                    <!-- Divider Starts -->
                    <div class="divider center-align">
                        <span class="outer-line"></span>
                        <span class="fa fa-suitcase" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <!-- Divider Ends -->
                    <div class="row center-align da-thumbs" id="bl-work-items">
                        <!-- Project Starts -->
                        @foreach($imgs as $img)
                            <div class="col s12 m6 l6 xl4" data-panel="panel-1">
                                <a href="#">
                                    <img class="responsive-img" src="images/projects/{{$img->image}}" alt="Project" style="width: 385px; height: 248px" />
                                    <div class="valign-wrapper"><span class="font-weight-700 uppercase">Image Project</span></div>
                                </a>
                            </div>
                        @endforeach
                        <!-- Project Ends -->
                    </div>
                </div>
            </div>
            <!-- Portfolio Expanded Ends -->
            <img alt="close" src="images/close-button.png" class="bl-icon-close" />
        </section>
        <!-- Portfolio Section Ends -->
        <!-- Contact Section Starts -->
        <section>
            <!-- Contact Title Starts -->
            <div class="bl-box valign-wrapper">
                <div class="page-title center-align">
                    <h2 class="center-align">
                        <span data-hover="будьте">будьте </span>
                        <span data-hover="на связи">на связи</span>
                    </h2>
                </div>
            </div>
            <!-- Contact Title Ends -->
            <!-- Expanded Contact Starts -->
            <div class="bl-content">
                <!-- Main Heading Starts -->
                <div class="container page-title center-align">
                    <h2 class="center-align">
                        <span data-hover="будьте">будьте </span>
                        <span data-hover="на связи">на связи</span>
                    </h2>
                </div>
                <!-- Main Heading Ends -->
                <div class="container">
                    <!-- Divider Starts -->
                    <div class="divider center-align">
                        <span class="outer-line"></span>
                        <span class="fa fa-envelope-open" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <!-- Divider Ends -->
                    <div class="row contact section-padding">
                        <!-- Contact Infos Starts -->
                        <div class="col s12 m5 l5 xl4 leftside">
                            <!-- Contacts Starts -->
                            <h6 class="font-weight-700 uppercase">Phone</h6>
                            <span class="font-weight-400 second-font"><i class="fa fa-phone"></i> +993 65 852073</span>
                            <h6 class="font-weight-700 uppercase">Email</h6>
                            <span class="font-weight-400 second-font"><i class="fa fa-envelope"></i> aquaprint1988@gmail.com</span>
                            <h6 class="font-weight-700 uppercase">Address</h6>
                            <span class="font-weight-400 second-font"><i class="fa fa-home"></i>  Ashgabat, Turkmenistan</span><br>
                            <!-- Contacts Ends -->
                            <!-- Social Media Profiles Starts -->
                            {{--<h6 class="font-weight-700 uppercase">Social Profiles</h6>--}}
                            {{--<div class="social">--}}
                                {{--<ul class="list-inline social social-intro center-align p-none">--}}
                                    {{--<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <!-- Social Media Profiles Ends -->
                        </div>
                        <!-- Contact Infos Ends -->
                        <!-- Contact Form Starts -->
                        <div class="col s12 m7 l7 xl8 rightside">
                            <h6 class="uppercase m-none font-weight-700">Если у вас появились вопросы можте заполнить в форме ниже</h6>
                            {{--<div class="row">--}}
                                {{--<p class="col s12 m12 l12 xl10 second-font">--}}
                                    {{--If you have any suggestion, project or even you want to say Hello.. Please fill out the form below and I will reply you shortly.--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            <form class="contactform" method="post" action="{{route('send.mail')}}">
                                <!-- Name Field Starts -->
                                {{csrf_field()}}
                                <div class="input-field second-font">
                                    <i class="fa fa-user prefix"></i>
                                    <input id="name" name="name" type="text" class="validate" required>
                                    <label class="font-weight-400" for="name">Ваше имя</label>
                                </div>
                                <!-- Name Field Ends -->
                                <!-- Email Field Starts -->
                                <div class="input-field second-font">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input id="email" type="email" name="email" class="validate" required>
                                    <label for="email">Ваш E-Mail</label>
                                </div>
                                <!-- Email Field Ends -->
                                <!-- Comment Textarea Starts -->
                                <div class="input-field second-font">
                                    <i class="fa fa-comments prefix"></i>
                                    <textarea id="comment" name="message" class="materialize-textarea" required></textarea>
                                    <label for="comment">Ваше сообщение</label>
                                </div>
                                <!-- Comment Textarea Ends -->
                                <!-- Submit Form Button Starts -->
                                <div class="col s12 m12 l9 xl8 submit-form">
                                    <button class="btn font-weight-700" type="submit" name="send">
                                        Отправить сообщение <i class="fa fa-send"></i>
                                    </button>
                                </div>
                                <!-- Submit Form Button Ends -->
                                <div class="col s12 m12 l8 xl8 form-message">
                                    <span class="output_message center-align font-weight-700 uppercase"></span>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form Ends -->
                    </div>
                </div>
            </div>
            <!-- Expanded Contact Ends -->
            <img alt="close" src="images/close-button.png" class="bl-icon-close" />
        </section>
        <!-- Contact Section Ends -->
        <!-- Portfolio Panel Items Starts -->
        <div class="bl-panel-items" id="bl-panel-work-items">
            <!-- Project Starts -->
            <div data-panel="panel-1">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <img class="responsive-img" src="images/projects/project-1.jpg" alt="project" />
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Image Project</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">Envato</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">php, html, css, javascript</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Project Starts -->
            <div data-panel="panel-2">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <div class="carousel carousel-slider">
                            <a class="carousel-item" href="#one!"><img class="responsive-img" src="images/projects/project-2.jpg" alt="project" ></a>
                            <a class="carousel-item" href="#two!"><img class="responsive-img" src="images/projects/project-1.jpg" alt="project" ></a>
                            <a class="carousel-item" href="#three!"><img class="responsive-img" src="images/projects/project-3.jpg" alt="project" ></a>
                            <a class="carousel-item" href="#four!"><img class="responsive-img" src="images/projects/project-4.jpg" alt="project" ></a>
                        </div>
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Slider Project</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">Themeforest</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">php, html, css, javascript</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Project Starts -->
            <div data-panel="panel-3">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <div class="videocontainer">
                            <iframe class="youtube-video" src="https://www.youtube.com/embed/7e90gBu4pas?enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Youtube Video</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">Photodune</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe After Effects, Adobe Audition</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Project Starts -->
            <div data-panel="panel-4">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <video id="video" class="responsive-video" controls poster="images/projects/video/video-poster.png">
                            <source src="http://192.168.0.3:4080/nonauth/deny.cs?dest=aHR0cDovL3NsaW1oYW1kaS5uZXQvbW9zY293L2RlbW9zL2ltYWdlcy9wcm9qZWN0cy92aWRlby92aWRlby5tcDQ%3D&amp;host=MTkyLjE2OC4wLjE3MiBiODljOWY0MjNlYzhmMDVmNGFkMmJkM2E0YjUwNTBlOQ%3D%3D&amp;ID=MTEgNQ%3D%3D&amp;DBL=&amp;DBLWF=MA%3D%3D&amp;user=NzM3MmI3MTgtNWIwNi01MjQ4LTk0MjAtZmJmYjI5NTdhNmY3&amp;cookie=ZXdyM0dvZ3J3bms9&amp;guest=MA%3D%3D" type="video/mp4">
                        </video>
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Local Video</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">Videohive</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe After Effects, Movie Maker</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Project Starts -->
            <div data-panel="panel-5">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <img src="images/projects/project-5.jpg" alt="project" />
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Image Project</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">Graphicriver</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Photoshop, Gimp</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Project Starts -->
            <div data-panel="panel-6">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <img src="images/projects/project-6.jpg" alt="project" />
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Image Project</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">Activeden</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Flash, Paint</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Project Starts -->
            <div data-panel="panel-7">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <img src="images/projects/project-7.jpg" alt="project" />
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Image Project</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">3D Ocean</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">3DS Max, Adobe Photoshop</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Project Starts -->
            <div data-panel="panel-8">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <img src="images/projects/project-8.jpg" alt="project" />
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Image Project</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">Audiojungle</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Audition, Adobe Premiere</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Project Starts -->
            <div data-panel="panel-9">
                <div class="row">
                    <!-- Project Main Content Starts -->
                    <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                        <img src="images/projects/project-9.jpg" alt="project" />
                    </div>
                    <!-- Project Main Content Ends -->
                    <!-- Project Details Starts -->
                    <div class="col s12 l6 xl6 section-padding">
                        <h3 class="font-weight-700 uppercase">Image Project</h3>
                        <ul class="project-details second-font">
                            <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>: <span class="font-weight-400 uppercase">Audiojungle</span></li>
                            <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date </span>: <span class="font-weight-400 uppercase">02/11/2017</span></li>
                            <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End Date </span>: <span class="font-weight-400 uppercase">02/08/2018</span></li>
                            <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used Technologies</span> : <span class="font-weight-400 uppercase">Adobe Audition, Adobe Premiere</span></li>
                        </ul>
                        <hr>
                        <a href="#" class="waves-effect waves-light btn font-weight-700">Preview <i class="fa fa-external-link"></i></a>
                    </div>
                    <!-- Project Details Ends -->
                </div>
            </div>
            <!-- Project Ends -->
            <!-- Portfolio Navigation Starts -->
            <nav>
                <!-- Previous Work Icon Starts -->
                <span class="control-button bl-previous-work"><i class="fa fa-angle-left"></i></span>
                <!-- Previous Work Icon Ends -->
                <!-- Close Work Icon Starts -->
                <img alt="close" src="images/close-button.png" class="control-button bl-icon-close" />
                <!-- Close Work Icon Ends -->
                <!-- Next Work Icon Starts -->
                <span class="control-button bl-next-work"><i class="fa fa-angle-right"></i></span>
                <!-- Previous Work Icon Ends -->
            </nav>
            <!-- Portfolio Navigation Ends -->
        </div>
        <!-- Portfolio Panel Items Ends -->
    </div>
</div>
<!-- Wrapper Ends -->

<!-- Template JS Files -->
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/jquery.animatedheadline.js"></script>
<script src="/js/boxlayout.js"></script>
<script src="/js/materialize.min.js"></script>
<script src="/js/jquery.hoverdir.js"></script>
<script src="/js/custom.js"></script>

</body>
</html>