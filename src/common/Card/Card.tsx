import React, {FunctionComponent, Suspense} from "react";
import ReactMarkdown from "react-markdown"
import './style.css'

export type CardProps = {
  title: string,
  body: string,
  date: Date
  image?: string
}



const Card: FunctionComponent<CardProps> = ({title, body, date,image}) =>
{
  return <section>
  <h2>{title}</h2>
  {
    image &&
    <div className="img-container">
        <img alt="" src={`Images/${image}`} style={{
            "maxWidth" : "100%"
          }}/>
      </div>
  }
  <Suspense fallback={<p>{body}</p>}>
  <ReactMarkdown source={body} />
  </Suspense>
  <h4>{date.toLocaleDateString()}</h4>
</section>
}


export default Card
