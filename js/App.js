import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import htmlContent from './html/Home.html';

const App = React.createClass({
    render() {
        return (
            <div dangerouslySetInnerHTML={ {__html: htmlContent} } />
        );
    }
});
export default App;