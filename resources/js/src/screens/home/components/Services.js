import React from 'react'

const Services = () => (
    <section className="service">
        <div className="container">
            <div className="section-header text-center">
                <p className="section-title">
                    What We Do
                </p>

                <h4 className="section-text">
                    Some Of Our<br/>Professional <span>service</span>
                </h4>
            </div>

            <div className="row">

                <div className="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div className="item">
                        <div className="icon">
                            <img src="img/svg/responsive.svg" alt="Advertising"/>
                        </div>

                        <h4 className="title">
                            <a href="#">Advertising and<br/>Marketing</a>
                        </h4>

                        <p className="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <a href="services.html" className="service-btn fas fa-plus"></a>
                    </div>
                </div>
                <div className="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div className="item">

                        <div className="icon">
                            <img src="img/svg/web-design.svg" alt="Web Design"/>
                        </div>

                        <h4 className="title">
                            <a href="services.html">Web Design and<br/>Development</a>
                        </h4>

                        <p className="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>

                        <a href="services.html" className="service-btn fas fa-plus"></a>

                    </div>
                </div>

                <div className="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div className="item">

                        <div className="icon">
                            <img src="img/svg/responsive.svg" alt="Responsive Design"/>
                        </div>

                        <h4 className="title">
                            <a href="services.html">Responsive and<br/>Adaptive Design</a>
                        </h4>

                        <p className="text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>

                        <a href="services.html" className="service-btn fas fa-plus"></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
);

export default Services
