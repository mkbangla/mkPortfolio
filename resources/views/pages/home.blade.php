
@extends('layouts.app')

@section('title', 'Home | MK Portfolio')

@section('content')

   {{--start Hero Section--}}
     <section class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7">
                    <p class="text-primary fw-semibold mb-2">
                        Hello, I'm
                    </p>
                    <h1 class="display-4 fw-bold mb-3">
                        Mostafa Kamal
                    </h1>
                    <h2 class="h3 text-secondary mb-4">
                        Senior IT Officer & Aspiring Web Developer
                    </h2>
                    <p class="lead mb-4">
                        I work in IT support and academic techonology. I am learning laravel,Bootstrap and SASS to build modern, responsive web applications.
                    </p>

                    <a href="{{ asset('files/CV_Mostafa.pdf') }}"
                    class="btn btn-outline-dark btn-lg mb-2"
                    download>
                        <i class="bi bi-download me-2"></i>
                        Download CV
                    </a>

                    <a href="#projects" class="btn btn-primary btn-lg me-2 mb-2">Projects</a>
                    <a href="#contact" class="btn btn-outline-dark btn-lg mb-2">Contact Me</a>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="{{asset('images/profile.jpg')}}" alt="Mostafa Kamal" class="img-fluid rounded-circle hero-image">
                </div>
            </div>
        </div>
     </section>
     {{--end Hero Section--}}

     {{--Start About Section--}}
     <section id="about" class="about-section py-5">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-5">
                    <div class="about-card p-4 rounded">
                        <h3 class="h4 fw-bold mb-3">
                            Who Am I?
                        </h3>

                        <p class="mb-0">
                            I am an IT Professional with experienc in technical suport, academic technology and school IT operations.
                        </p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <p class="text-primary fw-semibold mb-2">
                        About Me
                    </p>

                    <h2 class="display-6 fw-bold mb-3">
                        IT Support Professional & Web Developer in Progress
                    </h2>

                    <p class="text-secondary">
                        I word as an IT Officer, supporting computer systems, networks academic software deaily techonology-related activities.
                    </p>
                    <p class="text-secondary mb-0">
                        Currently, I am developing my skills in PHP, Laravel, Bootstrap and SASS to build modern, responsive web application
                    </p>
                </div>
            </div>
        </div>
     </section>
     {{--End About Section--}}

     {{--Start Skill Section--}}
     <section id="skills" class="skills-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-primary fw-semibold mb-2">
                    My Expertise
                </p>
                <h2 class="display-6 fw-bold">
                    Skills & Technologies
                </h2>
                <p class="text-secondary">
                    Techonologies and tools I use and am currently learning.
                </p>
            </div>

            <div class="row g4">
                <div class="col-md-6 col-lg-4">
                    <div class="skill-card p-4 rounded-4 h-100">
                        <div class="skill-icon mb-3">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <h3 class="h5 fw-bold">IT Support</h3>

                        <p class="text-secondary mb-0">
                            Computer trubleshooting, software installation, hardware support and technical assistance.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="skill-card p-4 rounded-4 h-100">
                        <div class="skill-icon mb-3">
                            <i class="i bi-router"></i>
                        </div>
                        <h3 class="h5 fw-bold">Networing</h3>

                        <p class="text-secondary mb-0">
                            wi-Fi troubleshooting, Ip configuration, router seturp and basic network support.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="skill-card p-4 rounded-4 h-100">
                        <div class="skill-icon mb-3">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        
                        <h3 class="h5 fw-bold">Web Development</h3>

                        <p class="text-secondary mb-0">
                            PHP, Laravel, HTML, CSS, JavaScript and WordPress.
                            Currently improving my development skills.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="skill-card p-4 rounded-4 h-100">
                        <div class="skill-icon mb-3">
                            <i class="bi bi-bootstrap"></i>                            
                        </div>
                        <h3 class="h5 fw-bold">Frontend Tools</h3>
                            <p class="text-secondary mb-0">
                                Bootstrap, SASS and responsive web design
                            </p>
                    </div>                    
                </div>
                <div class="col-md-6 col-lg-4">
                        <div class="skill-card p-4 rounded-4 h-100">
                            <div class="skill-icon mb-3">
                                <i class="bi bi-database"></i>                                
                            </div>

                            <h3 class="h5 fw-bold">
                                Database
                            </h3>
                            <p class="text-secondary mb-0">
                                Learning database design, MySQL and Laravel database integration
                            </p>
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="skill-card p-4 rounded-4 h-100">
                            <div class="skill-icon mb-3">
                                <i class="bi bi-file-earmark-bar-graph"></i>
                            </div>

                            <h3 class="h5 fw-bold">Office Applications</h3>
                            <p class="text-secondary mb-0">
                                Microsoft Word, Excel, PowerPoint and Academic Report Preparation
                            </p>
                        </div>
                    </div>
            </div>
        </div>
     </section>
    {{--End Skill Section--}}

    {{--Start demo project Section--}}
    <section id="projects" class="projects-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <p class="text-primary fw-semibold mb-2">
                    My Work
                </p>

                <h2 class="display-6 fw-bold">
                    Featured Projects
                </h2>
                <p class="text-secondary">
                    Some projects I am building and learning from.
                </p>
            </div>

            <div class="row g-4">
                {{--Project 1--}}
                <div class="col-md-6 col-lg-4">
                    <div class="project-card h-100 rounded-4 overflow-hidden">
                        <div class="project-placeholder">
                            <i class="bi bi-motherboard"></i>
                        </div>

                        <div class="p-4">
                            <span class="badge text-bg-primary mb-3">
                                Laravel
                            </span>

                            <h3 class="h5 fw-bold">
                                School Management System
                            </h3>
                            <p class="text-secondary">
                                A learning project for managing student, teachers and academic inforation
                            </p>

                            <a href="#contact" class="btn btn-outline-primary">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>

                {{--Project 2--}}
                <div class="col-md-6 col-lg-4">
                    <div class="project-card h-100 rounded-4 overflow-hidden">
                        <div class="project-placeholder">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <div class="p-4">
                            <span class="badge text-bg-success mb-3">
                                Laravel + Bootstrap
                            </span>
                        
                        <h3 class="h5 fw-bold">
                            Admin Dashboard
                        </h3>
                        <p class="text-secondary">
                            An admin interface for managing records and viewing important information
                        </p>
                        <a href="#contact" class="btn btn-outline-primary">
                            Learn More
                        </a>
                        </div>
                    </div>
                </div>

                {{--Project 3--}}
            <div class="col-md-6 col-lg-4">
                <div class="project-card h-100 rounded-4 overflow-hidden">
                    <div class="project-placeholder">
                        <i class="bi bi-globe"></i>
                    </div>
                    <div class="p-4">
                        <span class="badge text-bg-dark mb-3">
                            HTML + SASS
                        </span>
                        <h3 class="h5 fw-bold">
                            Responsive Portfolio
                        </h3>
                        <p class="text-secondary">
                            A personal portfolio website built with Laravel, Bootstrap and SASS
                        </p>
                        <a href="#contact" class="btn btn-outline-primary">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>

            {{--Project 4: Demo Portfolio--}}
            <div class="col-md-6 col-lg-4">
                <div class="project-card h-100 rounded-4 overflow-hidden">
                    <div class="project-placeholder">
                        <i class="bi bi-window"></i>
                    </div>
                    <div class="p-4">
                        <span class="badge text-bg-primary mb-3">
                            HTML/ CSS/ JavaScrip
                        </span>
                        <h3 class="h5 fw-bold">
                            Demo Portfolio website
                        </h3>
                        <p class="text-secondary">
                            A personal portfolio website featuring About, Services, Projects, Blogs and Contact Sections
                        </p>
                        <a href="https://mkbangla.github.io/Demo-protfolio/" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                            Live demo
                            <i class="bi b-box-arrow-up-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{--Project5: InfinityFree Website--}}
            <div class="col-md-6 col-lg-4">
                <div class="project-card h-100 rounded-4 overflow-hidden">
                    <div class="project-placeholder">
                        <i class="bi bi-globe2"></i>
                    </div>
                    <div class="p-4">
                        <span class="badge text-bg-success ms-3">
                            Web Project
                        </span>
                        <h3 class="h5 fw-bold">
                            InfinityFree Website
                        </h3>
                        <p class="text-secondary">
                            A website project published on InfinityFreehosing. Visit the live website to explore the project.
                        </p>
                        <a href="https://mkbangla.infinityfree.me" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary">
                            Live online market page demo
                        </a>
                        <i class="bi bi-box-arrow-up-right ms-1"></i>
                    </div>
                </div>
            </div>
            </div>            
        </div>
    </section>

    {{--End demo project Section--}}

    {{--Start Contact Section--}}
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <p class="text-primary fw-semibold mb-2">
                    GET IN TOUCh
                </p>
                <h2 class="display-6 fw-bold">
                    Let's Work Together
                </h2>
                <p class="text-secondary">
                    Have a project or an opportunity? Feel free to contact me.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-card p-4 p-md-5 rounded-4">
                        <div class="contact-item d-flex align-items-center mb-4">
                            <div class="contact-icon me-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1">Email</h3>
                                <a href="mailto:mostafakamal.bangla@gmail.com">
                                    mostafakamal.bangla@gmail.com
                                </a>
                            </div>
                        </div>

                        <div class="contact-item d-flex align-items-center mb-4">
                            <div class="contact-icon me-3">
                                <i class="bi bi-github"></i>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1">GitHub</h3>
                            <a href="https://github.com/mkbangla" target="_blank" rel="noopener noreferrer">
                                github.com/makbangla
                            </a>
                            </div>                            
                        </div>

                        <div class="contact-item d-flex align-itmes-center">
                        <div class="contact-icon me-3">
                            <i class="bi bi-facebook"></i>
                        </div>
                        <div>

                        <h3 class="h6 fw-bold mb-1">
                            Facebook
                        </h3>
                        <a href="https://www.facebook.com/mostafa.kamal.24" target="_blank" rel="noopener noreferrer">Visit My Facebook</a>
                        </div>
                    </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

     {{--End Contac Section--}}


@endsection
