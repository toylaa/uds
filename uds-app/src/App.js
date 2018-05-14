import React, { Component } from 'react';
import './App.css';
import Home from './Home.js';

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <h1 className="App-title">Search/Home</h1>
        </header>
        <p className="App-intro">
        </p>

        <Home />
      </div>
    );
  }
}

export default App;
