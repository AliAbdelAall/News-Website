const news_form = $("#news-form")
const title_input = $("#title-input")
const content_input = $("#content-input")
const news_container = $("#news-container")

const loadNews = () => {
  $.ajax({
    url: "http://127.0.0.1/News-Website/backend/get-news.php",
    method: "GET",
    dataType: "json",
    success: (data) => {
      console.log(data)
      displayNews(data)
    },
    error: (error) => {
      console.error(error)
    }
  })
  // fetch("http://127.0.0.1/News-Website/backend/get-news.php", {
  //   method: 'GET'
  // })
  //   .then((response) => {
  //     return response.json()

  //   }).then((data) => {
  //     console.log(data)
  //     // displayNews(data)

  //   }).catch((error) => {
  //     console.error(error)
  //   })
}
// loadNews()
// const displayNews = (data) => {
//   news_container.empty()
//   $.each(data.news, (i, news) => {
//     const news_div = $("<div>").addClass("flex column gap-10 news-wrapper")

//     const

//   })
// }