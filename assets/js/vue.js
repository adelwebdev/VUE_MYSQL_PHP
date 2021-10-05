const vue = new Vue({
  mounted() {
    axios
      .get("libraries/controllers/getData.php")
      .then((res) => res.data)
      .then((res) => console.log(res));
  },
}).$mount("#vue-app");
