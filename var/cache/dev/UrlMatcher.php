<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/dashboard/utilisateur' => [[['_route' => 'dashboard_utilisateurs', '_controller' => 'App\\Controller\\AdminController::usersList'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/guide' => [[['_route' => 'dashboard_guide', '_controller' => 'App\\Controller\\AdminController::guidesList'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/prop/maison' => [[['_route' => 'dashboard_prop', '_controller' => 'App\\Controller\\AdminController::propList'], null, ['GET' => 0], null, false, false, null]],
        '/dashboard/lieux' => [[['_route' => 'dashboard_lieu_maison_index', '_controller' => 'App\\Controller\\AdminController::indexlieux'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard/lieux/new' => [[['_route' => 'dashboard_lieu_maison_new', '_controller' => 'App\\Controller\\AdminController::newlieux'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/artiste' => [[['_route' => 'artiste_index', '_controller' => 'App\\Controller\\ArtisteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/artiste/front' => [[['_route' => 'artiste_indexFront', '_controller' => 'App\\Controller\\ArtisteController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/artiste/new' => [[['_route' => 'artiste_new', '_controller' => 'App\\Controller\\ArtisteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis/destination' => [[['_route' => 'avis_destination_index', '_controller' => 'App\\Controller\\AvisDestinationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avis/destination/new' => [[['_route' => 'avis_destination_new', '_controller' => 'App\\Controller\\AvisDestinationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis/evenement' => [[['_route' => 'avis_evenement_index', '_controller' => 'App\\Controller\\AvisEvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avis/evenement/new' => [[['_route' => 'avis_evenement_new', '_controller' => 'App\\Controller\\AvisEvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis/guide' => [[['_route' => 'avis_guide_index', '_controller' => 'App\\Controller\\AvisGuideController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bad/words' => [[['_route' => 'bad_words_index', '_controller' => 'App\\Controller\\BadWordsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bad/words/new' => [[['_route' => 'bad_words_new', '_controller' => 'App\\Controller\\BadWordsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/art' => [[['_route' => 'categorie_art_index', '_controller' => 'App\\Controller\\CategorieArtController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/art/front' => [[['_route' => 'categorie_art_indexFront', '_controller' => 'App\\Controller\\CategorieArtController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/art/new' => [[['_route' => 'categorie_art_new', '_controller' => 'App\\Controller\\CategorieArtController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/even' => [[['_route' => 'categorie_even_index', '_controller' => 'App\\Controller\\CategorieEvenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/even/front' => [[['_route' => 'categorie_even_indexFront', '_controller' => 'App\\Controller\\CategorieEvenController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/even/new' => [[['_route' => 'categorie_even_new', '_controller' => 'App\\Controller\\CategorieEvenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contactez/nous' => [[['_route' => 'contactez_nous_index', '_controller' => 'App\\Controller\\ContactezNousController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contactez/nous/new' => [[['_route' => 'contactez_nous_new', '_controller' => 'App\\Controller\\ContactezNousController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/disponibilite/new' => [[['_route' => 'disponibilite_index', '_controller' => 'App\\Controller\\DisponibiliteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/disponibilite' => [[['_route' => 'disponibilite_new', '_controller' => 'App\\Controller\\DisponibiliteController::new'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/even/approuve/meilleurPlan' => [[['_route' => 'meilleurPlan', '_controller' => 'App\\Controller\\EvenApprouveController::meilleurPlan'], null, ['GET' => 0], null, false, false, null]],
        '/even/approuve/aEviter' => [[['_route' => 'aEviter', '_controller' => 'App\\Controller\\EvenApprouveController::aEviter'], null, ['GET' => 0], null, false, false, null]],
        '/even/approuve/searchajaxE' => [[['_route' => 'ajaxsearchE', '_controller' => 'App\\Controller\\EvenApprouveController::searchajax'], null, ['GET' => 0], null, false, false, null]],
        '/even/approuve/decroissantHeure' => [[['_route' => 'even_approuve_decroissantHeure', '_controller' => 'App\\Controller\\EvenApprouveController::decroissantHeureAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/even/approuve/croissantHeure' => [[['_route' => 'even_approuve_croissantHeure', '_controller' => 'App\\Controller\\EvenApprouveController::croissantHeureAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/even/approuve/decroissant' => [[['_route' => 'even_approuve_decroissant', '_controller' => 'App\\Controller\\EvenApprouveController::decroissant1Action'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/even/approuve/croissant' => [[['_route' => 'even_approuve_croissant', '_controller' => 'App\\Controller\\EvenApprouveController::croissant1Action'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/even/approuve/front' => [[['_route' => 'even_approuve_indexFront', '_controller' => 'App\\Controller\\EvenApprouveController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/even/approuve/listeEvent' => [[['_route' => 'even_approuve_listeEvent', '_controller' => 'App\\Controller\\EvenApprouveController::listeEvent'], null, ['GET' => 0], null, false, false, null]],
        '/even/approuve' => [[['_route' => 'even_approuve_index', '_controller' => 'App\\Controller\\EvenApprouveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/even/approuve/new' => [[['_route' => 'even_approuve_new', '_controller' => 'App\\Controller\\EvenApprouveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/even/non/approuve' => [[['_route' => 'even_non_approuve_index', '_controller' => 'App\\Controller\\EvenNonApprouveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/even/non/approuve/new' => [[['_route' => 'even_non_approuve_new', '_controller' => 'App\\Controller\\EvenNonApprouveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/even/popularite' => [[['_route' => 'even_popularite_index', '_controller' => 'App\\Controller\\EvenPopulariteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/even/popularite/new' => [[['_route' => 'even_popularite_new', '_controller' => 'App\\Controller\\EvenPopulariteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connect/facebook' => [
            [['_route' => 'connect_facebook_start', '_controller' => 'App\\Controller\\FacebookController::connectAction'], null, null, null, false, false, null],
            [['_route' => 'facebook_connect', '_controller' => 'App\\Controller\\SecurityController::connect'], null, null, null, false, false, null],
        ],
        '/guide' => [[['_route' => 'guide_index', '_controller' => 'App\\Controller\\GuideController::index'], null, ['GET' => 0], null, true, false, null]],
        '/guide/new' => [[['_route' => 'guide_new', '_controller' => 'App\\Controller\\GuideController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lieu/even' => [[['_route' => 'lieu_even_index', '_controller' => 'App\\Controller\\LieuEvenController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lieu/even/front' => [[['_route' => 'lieu_even_indexFront', '_controller' => 'App\\Controller\\LieuEvenController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/lieu/even/new' => [[['_route' => 'lieu_even_new', '_controller' => 'App\\Controller\\LieuEvenController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lieumaison' => [[['_route' => 'lieu_maison_index', '_controller' => 'App\\Controller\\LieuMaisonController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/lieumaison/new' => [[['_route' => 'lieu_maison_new', '_controller' => 'App\\Controller\\LieuMaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/like/dislike' => [[['_route' => 'like_dislike_index', '_controller' => 'App\\Controller\\LikeDislikeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/desktop/facebook' => [[['_route' => 'desktop_fb', '_controller' => 'App\\Controller\\MainController::connectDesktop'], null, null, null, false, false, null]],
        '/maison' => [[['_route' => 'maison_index', '_controller' => 'App\\Controller\\MaisonController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/maison/mesmaison' => [[['_route' => 'maison_index_user', '_controller' => 'App\\Controller\\MaisonController::indexByUSer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/maison/admin' => [[['_route' => 'maison_index_back', '_controller' => 'App\\Controller\\MaisonController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/maison/new' => [[['_route' => 'maison_new', '_controller' => 'App\\Controller\\MaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/maison/searchajax' => [[['_route' => 'ajaxsearch', '_controller' => 'App\\Controller\\MaisonController::searchajax'], null, ['GET' => 0], null, false, false, null]],
        '/maison/fitre' => [[['_route' => 'filtre', '_controller' => 'App\\Controller\\MaisonController::filtre'], null, ['POST' => 0], null, false, false, null]],
        '/maisonmaison/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\MaisonController::searchAction'], null, null, null, false, false, null]],
        '/prop/maison' => [[['_route' => 'prop_maison_index', '_controller' => 'App\\Controller\\PropMaisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prop/maison/new' => [[['_route' => 'prop_maison_new', '_controller' => 'App\\Controller\\PropMaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reservation/guide' => [[['_route' => 'reservation_guide_index', '_controller' => 'App\\Controller\\ReservationGuideController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/guide/trier' => [[['_route' => 'reservation_guide_trier', '_controller' => 'App\\Controller\\ReservationGuideController::trier'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/maison' => [[['_route' => 'reservation_maison_index', '_controller' => 'App\\Controller\\ReservationMaisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/maison/trier' => [[['_route' => 'reservation_maison_trier', '_controller' => 'App\\Controller\\ReservationMaisonController::trier'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservation/maison/new' => [[['_route' => 'reservation_maison_new', '_controller' => 'App\\Controller\\ReservationMaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/connect/facebookDesktop' => [[['_route' => 'facebook_connect1', '_controller' => 'App\\Controller\\SecurityController::connect1'], null, null, null, false, false, null]],
        '/connect/facebook/check' => [[['_route' => 'connect_facebook_check', '_controller' => 'App\\Controller\\SecurityController::connectCheckAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/social/media' => [[['_route' => 'social_media_index', '_controller' => 'App\\Controller\\SocialMediaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/social/media/new' => [[['_route' => 'social_media_new', '_controller' => 'App\\Controller\\SocialMediaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/tpmaison' => [[['_route' => 't_pmaison_index', '_controller' => 'App\\Controller\\TPmaisonController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/tpmaison/new' => [[['_route' => 't_pmaison_new', '_controller' => 'App\\Controller\\TPmaisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/d(?'
                    .'|ashboard(?'
                        .'|/(?'
                            .'|utilisateur/([^/]++)(?'
                                .'|/(?'
                                    .'|affect(?'
                                        .'|guide(*:230)'
                                        .'|prop(*:242)'
                                    .')'
                                    .'|edit(*:255)'
                                .')'
                                .'|(*:264)'
                            .')'
                            .'|notif/seen/([^/]++)(*:292)'
                            .'|demande(?'
                                .'|guide/([^/]++)(*:324)'
                                .'|prop/([^/]++)(*:345)'
                            .')'
                            .'|lieux/([^/]++)(?'
                                .'|(*:371)'
                                .'|/edit(*:384)'
                                .'|(*:392)'
                            .')'
                        .')'
                        .'|delete/([^/]++)(*:417)'
                    .')'
                    .'|isponibilite/([^/]++)(?'
                        .'|(*:450)'
                        .'|/edit(*:463)'
                        .'|(*:471)'
                    .')'
                .')'
                .'|/a(?'
                    .'|rtiste/([^/]++)(?'
                        .'|(*:504)'
                        .'|/edit(*:517)'
                        .'|(*:525)'
                    .')'
                    .'|vis/(?'
                        .'|destination/([^/]++)(?'
                            .'|(*:564)'
                            .'|/edit(*:577)'
                            .'|(*:585)'
                        .')'
                        .'|evenement/([^/]++)(?'
                            .'|(*:615)'
                            .'|/edit(*:628)'
                            .'|(*:636)'
                        .')'
                        .'|guide/(?'
                            .'|new/([^/]++)(*:666)'
                            .'|([^/]++)(?'
                                .'|(*:685)'
                                .'|/edit(*:698)'
                                .'|(*:706)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/bad/words/([^/]++)(?'
                    .'|(*:740)'
                    .'|/edit(*:753)'
                    .'|(*:761)'
                .')'
                .'|/c(?'
                    .'|ategorie/(?'
                        .'|art/([^/]++)(?'
                            .'|(*:802)'
                            .'|/edit(*:815)'
                            .'|(*:823)'
                        .')'
                        .'|even/([^/]++)(?'
                            .'|(*:848)'
                            .'|/edit(*:861)'
                            .'|(*:869)'
                        .')'
                    .')'
                    .'|ontactez/nous/([^/]++)(?'
                        .'|(*:904)'
                        .'|/edit(*:917)'
                        .'|(*:925)'
                    .')'
                .')'
                .'|/even/(?'
                    .'|approuve/(?'
                        .'|p(?'
                            .'|articipant/([^/]++)(*:979)'
                            .'|euEtre/([^/]++)(*:1002)'
                        .')'
                        .'|no/([^/]++)(*:1023)'
                        .'|detail/([^/]++)(*:1047)'
                        .'|evenLieu/([^/]++)(*:1073)'
                        .'|([^/]++)(?'
                            .'|(*:1093)'
                            .'|/edit(*:1107)'
                            .'|(*:1116)'
                        .')'
                    .')'
                    .'|non/approuve/(?'
                        .'|a(?'
                            .'|nnuler/([^/]++)(*:1162)'
                            .'|pprouver/([^/]++)(*:1188)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:1209)'
                            .'|/edit(*:1223)'
                            .'|(*:1232)'
                        .')'
                    .')'
                    .'|popularite/([^/]++)(?'
                        .'|(*:1265)'
                        .'|/edit(*:1279)'
                        .'|(*:1288)'
                    .')'
                .')'
                .'|/guide/([^/]++)(?'
                    .'|(*:1317)'
                    .'|/edit(*:1331)'
                    .'|(*:1340)'
                .')'
                .'|/li(?'
                    .'|eu(?'
                        .'|/even/([^/]++)(?'
                            .'|(*:1378)'
                            .'|/edit(*:1392)'
                            .'|(*:1401)'
                        .')'
                        .'|maison/([^/]++)(?'
                            .'|(*:1429)'
                            .'|/edit(*:1443)'
                            .'|(*:1452)'
                        .')'
                    .')'
                    .'|ke/dislike/(?'
                        .'|dislike(?'
                            .'|e/([^/]++)(*:1497)'
                            .'|d/([^/]++)(*:1516)'
                            .'|g/([^/]++)(*:1535)'
                        .')'
                        .'|like(?'
                            .'|e/([^/]++)(*:1562)'
                            .'|d/([^/]++)(*:1581)'
                            .'|g/([^/]++)(*:1600)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:1621)'
                            .'|/edit(*:1635)'
                            .'|(*:1644)'
                        .')'
                    .')'
                .')'
                .'|/maison/(?'
                    .'|maisonLieu/([^/]++)(*:1686)'
                    .'|([^/]++)(?'
                        .'|(*:1706)'
                        .'|/(?'
                            .'|pdf(*:1722)'
                            .'|admin(*:1736)'
                            .'|edit(?'
                                .'|(*:1752)'
                                .'|/admin(*:1767)'
                            .')'
                        .')'
                        .'|(*:1778)'
                    .')'
                .')'
                .'|/prop/maison/([^/]++)(?'
                    .'|(*:1813)'
                    .'|/edit(*:1827)'
                    .'|(*:1836)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:1873)'
                        .'|/edit(*:1887)'
                        .'|(*:1896)'
                    .')'
                    .'|se(?'
                        .'|rvation/(?'
                            .'|guide/(?'
                                .'|new/([^/]++)(*:1943)'
                                .'|([^/]++)(?'
                                    .'|(*:1963)'
                                    .'|/edit(*:1977)'
                                    .'|(*:1986)'
                                .')'
                            .')'
                            .'|maison/([^/]++)(?'
                                .'|(*:2015)'
                                .'|/edit(*:2029)'
                                .'|(*:2038)'
                            .')'
                        .')'
                        .'|t\\-password/reset(?:/([^/]++))?(*:2080)'
                    .')'
                .')'
                .'|/social/media/([^/]++)(?'
                    .'|(*:2116)'
                    .'|/edit(*:2130)'
                    .'|(*:2139)'
                .')'
                .'|/tpmaison/([^/]++)(?'
                    .'|(*:2170)'
                    .'|/edit(*:2184)'
                    .'|(*:2193)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:2227)'
                    .'|/edit(?'
                        .'|(*:2244)'
                        .'|Photo(*:2258)'
                    .')'
                    .'|(*:2268)'
                .')'
                .'|/qr\\-code/([^/]++)/([^/]++)(*:2305)'
                .'|/oauth/check/([^/]++)(*:2335)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        230 => [[['_route' => 'dashboard_utilisateur_affectguide', '_controller' => 'App\\Controller\\AdminController::editRoleGuide'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'dashboard_utilisateur_affectprop', '_controller' => 'App\\Controller\\AdminController::editRoleProp'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        255 => [[['_route' => 'dashboard_utilisateur_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'dashboard_utilisateur_show', '_controller' => 'App\\Controller\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'dashboard_notif_seen', '_controller' => 'App\\Controller\\AdminController::notifseen'], ['id'], ['GET' => 0], null, false, true, null]],
        324 => [[['_route' => 'dashboard_guide_show', '_controller' => 'App\\Controller\\AdminController::showGuide'], ['id'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'dashboard_prop_show', '_controller' => 'App\\Controller\\AdminController::showProp'], ['id'], ['GET' => 0], null, false, true, null]],
        371 => [[['_route' => 'dashboard_lieu_maison_show', '_controller' => 'App\\Controller\\AdminController::showlieux'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'dashboard_lieu_maison_edit', '_controller' => 'App\\Controller\\AdminController::editlieux'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        392 => [[['_route' => 'dashboard_lieu_maison_delete', '_controller' => 'App\\Controller\\AdminController::deletelieux'], ['id'], ['DELETE' => 0], null, false, true, null]],
        417 => [[['_route' => 'dashboard_utilisateur_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        450 => [[['_route' => 'disponibilite_show', '_controller' => 'App\\Controller\\DisponibiliteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        463 => [[['_route' => 'disponibilite_edit', '_controller' => 'App\\Controller\\DisponibiliteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        471 => [[['_route' => 'disponibilite_delete', '_controller' => 'App\\Controller\\DisponibiliteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        504 => [[['_route' => 'artiste_show', '_controller' => 'App\\Controller\\ArtisteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        517 => [[['_route' => 'artiste_edit', '_controller' => 'App\\Controller\\ArtisteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        525 => [[['_route' => 'artiste_delete', '_controller' => 'App\\Controller\\ArtisteController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        564 => [[['_route' => 'avis_destination_show', '_controller' => 'App\\Controller\\AvisDestinationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        577 => [[['_route' => 'avis_destination_edit', '_controller' => 'App\\Controller\\AvisDestinationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        585 => [[['_route' => 'avis_destination_delete', '_controller' => 'App\\Controller\\AvisDestinationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        615 => [[['_route' => 'avis_evenement_show', '_controller' => 'App\\Controller\\AvisEvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        628 => [[['_route' => 'avis_evenement_edit', '_controller' => 'App\\Controller\\AvisEvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        636 => [[['_route' => 'avis_evenement_delete', '_controller' => 'App\\Controller\\AvisEvenementController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        666 => [[['_route' => 'avis_guide_new', '_controller' => 'App\\Controller\\AvisGuideController::newa'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        685 => [[['_route' => 'avis_guide_show', '_controller' => 'App\\Controller\\AvisGuideController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        698 => [[['_route' => 'avis_guide_edit', '_controller' => 'App\\Controller\\AvisGuideController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        706 => [[['_route' => 'avis_guide_delete', '_controller' => 'App\\Controller\\AvisGuideController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        740 => [[['_route' => 'bad_words_show', '_controller' => 'App\\Controller\\BadWordsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        753 => [[['_route' => 'bad_words_edit', '_controller' => 'App\\Controller\\BadWordsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        761 => [[['_route' => 'bad_words_delete', '_controller' => 'App\\Controller\\BadWordsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        802 => [[['_route' => 'categorie_art_show', '_controller' => 'App\\Controller\\CategorieArtController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        815 => [[['_route' => 'categorie_art_edit', '_controller' => 'App\\Controller\\CategorieArtController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        823 => [[['_route' => 'categorie_art_delete', '_controller' => 'App\\Controller\\CategorieArtController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        848 => [[['_route' => 'categorie_even_show', '_controller' => 'App\\Controller\\CategorieEvenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        861 => [[['_route' => 'categorie_even_edit', '_controller' => 'App\\Controller\\CategorieEvenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        869 => [[['_route' => 'categorie_even_delete', '_controller' => 'App\\Controller\\CategorieEvenController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        904 => [[['_route' => 'contactez_nous_show', '_controller' => 'App\\Controller\\ContactezNousController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        917 => [[['_route' => 'contactez_nous_edit', '_controller' => 'App\\Controller\\ContactezNousController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        925 => [[['_route' => 'contactez_nous_delete', '_controller' => 'App\\Controller\\ContactezNousController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        979 => [[['_route' => 'participant', '_controller' => 'App\\Controller\\EvenApprouveController::participant'], ['id'], ['GET' => 0], null, false, true, null]],
        1002 => [[['_route' => 'peutEtre', '_controller' => 'App\\Controller\\EvenApprouveController::peuEtre'], ['id'], ['GET' => 0], null, false, true, null]],
        1023 => [[['_route' => 'no', '_controller' => 'App\\Controller\\EvenApprouveController::no'], ['id'], ['GET' => 0], null, false, true, null]],
        1047 => [[['_route' => 'detail', '_controller' => 'App\\Controller\\EvenApprouveController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        1073 => [[['_route' => 'even_approuve_evenLieu', '_controller' => 'App\\Controller\\EvenApprouveController::evenLieuAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1093 => [[['_route' => 'even_approuve_show', '_controller' => 'App\\Controller\\EvenApprouveController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1107 => [[['_route' => 'even_approuve_edit', '_controller' => 'App\\Controller\\EvenApprouveController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1116 => [[['_route' => 'even_approuve_delete', '_controller' => 'App\\Controller\\EvenApprouveController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1162 => [[['_route' => 'even_non_approuve_annuler', '_controller' => 'App\\Controller\\EvenNonApprouveController::annuler'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1188 => [[['_route' => 'even_non_approuve_approuver', '_controller' => 'App\\Controller\\EvenNonApprouveController::approuver'], ['id'], ['GET' => 0], null, false, true, null]],
        1209 => [[['_route' => 'even_non_approuve_show', '_controller' => 'App\\Controller\\EvenNonApprouveController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1223 => [[['_route' => 'even_non_approuve_edit', '_controller' => 'App\\Controller\\EvenNonApprouveController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1232 => [[['_route' => 'even_non_approuve_delete', '_controller' => 'App\\Controller\\EvenNonApprouveController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1265 => [[['_route' => 'even_popularite_show', '_controller' => 'App\\Controller\\EvenPopulariteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1279 => [[['_route' => 'even_popularite_edit', '_controller' => 'App\\Controller\\EvenPopulariteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1288 => [[['_route' => 'even_popularite_delete', '_controller' => 'App\\Controller\\EvenPopulariteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1317 => [[['_route' => 'guide_show', '_controller' => 'App\\Controller\\GuideController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1331 => [[['_route' => 'guide_edit', '_controller' => 'App\\Controller\\GuideController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1340 => [[['_route' => 'guide_delete', '_controller' => 'App\\Controller\\GuideController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1378 => [[['_route' => 'lieu_even_show', '_controller' => 'App\\Controller\\LieuEvenController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1392 => [[['_route' => 'lieu_even_edit', '_controller' => 'App\\Controller\\LieuEvenController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1401 => [[['_route' => 'lieu_even_delete', '_controller' => 'App\\Controller\\LieuEvenController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1429 => [[['_route' => 'lieu_maison_show', '_controller' => 'App\\Controller\\LieuMaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1443 => [[['_route' => 'lieu_maison_edit', '_controller' => 'App\\Controller\\LieuMaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1452 => [[['_route' => 'lieu_maison_delete', '_controller' => 'App\\Controller\\LieuMaisonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1497 => [[['_route' => 'dislike_new_e', '_controller' => 'App\\Controller\\LikeDislikeController::newdislikee'], ['id'], ['GET' => 0], null, false, true, null]],
        1516 => [[['_route' => 'dislike_new_d', '_controller' => 'App\\Controller\\LikeDislikeController::newdisliked'], ['id'], ['GET' => 0], null, false, true, null]],
        1535 => [[['_route' => 'dislike_new_g', '_controller' => 'App\\Controller\\LikeDislikeController::newdislikeg'], ['id'], ['GET' => 0], null, false, true, null]],
        1562 => [[['_route' => 'like_new_e', '_controller' => 'App\\Controller\\LikeDislikeController::newlikee'], ['id'], ['GET' => 0], null, false, true, null]],
        1581 => [[['_route' => 'like_new_d', '_controller' => 'App\\Controller\\LikeDislikeController::newliked'], ['id'], ['GET' => 0], null, false, true, null]],
        1600 => [[['_route' => 'like_new_g', '_controller' => 'App\\Controller\\LikeDislikeController::newlikeg'], ['id'], ['GET' => 0], null, false, true, null]],
        1621 => [[['_route' => 'like_dislike_show', '_controller' => 'App\\Controller\\LikeDislikeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1635 => [[['_route' => 'like_dislike_edit', '_controller' => 'App\\Controller\\LikeDislikeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1644 => [[['_route' => 'like_dislike_delete', '_controller' => 'App\\Controller\\LikeDislikeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1686 => [[['_route' => 'maisonLieu', '_controller' => 'App\\Controller\\MaisonController::maisonLieuAction'], ['id'], ['GET' => 0], null, false, true, null]],
        1706 => [[['_route' => 'maison_show', '_controller' => 'App\\Controller\\MaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1722 => [[['_route' => 'maison_show_pdf', '_controller' => 'App\\Controller\\MaisonController::showPDF'], ['id'], ['GET' => 0], null, false, false, null]],
        1736 => [[['_route' => 'maison_show_back', '_controller' => 'App\\Controller\\MaisonController::showBack'], ['id'], ['GET' => 0], null, false, false, null]],
        1752 => [[['_route' => 'maison_edit', '_controller' => 'App\\Controller\\MaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1767 => [[['_route' => 'maison_edit_back', '_controller' => 'App\\Controller\\MaisonController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1778 => [[['_route' => 'maison_delete', '_controller' => 'App\\Controller\\MaisonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1813 => [[['_route' => 'prop_maison_show', '_controller' => 'App\\Controller\\PropMaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1827 => [[['_route' => 'prop_maison_edit', '_controller' => 'App\\Controller\\PropMaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1836 => [[['_route' => 'prop_maison_delete', '_controller' => 'App\\Controller\\PropMaisonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1873 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1887 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1896 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1943 => [[['_route' => 'reservation_guide_new', '_controller' => 'App\\Controller\\ReservationGuideController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1963 => [[['_route' => 'reservation_guide_show', '_controller' => 'App\\Controller\\ReservationGuideController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1977 => [[['_route' => 'reservation_guide_edit', '_controller' => 'App\\Controller\\ReservationGuideController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1986 => [[['_route' => 'reservation_guide_delete', '_controller' => 'App\\Controller\\ReservationGuideController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2015 => [[['_route' => 'reservation_maison_show', '_controller' => 'App\\Controller\\ReservationMaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2029 => [[['_route' => 'reservation_maison_edit', '_controller' => 'App\\Controller\\ReservationMaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2038 => [[['_route' => 'reservation_maison_delete', '_controller' => 'App\\Controller\\ReservationMaisonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2080 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        2116 => [[['_route' => 'social_media_show', '_controller' => 'App\\Controller\\SocialMediaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2130 => [[['_route' => 'social_media_edit', '_controller' => 'App\\Controller\\SocialMediaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2139 => [[['_route' => 'social_media_delete', '_controller' => 'App\\Controller\\SocialMediaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2170 => [[['_route' => 't_pmaison_show', '_controller' => 'App\\Controller\\TPmaisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2184 => [[['_route' => 't_pmaison_edit', '_controller' => 'App\\Controller\\TPmaisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2193 => [[['_route' => 't_pmaison_delete', '_controller' => 'App\\Controller\\TPmaisonController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2227 => [[['_route' => 'utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        2244 => [[['_route' => 'utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2258 => [[['_route' => 'utilisateur_edit_photo', '_controller' => 'App\\Controller\\UtilisateurController::editPhoto'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2268 => [[['_route' => 'utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2305 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        2335 => [
            [['_route' => 'oauth_check', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'], ['service'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
