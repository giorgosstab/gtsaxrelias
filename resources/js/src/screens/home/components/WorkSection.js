import React, { Component } from 'react';

class WorkSection extends Component {
    render() {
        return (
            <section className="work">
                <div className="container">
                    <div className="row">			
                        <div className="col-12 col-lg-5 m-auto">
                            <div className="section-header text-left">
                                <p className="section-title">
                                    Our Latest Work
                                </p>
                                <h4 className="section-text">
                                    One Of Our<br /><span>Latest Work</span>
                                </h4>
                                <p className="section-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>					
                            </div>
                            <div className="skills">
                                <div className="item">
                                    <div className="title clearfix">
                                        <p>Bootstrap<span>75%</span></p>
                                    </div>
                                    <div className="progress-bar">
                                        <div className="line" style={{"width": "75%"}}></div>
                                    </div>
                                </div>
                                <div className="item">
                                    <div className="title clearfix">
                                        <p>Html<span>80%</span></p>
                                    </div>
                                    <div className="progress-bar">
                                        <div className="line" style={{"width": "80%"}}></div>
                                    </div>
                                </div>
                                <div className="item">
                                    <div className="title clearfix">
                                        <p>Php<span>55%</span></p>
                                    </div>
                                    <div className="progress-bar">
                                        <div className="line" style={{"width": "55%"}}></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" className="btn-one">Our Works</a>
                        </div>
                        <div className="col-12 col-lg-7">
                            <div className="image">
                                <img className="img-fluid" src="img/source/work.png" alt="Work"/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}

export default WorkSection