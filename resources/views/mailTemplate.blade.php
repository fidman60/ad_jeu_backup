<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>AD Jeu Été</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        #parent {
            font-family: sans-serif;
            color: #575756;
            font-size: 12px;
            line-height: 1.5;
            padding: 0;
            width: 600px;
            height: 700px;
            margin: auto;
            background-color: white;
        }

        #header {
            height: 215px;
            background-image: url("{{url('/mail')}}/background-header.png");
            background-repeat: no-repeat;
            box-sizing: border-box;
            padding-left: 84px;
            padding-top: 178px;
            color: #09090a;
            font-size: 10px;
        }

        #msgContent {
            padding-top: 9px;
            padding-left: 84px;
            padding-bottom: 16px;
            color: #0f0f10;
        }

        p {
            margin: 0;
            padding: 0;
        }

        #fbLink {
            width: 493px;
            text-align: right;
            color: #090809;
        }

        #fbLink img {
            vertical-align: middle;
            margin-left: 4px;
        }

        #footer {
            height: 84px;
        }

        #footer {
            background-image: url("{{url('/mail')}}/background-footer.png");
        }

    </style>
</head>
<body>
<div id="parent">
    <div id="header">
        <div id="refTxt">{{ $numero }}</div>
    </div>
    <div id="msgContent">
        <p style="margin-bottom: 26px">Bravo {{ $civilite ? 'M.' : 'Mme.' }} {{ $nom }},</p>
        <p style="margin-bottom: 17px">
            Votre participation au GRAND JEU ÉTÉ est bien prise en compte.<br>
            Le tirage au sort aura lieu le 2 septembre 2019.<br>
            Les heureux gagnants seront contactés par email ou par téléphone.<br>
            Alors conservez soigneusement cet email, il pourra vous être demandé.<br>
        </p>
        <p style="margin-bottom: 17px">N’hésitez pas à partager avec vos proches pour leur donner une chance de gagner.</p>
        <p style="margin-bottom: 17px">Merci de votre confiance et à bientôt dans le réseau AD.</p>
        <p id="fbLink">Rejoignez-nous sur Facebook <a href="https://www.facebook.com/autodistributiongroup/">
            <img alt="fb-logo" src="{{url('/mail')}}/fb-icon.png"></a>
        </p>
    </div>
    <div id="footer"><p>&nbsp;</p></div>
    <p></p>
</div>
</body>
</html>
