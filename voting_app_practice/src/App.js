import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import ProductList from './ProductList.js';

class App extends Component {
  render() {
    return (
      <div className="App">
        <ProductList />
      </div>
    );
  }
}

export default App;
