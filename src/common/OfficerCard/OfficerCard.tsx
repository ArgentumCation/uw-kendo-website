import React, {FunctionComponent} from "react";
import ReactMarkdown from "react-markdown";
import "./style.css";

export interface OfficerCardProps {
  position: string;
  name: string;
  quote?: string;
  image?: string;
}

const OfficerCard: FunctionComponent<OfficerCardProps> = ({position, name, quote, image}) => {
    return <section className="officer-card">
        <div className="officer-info">
            <h2>{position}</h2>
            <h3>{name}</h3>
            <p>{quote}</p>
        </div>
        {image &&
            <div className="officer-img">
                <img src={`Images/${image}`} />
            </div>}
    </section>;
};

export default OfficerCard;
