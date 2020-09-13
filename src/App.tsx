import React, { FunctionComponent } from "react";
import {Component} from "react";
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import Header from "./common/Header/Header";
import Sidebar from "./common/Sidebar/Sidebar";
import "./main.css";
import CreatePost from "./Pages/CreatePost/CreatePost";
import FAQ from "./Pages/FAQ/FAQ";
import History from "./Pages/History/History";
import Home from "./Pages/Home/Home";
import Instructors from "./Pages/Instructors/Instructors";
import Join from "./Pages/Join/Join";
import Officers from "./Pages/Officers/Officers";
import TheClub from "./Pages/TheClub/TheClub";
import Awards from "./Pages/Awards/Awards";
import WarmUp from "./Pages/WarmUp/WarmUp";
import Vocab from "./Pages/Vocab/Vocab";
import Etiquette from "./Pages/Etiquette/Etiquette";
import Links from "./Pages/Links/Links";
interface SidebarState {
  width: string;
}

class App extends Component<unknown, SidebarState> {
  public state = {
      width: window.matchMedia("(max-width: 768px)") ? "0" : "14rem",
  };
  constructor(props: Readonly<unknown>) {
      super(props);

      window.addEventListener("resize", this.handleResize);
  }

  public componentDidMount():void {
      this.handleResize();
  }

  public handleResize = ():void => {
      const listener = window.matchMedia("(max-width: 768px)");
      console.log(listener.matches);
      if (listener.matches) {
          this.setState({width: "0"});
      } else {
          this.setState({width: "14rem"});
      }
  }

  public toggleBar = ():void => {
      console.log(this.state);
      if (this.state.width === "0") {
          this.setState({width: "14rem"});
      } else {
          this.setState({width: "0"});
      }
  }
  public render():React.ReactElement {
      return <Router basename={process.env.PUBLIC_URL}>
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
                  <Route path="/awards" exact component={Awards}/>
                  <Route path="/warmups" exact component={WarmUp}/>
                  <Route path="/vocab" exact component={Vocab}/>
                  <Route path="/etiquette" exact component={Etiquette}/>
                  <Route path="/links" exact component={Links}/>
                  <Route component={NotFound}/>
              </Switch>
          </main>
      </Router >;
  }
}

const NotFound: FunctionComponent = () => <h1>404 not found</h1>;

export default App;
