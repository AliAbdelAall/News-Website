const news_form = $("#news-form")
const title_input = $("#title-input")
const content_input = $("#content-input")
const news_container = $("#news-container")

const loadNews = () => {
  fetch("http://127.0.0.1/News-Website/backend/get-news.php", {
    method: 'GET'
  })
    .then((response) => {
      return response.json()

    }).then((data) => {
      displayNews(data)

    }).catch((error) => {
      console.error(error)
    })
}

// const displayNews = (data) => {
//   news_container.empty()


// }