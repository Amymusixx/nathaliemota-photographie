jQuery(document).ready(function($) {
  var page = 2; // Initialisez la page à 2 (la première page a déjà été chargée)

  // Fonction pour charger plus de photos
  function loadMorePhotos() {
      var data = {
          action: 'load_more_photos',
          page: page,

      };

      $.ajax({
          url: ('/nathaliemota-photographie/wp-admin/admin-ajax.php'),
          type: 'post',
          data: data,
          success: function(response) {
              // Insérez les nouvelles photos dans le conteneur
              $('.container-galery').append(response);
              page++;

              // Vérifiez s'il y a encore de photos à charger
          if ($(response).filter('.container-gallery').length === 0) {
              // Aucune nouvelle photo à charger, masquer le bouton "Load More"
           $('#load-more').hide();
          }
      },
  });
}
  // Gérer le clic sur le bouton "Load More"
  $('#load-more').on('click', function() {
      loadMorePhotos();
  });   

});
