import React, { Component } from 'react';

class TeamSection extends Component {
    render() {
        return (
            <section class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="image">
                                <img class="img-fluid" src="img/source/team.png" alt="Team"/>						
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 m-auto">
                            <div class="section-header text-left">
                                <p class="section-title">
                                    About Us
                                </p>
                                <h4 class="section-text">
                                    Our Awesome<br /><span>Team Member</span>
                                </h4>
                                <p class="section-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...
                                </p>
                            </div>
                            <p class="team-title">Some Of Our Team Feature:</p>
                            <ul class="team-feature">
                                <li>Professional And Reliable Members</li>
                                <li>Self Awareness And Professional Development</li>
                                <li>Leadership And Management In Engineering</li>
                            </ul>
                            <a href="about.html" class="btn-one">About Us</a>						
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}

export default TeamSection