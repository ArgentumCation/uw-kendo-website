import React, {FunctionComponent} from "react";
import Card, {CardProps} from "../../common/Card/Card";
import Carousel from "../../common/Carousel/Carousel";
import postsData from "../../Posts/Posts.json"

const Home: FunctionComponent = () => {

  let posts: CardProps[] = postsData.posts.map(post => {
    return {
      "title": post.title,
      "body": post.body,
      "date": new Date(post.date),
      "image": post.image
    }
  });

  return <>
  <Carousel />
  {
    posts.map(e => <Card title={e.title} body={e.body} date={new Date(e.date)} image={e.image}/>)
  }
  </>
}

export default Home;
