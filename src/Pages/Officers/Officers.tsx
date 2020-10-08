import {FunctionComponent} from "react";
import React from "react";
import { Link } from "react-router-dom";
import OfficerCard from "../../common/OfficerCard/OfficerCard";

const Officers: FunctionComponent = () => {
    return <>
        <h1 style={{margin: "0"}}>Officers</h1>
        <OfficerCard position="President" name="Jane Higa" image="Officers/jane.jpg"/>
        <OfficerCard position="Vice President" name="Brian Wong" image="Officers/brian.jpg"/>
        <OfficerCard position="Webmaster" name="Ajay Kristipati" quote="In hindsight I probably should have started working on this website in November" image="Officers/ajay.jpg"/>
        <OfficerCard position="Webmaster" name="Linni Cai" image="Officers/linni.jpg"/>
        <OfficerCard position="Treasurer" name="Andy Yuen" image="Officers/andy.jpg"/>
        <OfficerCard position="Safety Officer" name="Cian Alexander Chu" quote="clip your toenails" image="Officers/cian.jpg"/>
        <OfficerCard position="" name="Juno Lee" image="Officers/juno.jpg"/>
        <OfficerCard position="" name="AJ Chau" image="Officers/aj.jpg"/>
        <OfficerCard position="" name="Brian Hong" image="Officers/brian_h.jpg"/>
        <OfficerCard position="" name="Camille Miller" image="Officers/camille.jpg"/>
        <OfficerCard position="" name="Kyle Fukuda" image="Officers/kyle.jpg"/>
        <OfficerCard position="" name="Welson Nguyen" image="Officers/welson.jpg"/>
    </>;
};
export default Officers;
