import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Navbar from "../../components/Navbar";
import Loader from "../../components/Loader";
import MainHeader from "./components/MainHeader";
import Services from "./components/Services";

export default class Index extends Component {
    render() {
        return (
            <div>
                <Loader/>
                <Navbar/>
                <MainHeader/>
                <Services/>
            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
