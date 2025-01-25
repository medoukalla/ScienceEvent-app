<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 700px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: left;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header img {
            max-width: 150px;
        }
        .header .invoice-title {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }
        .invoice-number {
            font-size: 14px;
            margin-top: 5px;
            color: #666;
        }
        .info-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .info-section div {
            /* width: 48%; */
        }
        .info-section p {
            margin: 2px 0;
        }
        .info-section .bold {
            font-weight: bold;
        }
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .items-table th, .items-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .items-table th {
            background-color: #00254d;
            color: #fff;
        }
        .items-table td.text-right {
            text-align: right;
        }
        .total-section {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .total-section .total-label {
            font-weight: bold;
            font-size: 14px;
        }
        .total-section .total-value {
            font-weight: bold;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            text-align: center;
            color: #666;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            
        <img src="{{ public_path('storage/'.setting('site.logo')) }}" alt="" style="width: 200px; height: auto;">

            <div>
                <p class="invoice-title">FACTURE</p>
                <p class="invoice-number"># INV{{ $order->created_at->format('y') }}/0{{ $order->id }}</p>
            </div>
        </div>

        <!-- Information Section -->
        <div class="info-section">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%;">
                        <div>
                            <p class="bold">Science Events</p>
                            <p>Koutoubia Center II, Av Hassan II, Gueliz</p>
                            <p>Marrakech, MA 40000</p>
                        </div>
                    </td>
                    <td style="width: 50%;">
                        <div style="text-align: right;">
                            <p class="bold">Destinataire:</p>
                            <p>{{ $order->user->name }}</p>
                            <p>{{ $order->user->phone }}</p>
                            <p>{{ $order->user->email }}</p>
                        </div>
                    </td>
                </tr>
            </table>
            
        </div>

        <div class="info-section">
            <div>
                <p><span class="bold">Date de facture:</span> {{ $order->updated_at->format('d.m.Y') }}</p>
            </div>
            <div>
                <p><span class="bold">Bénéficiaire:</span> {{ $order->user->name }}</p>
            </div>
        </div>

        <!-- Items Table -->
        <table class="items-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Désignation</th>
                    <th>Qté</th>
                    <th>Prix unitaire</th>
                    <th></th>
                    <th>Montant TTC</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <u>{{ $order->pack->title }}</u> <br> 
                        {{ $order->formation->title }}
                    </td>
                    <td>1</td>
                    <td class="text-right">{{ $order->price }}.00</td>
                    <td>TVA 20.00%</td>
                    <td class="text-right">{{ $order->price * 1.2 }}.00</td>
                </tr>
            </tbody>
        </table>

        <!-- Total Section -->
        <div class="total-section">
            <p class="total-label">Total en lettre : <b>{{ $total_letters }}</b></p>
            <p class="total-label">Total TTC : <b>{{ $order->price * 1.2 }}.00 MAD</b></p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>Science Events</p>
            <p>Patente: 451 94531 | CNSS: 4322046 | RC: 66647 | IF: 15225022 | ICE: 001585090000037</p>
            <p>Compte ATTIJARIWAFA BANK RIB: 007 450 0015 2080 000 000 4997</p>
            <p>Email: contact@science-events.ma</p>
        </div>
    </div>
</body>
</html>
