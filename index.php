<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <!-- Axios -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- Vue -->
   <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
   <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
   <div id="app">
      <header>
         <nav>
            <h4>Studio Signorella</h4>
            <ul>
               <li>The Work.</li>
               <li>The Story.</li>
               <li>Say hello.</li>
            </ul>
         </nav>
      </header>
      <main>
         <div class="container-fluid p-3">
            <div class="row p-3">
               <div class="col-6" v-for="artwork in artworks">
                  <img :src="artwork.image" class="img-fluid" :alt="artwork.author">
                  <h4>{{ artwork.title }}</h4>
               </div>
            </div>
         </div>
      </main>
   </div>
   <script src="./scripts/script.js"></script>
</body>
</html>