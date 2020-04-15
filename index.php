<!DOCTYPE html>
<html lang="en-us">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>M2 Design Studios</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="js/jquery.easypiechart.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/1.2.5/jquery.easy-pie-chart.js"></script>
        <script src="js/angular.js"></script>
        <script src="js/gallery.js"></script>
        <script src="js/script.js"></script>
    </head>

    <body class="container-fluid p-0">
        <header>
            <nav>
                <div class="nav-wrapper navbar bg-dark navbar-fixed">
                    <div class="navbar-brand" href="#">
                        <img src="images/avatar.jpg" class="rounded-circle" style="width: 50px; height: 50px;" />
                    </div>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="nav flex-content-end hide-on-med-and-down">
                        <li class="nav-item"><a href="#" class="nav-link">
                                <h6>Home</h6>
                            </a></li>
                        <li class="nav-item"><a href="#blog" class="nav-link">
                                <h6>Blog</h6>
                            </a></li>
                        <li class="nav-item"><a href="#skills" class="nav-link">
                                <h6>Skills</h6>
                            </a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">
                                <h6>Contact</h6>
                            </a></li>
                    </ul>
                </div>
            </nav>
            <ul class="sidenav fixed-top" id="mobile-demo">
                <li class="nav-item">
                    <a href="#" class="nav-link"><h6>Home</h6></a>
                </li>
                <li class="nav-item">
                    <a href="#blog" class="nav-link"><h6>Blog</h6></a>
                </li>
                <li class="nav-item">
                    <a href="#skills" class="nav-link"><h6>Skills</h6></a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link"><h6>Contact</h6></a>
                </li>
            </ul>
            
        </header>
        <main>
            <!-- Introduction section -->
            <div class="container-fluid" id="home">
                <div id="home-container" class="container card grey">
                    <div class="row">
                        
                        <div class="card-photo col-md-6 col-sm-12" id="avatar">
                            <img class="img responsive-img" src="images/avatar.jpg" alt="my avatar"/>
                        </div>
                        <div class="divider"></div>
                        <div class="content col-md-6 col-sm-12" id="profile">
                            <div class="header-card">
                                <h3>#WebDesign/Developer</h3>
                            </div>
                            <div class="card-content">
                                <p>
                                    <table>
                                        <tr>
                                            <td>Name: </td><td>Mauritz Vervaart</td>
                                        </tr>
                                        <tr>
                                            <td>Age: </td><td><?php echo date("Y") - 1978; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gender: </td><td>Male</td>
                                        </tr>
                                        <tr>
                                            <td><i class="material-icons">call</i></td><td>083 233-6184</td>
                                        </tr>
                                        <tr>
                                            <td><i class="material-icons">mail_outline</i></td><td><a href="#contact">mjver@mweb.co.za</a></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>
                                                I started my programming journey in 2016 when looking for 
                                                for a career change. I have acquired sufficient knowledge 
                                                through self study & online courses in HTML, CSS, Javascript and PHP as 
                                                well as other programming languages such as Python, Java and 
                                                C#. I've worked in retail for most of my life although my 
                                                tertiary education were in network engineering (MCSE + I).
                                            </td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr id="social">
                                            <td><img src="https://img.icons8.com/metro/26/000000/linkedin.png"/></td><td><a class="waves-effect waves-blue btn-flat" href="https://www.linkedin.com/in/mjver?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BhTA%2B0CB2TAChXuUfpr8m2A%3D%3D" target="_blank">LinkedIn</a></td>
                                            <td><img src="https://img.icons8.com/metro/26/000000/facebook-new--v2.png"/></td><td><a class="waves-effect waves-blue btn-flat" href="https://www.facebook.com/mauritzv" target="_blank">Facebook</a></td>
                                            <td><img src="https://img.icons8.com/metro/26/000000/twitter.png"/></td><td><a class="waves-effect waves-blue btn-flat" href="https://twitter.com/MVervaart" target="_blank">Twitter</a></td>
                                        </tr>
                                    </table>
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Blog posts imported using AngularJs -->
            <div class="container-fluid color-black" id="blog" ng-app="myBlog">
                <div class="container" ng-controller="blogCtrl">
                    <div class="text-center p-2">
                        <h1>{{title}}</h1>
                    </div>
                    <div ng-repeat="items in posts | limitTo : 3" id="posts">

                        <span class="text-center bg-blue">
                            <h1 id="postTitle"><a href="{{ items.url }}" target="_blank">{{ items.title }}</a></h1>
                        </span>
                        <hr />
                        <div class="text-justified-center" id="postContent">
                            <p id="post">
                                {{ items.content }}
                            </p>
                            <hr />
                            <p>
                                <img src="{{ items.author.image.url }}" class="rounded-circle" />
                                {{ items.author.displayName }} - {{ items.published | date }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-fluid" id="skills">
            <!-- Progress bars for skill levels -->
                <p>
                    <h3 class="text-center">Skills</h3>
                </p>
                <div class="container">
                    <p>HTML:5</p>
                    <div class="bar">
                        <div class="skills html" value="95%">95%</div>
                    </div>
                    <p>CSS/CSS3</p>
                    <div class="bar">
                        <div class="skills css" value="90%">90%</div>
                    </div>
                    <p>Javascript</p>
                    <div class="bar">
                        <div class="skills js" value="85%">85%</div>
                    </div>
                    <p>jQuery</p>
                    <div class="bar">
                        <div class="skills jquery" value="90%">90%</div>
                    </div>
                    <p>AngularJS</p>
                    <div class="bar">
                        <div class="skills ng" value="75%">75%</div>
                    </div>
                    <p>Python</p>
                    <div class="bar">
                        <div class="skills python" value="88%">88%</div>
                    </div>
                    <p>C#</p>
                    <div class="bar">
                        <div class="skills csharp" value="65%">65%</div>
                    </div>

                </div>
                <div class="container">
                    <!-- Certificate carousel-->
                    <div class="carousel carousel-slider">
                        <a class="carousel-item" href="#one!"><img class="responsive-image" src="images/frontEnd.png" alt="FreeCodeCamp Front"/></a>
                        <a class="carousel-item" href="#two!"><img class="responsive-image" src="images/deplomaMAD.png" alt="Basic MAD"/></a>
                        <a class="carousel-item" href="#three!"><img class="responsive-image" src="images/deplomaAMD.png" alt="Advanced MAD"/></a>
                        <a class="carousel-item" href="#four!"><img class="responsive-image" src="images/jsCert.png" alt="Javascript" /></a>
                        <a class="carousel-item" href="#five!"><img class="responsive-image" src="images/jQueryCert.png" alt="jQuery" /></a>
                        <a class="carousel-item" href="#six!"><img class="responsive-image" src="images/phpCert.png" alt="PHP" /></a>
                    </div>
                    <!-- carousel script -->
                    <script>
                        $(document).ready(function(){
                            $('.carousel').carousel({
                                fullWidth: true
                            }),height(700);
                        })
                    </script>
                </div>
            </div>
            <div class="container-fluid" id="showcase">
                <div id="showcase-head">
                    <h1 class="text-center color-black">My work</h1>
                </div>
                <!-- Gallery Container -->
                <div class="container">

                    <!-- Images -->
                    <div class="mySlides">
                        <div class="numbertext">1 / 8</div>
                        <img src="images/quoteApp.png" style="width:100%; height: 500px">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 8</div>
                        <img src="images/service.png" style="width:100%; height: 500px">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 8</div>
                        <img src="images/searchAPI.png" style="width:100%; height: 500px">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 8</div>
                        <img src="images/weatherApp.png" style="width:100%; height: 500px">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 8</div>
                        <img src="images/TwitchTV.png" style="width:100%; height: 500px">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 8</div>
                        <img src="images/fanPage.png" style="width:100%; height: 500px">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">7 / 8</div>
                        <img src="images/tickTacToe.png" style="width:100%; height: 500px">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">8 / 8</div>
                        <img src="images/landingpage.png" style="width: 100%; height: 500px"> 
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <!-- text -->
                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <!-- Thumbnails -->
                    <div class="row">
                        <div class="column">
                            <img class="demo cursor active" src="images/quoteApp.png" style="width:100%"
                                onclick="currentSlide(1)"
                                alt="A random quote app I did for a project(HTML, CSS, jQuery)">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="images/service.png" style="width:100%; height: 70%;"
                                onclick="currentSlide(2)" alt="A landing page I did for a client(HTML5, CSS3, jQuery)">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="images/searchAPI.png" style="width:100%; height: 70%"
                                onclick="currentSlide(3)" alt="A wikipedia search app I did for a project">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="images/weatherApp.png" style="width:100%; height: 70%"
                                onclick="currentSlide(4)" alt="A weather app I did for a project">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="images/TwitchTV.png" style="width:100%; height: 70%"
                                onclick="currentSlide(5)" alt="A TwitchTV favorite list app">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="images/fanPage.png" style="width:100%; height: 70%"
                                onclick="currentSlide(6)" alt="A Batman fan page">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="images/tickTacToe.png" style="width:100%; height: 70%"
                                onclick="currentSlide(7)"
                                alt="A Tic-Tac-Toe game I designed with the use of the minimax algorithm. It is unbeatable">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="images/landingpage.png" style="width:100%; height: 70%"
                                onclick="currentSlide(8)"
                                alt="A basic landing page I did for a client's business">
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact form -->
            <div class="container-fluid" id="contact">
                <div class="container jumbotron">
                    <h1 class="text-center pb-2">Contact From:</h1>
                    <p>
                        Please contact me to discuss my request message below:
                    </p>
                    <!-- Create contact.php -->
                    <form class="contact-form" action="php/contact.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input name="name" class="form-control" type="text" id="name" required />
                            <div class="invalid-feedback">This field is required.</div>
                            <label for="email">Email Address:</label>
                            <input name="email" class="form-control" type="email" id="email" required />
                            <div class="invalid-feedback">This field is required.</div>
                            <label for="number">Phone Number: </label>
                            <input name="number" class="form-control" type="tel" id="phone" />
                            <label for="msg">Enter your request/message:</label>
                            <textarea name="msg" class="form-control" id="msg" rows="10"></textarea>
                            <div class="invalid-feedback">This field is required.</div>
                            <Button class="mt-2 mr-1.5" type="submit" name="submit">Submit</Button>
                            <input type="reset">
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>

</html>