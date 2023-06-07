<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation de réservation de cocktail</title>

    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Open Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>
<body style="margin: 20px auto;">
    <div style="background-color: #f2f2f2; padding: 20px;">
        <h2 style="text-align: center;">Confirmation de réservation de cocktail chez MRoy Cocktail</h2>
        <p>
            Cher(e) {{ $client->firstname }},<br>
            <br>
            Nous sommes ravis de vous informer que votre réservation pour un cocktail chez MRoy Cocktail a été confirmée. Voici les détails de votre réservation :
        </p>
        <ul>
            <li><strong>Date :</strong>  {{ $reservation->date }}</li>
            <li><strong>Heure :</strong> [Heure de la réservation]</li>
            <li><strong>Nombre de personnes :</strong> {{ $reservation->nbrPeople}}</li>
            <li><strong>Type de cocktail :</strong> {{ $reservation->type_Cocktail }}</li>
        </ul>
        <p>
            Si vous avez des questions supplémentaires ou si vous souhaitez modifier votre réservation, n'hésitez pas à nous contacter.
        </p>
        <p>
            Nous sommes impatients de vous accueillir chez MRoy Cocktail et de vous offrir une expérience inoubliable !
        </p>
        <p>
            Cordialement,<br>
            L'équipe MRoy Cocktail
        </p>
    </div>
</body>
</html>
