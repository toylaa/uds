import React, { Component } from 'react';
import SearchBar from './SearchBar.js';
import ResultsList from './ResultsList.js';
import Services from './sampleDB/Services.js'
import Equipment from './sampleDB/Equipment.js'

class Home extends React.Component {
  state = {
    searchResults: [],
  }

  // fetching info from sample data but this is where the call to db will be made

  getResults = (attr) => {
    //if(attr.text == '')return;
    if(attr.type === 'service'){
      const results = Services.filter((s) => (s.name.toLowerCase().includes(attr.text.toLowerCase())));

      this.setState({
        searchResults: results,
      });
    }
    else{
      const results = Equipment.filter((e) => (e.name.toLowerCase().includes(attr.text.toLowerCase())));

      this.setState({
        searchResults: results,
      });
    }

    console.log(this.state.searchResults);
  }

  /*
  getResults = (attr) => {
    alert(attr.text + ' ' + attr.type);
    let results = [];
    if(attr.type === 'service'){
      results = Services.map((s) => {
        if(s.name.toLowerCase().includes(attr.text.toLowerCase())){
          return s;
        }
      })
    }
    else{
      results = Equipment.map((e) => {
        if(e.name.toLowerCase().includes(attr.text.toLowerCase())){
          return e;
        }
      })
    }
    this.setState({
      searchResults: results,
    });
    console.log(this.state.searchResults);
  }


  */

  render(){
    return(
      <div>
        <SearchBar
          handleSubmit = {this.getResults}
        />
        <ResultsList
          searchResults={this.state.searchResults}
        />
      </div>
    )
  }
}

export default Home;
