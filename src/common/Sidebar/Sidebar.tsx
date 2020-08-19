import React from "react";
import { Component } from "react";
import './style.css'
import { Link } from "react-router-dom";


type SidebarProps = {
  width: string
}

class Sidebar extends Component<SidebarProps> {

    renderx() {
        return <><nav style={{"width":this.props.width}}> <ul>

             <li>
                 <a href="#">Home</a>
             <li className="dropdown">
                 <a href="#">About</a>
                 <ul className="dropdown-content">
                     <li>
                         <a href="./legacy/about.php?p=history">The Club</a>
                     </li>
                     <li>
                         <a href="./legacy/index.php?p=faq">FAQ</a>
                     </li>
                     <li>
                         <a href="./legacy/index.php?p=join">Join Us</a>
                     </li>
                     <li>
                         <a href="./legacy/about.php?p=instructors">Instructors</a>
                     </li>
                     <li>
                         <a href="./officers.html">Officers</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="./legacy/payment.php">Payment</a>
             </li>
             <li>
                 <a href="#">Awards</a>
             </li>
             <li className="dropdown">
                 <a href="#">Resources</a>
                 <ul className="dropdown-content">
                     <li>
                         <a href="./legacy/resources.php?p=Warmup">Warm-Ups</a>
                     </li>
                     <li>
                         <a href="./legacy/resources.php?p=vocab">Vocab</a>
                     </li>
                     <li>
                         <a href="./legacy/resources.php?p=etiquette">Etiquette</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="./legacy/links.php">Links</a>
             </li>
             <li className="dropdown">
                 <a href="#">Media</a>
                 <ul className="dropdown-content">
                     <li>
                         <a href="./legacy/practicevideos.php">Practices</a>
                     </li>
                     <li>
                         <a href="./legacy/taikaivideos.php">Taikai Videos</a>
                     </li>
                     <li>
                         <a href="./legacy/photos.php?p=2012">Pictures</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="./legacy/?page_id=406">(屮｀∀´)屮</a>
             </li>
             <li>
                 <a href="./legacy">Old Website</a>
                 <p>Migration in progress</p>
             </li>
             <hr />
             <li>
                 <p><em>Winter Schedule</em></p>
                 <p> January 8 - March 13</p>
             </li>
             <li>
                 <p><em>Kendo</em></p>
                 <p> 7:00-9:00 PM</p>
                 <p> Wednesday and Friday</p>
             </li>
             <li>
                 <p><em>Iaido</em></p>
                 <p> 6:00-7:00 PM</p>
                 <p> Friday</p>
             </li>
             <li>
                 <p><em>Locations</em></p>
                 <p>Wednesday: IMA Gym B</p>
                 <p>Wednesday: IMA Studio 216</p>
             </li>
         </li></ul></nav>
         </>
    }

    render(){
      return <nav style={{"width":this.props.width}}>
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
      <li><Link to="https://www.facebook.com/uwkendoclub">Facebook</Link></li>
      <li><Link to="https://www.instagram.com/kendo_uw/">Instagram</Link></li>
      <li><Link to="http://mailman13.u.washington.edu/mailman/listinfo/uwkendo">Mailing List</Link></li>
      <li><Link className="todo-link" to="#">Awards</Link></li>
      <li> Resources
        <ul>
          <li><Link className="todo-link" to="#">Warm-Ups</Link></li>
          <li><Link className="todo-link" to="#">Vocab</Link></li>
          <li><Link className="todo-link" to="#">Etiquette</Link></li>
        </ul>
      </li>
      <li><Link className="todo-link" to="#">Links</Link></li>
      <li> Resources
        <ul>
          <li><Link className="todo-link" to="#">Taikai Videos</Link></li>
          <li><Link className="todo-link" to="#">Practices</Link></li>
          <li><Link className="todo-link" to="#">Pictures</Link></li>
        </ul>
      </li>
      <li><Link className="todo-link" to="#">(屮｀∀´)屮</Link></li>
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
      </nav>
    }
}

export default Sidebar;
