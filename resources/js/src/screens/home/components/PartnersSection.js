import React, { Component } from 'react';

class PartnersSection extends Component {
    render() {
        return (
            <section className="partners">
                <div className="container">
                    <div className="row">

                        <div className="col-12 col-lg-7">
                            <div className="image">
                                <img className="img-fluid" src="img/source/partners.png" alt="Partners"/>
                            </div>
                        </div>
                        <div className="col-12 col-lg-5 m-auto">	

                            <div className="section-header text-left">
                                <p className="section-title">
                                    Why Choose Us?
                                </p>
                                <h4 className="section-text">
                                    We Are Business<br /><span>Partners</span>
                                </h4>
                                <p className="section-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>
                            <ul id="accordion">
                                <li className="item">
                                    <div className="data" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                        <div className="icon">
                                            <i className="plus fas fa-plus"></i>
                                            <i className="minus fas fa-minus"></i>
                                        </div>
                                        <p>We Are Passionate And Creative</p>
                                    </div>
                                    
                                    <div className="content">								
                                        <div id="collapseOne" className="collapse show" data-parent="#accordion">	
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <li className="item">
                                    <div className="data" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                                        <div className="icon">
                                            <i className="plus fas fa-plus"></i>
                                            <i className="minus fas fa-minus"></i>
                                        </div>
                                        <p>Open Source And Free Software</p>
                                    </div>
                                    <div className="content">								
                                        <div id="collapseTwo" className="collapse" data-parent="#accordion">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                                <li className="item">
                                    <div className="data" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                                        <div className="icon">
                                            <i className="plus fas fa-plus"></i>
                                            <i className="minus fas fa-minus"></i>
                                        </div>
                                        <p>Very Fast And Reliable</p>
                                    </div>
                                    
                                    <div className="content">								
                                        <div id="collapseThree" className="collapse" data-parent="#accordion">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="about.html" className="btn-one">Learning More</a>
                                
                        </div>
                    </div>
                </div>
	        </section>
        );
    }
}

export default PartnersSection
