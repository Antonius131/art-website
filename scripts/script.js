const app = new Vue({
   el: '#app',
   data: {
     artworks: [

     ]
   },
   methods: {
      getArtworks() {
         axios.get('http://localhost:8888/art%20website/server.php')
         .then(result => {
            this.artworks = result.data;
            console.log(this.artworks);
         })
      }
   },
   created: function() {
      this.getArtworks();
   }
 })