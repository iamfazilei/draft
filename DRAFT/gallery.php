<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Olympics</title>
    <link href="css/style.css" rel="stylesheet">  
    <link href="css/gallery.css" rel="stylesheet">  

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="preload" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" as="style">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>  
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="media/umak.webp" alt="IT Olympics Logo">
                <img src="media/ccis.webp" alt="IT Olympics Logo">
                <h1>IT OLYMPICS</h1>
            </div>
            <ul class="nav-links">
                <li><a href="draft.php">HOME</a></li>       
                 <li><a href="#about">ABOUT US</a></li>
                <li><a href="#gallery">GALLERY</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
            <div class="bx bx-menu" id="menu-icon"></div>
        </nav>
    </header>



    <main>
         <!-- Features Gallery Section -->
    <section id="gallery" class="gallery">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="draft.php">Home ></a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>
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
    </main>
</body>
<script src="js/script.js"></script>
</html>   