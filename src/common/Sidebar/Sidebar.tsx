import React from "react";
import { Component } from "react";
import { Link } from "react-router-dom";
import "./style.css";

interface SidebarProps {
  width: string;
}

class Sidebar extends Component<SidebarProps> {

    public render():React.ReactElement {
        return <nav style={{width: this.props.width}}>
            <ul>
                <li><Link to="/">Home</Link></li>
                <li>
        About
                    <ul>
                        <li><Link to="/club">The Club</Link></li>
                        <li><Link to="/history">History</Link></li>
                        <li><Link to="/faq">FAQ</Link></li>
                        <li><Link to="/join">Join Us</Link></li>
                        <li><Link to="/instructors">Instructors</Link></li>
                        <li><Link to="/officers">Officers</Link></li>
                    </ul>
                </li>
                <li><a href="https://www.facebook.com/uwkendoclub">Facebook</a></li>
                <li><a href="https://www.instagram.com/kendo_uw/">Instagram</a></li>
                <li><a href="http://mailman13.u.washington.edu/mailman/listinfo/uwkendo">Mailing List</a></li>
                <li><Link to="/awards">Awards</Link></li>
                <li> Resources
                    <ul>
                        <li><Link to="/warmups">Warm-Ups</Link></li>
                        <li><Link to="/vocab">Vocab</Link></li>
                        <li><Link to="/etiquette">Etiquette</Link></li>
                    </ul>
                </li>
                <li><Link to="/links">Links</Link></li>
                <li> Resources
                    <ul>
                        <li><Link className="todo-link" to="/taikai-videos">Taikai Videos</Link></li>
                        <li><Link className="todo-link" to="/practices">Practices</Link></li>
                        <li><Link className="todo-link" to="/pictures">Pictures</Link></li>
                    </ul>
                </li>
                <li><Link style={{"display": "none"}}className="todo-link" to="#">(屮｀∀´)屮</Link></li>
            </ul>
            <hr />
            <ul>
                <li>
                    <i>Current Schedule</i>
                    <br />
          Closed until further notice
                </li>
                <li>
                    <i>Kendo</i>
                    <br />
          7:00-9:00 PM
                    <br />
          Wednesday and Friday
                </li>
                <li>
                    <i>Iaido</i>
                    <br />
          TBD
                </li>
                <li>
                    <i>Locations</i>
                    <br />
          Wednesday: IMA Gym B
                    <br />
          Friday: IMA Studio 216
                </li>
            </ul>
        </nav>;
    }
}

export default Sidebar;
