import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Navbar from "../../components/Navbar";
import Footer from "../../components/Footer";
import Loader from "../../components/Loader";
import MainHeader from "./components/MainHeader";
import ServicesSection from "./components/ServicesSection";
import PartnersSection from "./components/PartnersSection";
import WorkSection from "./components/WorkSection";
import TeamSection from "./components/TeamSection";
import TestimonialSection from "./components/TestimonialSection";
import SponsorSection from "./components/SponsorSection";

export default class Index extends Component {
    render() {
        return (
            <div>
                <Loader/>
                <Navbar/>
                <MainHeader/>
                <ServicesSection/>
                <PartnersSection/>
                <WorkSection/>
                <TeamSection/>
                <TestimonialSection/>
                <SponsorSection/>
                <Footer/>
            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
