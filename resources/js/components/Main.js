import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Routes from './routes';

export default class Main extends Component {
    render() {
        return (<Routes/>);
    }
}

if (document.getElementById('main')) {
    ReactDOM.render(<Main />, document.getElementById('main'));
}


