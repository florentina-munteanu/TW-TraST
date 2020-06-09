

const rssClasamentUrl = `https://localhost:3306/TW/ClasamentUtilizatori/feed.xml`;


const table  = document.getElementById('scoreTable')

/// https://css-tricks.com/how-to-fetch-and-parse-rss-feeds-in-javascript/
async function loadRSS()
{
  fetch(rssClasamentUrl)
    .then(response => response.text())
    .then(str => new window.DOMParser().parseFromString(str, "text/xml"))
    .then(data => {
      const items = data.querySelectorAll("item");
      let html = ``;
      items.forEach(el => {
        html += `
            <tr>
              <td>${el.querySelector('username')}</td>
              <td>${el.querySelector('score')}</td>
            </tr>
        `;
      });
      document.body.insertAdjacentHTML("beforeend", table);
    });
}
////
loadRSS();