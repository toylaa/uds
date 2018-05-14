import React, { Component } from 'react';
import Result from './Result.js';

class ResultsList extends React.Component {
  render(){
    const resultsList = this.props.searchResults.map((r) => (
      <Result
        name = {r.name}
        description = {r.description}
        img = {r.img}
        phoneNumber = {r.phoneNumber}
        key = {r.id}
        id = {r.id}
      />
    ))

    if(resultsList.length == 0){
      return (
        <div>
          No results found
        </div>
      )
    }
    else {
      return(
        <div>
          {resultsList}
        </div>
      )
    }  
  }
}

export default ResultsList;
