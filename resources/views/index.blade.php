<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Grand Jeu Été</title>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-102395181-17"></script>
        <script>

          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-102395181-17');

        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/i18n/fr.js"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <style type="text/css">
            .select2-container{
                width: 227px !important;
                margin-bottom: 10px;
            }
            /*.select2-container--default .select2-results>.select2-results__options {
                max-height: 110px;
                overflow-y: auto;
            }
            .select2-results__option.select2-results__message{
                display: none;
            }*/
            .select2-results__options .select2-results__option:first-child{
                display: none;
            }
            .ui-widget.ui-widget-content{
                    z-index: 9999999999999999999 !important;
            }
            .fullWidthInput{
                position: relative;
                z-index: 100;
            }

            .corr{
                font-size: 11px;
            }
        </style>
    </head>
    <body>
        <div id="parent">

            <div id="parentMentionLegal">
                <div id="mentionLegal">
                    <div style="font-weight: normal !important;" class="calibre" id="calibre_link-0">
                        <p style="font-weight: normal !important;" class="block_">Le présent site est la propriété de la société AUTODISTRIBUTION, Société par actions simplifiée à Comité de Direction et Comité de Surveillance dont le Siège social se situe 22, avenue Aristide Briand, 94110 Arcueil au Capital&nbsp;social de 69&nbsp;679&nbsp;124 € inscrite au RCS CRETEIL B 962 227&nbsp;351 &ndash; SIRET 962&nbsp;227&nbsp;351 00054 - N° TVA intracommunautaire&nbsp;: FR 89 962 227&nbsp;351.&nbsp;<br class="calibre1" />&nbsp;</p>
                        <p style="font-weight: normal !important;" class="block_">Directeur de la publication&nbsp;: Bruno Dumay pour le compte de Venise HBA la société qui a réalisé le développement du site et assure l’animation durant la période du concours ainsi que son hébergement sur son serveur fourni par OVH.</p>
                        <p style="font-weight: normal !important;" class="block_">Adresse email de contact&nbsp;: contact(at)veniseactivation.com</p>
                        <p style="font-weight: normal !important;" class="block_"><br class="calibre1" />En conformité avec les dispositions de la loi du 6 janvier 1978 relative à l’Informatique, aux fichiers et aux libertés, le traitement automatisé des données nominatives réalisé à partir du site a fait l’objet d’une déclaration auprès de la Commission Nationale de l’Informatique et des Libertés (CNIL).&nbsp;<br class="calibre1" /><br class="calibre1" />L’utilisateur est notamment informé que, conformément à l’article 27 de la loi Informatique, fichiers et libertés du 6 janvier 1978, les réponses données aux formulaires présents sur le site pourront être transmises et exploitées par la société Venise HBA pour le tirage au sort et qu’il dispose d’un droit d’accès et de rectification portant sur ces données en écrivant à la société Venise HBA, service des données personnelles, 37 à 41 rue Fernand Pelloutier &ndash; 92100 BOULOGNE BILLANCOURT.&nbsp;<br class="calibre1" /><br class="calibre1" />L’utilisateur du site reconnaît disposer de la compétence et des moyens nécessaires pour accéder et utiliser ce site.&nbsp;<br class="calibre1" />L’utilisateur reconnaît avoir vérifié que la configuration informatique utilisée ne contient aucun virus et qu’elle est en bon état de fonctionnement.&nbsp;<br class="calibre1" />Les informations nominatives concernant l’utilisateur sont à usage interne des clients utilisateurs des fonctionnalités de la plateforme dans le cadre de leur mise en conformité au RGPD et de la société Venise HBA.</p>
                        <p style="font-weight: normal !important;" class="block_"><br class="calibre1" />Les utilisateurs du site sont tenus de respecter les dispositions de la loi relative à l’Informatique, aux fichiers et aux Libertés, dont la violation est passible de sanctions pénales.&nbsp;<br class="calibre1" />Ils doivent notamment s’abstenir, s’agissant des informations nominatives auxquelles ils accèdent de toute collecte, de toute utilisation détournée et d’une manière générale, de tout acte susceptible de porter atteinte à la vie privée à la réputation des personnes.&nbsp;<br class="calibre1" /><br class="calibre1" />La structure générale, ainsi que les logiciels, textes, images animées ou fixes, sons, savoir-faire, dessins, graphismes (…) et tout autre élément composant le site sont la propriété exclusive de la société AUTODISTRIBUTION.&nbsp;<br class="calibre1" /><br class="calibre1" />Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation expresse de la société AUTODISTRIBUTION, est interdite et constituerait une contrefaçon sanctionnée par les articles L 335-2 et suivants du Code de la propriété intellectuelle.&nbsp;<br class="calibre1" /><br class="calibre1" />Il en est de même des bases de données figurant sur le site, qui sont protégées par les dispositions de la loi du 1er juillet 1998 portant transposition dans le Code de la propriété intellectuelle de la directive européenne du 11 mars 1996 relative à la protection juridique des bases de données et dont la société Venise HBA est productrice.&nbsp;<br class="calibre1" /><br class="calibre1" />Les marques de la société AUTODISTRIBUTION et de ses partenaires, ainsi que les logos figurant sur le site sont des marques (semi-figuratives ou non) déposées.&nbsp;<br class="calibre1" /><br class="calibre1" />Toute reproduction totale ou partielle de ces marques ainsi que toute représentation totale ou partielle de ces marques et/ou logos, effectuées à partir des éléments du site sans l’autorisation expresse de la société AUTODISTRIBUTION sont dont prohibées, au sens de l’article L 713-2 du Code de la propriété intellectuelle.&nbsp;<br class="calibre1" /><br class="calibre1" />Les liens hypertextes mis en place dans le cadre du présent site en direction d’autres ressources présentes sur le réseau Internet et notamment vers ses partenaires ont fait l’objet d’une autorisation préalable, expresse et écrite.&nbsp;<br class="calibre1" /><br class="calibre1" />La société Venise HBA met tout en oeuvre pour offrir aux utilisateurs des informations et/ou outils disponibles et vérifiés, mais ne saurait être tenue pour responsable des erreurs, d’une absence de disponibilité des informations et/ou de la présence de virus sur son site.&nbsp;<br class="calibre1" /><br class="calibre1" />Ce site utilise Google Analytics, un service d’analyse de site internet fourni par Google Inc. (« Google »). Google Analytics utilise des cookies, qui sont des fichiers texte placés sur votre ordinateur, pour aider le site internet à analyser l’utilisation du site par ses utilisateurs. Les données générées par les cookies concernant votre utilisation du site (y compris votre adresse IP) seront transmises et stockées par Google sur des serveurs situés aux Etats-Unis. Google utilisera cette information dans le but d’évaluer votre utilisation du site, de compiler des rapports sur l’activité du site à destination de son éditeur et de fournir d’autres services relatifs à l’activité du site et à l’utilisation d’Internet. Google est susceptible de communiquer ces données à des tiers en cas d’obligation légale ou lorsque ces tiers traitent ces données pour le compte de Google, y compris notamment l’éditeur de ce site. Google ne recoupera pas votre adresse IP avec toute autre donnée détenue par Google. Vous pouvez désactiver l’utilisation de cookies en sélectionnant les paramètres appropriés de votre navigateur. Cependant, une telle désactivation pourrait empêcher l’utilisation de certaines fonctionnalités de ce site. En utilisant ce site internet, vous consentez expressément au traitement de vos données nominatives par Google dans les conditions et pour les finalités décrites ci-dessus.&nbsp;<br class="calibre1" />&nbsp;</p>
                        <p style="font-weight: normal !important;" class="block_">COOKIES ET ADRESSE IP</p>
                        <p style="font-weight: normal !important;" class="block_">Les serveurs web des sites internet de Venise HBA recueillent automatiquement auprès des utilisateurs des sites de Venise HBA (ci-après désignés par « les sites ») les informations relatives à l’utilisation des sites (ainsi que certaines autres informations comme le type de navigateur utilisé et le système d’exploitation ou encore les adresses IP). Les sites internet de Venise HBA peuvent également suivre l’utilisation faite par l’utilisateur des sites afin de mesurer l’activité générale des sites, d’analyser et d’apporter des améliorations aux sites et de divulguer des statistiques cumulées sur le nombre d’utilisateurs.&nbsp;<br class="calibre1" />Les sites internet de Venise HBA peuvent utiliser des cookies pour enregistrer l’activité des sites afin de gérer plus efficacement les sites et d’en améliorer votre utilisation. Les cookies sont de petits fichiers textes envoyés et stockés dans votre ordinateur qui permettent aux serveurs Web de reconnaître les habitudes des utilisateurs, leur faciliter l’accès aux sites de Venise HBA, et permettre aux sites de compiler des données globales qui permettront d’améliorer les sites et leur contenu. Les cookies n’endommagent ni les ordinateurs ni les fichiers.&nbsp;<br class="calibre1" />Les cookies en eux-mêmes ne peuvent servir à découvrir l’identité de l’utilisateur. Si vous ne souhaitez pas que les sites de Venise HBA aient accès aux cookies, votre programme de navigation vous permet de refuser ou de désactiver l’utilisation de cookies ; toutefois, veuillez noter que les cookies peuvent être nécessaires pour permettre aux sites de Venise HBA d’améliorer votre utilisation des sites. Les fonctionnalités de chaque navigateur étant différentes, le paragraphe suivant vous donnera de plus amples informations sur la façon de refuser ou de désactiver l’utilisation de cookies.&nbsp;<br class="calibre1" /><br class="calibre1" />Comment gérer vos cookies<br class="calibre1" /><br class="calibre1" />Vous disposez de plusieurs options pour supprimer les cookies.&nbsp;<br class="calibre1" />En effet, si la plupart des navigateurs sont paramétrés par défaut et acceptent l’installation de cookies, vous avez la possibilité, si vous le souhaitez, de choisir d’accepter tous les cookies, ou de les rejeter systématiquement ou encore de choisir ceux que vous acceptez selon l’émetteur.&nbsp;<br class="calibre1" />Vous pouvez également paramétrer votre navigateur pour accepter ou refuser au cas par cas les cookies préalablement à leur installation. Vous pouvez également régulièrement supprimer les cookies de votre terminal via votre navigateur.&nbsp;<br class="calibre1" />Pour la gestion des cookies et de vos choix, la configuration de chaque navigateur est différente. Elle est décrite dans le menu d’aide de votre navigateur, qui vous permettra de savoir de quelle manière modifier vos souhaits en matière de cookies. A titre d’exemple :&nbsp;<br class="calibre1" /><br class="calibre1" />• pour Internet Explorer™ : http://windows.microsoft.com/fr-fr/windows7/block-enable-or-allow-cookies&nbsp;<br class="calibre1" />• pour Safari™ : http://support.apple.com/kb/PH19214?viewlocale=fr_FR&nbsp;<br class="calibre1" />• pour Chrome™: http://support.google.com/chrome/bin/answer.py?hl=fr&amp;hlrm=en&amp;answer=95647&nbsp;<br class="calibre1" />• pour Firefox™ : http://support.mozilla.org/fr/kb/Activer%20et%20d%C3%A9sactiver%20les%20cookies&nbsp;<br class="calibre1" />• pour Opera™ : http://help.opera.com/Windows/10.20/fr/cookies.html&nbsp;<br class="calibre1" /><br class="calibre1" />Cependant, si vous paramétrez votre navigateur pour refuser les cookies ou que vous refusez l’installation d’un cookie, une telle désactivation pourrait empêcher l’utilisation de certaines fonctionnalités des sites de Venise HBA ou entraîner l’impossibilité d’accéder à certains services, ce dont nous ne saurions être responsables.&nbsp;<br class="calibre1" /><br class="calibre1" />Nous remercions les utilisateurs du site de nous faire part d’éventuelles omissions, erreurs, ou corrections, en utilisant l’adresse email de contact communiqué plus haut dans les présentes mentions..</p>
                        <p style="font-weight: normal !important;" class="block_1">&nbsp;</p>

                    </div>
                </div>
            </div>

            <div id="parentRegle">
                <div id="regle">
                    <div class="calibre" id="calibre_link-0">
                        <h1 class="block_" id="calibre_link-1">Règlement du jeu concours « GRAND JEU ÉTÉ »</h1>
                        <h2 class="block_" id="calibre_link-1">Jeu concours gratuit avec obligation d’achat avec tirage au sort </H2>
                        <p class="block_1">&nbsp;</p>
                        <h2 class="block_2" id="calibre_link-2">ARTICLE 1ER - ORGANISATION</h2>
                        <p class="block_3">La société AUTODISTRIBUTION, Société par actions simplifiée à Comité de Direction et Comité de Surveillance dont le Siège social se situe 22, avenue Aristide Briand, 94110 Arcueil au Capital social de 69 679 124 € inscrite au RCS CRETEIL B 962 227 351 – SIRET 962 227 351 00054 - N° TVA intracommunautaire : FR 89 962 227 351, organise pour son Réseau AD du 1er juin au 31 juillet 2019 un jeu concours gratuit soumis à obligation d’achat avec tirage au sort, intitulé « GRAND JEU ÉTÉ »</p>
                        <p class="block_1">&nbsp;</p>
                        <p class="block_4">L’organisateur est représenté par l’agence VENISE HBA, société par actions simplifiée au capital de 37 000 euros, dont le siège social est situé au 37-41 rue Fernand Pelloutier À BOULOGNE-BILLANCOURT (92100), pour procéder aux tirages au sort en ligne du concours « GRAND JEU ÉTÉ », accessible à l’adresse http://www.grandjeuete-ad.com, pour désigner les 8 lauréats. </p>
                        <p class="block_1">&nbsp;</p>
                        <p class="block_1">&nbsp;</p>
                        <h2 class="block_2" id="calibre_link-3">ARTICLE 2 – CONDITIONS DE PARTICIPATION</h2>
                        <p class="block_4">La participation à ce jeu concours gratuit soumis à obligation d’achat est ouverte à toute personne physique majeure, domiciliée en France Métropolitaine et limitée à une participation par personne. Les participants doivent jouer sous leur véritable identité. Les collaborateurs des sociétés organisatrices et de ses sociétés affiliées, ainsi que leur famille, ne peuvent participer à ce tirage au sort. Un internaute qui jouera plusieurs fois sous la même identité ou sous une identité différente, ou qui ne participera pas sous sa véritable identité, ne pourra pas remporter l’un des lots mis en jeu. Les participations multiples d’une même famille (même nom, même adresse) sont autorisées.</p>
                        <p class="block_1">&nbsp;</p>
                        <h2 class="block_2" id="calibre_link-4">ARTICLE 3 – MODALITES DE PARTICIPATION </h2>
                        <p class="block_5">Le concours « GRAND JEU ÉTÉ » est accessible sur le site de l’organisateur à l’adresse http://www.ad.fr ou directement sur le site de participation http://www.grandjeuete-ad.com </p>
                        <p class="block_6">&nbsp;</p>
                        <p class="block_5">Toute personne ayant réalisé un achat entre le 1er juin et le 31 juillet 2019 inclus dans une enseigne du réseau AD participant à l’opération ou bénéficiant du code jeu remis le 22 juin, est éligible au tirage au sort. </p>
                        <p class="block_6">&nbsp;</p>
                        <p class="block_5">Pour participer au tirage au sort et prétendre gagner l’une des dotations mises en jeu, le Participant doit renseigner les informations suivantes sur le formulaire prévu à cet effet : civilité, nom, prénom, date de naissance, numéro de téléphone, adresse, code postal, ville, nom du réparateur, adresse email, numéro et date de facture ou code du jeu. </p>
                        <p class="block_5">Le code du jeu est disponible dans tous les garages participants du réseau AD le 22 juin lors de la journée « LE JOUR LE PLUS SUR » dont les dispositions sont consultables sur le site de l’organisateur.</p>
                        <p class="block_4">La participation au tirage au sort s’effectue exclusivement en remplissant le formulaire de participation accessible aux adresses des sites sus mentionnées. Aucune participation sous une autre forme que celle-ci ne sera acceptée. Toute participation ou inscription incomplète ou inexacte ne sera pas prise en compte et entraînera la nullité de la participation. Il est rigoureusement interdit de jouer avec plusieurs adresses emails. Les participants après avoir dument rempli l’ensemble des champs du formulaire et après avoir validé, recevront un email de confirmation de leur participation. Cet email doit être conservé par les participants.</p>
                        <p class="block_1">&nbsp;</p>
                        <h2 class="block_7" id="calibre_link-5">&nbsp;</h2>
                        <h2 class="block_7" id="calibre_link-6">&nbsp;</h2>
                        <h2 class="block_2" id="calibre_link-7">ARTICLE 4 – DESIGNATION DU GAGNANT</h2>
                        <p class="block_4"><span class="text_">La base de données de l’ensemble des participants fera l’objet d’une répartition en 8 segments régionaux, composés pour chacun d’entre eux d’une zone géographique. Le 03/09/2019, 8 gagnants seront tirés au sort parmi les participants issus des 8 bases de données régionales ayant complété et validé leur formulaire. </p>
                        <p class="block_8">Les gagnants recevront un email, dans les 15 jours suivant le tirage au sort, leur confirmant la nature du lot gagné et les modalités pour en bénéficier.</p>
                        <p class="block_8">Chaque gagnant devra communiquer à l’organisateur ses coordonnées, une copie de sa carte grise et une copie d’une pièce d’identité (carte d’identité ou passeport) au plus tard 15 jours après avoir eu confirmation de son gain par email. A défaut, il sera réputé renoncer au gain et le lot sera attribué à un nouveau gagnant qui aura été tiré au sort.</p>
                        <p class="block_8">Les tirages au sort désignant les gagnants des 16 lots mis en jeu, seront réalisés par VENISE HBA. Un numéro unique suivant la chronologie des participations sera attribué à chaque participant pour chacune des 8 bases de données. Ces numéros uniques compris de 1 à N, suivront la chronologie des participations sur le site. Parmi ces numéros, l’organisateur choisira au hasard successivement 5 numéros par base de données régionale et ce pour les 8 bases.</p>
                        <p class="block_8">Pour chaque base de données régionale, le premier désignera le gagnant du premier lot, le 2ème désignera le gagnant du 2ème lot, les 3 autres sont destinés à permettre à l’organisateur d’attribuer les lots dans le cas où le gagnant ne réclamerait pas son lot. Exemple si le 1er participant tiré au sort ne réclame pas son lot, c’est le 2ème qui le remportera, et ainsi de suite.</p>
                        <p class="block_1">&nbsp;</p>
                        <p class="block_1">&nbsp;</p>
                        <h2 class="block_9" id="calibre_link-8">ARTICLE 5 – DOTATION</h2>
                        <p class="block_6">&nbsp;</p>
                        <p class="block_8">Le tirage au sort est doté des lots suivants, attribués chronologiquement aux participants valides tirés au sort et déclarés gagnants pour chacune des 8 bases de données régionales. Chaque gagnant remporte un seul lot.</p>
                        <p class="block_6">&nbsp;</p>
                        <div class="calibre4">
                            <div class="block_10">
                                <span class="bullet_">-&nbsp;</span>
                                <span class="calibre5">
                                    Constitution de chaque lot attribué à chaque lauréat des 8 segments régionaux (Le participant ayant été tiré au sort en premier pour chaque segment de base de données régionale) <br>
                                    1 véhicule RENAULT CLIO IV Business en location longue durée consécutive de 12 mois et dans la limite de 15 000 km en contrepartie d’un loyer de 0€ par mois hors assurance du véhicule et hors carburant qui sont à la charge du gagnant. 
                                    <br>
                                    Valeur estimative du lot : 1 800 €TTC/unitaire.
                                    <br>
                                    8 lots de premier rang, mis en jeu.
                                    <br>
                                    <strong>
                                        Location soumise à la signature d’un contrat de location longue durée avec la société LEASEWAY, société par actions simplifiée immatriculée au RCS de PARIS sous le n°491210175 dont le siège social est sis 5 rue Vernet – 75008 Paris.
                                    </strong>
                                </span>
                            </div>
                        </div>

                        <div class="calibre4">
                            <div class="block_10">
                                <span class="bullet_">-&nbsp;</span>
                                <span class="calibre5">
                                    Constitution de chaque lot attribué au deuxième gagnant des 8 segments régionaux (Le participant ayant été tiré au sort en deuxième pour chaque segment de base de données régionale)
                                    <br>
                                    Un jeu de 4 pneus Crossclimate MICHELIN
                                    <br>
                                    Valeur estimative du lot : entre 234 euros et 310 euros selon les modèles 8 lots de second rang, mis en jeu.
                                </span>
                            </div>
                        </div>
                        <p class="block_11">&nbsp;</p>
                        <p class="block_12">Le lot gagné par chaque lauréat ne peut donner lieu à aucune contestation, ni à son échange contre-valeur en argent ou sous quelque forme que ce soit. Il n’est ni modifiable, ni échangeable, ni remboursable. L’organisateur se réserve le droit, avant remise des lots, de procéder à la vérification que le gagnant remplisse bien les conditions de participation mentionnées dans l’article 3 du présent règlement.  L’organisateur ne saurait être tenu pour responsable de l’utilisation ou de la non-utilisation, voire du négoce, des lots par le gagnant. En cas de force majeure, l’organisateur se réserve le droit de remplacer le lot gagné par un lot de nature et de valeur équivalente.</p>
                        
                        <h2 class="block_9" id="calibre_link-8">ARTICLE 6 – MODIFICATION DU REGLEMENT</h2>
                        <p class="block_18">L’organisateur se réserve le droit d'interrompre, de modifier ou de proroger le jeu concours « GRAND JEU ÉTÉ » si les circonstances l'exigent, sans avoir à en justifier les raisons. En tout état de cause, la responsabilité de l’organisateur ne saurait être engagée si, pour un cas de force majeure, ou indépendant de sa volonté, le présent tirage au sort devait être modifié, écourté ou annulé. L’organisateur se réserve dans tous les cas la possibilité de prolonger la période de participation et de reporter toute date annoncée. Des additifs ou des modifications (sauf en ce qui concerne les conditions de participation), à ce règlement peuvent éventuellement être publiés pendant le temps de mise en ligne du tirage au sort. Ils seront considérés comme des annexes au présent règlement. </p>
                        <p class="block_18">L’organisateur se réserve le droit de remplacer le lot par un autre lot de valeur équivalente. <br class="calibre6" />.</p>
                        <h2 class="block_9" id="calibre_link-8">ARTICLE 7 – PUBLICATION DES RESULTATS ET REMISE DU LOT </h2>
                        <p class="block_18">Chacun des 16 gagnants sera contacté directement par courrier électronique pour lui indiquer les modalités de remise de son lot.</p>
                        <h2 class="block_2" id="calibre_link-10">ARTICLE 8 – DEPOT DU REGLEMENT</h2>
                        <p class="block_18">Le présent règlement est enregistré et déposé chez Maître AVALLE - Huissier de Justice - 10, rue du Chevalier de Saint George - 75001 PARIS, et est disponible sur la page http://www.grandjeuete-ad.com, pendant toute la durée du concours et la période du tirage au sort, en cliquant sur le lien hypertexte « Règlement ». </p>
                        <p class="block_27">&nbsp;</p>
                        <h2 class="block_2" id="calibre_link-11">ARTICLE 9 – LIMITATION DE RESPONSABILITE</h2>
                        <p class="block_18">La Société organisatrice se réserve notamment en cas de force majeure, le droit de suspendre, de modifier ou d’annuler le jeu. Ces changements feront toutefois l’objet d’une information préalable par tous moyens appropriés. La responsabilité de l’organisateur ne saurait être encourue, d'une façon générale, en cas de force majeure ou cas fortuit indépendant de sa volonté. La participation au tirage au sort implique la connaissance et l’acceptation par les participants des caractéristiques et des limites d’internet, dès lors la société organisatrice ne pourra être tenue pour responsable en cas de dysfonctionnement du réseau Internet empêchant l’accès et/ou le bon déroulement de Jeu, notamment du fait de malveillances externes. Plus particulièrement, la société organisatrice ne saurait être responsable de tout dommage, matériel ou immatériel, causé aux participants, à leurs équipements informatiques et aux données qui y sont stockées et aux conséquences pouvant en découler sur leur activité personnelle, professionnelle ou commerciale. En outre, la société organisatrice ne pourrait être tenue pour responsable notamment si les données relatives à l’inscription d’un participant ne lui parvenait pas pour une raison quelconque (à titre d’exemple, problème de connexion à Internet pour une quelconque raison chez l’utilisateur, défaillance momentanée des serveurs de la société organisatrice pour une raison quelconque etc) ou lui arriverait illisibles ou impossible à traiter (à titre d’exemple, si le participant possède un matériel informatique ou un environnement logiciel inadéquat pour son inscription, etc…). La société organisatrice se réserve également le droit de procéder à tous les contrôles qu’elle estimerait opportuns.  Ne seront pas prises en considération les participations qui ne seraient pas conformes aux dispositions du présent règlement. En cas de litige, un justificatif d’identité peut être demandé. La participation au jeu est strictement personnelle. Le gagnant autorise par avance et sans contrepartie financière la Société Organisatrice à utiliser à des fins promotionnelles ou publicitaires ses noms, adresse ou image, et à les diffuser sur tout support qui lui semblera adéquat. Cette faculté ne saurait être une obligation à la charge de la Société Organisatrice. En particulier, les noms, prénoms des gagnants pourront faire l’objet d’une publication sur l’un ou l’autre des sites internet édité(s) par la Société Organisatrice.  </p>
                        <p class="block_18">Tout participant qui mettrait en œuvre ou bénéficierait, dans le cadre du tirage au sort, directement ou indirectement d'un quelconque logiciel ou procédé permettant le moindre automatisme, raccourci d'accès ou assistance dans les phases du tirage au sort ou dans sa réitération sera disqualifié ; les opérations de contrôle ou dépistage des différents intervenants au dit tirage au sort faisant foi. La Société Organisatrice se réserve le droit de poursuivre en justice quiconque aura fraudé ou tenté de le faire. Elle ne saurait toutefois encourir aucune responsabilité d’aucune sorte vis-à-vis des participants du fait des fraudes éventuellement commises, ni du fait de quelque autre acte de malveillance qu’il soit. Tout litiges pouvant intervenir sur l’interprétation du présent règlement seront expressément soumis à l’appréciation souveraine des organisateurs et en dernier ressort à l’appréciation des Tribunaux compétents de Versailles. </p>
                        <p class="block_16">&nbsp;</p>
                        <h2 class="block_2" id="calibre_link-3">ARTICLE 11 - ATTRIBUTION DE COMPETENCE</h2>
                        <p class="block_18">Les participations sont soumises à la règlementation française applicable aux jeux et jeu-concours. Tout litige qui ne pourra être réglé à l’amiable sera soumis aux tribunaux compétents désignés par le Code de Procédure Civile.</p>
                        <p class="block_16">&nbsp;</p>
                        <p class="block_16">&nbsp;</p>
                        <h2 class="block_2" id="calibre_link-3">ARTICLE 12 - DROITS DE PROPRIETE LITTERAIRE ET ARTISTIQUE</h2>
                        <p class="block_18">Conformément aux lois régissant les droits de propriété littéraire et artistique, la reproduction et la représentation de tout ou partie des éléments composant les supports de promotion du concours « GRAND JEU ÉTÉ » sont strictement interdites.</p>
                        <p class="block_16">&nbsp;</p>
                        <h2 class="block_2" id="calibre_link-3">ARTICLE 13 – DONNEES A CARACTERE PERSONNEL</h2>
                        <p class="block_18">Le gagnant autorise l’organisateur à publier son nom, prénom, dans le cadre des actions d'information et de communication liées au tirage au sort, sans pouvoir prétendre à aucun droit, quel qu'il soit.  Le gagnant autorise toutes les vérifications concernant son identité, ses coordonnées téléphoniques et postales. Toute indication d'identité ou d'adresse fausse entraîne l'élimination immédiate du participant au tirage au sort. Conformément à la Loi N° 78-17 du 6 janvier 1978, dite Loi Informatique et Libertés, et à la mise en application du Règlement Général sur La Protection des Données, le participant dispose d’un droit d’accès et de rectification des données à caractère personnel le concernant. Il peut s’opposer sans motif à l’utilisation des données à des fins de prospection notamment commerciale. Ce droit d’accès, de rectification et d’opposition pourra être exercé à tout moment en écrivant à l’adresse suivante : AD « GRAND JEU ÉTÉ », 22, avenue Aristide Briand, 94110 Arcueil </p>
                        <p class="block_16">&nbsp;</p>
                        <h2 class="block_2" id="calibre_link-3">ARTICLE 14 – REMBOURSEMENT DES FRAIS DE PARTICIPATION</h2>
                        <p class="block_18">Les éventuels frais de connexion Internet ou tous les frais engendrés par la participation au tirage au sort ou le partage de celui-ci ne seront pas remboursés.</p>
                        <p class="block_6">&nbsp;</p>

                    </div>
                </div>
            </div>



            <div id="formContainer">
                <div id="car"></div>
                <div id="textBlock">
                    À l’occasion de notre Grand Jeu Été, inscrivez-vous et tentez votre chance pour gagner l’une des 8 voitures mises en jeu ou des pneus MICHELIN !<br>
                    <span id="textRight">Bonne chance.</span>
                </div>
                <div id="form">
                    <form id="participateForm" method="post" action="{{ url('participant') }}">
                        @csrf
                        <div>
                            <div>
                                <label for="civilite">Civilité<span class="required">*</span></label>
                            </div>
                            <div>
                                <select class="{{ $errors->has('civilite') ? 'error':'' }}" id="civilite" name="civilite">
                                    <option value="">--</option>
                                    @php
                                        if(old('civilite') !== null && (int)old('civilite') === 0) echo '<option selected="selected" value="0">Mme.</option>';
                                        else echo '<option value="0">Mme.</option>';

                                        if(old('civilite') !== null && (int)old('civilite') === 1) echo '<option selected="selected" value="1">M.</option>';
                                        else echo '<option value="1">M.</option>';
                                    @endphp
                                </select>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="nom">Nom<span class="required">*</span></label>
                            </div>
                            <div>
                                <input class="fullWidthInput {{ $errors->has('nom') ? 'error':'' }}" id="nom" type="text" name="nom" value="{{ old('nom') }}" />
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="prenom">Prenom<span class="required">*</span></label>
                            </div>
                            <div>
                                <input class="fullWidthInput {{ $errors->has('prenom') ? 'error':'' }}" id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" />
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="dateNaissance">Date de naissance<span class="required">*</span></label>
                            </div>
                            <div>
                                <input class="{{ $errors->has('date_naissance') ? 'error':'' }}" id="dateNaissance" type="text" name="date_naissance" value="{{ old('date_naissance') }}" /> <img id="icon" src="img/agenda_icon.png" style="position: relative; z-index: 100000;">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="email">Email<span class="required">*</span></label>
                            </div>
                            <div>
                                @if($errors->has('email'))
                                    <p style=" font-size: 11px; color: red; background: #fff; padding: 3px; display: block; ">Cette adresse E-mail est déjà utilisée pour participer au jeu concours</p>
                                @endif
                                <input class="fullWidthInput {{ $errors->has('email') ? 'error':'' }}" id="email" type="email" name="email" value="{{ old('email') }}" />
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="tele">Téléphone<span class="required">*</span></label>
                            </div>
                            <div>
                                <input class="fullWidthInput {{ $errors->has('tele') ? 'error':'' }}" id="tele" type="tel" name="tele" value="{{ old('tele') }}" />
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="adresse">Adresse<span class="required">*</span></label>
                            </div>
                            <div>
                                <input class="fullWidthInput {{ $errors->has('adresse') ? 'error':'' }}" id="adresse" type="text" name="adresse" value="{{ old('adresse') }}" />
                            </div>
                        </div>
                        <div>
                            <div class="float-left">
                                <div>
                                    <label for="cp">Code postal<span class="required">*</span></label>
                                </div>
                                <div>
                                    <input class="{{ $errors->has('cp') ? 'error':'' }}" id="cp" type="text" name="cp" value="{{ old('cp') }}" />
                                </div>
                            </div>
                            <div>
                                <div>
                                    <label for="ville">Ville<span class="required">*</span></label>
                                </div>
                                <div>
                                    <input class="{{ $errors->has('ville') ? 'error':'' }}" id="ville" type="text" name="ville" value="{{ old('ville') }}"/>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="repAD">Votre réparateur AD<span class="required">*</span></label>
                            </div>
                            <div>

                                <select class="js-data-example-ajax fullWidthInput" id="repAD" name="reparateur_ad" required></select>

                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="noFactureOuCodeJeu">Numéro de facture ou code jeu<span class="required">*</span></label>
                            </div>
                            <div>
                                <input class="fullWidthInput {{ $errors->has('no_facture_code_jeu') ? 'error':'' }}" id="noFactureOuCodeJeu" type="text" name="no_facture_code_jeu" value="{{ old('no_facture_code_jeu') }}"/>
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="dateFacture">Date facture<span class="required">*</span></label>
                            </div>
                            <div>
                                <input class="{{ $errors->has('date_facture') ? 'error':'' }}" id="dateFacture" type="text" name="date_facture" value="{{ old('date_facture') }}"/> <img id="icon" src="img/agenda_icon.png">
                            </div>
                        </div>
                        <div class="fullWidthInput">
                            <label class="container"><span class="corr">J‘accepte de recevoir par email des informations
                                    et des offres de la part du réseau AD</span>
                                @php
                                if(old('cond2') !== null) echo '<input checked type="checkbox" name="cond2">';
                                else echo '<input type="checkbox" name="cond2">';
                                @endphp
                                <span class="checkmark {{ $errors->has('cond2') ? 'checkmark-error':'' }}"></span>
                            </label>
                        </div>

                        <div class="fullWidthInput" style=" width: 300px; margin: 8px 0 13px -40px; ">
                            {{-- <label class="container"><span class="corr">Je reconnais avoir pris connaissance du règlement et j‘accepte les termes et conditions*</span>
                                @php
                                    if(old('cond1') !== null) echo '<input checked type="checkbox" name="cond1">';
                                    else echo '<input type="checkbox" name="cond1">';
                                @endphp
                                <span class="checkmark {{ $errors->has('cond1') ? 'checkmark-error':'' }}"></span>
                            </label> --}}
                            <div id="contracts_cgu_accept">
                                <input type="checkbox" required="required" name="axeptio_contracts_cgu_accept" />
                            </div>
                        </div>

                        <div id="bottomLinks">
                            <p>*Champs obligatoires</p>
                        </div>
                        <button id="btnSend" class="fullWidthInput">ENVOYER</button>

                        <div id="bottomLinks">
                            <a id="regelementLink" href="#">Règlement du GRAND JEU ÉTÉ</a>
                            <a id="mentionLegalLink" href="#">Mentions légales</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>


        <script type="text/javascript">
            // $('.js-data-example-ajax').select2({
            //   ajax: {
            //     url: 'https://api.github.com/search/repositories',
            //     dataType: 'json'
            //     // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            //   }
            // });

            // $('.js-data-example-ajax').select2({
            //   ajax: {
            //     url: function (params) {
            //       return '/list?q=' + params.term;
            //     }
            //   }
            // });


$(".js-data-example-ajax").select2({
    minimumInputLength: 2,
    minimumResultsForSearch: -1,
    placeholder: 'Saisissez le code postal du garage',
    language: "fr",
    tags: [],
    ajax: {
        url: '/list',
        dataType: 'json',
        type: "GET",
        quietMillis: 50,
        data: function (term) {
            return {
                term: term
            };
        },
        results: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.completeName,
                        slug: item.slug,
                        id: item.id
                    }
                })
            };
        }
    }
});


        $.datepicker.regional['fr'] = {
            closeText: 'Fermer',
            prevText: '&#x3c;Préc',
            nextText: 'Suiv&#x3e;',
            currentText: 'Aujourd\'hui',
            monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
            'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
            monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
            'Jul','Aou','Sep','Oct','Nov','Dec'],
            dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
            dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
            dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: '',
            // minDate: 0,
            maxDate: '+12M +0D',
            numberOfMonths: 2,
            showButtonPanel: true
        };
        $.datepicker.setDefaults($.datepicker.regional['fr']);
        $('#dateNaissance, #dateFacture').datepicker({
            // minDate: 0,
        });
        </script>

        <script type="text/javascript">
          var el = document.createElement('script');
              el.setAttribute('src', 'https://static.axept.io/sdk.js');
              el.setAttribute('type', 'text/javascript');
              el.setAttribute('async', true);
              el.setAttribute('data-id', '5cee4dc15754d30c902db817');
          if (document.body !== null) {
            document.body.appendChild(el);
          }
        </script>
    </body>
</html>