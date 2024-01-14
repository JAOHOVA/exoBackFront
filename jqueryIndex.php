<!DOCTYPE html>
<html>
<head>
    <title>Exemple de tableau avec jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <table id="tableau-donnees">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
                <th>Ville</th>
            </tr>
        </thead>
        <tbody id="corps-tableau">
            <!-- Les données seront insérées ici dynamiquement -->
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            // Requête AJAX pour récupérer les données depuis le backend (PHP)
            $.ajax({
                url: 'traitement.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    // Manipulation des données reçues pour les afficher dans le tableau
                    const tbody = $('#corps-tableau');
                    $.each(data, function(index, item) {
                        const row = $('<tr>');
                        row.append(`<td>${item.Nom}</td>`);
                        row.append(`<td>${item['Âge']}</td>`);
                        row.append(`<td>${item.Ville}</td>`);
                        tbody.append(row);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Erreur :', error);
                }
            });
        });
    </script>
</body>
</html>
