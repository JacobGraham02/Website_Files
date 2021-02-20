<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>A website</title>
            <meta name="author" content="Jacob Graham"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <meta name="description" content="A nicely-built portfolio displaying my personality, skills, and various projects I have built over the years"/>
            <meta name="keywords" content="Portfolio, Projects, About Me, Skills, Software Development, HTML5, CSS3, JavaScript, Java, PHP"/>
            <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
            <meta content="utf-8" http-equiv="encoding">

            <link rel="stylesheet" href="resources/styles/homePage.css"/>
            <link rel="stylesheet" href="resources/styles/hamburgerMenu.css"/>         
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
            <!-- <link rel="shortcut icon" href="" type=image/x-icon/> -->

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        </head>

        <body>
            <header id="header" class="header">
                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

                    <ul class="menu">
                        <li><a href="#" data-section="#home"><i class=""></i>Home</a></li>
                        <li><a href="#" data-section="#about"><i class=""></i>About</a></li>
                        <li><a href="#" data-section="#projects"><i class=""></i>Projects</a></li>
                        <li><a href="#" data-section="#skills"><i class=""></i>Skills</a></li>
                    </ul>
          
            </header>

            <main id="main">
                <section>
                    <h2>This is main section</h2>
                        <figure>
                            <a href="https://www.linkedin.com/in/jacob-graham02/" class="fa fa-linkedin"></a>
                        </figure>
    
                        <figure>
                            <a href="https://github.com/JacobGraham02" class="fa fa-github"></a>
                        </figure>
    
                        <figure>
                            <a href="" class="fa fa-envelope"></a>
                        </figure>
                </section>

                <section id="home">
                    Home
                </section>

                <section id="about">
                    About
                </section>

                <section id="projects">
                    Projects
                </section>

                <section id="skills">
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