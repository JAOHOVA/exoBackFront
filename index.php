<!DOCTYPE html>
<html>
<head>
    <title>Exemple de tableau</title>
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
        // Requête AJAX pour récupérer les données depuis le backend (PHP)
        fetch('traitement.php')
            .then(response => response.json())
            .then(data => {
                // Manipulation des données reçues pour les afficher dans le tableau
                const tbody = document.getElementById('corps-tableau');
                data.forEach(item => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${item.Nom}</td>
                        <td>${item['Âge']}</td>
                        <td>${item.Ville}</td>
                    `;
                    tbody.appendChild(row);
                });
            })
            .catch(error => console.error('Erreur :', error));
    </script>
</body>
</html>
