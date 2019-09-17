import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Header from "./Header";
import Loader from "./Loader";
import MainHeader from "./MainHeader";
import Services from "./Services";

export default class Index extends Component {
    render() {
        return (
            <div>
                <Loader/>
                <Header/>
                <MainHeader/>
                <Services/>
            </div>
        );
    }
}

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
