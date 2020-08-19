import React, { FunctionComponent } from "react";
import {Component} from "react";
import logo from "./logo.svg";
import "./main.css";
import Header from "./common/Header/Header";
import Sidebar from "./common/Sidebar/Sidebar";
import Home from "./Pages/Home/Home";
import History from "./Pages/History/History";
import CreatePost from "./Pages/CreatePost/CreatePost";
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import TheClub from "./Pages/TheClub/TheClub";
import FAQ from "./Pages/FAQ/FAQ";
import Join from "./Pages/Join/Join";
import Officers from "./Pages/Officers/Officers";
import Instructors from "./Pages/Instructors/Instructors";

type SidebarState={
  width: string
}


class App extends Component<{}, SidebarState> {
  state = {
    width: window.matchMedia("(max-width: 768px)") ? "0" : "14rem"
  }
  constructor(props: Readonly<{}>){
    super(props)


    window.addEventListener('resize', this.handleResize)
  }

  componentDidMount(){
    this.handleResize()
  }

  handleResize = () =>{
    let listener = window.matchMedia("(max-width: 768px)")
    console.log(listener.matches)
    if(listener.matches){
      this.setState({width:"0"})
    }
    else{
      this.setState({width:"14rem"})
    }
  }

  toggleBar = () =>
  {
    console.log(this.state);
    if(this.state.width == "0"){
      this.setState({width:"14rem"})
    }
    else{
      this.setState({width:"0"})
    }
  }
  render(){
  return <Router>
    <Header toggleBar={this.toggleBar}/>
    <Sidebar width={this.state.width} />
    <main>
    <Switch>
      <Route path="/" exact component={Home}/>
      <Route path="/history" exact component={History}/>
      <Route path="/club" exact component={TheClub}/>
      <Route path="/faq" exact component={FAQ}/>
      <Route path="/join" exact component={Join}/>
      <Route path="/instructors" exact component={Instructors}/>
      <Route path="/officers" exact component={Officers}/>
      <Route path="/post" exact component={CreatePost}/>
      <Route component={NotFound}/>
    </Switch>
    </main>
  </Router >}

}

const NotFound:FunctionComponent = () => <h1>404 not found</h1>



export default App;
