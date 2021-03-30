<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <title>Jacob Graham - Welcome</title>
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
                        <li><a href="#" data-section="#home"><i class="fa fa-user" title="Go to 'home' section"></i><span class="underline"> Home</span></a></li>
                        <li><a href="#" data-section="#about"><i class="fa fa-address-card" title="Go to 'about' section"></i><span class="underline"> About</span></a></li>
                        <li><a href="#" data-section="#projects"><i class="fa fa-code" title="Go to 'projects' section"></i><span class="underline"> Projects</span></a></li>
                        <li><a href="#" data-section="#skills"><i class="fa fa-bookmark-o" title="Go to 'skills' section"></i><span class="underline"> Skills</span></a></li>
                    </ul>
          
            </header>

            <main id="main">
                <section id="home" class="websiteSection currentSectionOpen">
                    <div id="personal_info">
                         <figure id="personalPictureFigure">
                            <img src="resources/images/personal_image.png" alt="A picture of me" id="pictureOfMe"/>
                            
                            <figcaption style="margin-bottom: 2%;">
                                <h1>Jacob Graham</h1>
                            </figcaption>
                        </figure>
                    </div>
                    
                    <div id="container">
                        <div id="text"></div>
                    </div>
                <div id="social_media_container">
                    <div id="social_media">
                        <figure>
                            <a href="https://www.linkedin.com/in/jacob-graham02/" class="fa fa-linkedin link-icons"></a>
                        </figure>
        
                        <figure>
                            <a href="https://github.com/JacobGraham02" class="fa fa-github link-icons"></a>
                        </figure>
        
                        <figure>
                             <a href="mailto:jakegraham54@gmail.com" class="fa fa-envelope link-icons"></a>
                        </figure>
                    </div>
                </div>

                </section>

                <section id="about" class="websiteSection">
                    <h2>About</h2>
                    <span class="underlineForH2"></span>

                    <div id="aboutSectionIntro">
                        <h3>My name is Jacob Graham and I am a computer science student</h3>
                    </div>

                    <article id="aboutMeArticle">
                        <p>I am a creative and adept software developer with a passion for all facets of development, from discussion and design to 
                            implementation and maintenance. I am a first year computer science student taking the joint degree-diploma program offered by
                            Lakehead-Georgian working towards a computer science degree and computer programming diploma.</p>
                    </article>

                <div id="educationAndLearningContainer">
                    <div id="educationContainer">
                        <h3 class="educationHeading">Education</h3>
                        <hr>
                        <article id="education1" class="educationArticle">
                            <figure><img src=""></figure><small><i class="fa fa-calendar" aria-hidden="true"></i>
                                    2020 - 2024 | Lakehead University</small>
                            <h4>Honours Bachelor of Science (HBSc) in Computer Science</h4><br>
                            <p>This program provided me the theoretical and practical concepts of Computer Science that are valuable to understand when
                               working with computing devices and systems. I am currently learning...<span class="schoolTopics">
                                <br><br><ul>
                                   <li>Data Structures</li>
                                   <li>Algorithm design and analysis</li>
                                   <li>Object-Oriented Programming</li>
                                   <li>Big-O notation (time and space complexity)</li>
                                   <li>Front- and back-end development</li>
                                   <li>Software engineering</li>
                                   <li> Design patterns and unit testing</span></li>
                                </ul>
                            </p>
                        </article>

                        <article id="education2" class="educationArticle">
                            <small><i class="fa fa-calendar" aria-hidden="true"></i>
                                    2020 - 2022 | Georgian College</small>
                            <h4>Computer Programming Diploma</h4><br>
                            <p> This program focuses on the practical aspects of software development: 
                                designing web applications, data-driven systems, and other types of software for both desktop and mobile platforms
                                I am currently learning...
                            <span class="schoolTopics">
                                <br><br><ul>
                                    <li>Database design, security, and maintenance</li>
                                    <li>LAMP (Linux, Apache, MySQL, PHP)</span></li>
                                </ul>
                            </p>
                        </article>
                    </div>

                    <div id="learningContainer">
                        <h3 class="educationHeading">Learning...</h3>
                        <hr>
                            <article id="currentLearning1" class="learningArticle">
                                <small><i class="fa fa-lightbulb-o" aria-hidden="true"></i> January 2020 - Present | Independently learning</small>
                                <h3>ReactJS</h3>
                                <p>Independently learning how to build responsive and clean-cut front ends for user interfaces</p>
                            </article>

                            <article id="currentLearning2" class="learningArticle">
                                <small><i class="fa fa-lightbulb-o" area-hidden="true"> May 2018 - Present | Independently learning</i></small>
                                <h3>Java</h3>
                                <p>Independently learning how to build scalable and functional mobile applications which utilize controls and
                                    event handling for many form factors </p> 
                            </article>

                            <article id="currentLearning4" class="learningArticle">
                                <small><i class="fa fa-lightbulb-o" area-hidden="true"> January 2021 - Present | Classroom training</i></small>
                                <h3>PHP</h3>
                                <p>Learning how to build CRUD web applications, with an emphasize on CMS systems and eCommerce sites both independently 
                                    and from formal instruction. 
                                </p>
                            </article>
                    </div>
                </div>
                
                </section>

                <section id="projects" class="websiteSection">
                    <h2>Projects</h2>
                    <span class="underlineForH2"></span>

                    <article id="projectsContainer">
                        <div id="project1" class="projectDiv">
                            <figure>
                                <a href="" title="A placeholder image for a project imag"><img src="resources/images/placeholder.png" 
                                alt="A picture of my project" title="A container for my project"></a></img>
                            </figure>
                        </div>

                        <div id="project2" class="projectDiv">
                            <figure>
                                <a href="" title=""><img src="resources/images/placeholder.png" 
                                alt="A picture of my project" title="A container for my project"></a></img>
                            </figure>
                        </div>

                        <div id="project3" class="projectDiv">
                            <figure>
                                <a href="" title=""><img src="resources/images/placeholder.png" 
                                alt="A picture of my project" title="A container for my project"></a></img>
                            </figure>
                        </div>

                        <div id="project4" class="projectDiv">
                            <figure>
                                <a href="" title=""><img src="resources/images/placeholder.png" 
                                alt="A picture of my project" title="A container for my project"></a></img>
                            </figure>
                        </div>
                    </article>
                </section>

                <section id="skills" class="websiteSection">
                    <h2>Skills</h2>
                    <span class="underlineForH2"></span>
                    
                    <article id="skillsContainer">
                        <div id="UIUX_design" class="skillDiv">
                            <span class="skillImageDiv"><i class="fa fa-laptop"></i></span>
                            <h3>UI/UX design</h3>
                            <br><p>Designing creative and cutting-edge user interfaces with HTML5, CSS3, JavaScript, PHP, and Java</p>
                        </div>

                        <div id="fullStackDevelopment" class="skillDiv">
                            <span class="skillImageDiv"><i class="fa fa-stack-overflow"></i></span>
                            <h3>Full-stack development</h3>
                            <br><p>Designing responsive front ends using HTML5, CSS3, JavaScript, and Java, but also creating functional back ends for various
                                applications using MySQL and PHP
                            </p>
                        </div>
                    </article>
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