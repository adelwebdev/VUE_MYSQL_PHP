<div id="vue-app" class="lobby-container">
  <ul>
    <li class="name">
      <i class="fas fa-search"></i>
      <input v-model="searchKey" type="search" class="search" placeholder="Entrez le nom d'un vin...">
    </li>

    <li class="country">
      <i class="fas fa-globe-europe"></i>
    </li>

    <li class="grapes">
      <i class="fas fa-wine-glass-alt"></i>
    </li>
  </ul>

  <h3 v-if="search.length == 0">Aucun résultat</h3>

  <div class="list-container">
    <div v-for ="wine, id in search" v-bind:key="id" class="wine-list">
      <div class="wine-card">
        <div class="card-header">
          <h2>{{ wine.name}}</h2>
          <i @click="removeItem(id)" class = "fas fa-times"></i>
        </div>
        <div class="container">
          <div class="text-container">
            <div class="buttons">
              <h4>{{ wine.year }}</h4>
              <h4>{{ wine.country }}</h4>
              <h4>{{ wine.grapes }}</h4>
            </div>
            <div class="location">
              <i class="fas fa-map-marker-alt"></i>
              <span>{{ wine.region }}</span>
            </div>
            <p>{{ wine.description }}</p>
          </div>
          <img :src="getImgUrl(wine.picture)" alt="photo-bouteille">
        </div>
  </div>
    </div>
  </div>
</div>