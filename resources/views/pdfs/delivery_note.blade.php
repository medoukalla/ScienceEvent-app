<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bon de Livraison</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            background-color: #f9f9f9;
            line-height: 1.5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .footer {
            font-size: 0.9em;
            color: #555;
        }
        h1, h3 {
            margin: 0;
        }
        h1 {
            color: #00254d;
        }
        h3 {
            color: #3b76d4;
        }
        .section-title {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #00254d;
            border-bottom: 2px solid #3b76d4;
            display: inline-block;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #3b76d4;
            color: white;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f4f7fb;
        }
        .text-right {
            text-align: right;
        }

        /* Highlight Total */
        .highlight {
            background-color: #dce9f9;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Science Events</h1>
            <h3>Bon</h3>
            <p>La formation e-learning que les soignants méritent</p>
        </div>

        <!-- Client Information -->
        <div class="section">
            <h4 class="section-title">Informations sur le client</h4>
            <p><strong>Nom:</strong> {{ $customerName }}</p>
            <p><strong>Téléphone:</strong> {{ $customerPhone }}</p>
            <p><strong>Email:</strong> {{ $customerEmail }}</p>
        </div>

        <!-- Order Details -->
        <div class="section">
            <h4 class="section-title">Détails de la commande</h4>
            <table>
                <tr>
                    <td><strong>Numéro de commande:</strong> <br><u>{{ $orderNumber }}</u></td>
                    <td><strong>Date de commande:</strong> {{ $orderDate }}</td>
                </tr>
                <tr>
                    <td><strong>Méthode de paiement:</strong> {{ $paymentMethod }}</td>
                    <td><strong>État du paiement:</strong> En attente de confirmation</td>
                </tr>
            </table>
        </div>

        <!-- Ordered Products -->
        <div class="section">
            <h4 class="section-title">Produits commandés</h4>
            <table>
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Date</th>
                        <th>Total (DH)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['date'] }}</td>
                        <td class="text-right">{{ $item['price'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="highlight">
                        <td colspan="2" class="text-right">Total:</td>
                        <td class="text-right">{{ $total }} DH</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Merci pour votre commande sur Science Events!</p>
            <p>Contactez-nous pour toute question: support@scienceevents.fr</p>
        </div>
    </div>
</body>
</html>
