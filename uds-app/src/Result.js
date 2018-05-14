import React, {Component } from 'react';
import './Result.css';

class Result extends React.Component {
  render(){
    return (
      <div className='result'>
        <div>Company: {this.props.name}</div>
        <div>Description: {this.props.description}</div>
        <div><img src={this.props.img} /></div>
        <div>Phone Number: {this.props.phoneNumber}</div>
      </div>
    )
  }
}

export default Result;
