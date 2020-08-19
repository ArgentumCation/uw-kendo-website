import {FunctionComponent} from "react";
import React from "react";
import { Link } from "react-router-dom";

const TheClub: FunctionComponent = () => {
  return <>
  <p>The Kendo Club at University of Washington (UW) is a sports club sponsored by the University of Washington
Department of Recreational Sports Programs. The Kendo Club at UW is open to currently enrolled UW students
and faculty/staff members that have purchased a quarterly or annual IMA Membership Card.</p>

<p>The Kendo Club at UW is a recognized member dojo of the Pacific Northwest Kendo Federation and the All
United States Kendo Federation. Members of the club are eligible to	become members in good standing
of both federations and are entitled to all privileges of the same.</p>

<p>No martial arts experience is necessary to join the club. Kendo is a martial art that can be
practiced regardless of age, experience	or physical condition. If you are interested in joining the
club, we highly encourage you to come down and observe a practice to see if Kendo is for you.
Consult the <Link to="/faq">FAQ</Link> for answers to some common questions.</p>

<p>The Kendo Club at UW meets twice a week, on Wednesdays and Fridays from the first week of each
academic quarter until the week before finals. The club does not meet/practice during academic breaks.
Practices on Wednesday nights are led by guest instructor Jeffrey Marsten and David Yotsuuye sensei and
include kata, basic drills, waza, and keiko. Friday night practices are led by sensei from the area on a
rotating schedule and feature drills, waza, and keiko.</p>
 </>
}
export default TheClub;
