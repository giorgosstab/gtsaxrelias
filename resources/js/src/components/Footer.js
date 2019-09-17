import React from 'react'

const Footer = () => (
    <footer class="footer pt-4">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
					<p class="header">About Us</p>
					<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<ul class="social">
						<li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
						<li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
				
				<div class="col-12 col-md-6 col-lg-3">
					<p class="header">Latest Blog Posts</p>
					<div class="blog">
						<div class="item">
							<div class="image">
								<a href="blog-post.html"><img src="img/gallery/seo.jpg" alt="Seo" /></a>
							</div>
							<a class="blog-title" href="blog-post.html">Search Engine And...<span>29 Oct 2018</span></a>
						</div>
						
						<div class="item">
							<div class="image">
								<a href="blog-post.html"><img src="img/gallery/web-design.jpg" alt="Seo" /></a>
							</div>
							<a class="blog-title" href="blog-post.html">Web Design And...<span>12 Aug 2018</span></a>
						</div>
					</div>					
				</div>
				
				<div class="col-12 col-md-6 col-lg-2">
					<p class="header">Our Links</p>
					<ul class="links">
						<li><a href="index.html" title="Home">Home</a></li>
						<li><a href="services.html" title="Services">Services</a></li>
						<li><a href="blog-list.html" title="Blog">Blog</a></li>
						<li><a href="about.html" title="About">About</a></li>
						<li><a href="contact.html" title="Contact">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-12 col-md-6 col-lg-4">
					<p class="header">Contact Us</p>
					<div class="contact">
						<div class="item">
							<div class="icon"><i class="fas fa-map-marker-alt"></i></div>
							<p class="data">4131 Main St Mill Village, NS B0J 2H0, Canada</p>
						</div>
						<div class="item">
							<div class="icon"><i class="fas fa-phone"></i></div>
							<p class="data">+(202) 555-0178</p>
						</div>
						<div class="item">
							<div class="icon"><i class="fas fa-fax"></i></div>
							<p class="data">+(202) 666-0179</p>
						</div>
						<div class="item">
							<div class="icon"><i class="fas fa-envelope-open"></i></div>
							<p class="data">hello@yourbrand.com</p>
						</div>
					</div>
				</div>

				<div class="col-12 mt-3">
					<p class="copyright">&copy; 2019 Revex. All Rights Reversed.</p>
				</div>				
			</div>
		</div>
	</footer>
);

export default Footer
