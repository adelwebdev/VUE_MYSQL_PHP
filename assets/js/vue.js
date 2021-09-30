// on crée d'abord une nouvelle instance de vue avec mount vers notre id vue (ici #vue-app)
// faut récupérer la data qu'on a fait en Json ( echo json_encode($sql->fetchAll()); )
// dans fichier index.js : comme récupérer la data en pure JS
// on ne va pas se récupérer la data en Fetch : on vautiliser AXIOS avec axios cdn
// axios sa ressemble à fetch mais sauf que il convertit directement l'objet json en javascript

const vue = new Vue({
  mounted() {
    axios
      .get("/libraries/controllers/getData.php")
      .then((res) => res.data)
      .then((res) => console.log(res));
  },
}).$mount("#vue-app");
