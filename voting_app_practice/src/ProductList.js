import React, { Component } from 'react';
import Seed from './seed.js';
import './style.css';

class ProductList extends React.Component {
  state = {
    products: []
  }

  componentDidMount(){
    this.setState({
      products: Seed,
    })
  }

  handleUpVote = (id) => {
    const newProducts = this.state.products.map((p) => {
      if(p.id == id){
        const ret = Object.assign({}, p, {
          votes: p.votes+1,
        });
        return ret;
      }
      else{
        return p;
      }
    });

    this.setState({
      products: newProducts,
    })
  }

  render(){
    const productList = this.state.products.map((p) => (
      <Product
        id = {p.id}
        title = {p.title}
        description = {p.description}
        url = {p.url}
        votes = {p.votes}
        submitterAvatarUrl = {p.submitterAvatarUrl}
        productImageUrl = {p.productImageUrl}
        upVote = {this.handleUpVote}
      />
    ));
    /*
    {
      id: 1,
      title: 'Yellow Pail',
      description: 'On-demand sand castle construction expertise.',
      url: '#',
      votes: generateVoteCount(),
      submitterAvatarUrl: 'images/avatars/daniel.jpg',
      productImageUrl: 'images/products/image-aqua.png',
    },
    */
    return (
      <div>{productList}</div>
    );
  }
}

class Product extends React.Component {

  handleUpVote = () => {
    this.props.upVote(this.props.id)
  }

  render(){
    return (
      <div className='item'>
        <div className='image'>
          <img src={this.props.productImageUrl} />
        </div>
        <div className='middle aligned content'>
          <div className='header'>
            <a onClick={this.handleUpVote}>
              ^
            </a>
            {this.props.votes}
          </div>
          <div className='description'>
            <a>{this.props.title}</a>
            <p>{this.props.description}</p>
          </div>
          <div className='extra'>
            <span>Submitted by:</span>
            <img
              className='ui avatar image'
              src={this.props.submitterAvatarUrl}
            />
          </div>
        </div>
      </div>

    );
  }
}

export default ProductList;
