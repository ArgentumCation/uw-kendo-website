import { Component} from "react";
import React from "react";
import ReactMarkdown from "react-markdown"

class CreatePost extends Component {
  state = {title: "", body: "", image: ""};

  render() {
    return <> < input onChange={(e) => this.setState({title: e.target.value})} />
    <textarea onChange={(e) => this.setState({body: e.target.value})}/>
    <ReactMarkdown source={this.state.body}/>
    <button>Post</button>
    <p>{JSON.stringify(this.state)}</p>
  </>
  }
}

export default CreatePost;
