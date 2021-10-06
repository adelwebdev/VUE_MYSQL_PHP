const vue = new Vue({
  data: () => {
    return {
      wines: [],
    };
  },

  methods: {
    removeItem(id) {
      this.$delete(this.wines, id);
    },
    getImgUrl(pic) {
      return "assets/uploads/" + pic;
    },
  },

  mounted() {
    axios
      .get("libraries/controllers/getData.php")
      .then((res) => res.data)
      .then((res) => (this.wines = res));
    // .then((res) => console.log(res));
  },
}).$mount("#vue-app");
