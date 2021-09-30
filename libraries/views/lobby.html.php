<!-- avec id="vue-app" toute notre application sera borné dans cet ID (c là que vue va agir) -->
<!-- maintenant on va dans vue.js (dans assets/js) et on crée une nouvelle instance de vue -->

<div id="vue-app" class="lobby-container">
  <ul>
    <li class="name">
      <i class="fas fa-search"></i>
      <input type="search" class="search" placeholder="Entrez le nom d'un vin...">
    </li>

    <li class="country">
      <i class="fas fa-globe-europe"></i>
    </li>

    <li class="grapes">
      <i class="fas fa-wine-glass-alt"></i>
    </li>
  </ul>

  <div class="wine-list">
    <div class="wine-card">

    </div>
  </div>
</div>