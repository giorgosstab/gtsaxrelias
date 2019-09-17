import React from 'react'

const MainHeader = () => (
    <section className="main-header">
        <div className="container">
            <div className="row">
                <div className="col-12 col-lg-5">
                    <div className="header-content">

                        <h1 className="title" data-aos="fade-down" data-aos-delay="200">Modern & Creative<br/>Agency
                            .inc</h1>

                        <p className="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>

                        <a href="#" className="btn-one">Get Started Now</a>
                    </div>
                </div>

                <div className="col-12 col-lg-7 d-none d-lg-block">
                    <div className="image">
                        <img className="img-fluid" src="img/svg/header.svg" alt="header"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
);

export default MainHeader
