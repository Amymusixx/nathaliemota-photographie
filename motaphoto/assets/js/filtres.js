jQuery(document).ready(function ($) {
    // Gestionnaire d'événements pour les changements dans les filtres
    $('#category-filter, #format-filter,#date-filter').change(function () {
        // Récupérer les valeurs des filtres
        var category = $('#category-filter').val();
        var format = $('#format-filter').val();
        var dateOrder = $('#date-filter').val();

        console.log(dateOrder)

        // Envoyer une requête AJAX au serveur
        $.ajax({
            url: ('/nathaliemota-photographie/wp-admin/admin-ajax.php'),
            type: 'post',
            data: {
                action: 'filter_photos', // Nom de l'action WordPress
                category: category,
                format: format,
                date_order: dateOrder
            },
            success: function (response) {
                // Mettez à jour la section des photos avec les nouvelles données
                $('.container-galery').html(response);
   
            }
        });
    });
});