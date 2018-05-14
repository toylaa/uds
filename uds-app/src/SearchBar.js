import React, { Component } from 'react';


class SearchBar extends React.Component {
  state = {
    text: '',
    service: true,
    equipment: false,
    type: 'service'
  }

  handleTextChange = (e) => {
    this.setState({
      text: e.target.value,
    })
  }

  handleRadioButton = (e) => {
    if(e.target.value == 'service'){
      this.setState({
        service: true,
        equipment: false,
        type: 'service'
      })
    }
    else {
      this.setState({
        service: false,
        equipment: true,
        type: 'equipment'
      })
    }
  }

  handleSubmit = (e) => {
    //alert('searching for ' +  this.state.text);
    e.preventDefault();
    this.props.handleSubmit({
      text: this.state.text,
      type: this.state.type
    })
  }

  render(){

    return(
      <form onSubmit={this.handleSubmit}>
        <input value={this.state.text} onChange={this.handleTextChange}></input>
        <form>
          <div className="radio">
            <label>
              <input type="radio" value="service" checked={this.state.service} onClick={this.handleRadioButton}/>
              Service
            </label>
          </div>
          <div className="radio">
            <label>
              <input type="radio" value="equipment" checked={this.state.equipment} onClick={this.handleRadioButton}/>
              Equipment
            </label>
          </div>
        </form>
        <button type="submit">Search</button>
      </form>
    )
  }
}

export default SearchBar;
