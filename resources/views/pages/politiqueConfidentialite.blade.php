@extends('layouts.app')

@section('titre')

        Sponski - Politique de Confidentialité
    
@endsection
@include('layouts.navbar-Noir')

@section('contenu')

        <div class="container-conditionsVentes">
                <div class="texteConditionsVentes">
                        <p class="text-conditionsVentes">POLITIQUE DE CONFIDENTIALITÉ</p>
                        <p class="text-conditionsVentes-envigueur">En vigueur au 18/05/2022</p>
                </div>
                <a href="{{URL::to('/')}}" class="bouton-retour-connexion"><button><i class="fa-solid fa-circle-chevron-left"></i>Retour</button></a>

                <div class="container-conditionsVentes-textes">
                        <p class="paragraphe-article">La présente politique de confidentialité définit et vous informe de la manière dont Sponsoki.fr utilise et protège les informations que vous nous transmettez, le cas échéant, lorsque vous utilisez le présent site accessible à partir de l’URL suivante : https://www.sponski.fr/ (ci-après le « Site »).
                            Veuillez noter que cette politique de confidentialité est susceptible d’être modifiée ou complétée à tout moment, notamment en vue de se conformer à toute évolution législative, règlementaire, jurisprudentielle ou technologique. Dans un tel cas, la date de sa mise à jour sera clairement identifiée en tête de la présente politique. Ces modifications engagent l’Utilisateur dès leur mise en ligne. Il convient par conséquent que l’Utilisateur consulte régulièrement la présente politique de confidentialité et d’utilisation des cookies afin de prendre connaissance de ses éventuelles modifications.
                            </p>
                        <h3 class="titre-article">I. DONNÉES PERSONNELLES</h3>
                                <p class="paragraphe-cordonnees">D’une manière générale, il vous est possible de visiter le Site sans communiquer aucune information personnelle vous concernant. En toute hypothèse, vous êtes en aucune manière obligé de transmettre ces informations au Site.</p>
                                <p class="paragraphe-cordonnees">Néanmoins, en cas de refus, il se peut que vous ne puissiez pas bénéficier de certaines informations ou services que vous avez demandé. A ce titre en effet, le Site peut être amené dans certains cas à vous demander de renseigner vos nom, prénom, adresse mail, numéro de téléphone, entreprise et fonction (ci-après vos « Informations Personnelles »). En fournissant ces informations, vous acceptez expressément qu’elles soient traitées par le Site, aux fins indiquées au point 2 ci-dessous ainsi qu’aux fins rappelées à la fin de chaque formulaire.</p>
                                <p class="paragraphe-cordonnees">Conformément au Règlement Général sur la Protection des Données (General Data Protection Régulation) adopté par le Parlement européen le 14 avril 2016, et à la Loi Informatique et Libertés du 6 janvier 1978 modifiée, le Site vous informe des points suivants :</p>
                                <p class="paragraphe-article">1. Identité du responsable du traitement :</p>
                                <p class="paragraphe-cordonnees">Le responsable du traitement est la société Sponski.fr SARL, ayant son siège social au 75600 PAVILLES – France.</p>
                                <p class="paragraphe-article">2. Finalités du traitement</p>
                                <p class="paragraphe-cordonnees">Le Site est susceptible de traiter vos Informations Personnelles :</p>
                                <p class="paragraphe-cordonnees">(a) aux fins de vous fournir les informations ou les services que vous avez demandé (notamment : l’envoi de la Newsletter, offre commerciale, livres blancs ou encore l’évaluation de votre niveau de conformité via un quizz) ; et/ou</p>
                                <p class="paragraphe-cordonnees">(b) aux fins de recueillir des informations nous permettant d’améliorer notre Site, nos produits et services (notamment par le biais de cookies) ; et/ou</p>
                                <p class="paragraphe-cordonnees">(c) aux fins de pouvoir vous contacter à propos de différents évènements relatifs au Site, incluant notamment la mise à jour des produits et le support client.</p>

                                <p class="paragraphe-article">3. Destinataires</p>
                                <p class="paragraphe-cordonnees">Seul le Site est destinataire de vos Informations Personnelles. Celles-ci, que ce soit sous forme individuelle ou agrégée, ne sont jamais transmises à un tiers, nonobstant les sous-traitants auxquels le Site fait appel (vous trouverez de plus amples informations à leur sujet au point 7 ci-dessous). Ni le Site, ni l’un quelconque de ses sous-traitants, ne procèdent à la commercialisation des données personnelles des visiteurs et Utilisateurs de son Site.</p>
                            
                                <p class="paragraphe-article">4. Durée de conservation</h3>
                                <p class="paragraphe-cordonnees">Vos Informations Personnelles sont conservées par le Site uniquement pour le temps correspondant à la finalité de la collecte tel qu’indiqué en 2 ci-dessus qui ne saurait en tout état de cause excéder 24 mois.</p>
                                
                                
                                <p class="paragraphe-article">5. Droits Informatique et Libertés</p>
                                <p class="paragraphe-cordonnees"> Vous disposez des droits suivants concernant vos Informations Personnelles, que vous pouvez exercer en nous écrivant à l’adresse postale mentionnée au point 1 ou en remplissant le formulaire ci-contre.</p>
                                <br>
                                <p class="paragraphe-cordonnees">Droit d’accès et de communication des données</p>
                                <p class="paragraphe-cordonnees">Vous avez la faculté d’accéder aux Informations Personnelles qui vous concernent.</p>
                                <p class="paragraphe-cordonnees">Cependant, en raison de l’obligation de sécurité et de confidentialité dans le traitement des données à caractère personnel qui incombe au Site, vous êtes informé que votre demande sera traitée sous réserve que vous apportiez la preuve de votre identité, notamment par la production d’un scan de votre titre d’identité valide (en cas de demande par notre formulaire électronique dédié) ou d’une photocopie signée de votre titre d’identité valide (en cas de demande adressée par écrit).</p>
                                <p class="paragraphe-cordonnees">Le Site vous informe qu’il sera en droit, le cas échéant, de s’opposer aux demandes manifestement abusives (de par leur nombre, leur caractère répétitif ou systématique).
                                    Pour vous aider dans votre démarche, notamment si vous désirez exercer votre droit d’accès par le biais d’une demande écrite à l’adresse postale mentionnée au point 1, vous trouverez en cliquant sur le lien suivant un modèle de courrier élaboré par la Commission Nationale de l’Informatique et des Libertés (la « CNIL »).</p>
                                <p class="paragraphe-cordonnees"><a href="https://www.cnil.fr/fr/modele/courrier/exercer-son-droit-dacces">https://www.cnil.fr/fr/modele/courrier/exercer-son-droit-dacces</a></p>
                                <br>
                                <p class="paragraphe-cordonnees">Droit de rectification des données</p>
                                <p class="paragraphe-cordonnees">Au titre de ce droit, la législation vous habilite à demander la rectification, la mise à jour, le verrouillage ou encore l’effacement des données vous concernant qui peuvent s’avérer le cas échéant inexactes, erronées, incomplètes ou obsolètes.</p>
                                <p class="paragraphe-cordonnees">Également, vous pouvez définir des directives générales et particulières relatives au sort des données à caractère personnel après votre décès. Le cas échéant, les héritiers d’une personne décédée peuvent exiger de prendre en considération le décès de leur proche et/ou de procéder aux mises à jour nécessaires.</p>
                                <p class="paragraphe-cordonnees">Pour vous aider dans votre démarche, notamment si vous désirez exercer, pour votre propre compte ou pour le compte de l’un de vos proches décédé, votre droit de rectification par le biais d’une demande écrite à l’adresse postale mentionnée au point 1, vous trouverez en cliquant sur le lien suivant un modèle de courrier élaboré par la CNIL.</p>
                                <p class="paragraphe-cordonnees"><a href="https://www.cnil.fr/fr/modele/courrier/rectifier-des-donnees-inexactes-obsoletes-ou-perimees">https://www.cnil.fr/fr/modele/courrier/rectifier-des-donnees-inexactes-obsoletes-ou-perimees</a></p>
                                <br>
                                <p class="paragraphe-cordonnees">Droit d’opposition</p>
                                <p class="paragraphe-cordonnees">L’exercice de ce droit n’est possible que dans l’une des deux situations suivantes :
                                    </p>
                                <p class="paragraphe-cordonnees">Lorsque l’exercice de ce droit est fondé sur des motifs légitimes ; ou</p>
                                <p class="paragraphe-cordonnees">Lorsque l’exercice de ce droit vise à faire obstacle à ce que les données recueillies soient utilisées à des fins de prospection commerciale.</p>
                                <p class="paragraphe-cordonnees">Pour vous aider dans votre démarche, notamment si vous désirez exercer votre droit d’opposition par le biais d’une demande écrite adressée à l’adresse postale indiquée au point 1, vous trouverez en cliquant sur le lien suivant un modèle de courrier élaboré par la CNIL.</p>
                                <p class="paragraphe-cordonnees"><a href="https://www.cnil.fr/fr/modele/courrier/supprimer-des-informations-vous-concernant-dun-site-internet">https://www.cnil.fr/fr/modele/courrier/supprimer-des-informations-vous-concernant-dun-site-internet</a></p>
                                <br>
                                <p class="paragraphe-cordonnees">6. Délais de réponse</p>
                                <p class="paragraphe-cordonnees">Le Site s’engage à répondre à votre demande d’accès, de rectification ou d’opposition ou toute autre demande complémentaire d’informations dans un délai raisonnable qui ne saurait dépasser 1 mois à compter de la réception de votre demande.
                                </p>
                                <br>
                                <p class="paragraphe-cordonnees">7. Prestataires habilités et transfert vers un pays tiers de l’Union Européenne</p>
                                <p class="paragraphe-cordonnees">Le Site vous informe qu’il a recours à ses prestataires habilités pour faciliter le recueil et le traitement des données que vous nous avez communiqué. Ces prestataires peuvent être situés en dehors de l’Union Européenne et ont communication des données recueillies par le biais des divers formulaires présents sur le Site (à l’exception du formulaire vous permettant d’exercer vos droits Informatique et Libertés qui est proposé et exploité par le Site).
                                </p>
                                <p class="paragraphe-cordonnees">Le Site s’est préalablement assuré de la mise en œuvre par ses prestataires de garanties adéquates et du respect de conditions strictes en matière de confidentialité, d’usage et de protection des données. Tout particulièrement, la vigilance s’est portée sur l’existence d’un fondement légal pour effectuer un quelconque transfert de données vers un pays tiers. A ce titre, l’un de nos prestataires est soumis à des règles internes d’entreprise (ou « Binding Corporate Rules ») qui ont été approuvées par la CNIL en 2016 quand les autres obéissent non seulement à des Clauses Contractuelles Types mais également au Privacy Shield.</p>
                                <br>
                                <p class="paragraphe-cordonnees">8. Plainte auprès de l’autorité compétente</p>
                                <p class="paragraphe-cordonnees">Si vous considérez que le Site ne respecte pas ses obligations au regard de vos Informations Personnelles, vous pouvez adresser une plainte ou une demande auprès de l’autorité compétente. En France, l’autorité compétente est la CNIL à laquelle vous pouvez adresser une demande par voie électronique en cliquant sur le lien suivant : <a href="https://www.cnil.fr/fr/plaintes/internet">https://www.cnil.fr/fr/plaintes/internet</a>.</p>
                                <p class="paragraphe-cordonnees"></p>



                        <h3 class="titre-article">II. POLITIQUE RELATIVE AUX COOKIES </h3>
                                <p class="paragraphe-article">Lors de votre première connexion sur le Site, vous êtes avertis par un bandeau en bas de votre écran que des informations relatives à votre navigation sont susceptibles d’être enregistrées dans des fichiers dénommés « cookies ». Notre politique d’utilisation des cookies vous permet de mieux comprendre les dispositions que nous mettons en œuvre en matière de navigation sur notre site web. Elle vous informe notamment sur l’ensemble des cookies présents sur notre site web, leur finalité (partie I.) et vous donne la marche à suivre pour les paramétrer (partie II).</p>
                                <br>
                                <p class="paragraphe-cordonnees">1. Informations générales sur les cookies présents sur le Site</p>
                                <p class="paragraphe-cordonnees">L’éditeur du présent site web, pourra procéder à l’implantation d’un cookie sur le disque dur de votre terminal (ordinateur, tablette, mobile etc.) afin de vous garantir une navigation fluide et optimale sur notre site Internet.
                                    Les « cookies » (ou témoins de connexion) sont des petits fichiers texte de taille limitée qui nous permettent de reconnaître votre ordinateur, votre tablette ou votre mobile aux fins de personnaliser les services que nous vous proposons.
                                    Les informations recueillies par le biais des cookies ne permettent en aucune manière de vous identifier nominativement. Elles sont utilisées exclusivement pour nos besoins propres afin d’améliorer l’interactivité et la performance de notre site web et de vous adresser des contenus adaptés à vos centres d’intérêts. Aucune de ces informations ne fait l’objet d’une communication auprès de tiers sauf lorsque le Site a obtenu au préalable votre consentement ou bien lorsque la divulgation de ces informations est requise par la loi, sur ordre d’un tribunal ou toute autorité administrative ou judiciaire habilitée à en connaître.
                                    Pour mieux vous éclairer sur les informations que les cookies identifient, vous trouverez ci-dessous un tableau listant les différents types de cookies susceptibles d’être utilisés sur le Site, leur nom, leur finalité ainsi que leur durée de conservation.</p>
                                <br>
                                <p class="paragraphe-cordonnees">a. Les cookies exemptés de consentement</p>
                                <p class="paragraphe-cordonnees">Conformément aux recommandations de la Commission Nationale de l’Informatique et des Libertés (CNIL), certains cookies sont dispensés du recueil préalable de votre consentement dans la mesure où ils sont strictement nécessaires au fonctionnement du site internet ou ont pour finalité exclusive de permettre ou faciliter la communication par voie électronique. Il s’agit notamment des cookies d’identifiant de session, d’authentification, de session d’équilibrage de charge ainsi que des cookies de personnalisation de votre interface. Ces cookies sont intégralement soumis à la présente politique dans la mesure où ils sont émis et gérés par le Site.</p>
                                <br>
                        
                                <p class="paragraphe-cordonnees">b. Les cookies nécessitant le recueil préalable de votre consentement </p>
                                <p class="paragraphe-cordonnees">Cette exigence concerne les cookies émis par des tiers et qui sont qualifiés de « persistants » dans la mesure où ils demeurent dans votre terminal jusqu’à leur effacement ou leur date d’expiration. De tels cookies étant émis par des tiers, leur utilisation et leur dépôt sont soumis à leurs propres politiques de confidentialité dont vous trouverez un lien ci-dessous. Cette famille de cookie regroupe les cookies de mesure d’audience (notamment MATOMO) et les cookies publicitaires (auxquels le site n’a pas recours).
                                    Les cookies de mesure d’audience établissent des statistiques concernant la fréquentation et l’utilisation de divers éléments du site web (comme les contenus/pages que vous avez visité). Ces données participent à l’amélioration de l’ergonomie du Site. Un outil de mesure d’audience est utilisé sur le présent site internet :</p>
                                
                                <p class="paragraphe-article">MATOMO dont la politique de confidentialité est disponible à partir du lien suivant : <a href="https://fr.matomo.org/gdpr/">https://fr.matomo.org/gdpr/</a></p>
                                <p class="paragraphe-article">Vous disposez de divers outils de paramétrage des cookies
                                    La plupart des navigateurs Internet sont configurés par défaut de façon que le dépôt de cookies soit autorisé. Votre navigateur vous offre l’opportunité de modifier ces paramètres standards de manière à ce que l’ensemble des cookies soit rejeté systématiquement ou bien à ce qu’une partie seulement des cookies soit acceptée ou refusée en fonction de leur émetteur. </p>
                                <p class="paragraphe-article">Afin de faire valoir ses droits, le client devra informer le prestataire, par écrit (mail ou courrier). De l'existence des vices ou défauts de conformité.
                                        Le prestataire remboursera ou rectifiera ou fera rectifier (dans la mesure du possible) les services jugés défectueux dans les meilleurs délais et au plus tard dans les jours suivant la constatation par le prestataire du défaut ou du vice. Ce remboursement pourra être fait par virement ou chèque bancaire. 
                                        La garantie du prestataire est limitée au remboursement des services effectivement payés par le client.</p>
                                <p class="paragraphe-finArticle">Pour toute interrogation ou demande complémentaire d’informations relative à la présente politique des cookies, merci de bien vouloir nous contacter à service-client@sponski.fr
                                </p>
                </div>

        </div>

@endsection