import React, { Component } from 'react';

class TestimonialSection extends Component {
    render() {
        return (
            <section class="testimonials">
                <div class="container">
                    <div class="section-header text-left mb-3">
                        <p class="section-title">
                            Testimonials
                        </p>
                        <h4 class="section-text">
                            What Makes Us<br /><span>Unique</span>
                        </h4>
                        <p class="section-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>				
                    </div>
                        
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2 m-auto">
                            <div class="button">
                                <div class="navigation btn-three prev"><i class="fas fa-angle-left"></i></div>
                                <div class="navigation btn-three next"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-8 col-sm-9 col-lg-10">				
                            <div class="content">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            
                                        <div class="profile">
                                            <img class="img-fluid" src="img/profile/1.jpg" alt="profile" />
                                            <p class="author">Dolly Rapid</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            
                                        <div class="profile">
                                            <img class="img-fluid" src="img/profile/2.jpg" alt="profile" />
                                            <p class="author">Jaden Row</p>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            
                                        <div class="profile">
                                            <img class="img-fluid" src="img/profile/3.jpg" alt="profile" />
                                            <p class="author">Smith Forks</p>
                                        </div>
                                    </div>							
                                </div>
                            </div>
                        </div>
                    </div>			
                </div>
            </section>
        );
    }
}

export default TestimonialSection