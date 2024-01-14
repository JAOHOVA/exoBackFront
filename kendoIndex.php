<!DOCTYPE html>
<html>
<head>
    <title>Exemple de tableau avec Kendo UI et jQuery</title>
    <!-- Inclure les fichiers CSS et JavaScript de Kendo UI -->
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/themes/6.7.0/default/default-main.css"/>
<script src="https://kendo.cdn.telerik.com/2023.2.829/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2023.2.829/js/kendo.all.min.js"></script>
</head>
<body>
    <div id="grid"></div>

    <script>
        $(document).ready(function() {
            // Création du tableau Kendo UI Grid pour afficher les données
            $("#grid").kendoGrid({
                dataSource: {
                    transport: {
                        // Requête AJAX pour récupérer les données depuis le backend (PHP)
                        read: {
                            url: 'traitement.php',
                            dataType: 'json'
                        }
                    },
                    schema: {
                        model: {
                            fields: {
                                Nom: { type: "string" },
                                Âge: { type: "number" },
                                Ville: { type: "string" }
                            }
                        }
                    },
                    pageSize: 10 // Nombre d'éléments à afficher par page
                },
                height: 400,
                sortable: true,
                pageable: true,
                columns: [
                    { field: "Nom", title: "Nom" },
                    { field: "Âge", title: "Âge" },
                    { field: "Ville", title: "Ville" }
                ]
            });
        });
    </script>
</body>
</html>
