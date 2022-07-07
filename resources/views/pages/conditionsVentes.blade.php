@extends('layouts.app')

@section('titre')

        Sponski - Conditions Générales De Vente
    
@endsection
@include('layouts.navbar-Noir')

@section('contenu')

        <div class="container-conditionsVentes">
                <div class="texteConditionsVentes">
                        <p class="text-conditionsVentes">CONDITIONS GÉNÉRALES DE VENTE</p>
                        <p class="text-conditionsVentes-envigueur">En vigueur au 18/05/2022</p>
                </div>
                <a href="{{URL::to('/')}}" class="bouton-retour-connexion"><button><i class="fa-solid fa-circle-chevron-left"></i>Retour</button></a>

                <div class="container-conditionsVentes-textes">
                        <h3 class="titre-article">Article 1 - Champ d'application </h3>
                        <p class="paragraphe-article">Les présentes Conditions Générales de Vente (dites « CGV ») s'appliquent, sans restriction ni réserve à tout achat des services de suivants Plateforme de mise en relation entre sponsors et entreprises ou particuliers tels que proposés par le prestataire aux clients non professionnels (« Les clients ou le client ») sur le site Sponski.fr. Les caractéristiques principales des services sont présentées sur le site internet Sponski.fr.</p>
                        <p class="paragraphe-article">Le client est tenu d'en prendre connaissance avant toute passation de commande. Le choix et l'achat d'un service est de la seule responsabilité du client. Ces CGV sont accessibles à tout moment sur le site Sponski.fr et prévaudront sur toute autre document. Le client déclare avoir pris connaissance des présentes CGV et les avoir acceptées en cochant la case prévue à cet effet avant la mise en œuvre de la procédure de commande en ligne du site Sponski.fr
                                Sauf preuve contraire les données enregistrées dans le système informatique du prestataire constituent la preuve de l'ensemble des transactions conclues avec le client.</p>
                        <p class="paragraphe-article">Les coordonnées du prestataire sont les suivantes :</p>
                        <p class="paragraphe-cordonnees">SPONSKI</p>
                        <p class="paragraphe-cordonnees">SARL Capital social de 15000 euros </p>
                        <p class="paragraphe-cordonnees">Immatriculé au RCS de Paville, sous le numéro 5500550550 </p>
                        <p class="paragraphe-cordonnees">Paville 75600</p>
                        <p class="paragraphe-article">service-client@sponski.fr </p>
                        <p class="paragraphe-article">Les services présentés sur le site Sponski.fr sont proposés à la vente pour les territoires suivants : France. Des droits de douane ou autres taxes locales ou droits d'importation ou taxes d'état sont susceptibles d'être exigibles. Ils seront à la charge et relèvent de la seule responsabilité du client.</p>

                        <h3 class="titre-article">Article 2 - Prix </h3>
                                <p class="paragraphe-article">Les services sont fournis aux tarifs en vigueur figurant sur le site Sponski.fr, lors de l'enregistrement de la commande par le prestataire. Les prix sont exprimés en Euros, HT et TTC Les tarifs tiennent compte d'éventuelles réductions qui seraient consenties par le prestataire sur le site.                        </p>
                                <p class="paragraphe-article">Ces tarifs sont fermes et non révisables pendant leur période de validité mais le prestataire se réserve le droit hors période de validité d'en modifier les prix à tout moment. 
                                        Les prix ne comprennent pas les frais de traitement, d'expédition, de transport et de livraison qui sont facturés en supplément, dans les conditions indiquées sur le site et calculés préalablement à la passation de la commande. </p>
                                <p class="paragraphe-article">Le paiement demandé au client correspond au montant total de l'achat, y compris ces frais. Une facture est établie par le prestataire et remise au client lors de la fourniture des services commandés.</p>

                        <h3 class="titre-article">Article 3 - Commandes </h3>
                                <p class="paragraphe-article">Il appartient au client de sélectionner sur le site Sponski.fr les services qu'il désire commander, selon les modalités suivantes :</p>
                                <p class="paragraphe-article">Le client choisi un service entre les deux offres payantes que nous avons. Ensuite il devra valider sa commande et accepter les présentes conditions générales de ventes. Il devra se connecter à son espace client pour procéder au payement.</p>
                                <p class="paragraphe-article">La vente ne sera considérée comme valide qu'après paiement intégral du prix. Il appartient au client de vérifier l'exactitude de la commande et de signaler immédiatement toute erreur. Toute commande passée sur le site Sponski.fr constitue la formation d'un contrat conclu à distance entre le client et le prestataire.</p>
                                <p class="paragraphe-article">Le prestataire se réserve le droit d'annuler ou de refuser toute commande d'un client avec lequel il existerait un litige relatif au paiement d'une commande antérieure. Le client pourra suivre l'évolution de sa commande sur le site.</p>
                                <p class="paragraphe-article"></p>

                        <h3 class="titre-article">Article 4 - Conditions de paiement</h3>
                                <p class="paragraphe-article">Le prix est pavé par voie de paiement sécurisé selon les modalités suivantes :</p>
                                <p class="paragraphe-article">Paiement par carte bancaire ou paiement par virement bancaire sur le compte bancaire du vendeur (dont les coordonnées sont communiquées au client lors de la passation de la commande).</p>
                                <p class="paragraphe-cordonnees">Le prix est payable comptant par le client, en totalité au jour de la passation de la commande. Les données de paiement sont échangées en mode crypté grâce au protocole défini par le prestataire de paiement agréé intervenant pour les transactions bancaires réalisées sur le site Sponski.fr. </p>
                                <p class="paragraphe-cordonnees">Les paiements effectués par le client ne seront considérés comme définitifs qu'après encaissement effectif des sommes dues, par le prestataire. Le prestataire ne sera pas tenu de procéder à la fourniture des services commandés par le client si celui-ci ne lui en pave pas le prix en totalité dans les conditions ci-dessus indiquées.</p>
                                


                        <h3 class="titre-article">Article 5 - Fourniture des prestations                        </h3>
                                <p class="paragraphe-article">Les services commandés par le client seront fournis selon les modalités suivantes : Plateforme de mise en relation auprès des sponsors et entreprises et/ou particuliers. Lesdits services seront fournis dans un délai maximum de à compter de la validation définitive de la commande du client dans les conditions prévues aux présentes CGV à l'adresse indiquée par le client lors de sa commande sur le site Sponski.fr </p>
                                <p class="paragraphe-article">Le prestataire s'engage à faire ses meilleurs efforts pour fournir les services commandés par le client, dans le cadre d'une obligation de moyen et dans les délais ci-dessus précisés. Si les services commandés n'ont pas été fournis dans un délai de 30 jours après la date indicative de fourniture pour toute autre cause que la force majeure ou le fait du client. </p>
                                <p class="paragraphe-article">La vente des services pourra être résolue à la demande écrite du client dans les conditions prévues aux articles L 216-2 L 216-3 et L241- 4 du Code de la consommation. Les sommes versées par le client lui seront alors restituées au plus tard dans les quatorze jours qui suivent la date de dénonciation du contrat. À l'exclusion de toute indemnisation ou retenue.</p>
                                <p class="paragraphe-article">En cas de demande particulière du client concernant les conditions de fourniture des services, dûment acceptées par écrit par le prestataire les coûts y étant liés feront l'objet d'une facturation spécifique complémentaire ultérieure. A défaut de réserves ou réclamations expressément émises par le client lors de la réception des services, ceux-ci seront réputés conformes à la commande, en quantité et qualité. </p>
                                <p class="paragraphe-article">Le client disposera d'un délai de 30 à compter de la fourniture des services pour émettre des réclamations par Mail, avec tous les justificatifs y afférents auprès du prestataire. Aucune réclamation ne pourra être valablement acceptée en cas de non-respect de ces formalités et délais par le client.
                                        Le prestataire remboursera ou rectifiera dans les plus brefs délais et à ses frais les services dont le défaut de conformité aura été dûment prouvé par le client. </p>

                        <h3 class="titre-article">Article 6 - Droit de rétractation</h3>
                        <p class="paragraphe-article">Compte tenu de la nature des services fournis, les commandes passées par le client ne bénéficient pas du droit de rétractation.
                                Le contrat est donc conclu de façon définitive dès la passation de la commande par le client selon les modalités précisées aux présentes CGV.</p>
                        
                        <h3 class="titre-article">Article 7 - Responsabilité du prestataire - Garanties</h3>
                                <p class="paragraphe-article">Le prestataire garantit, conformément aux dispositions légales et sans paiement complémentaire, le client, contre tout défaut de conformité ou vice caché, provenant d'un défaut de conception ou de réalisation des services commandés dans les conditions.
                                        Dispositions relatives aux garanties légales.</p>
                                <p class="paragraphe-article">Article L217-4 du Code de la consommation : « Le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité existant lors de la délivrance Il répond également des défauts de conformité résultant de l'emballage des instructions de montage ou de l'installation lorsque celle-ci a été mise à sa charge par le contrat ou a été réalisée sous sa responsabilité ».</p>
                                <p class="paragraphe-cordonnees">Article L217-5 du Code de la consommation : « Le bien est conforme au contrat </p>
                                <p class="paragraphe-cordonnees">1° S'il est propre à l'usage habituellement attendu d'un bien semblable et, le cas échéant : = s'il correspond à la description donnée par le vendeur et possède les qualités que celui-ci a présentées à l'acheteur sous forme d'échantillon ou de modèle s'il présente les qualités qu'un acheteur peut légitimement attendre eu égard aux déclarations publiques faites par le vendeur, par le producteur ou par son représentant. Notamment dans la publicité ou l'étiquetage </p>
                                <p class="paragraphe-cordonnees">2° Ou s'il présente les caractéristiques définies d'un commun accord par les parties ou est propre à tout usage spécial recherché par l'acheteur porté à la connaissance du vendeur et que ce dernier a accepté ».</p>
                                <p class="paragraphe-article">Article L217-12 du Code de la consommation : « L'action résultant du défaut de conformité se prescrit par deux ans à compter de la délivrance du bien. ».</p>
                                <p class="paragraphe-article">Article L217-16 du Code de la consommation : « Lorsque l'acheteur demande au vendeur, pendant le cours de la garantie commerciale qui lui a été consentie lors de l'acquisition ou de la réparation d'un bien meuble une remise en état couverte par la garantie, toute période d'immobilisation d'au moins sept jours viennent s'ajouter à la durée de la garantie qui restait à courir. Cette période court à compter de la demande d'intervention de l'acheteur ou de la mise à disposition pour réparation du bien en cause si cette mise à disposition est postérieure à la demande d'intervention».</p>
                                <p class="paragraphe-article">Afin de faire valoir ses droits, le client devra informer le prestataire, par écrit (mail ou courrier). De l'existence des vices ou défauts de conformité.
                                        Le prestataire remboursera ou rectifiera ou fera rectifier (dans la mesure du possible) les services jugés défectueux dans les meilleurs délais et au plus tard dans les jours suivant la constatation par le prestataire du défaut ou du vice. Ce remboursement pourra être fait par virement ou chèque bancaire. 
                                        La garantie du prestataire est limitée au remboursement des services effectivement payés par le client.</p>
                                <p class="paragraphe-article">Le prestataire ne pourra être considéré comme responsable ni défaillant pour tout retard ou inexécution consécutif à la survenance d'un cas de force majeure habituellement reconnu par la jurisprudence française.
                                        Les services fournis par l'intermédiaire du site du prestataire sont conformes à la réglementation en vigueur en France. La responsabilité du prestataire ne saurait être engagée en cas de non-respect de la législation du pays dans lequel les services sont fournis, qu'il appartient au client, qui est seul responsable du choix des services demandés de vérifier.</p>

                        <h3 class="titre-article">Article 8 - Données personnelles </h3>
                                <p class="paragraphe-article">Le client est informe que la collecte de ses données à caractère personnel est nécessaire à la vente des services et leur réalisation et délivrance confiées au prestataire. Ces données à caractère personnel sont récoltées uniquement pour l'exécution du contrat de prestations de services.</p>
                                <p class="paragraphe-article">8.1 Collecte des données à caractère personnel</p>
                                <p class="paragraphe-article">Les données à caractère personnel qui sont collectées sur le site Sponski.fr sont les suivantes :</p>
                                <p class="paragraphe-article">Lors de la création du compte client / utilisateur :</p>
                                <p class="paragraphe-cordonnees">Noms</p>
                                <p class="paragraphe-cordonnees">Prénoms</p>
                                <p class="paragraphe-cordonnees">Adresse postale</p>
                                <p class="paragraphe-cordonnees">Numéro de téléphone</p>
                                <p class="paragraphe-cordonnees">Adresse e-mail</p>
                                <p class="paragraphe-cordonnees">Paiement</p>
                                <p class="paragraphe-cordonnees">Dans le cadre du paiement des prestations proposés sur le site Sponski.fr, celui-ci enregistre des données financières relatives au compte bancaire ou à la carte de crédit du client / utilisateur. </p>
                                <br>
                                <p class="paragraphe-cordonnees">8.2 Destinataires des données à caractère personnel :</p>
                                <p class="paragraphe-cordonnees">Les données à caractère personnel sont réservées à l'usage unique du prestataire et de ses salariés. Le responsable de traitement des données est le prestataire, au sens de la loi Informatique et libertés et à compter du 25 mai 2018 du Règlement 2016/679 sur la protection des données à caractère personnel. </p>
                                <p class="paragraphe-cordonnees">8.4 Limitations du traitement : </p>
                                <p class="paragraphe-cordonnees">Sauf si le client exprime son accord exprès, ses données à caractère personnelles ne sont pas utilisées à des fins publicitaires ou marketing. </p>
                                <p class="paragraphe-cordonnees">8.5 Durée de conservation des données :</p>
                                <p class="paragraphe-cordonnees">Le prestataire conservera les données ainsi recueillies pendant un délai de 5 ans, couvrant le temps de la prescription de la responsabilité civile contractuelle applicable. </p>
                                <p class="paragraphe-cordonnees">8.6 Sécurité et confidentialité :</p>
                                <p class="paragraphe-cordonnees">Le prestataire met en œuvre des mesures organisationnelles, techniques, logicielles et physiques en matière de sécurité du numérique pour protéger les données personnelles contre les altérations, destructions et accès non autorisés. Toutefois il est à signaler qu'Internet n'est pas un environnement complètement sécurisé et le prestataire ne peut garantir la sécurité de la transmission ou du stockage des informations sur Internet. </p>
                                <p class="paragraphe-cordonnees">8.7 Mise en œuvre des droits des clients et utilisateurs :</p>
                                <p class="paragraphe-cordonnees">En application de la règlementation applicable aux données à caractère personnel, les clients et utilisateurs du site Sponski.fr disposent des droits suivants :</p>
                                <p class="paragraphe-cordonnees">Ils peuvent mettre à jour ou supprimer les données qui les concernent en se connectant à son compte dans les options du compte.</p>
                                <p class="paragraphe-cordonnees">
                                        Ils peuvent supprimer leur compte en écrivant à l'adresse électronique indiqué à l'article 9.3 « Responsable de traitement ».</p>
                                <p class="paragraphe-cordonnees">ls peuvent exercer leur droit d'accès pour connaître les données personnelles les concernant en écrivant à l'adresse indiqué à l'article 9.3 « Responsable de traitement ».</p>
                                <p class="paragraphe-cordonnees">Si les données à caractère personnel détenues par le prestataire sont inexactes, ils peuvent demander la mise à jour des informations des informations en écrivant à l'adresse indiqué à l'article 9.3 « Responsable de traitement ».</p>
                                <p class="paragraphe-cordonnees">Ils peuvent demander la suppression de leurs données à caractère personnel, conformément aux lois applicables en matière de protection des données en écrivant à l'adresse indiqué à l'article 9.3 « Responsable de traitement ».</p>
                                <p class="paragraphe-cordonnees">Ils peuvent également solliciter la portabilité des données détenues par le prestataire vers un autre prestataire.</p>
                                <p class="paragraphe-cordonnees">Enfin, ils peuvent s'opposer au traitement de leurs données par le prestataire.                                </p>
                                <p class="paragraphe-cordonnees">Ces droits, dès lors qu'ils ne s'opposent pas à la finalité du traitement, peuvent être exercé en adressant une demande par courrier ou par E-mail au Responsable de traitement dont les coordonnées sont indiquées ci- dessus.</p>
                                <p class="paragraphe-article">Le responsable de traitement doit apporter une réponse dans un délai maximum d'un mois. En cas de refus de faire droit à la demande du client, celui-ci doit être motivé. 
                                        Le client est informé qu'en cas de refus, il peut introduire une réclamation auprès de la CNIL (3 place de Fontenoy, 75007 PARIS) ou saisir une autorité judiciaire. Le client peut être invité à cocher une case au titre de laquelle il accepte de recevoir des mails à caractère informatifs et publicitaires de la part du prestataire. 
                                        Il aura toujours la possibilité de retirer son accord à tout moment en contactant le prestataire (coordonnées ci-dessus) ou en suivant le lien de désabonnement.</p>



                        <h3 class="titre-article">Article 9 - Propriété intellectuelle </h3>
                                <p class="paragraphe-article">e contLenu du site Sponski.fr est la propriété du vendeur et de ses partenaires et est protégé par les lois françaises et internationales relatives à la propriété intellectuelle.
                                        Toute reproduction totale ou partielle de ce contenu est strictement interdite et est susceptible de constituer un délit de contre-façon. </p>



                        <h3 class="titre-article">Article 10 - Droit applicable - Langue</h3>
                                <p class="paragraphe-article">Les présentes CGV et les opérations qui en découlent sont régies et soumises au droit français. 
                                        Les présentes CGV sont rédigées en langue française Dans le cas où elles seraient traduites en une ou plusieurs langues étrangères, seul le texte français ferait foi en cas de litige.
                                        </p>
                                        
                        <h3 class="titre-article">Article 11 - Litiges </h3>
                                <p class="paragraphe-article">Pour toute réclamation merci de contacter le service clientèle à l'adresse postale ou mail du prestataire indiqué à l'ARTICLE 1 des présentes CGV. Le client est informé qu'il peut en tout état de cause recourir à une médiation conventionnelle, auprès des instances de médiation sectorielles existantes ou à tout mode alternatif de règlement des différends (conciliation, par exemple) en cas de contestation.</p>
                                <p class="paragraphe-article">En l'espèce, le médiateur désigné est : </p>
                                <p class="paragraphe-cordonnees">Nom : Médiateur civil </p>
                                <p class="paragraphe-cordonnees">Adresse : 8 Rue du Bourg, Avignon</p>
                                <p class="paragraphe-cordonnees">E-mail : mediateur-civil@avignon.com</p>
                                <p class="paragraphe-cordonnees">Le client est également informé qu'il peut, également recourir à la plateforme de Règlement en Ligne des Litige (RLL).</p>
                                <p class="paragraphe-finArticle">Tous les litiges auxquels les opérations d'achat et de vente conclues en application des présentes CGV et qui n'auraient pas fait l'objet d'un règlement amiable entre le vendeur ou par médiation, seront soumis aux tribunaux compétents dans les conditions de droit commun.</p>
                </div>

        </div>

@endsection