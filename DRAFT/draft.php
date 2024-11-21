<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Olympics</title>
    <link href="css/style.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="preload" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" as="style">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>  
    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="media/umak.webp" alt="IT Olympics Logo">
                <img src="media/ccis.webp" alt="IT Olympics Logo">
                <h1>IT OLYMPICS</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT US</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
               <li><a href="#contact">CONTACT</a></li>
            </ul>
            <div class="bx bx-menu" id="menu-icon"></div>
        </nav>
    </header>

    <!-- Features Section -->
    <section id="home" class="home">
        <div class="hero-content">
            <div>
                <img src="media/header.webp" alt="Feature Monitor" class="hero-image">
            </div>
        </div>
        <div class="categories-container">
            <div class="line"></div>
            <div class="categories-text">CATEGORIES</div>
            <div class="line"></div>
        </div>       
        
        <div class="swiper-container">
           
             <div class="swiper-wrapper">
                <div class="swiper-slide orange-card">
                    <div class="image-container">
                        <img src="media/python.webp" alt="Python Programming">
                    </div>
                    <h3>Python Programming</h3>
                </div>
                <div class="swiper-slide teal-card">
                    <div class="image-container">
                        <img src="media/Linux-Administration.webp" alt="Linux Administration">
                       
                    </div>
                    <h3>Linux Administration</h3>
                </div>
                <div class="swiper-slide yellow-card">
                    <div class="image-container">
                        <img src="media/Android Application.webp" alt="Android Applications">
                    </div>
                    <h3>Android Applications</h3>
                </div>
                <div class="swiper-slide blue-card">
                    <div class="image-container">
                        <img src="media/IT Quiz Bee.webp" alt="IT Quiz Bee">
                    </div>
                    <h3>IT Quiz Bee</h3>
                </div>
                <div class="swiper-slide teal-card">
                    <div class="image-container">
                        <img src="media/Java.webp" alt="Java Programming">
                    </div>
                    <h3>Java Programming</h3>
                </div>
                <div class="swiper-slide orange-card">
                    <div class="image-container">
                        <img src="media/Web Design.webp" alt="Web Design">
                    </div>
                    <h3>Web Design</h3>
                </div>
                <div class="swiper-slide blue-card">
                    <div class="image-container">
                        <img src="media/PC Assembl.webp" alt="PC Assembly / Disassembly">
                    </div>
                    <h3>PC Assembly / Disassembly</h3>
                </div>
                <div class="swiper-slide yellow-card">
                    <div class="image-container">
                        <img src="media/C .webp" alt="C# Programming">
                        
                    </div>
                    <h3>C# Programming</h3>
                </div>
                <div class="swiper-slide orange-card">
                    <div class="image-container">
                        <img src="media/Cybersec.webp" alt="Cybersecurity">
                       
                    </div>
                    <h3>Cybersecurity</h3>
                </div>
                <div class="swiper-slide teal-card">
                    <div class="image-container">
                        <img src="media/Digtal Electronics.webp" alt="Digital Electronics">
                       
                    </div> 
                    <h3>Digital Electronics</h3>
                </div>
                <div class="swiper-slide blue-card">
                    <div class="image-container">
                        <img src="media/Networking.webp" alt="Computer Networking">
                    </div>
                    <h3>Computer Networking</h3>
                </div>
                <div class="swiper-slide yellow-card">
                    <div class="image-container ">
                        <img src="media/Esport.webp" alt="E-Sports">
                       
                    </div> 
                    <h3>E-Sports</h3>
                </div>
            </div>
            
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
           <!-- Add Pagination -->
           <div class="swiper-pagination"></div>
    </section>

    <section class="contact" id="contact">
        <div class="contacttext">
            <h2>Contact <span>Us!</span></h2>
            <h5>If you need help or have concern.</h5>
            <div class="list">
                  <ul>
                    <li><a href="#contact"><i class='bx bx-map icon'></i> JP Rizal Ext., West Rembo, Makati, Philippines</a></li>
                    <li><a href="mailto:itskillsolympics@umak.edu.ph"><i class='bx bx-envelope icon'></i> itskillsolympics@umak.edu.ph</a></li>
                    <li><a href="#contact"><i class='bx bx-user icon'></i> Contact and follow us on</a></li>
                </ul>
            </div>
            <div class="contacticons">
                <a href="https://www.facebook.com/UMakITSkillsOlympics" target="_blank" rel="noopener noreferrer" aria-label="Visit my Facebook profile">
                    <i class='bx bxl-facebook' aria-hidden="true"></i>
                </a>
                 <a href="mailto:itskillsolympics@umak.edu.ph" target="_blank" rel="noopener noreferrer" aria-label="Send an email to IT Skills Olympics">
                    <i class='bx bxl-gmail' aria-hidden="true"></i>
                </a>
                  <a href="https://www.umak.edu.ph/" target="_blank" rel="noopener noreferrer" aria-label="Visit the school website">
                    <i class='bx bx-world' aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="contactform">
            <div class="contactform_container">
                <form action="https://formspree.io/f/mdknkvvq" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <input type="email" name="email" placeholder="Your Email Address" required>
                    <input type="text" name="contact" placeholder="Your Contact Number" required>
                    <textarea name="message" cols="30" rows="10" placeholder="How can I help you?" required></textarea>
                    <input type="submit" value="Send Message" class="submit">
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 13th IT Olympics. All Rights Reserved.</p>
    </footer>
</body>
<script src="js/script.js"></script>
</html>