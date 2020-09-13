import React, {Suspense} from "react";
import ReactMarkdown from "react-markdown";
import "./style.css";


export interface CardProps{
  title: string,
  body: string,
  date: Date,
  image?: string,
}

const Card = ({title,body,date,image}: CardProps) => {
    return <section>
        <h2>{title}</h2>
        {
            image &&
      <div className="img-container">
          <img alt="" src={`Images/${image}`} style={{
              maxWidth: "100%",
          }}/>
      </div>
        }
        <Suspense fallback={<p>{body}</p>}>
            <ReactMarkdown source={body} />
        </Suspense>
        <h4>{date.toLocaleDateString()}</h4>
    </section>;
};

// export interface CardProps{
//   title: string,
//   body: string,
//   date: Date,
//   image?: string,
// }
//
//
//
//
// const Card: FunctionComponent<CardProps> => {
//     return <section>
//         <h2>{title}</h2>
//         {
//             image &&
//     <div className="img-container">
//         <img alt="" src={`Images/${image}`} style={{
//             maxWidth: "100%",
//         }}/>
//     </div>
//         }
//         <Suspense fallback={<p>{body}</p>}>
//             <ReactMarkdown source={body} />
//         </Suspense>
//         <h4>{date.toLocaleDateString()}</h4>
//     </section>;
// };
//
// Card.propTypes = {
//     title: PropTypes.string,
//     body: PropTypes.string,
//     date: PropTypes.Date,
//     image: PropTypes.string | PropTypes.undefined,
// };
export default Card;
