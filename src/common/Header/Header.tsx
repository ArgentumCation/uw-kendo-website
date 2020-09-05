import {faBars} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import React from "react";
import { Component } from "react";
import "./style.css";

interface HeaderProps {
  toggleBar: (event: React.MouseEvent) => void;
}

class Header extends Component<HeaderProps> {
    public myFunction() {
        const x: HTMLElement | null = document.getElementById("navbar");
        if (x != null) {
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

    }

    public render() {
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
