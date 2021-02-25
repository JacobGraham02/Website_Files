<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>A website</title>
            <meta name="author" content="Jacob Graham"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta name="description" content="A nicely-built portfolio displaying my personality, skills, and various projects I have built over the years"/>
            <meta name="keywords" content="Portfolio, Projects, About Me, Skills, Software Development, HTML5, CSS3, JavaScript, Java, PHP"/>
            <meta content="text/html;charset=utf-8" http-equiv="Content-Type"/>
            <meta content="utf-8" http-equiv="encoding"/>

            <link rel="stylesheet" href="resources/styles/homePage.css"/>    
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
            <!-- <link rel="shortcut icon" href="" type=image/x-icon/> -->

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        </head>

        <body>
            <header id="header" class="header">

                <!-- <div id="logoFigureContainer">
                    <figure id="logoFigure">
                        <img src="resources/images/placeholder.png" alt="A placeholder image" title="A placeholder image">
                    </figure>
                </div> -->

                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

                    <ul class="menu">
                        <li><a href="#" data-section="#home"><i class="" title="Go to 'home' section"></i><span class="underline">Home</span></a></li>
                        <li><a href="#" data-section="#about"><i class="" title="Go to 'about' section"></i><span class="underline">About</span></a></li>
                        <li><a href="#" data-section="#projects"><i class="" title="Go to 'projects' section"></i><span class="underline">Projects</span></a></li>
                        <li><a href="#" data-section="#skills"><i class="" title="Go to 'skills' section"></i><span class="underline">Skills</span></a></li>
                    </ul>
          
            </header>

            <main id="main">
                <section id="home" class="c">
                    <div id="personal_info">
                         <figure id="personalPictureFigure">
                            <img src="resources/images/personal_image.png" alt="A picture of me" id="pictureOfMe"/>
                        </figure>
                    </div>

                    <div id="container">
                        <div id="text"></div>
                    </div>

                    <div id="social_media">
                        <figure>
                            <a href="https://www.linkedin.com/in/jacob-graham02/" class="fa fa-linkedin link-icons"></a>
                        </figure>
        
                        <figure>
                            <a href="https://github.com/JacobGraham02" class="fa fa-github link-icons"></a>
                        </figure>
        
                        <figure>
                             <a href="" class="fa fa-envelope link-icons"></a>
                        </figure>
                    </div>
                </section>

                <section id="about" class="c">
                    About
                </section>

                <section id="projects" class="c">
                    Projects
                </section>

                <section id="skills" class="c">
                    Skills
                </section>

            </main>

            <footer id="footer">
                <section>
                    <small>Jacob Graham &copy; <?php echo date('Y') . ". All rights reserved"; ?></small>
                </section>
            </footer>

            <script src="resources/scripts/homePage.js"></script>
        </body>
    </html>