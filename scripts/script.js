Vue.config.devtools = true;

new Vue({
  el: "#root",
  data: {
    arrCd: [],
  },
  mounted() {
    axios.get("http://localhost:8888/php-ajax-dischi/api/apiData.php").then((resp) => {
      this.arrCd = resp.data.cdList;
    })
  }
})