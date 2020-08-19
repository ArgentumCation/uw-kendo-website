import React from "react";
import { Component } from "react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import {faBars} from '@fortawesome/free-solid-svg-icons'
import './style.css'

type HeaderProps = {
  toggleBar: React.MouseEvent<HTMLElement,MouseEvent>
}

class Header extends Component<HeaderProps> {
    myFunction() {
        const x :HTMLElement | null = document.getElementById("navbar");
        if (x != null){
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

    }

    render() {
        return <header>
            <button name="menu" className="menu-button" onClick={this.props.toggleBar}><FontAwesomeIcon className="menu-button" icon={faBars} /></button>
            <h1>
                <a href="/">Kendo Club at the University of Washington</a>
            </h1>
        </header>
        ;
    }
}

export default Header;
