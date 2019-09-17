import React from 'react'

const Navbar = () => (
    <nav className="navbar navbar-expand-lg">
        <div className="container">

            <a className="navbar-brand" href="index.html">
                <img src="img/logo-light.png" alt="Revex" />
            </a>

            <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span className="navbar-icon"><i className="fas fa-bars"></i></span>
            </button>

            <div className="collapse navbar-collapse" id="collapsibleNavbar">
                <ul className="navbar-nav ml-auto">
                    <li className="nav-item dropdown">
                        <a className="nav-link active" href="#homes">Home</a>
                        <ul>
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index-2.html">Home 2</a></li>
                        </ul>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="services.html">Services</a>
                    </li>
                    <li className="nav-item dropdown">
                        <a className="nav-link" href="#pages">Pages</a>
                        <ul>
                            <li><a href="404.html">404 Error</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li className="nav-item dropdown">
                        <a className="nav-link" href="#blog">Blog</a>
                        <ul>
                            <li><a href="blog-post.html">Blog Post</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                        </ul>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="about.html">About Us</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
);

export default Navbar
