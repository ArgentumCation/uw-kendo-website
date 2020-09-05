import {FunctionComponent} from "react";
import React from "react";
import awards from "../../Data/Tournaments.json";

type award = {
  "division": string,
  "name"?: string,
  "place": string
}

type ITournament = {
  [key: string]: award[]
}

type AwardObj = {
  [year: string]: ITournament[]
}


const Awards: FunctionComponent = () => {
    const awardList = awards as AwardObj;
    return <div style={{"display": "flex", "flexWrap": "wrap"}}>
        {
            Object.keys(awardList).map(
                (year) => <section style={{"flex": "0 1 30ch", "order": -year}} key={year}>
                    <h2>{year}</h2>
                    <br />
                    {<div>{awardList[year].map((tournament) =>
                        Object.keys(tournament).map((e) => <>
                            <h3>{e}</h3>
                            {tournament[e].map((award) => <p key={`${e}-${award.division}-${award.place}`}>{`${award.division} - ${award.place}` + (award.name !== undefined ? `: ${award.name}` : "")}</p>)}
                            <br /></>)

                    )} <br /> </div>}

                </section>

            )
        }
    </div>;
};
export default Awards;
