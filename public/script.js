








function afficherArticles(){
    fetch("http://127.0.0.1:8000/api/articles", {
        method : "GET"
    }).then((response)=> response.json())
    .then((data) => console.log(data))
    .catch((error)=> console.log(error))
}

afficherArticles();


function deelete (){
    fetch("http://127.0.0.1:8000/api/articles/" + 3, {
        method : "DELETE"
    })
    .then((response) => response.json())
    .then((data)=> console.log(data))
    .catch((error)=> console.log(error))
}

deelete();