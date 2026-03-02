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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::adminIndex'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/aide' => [[['_route' => 'admin_aide', '_controller' => 'App\\Controller\\Admin\\AideAdminController::index'], null, null, null, false, false, null]],
        '/admin/aide/carte-medicale' => [[['_route' => 'admin_carte_medicale', '_controller' => 'App\\Controller\\Admin\\CarteMedicaleAdminController::index'], null, null, null, false, false, null]],
        '/admin/aide/contacts' => [[['_route' => 'admin_contacts', '_controller' => 'App\\Controller\\Admin\\ContactUrgenceAdminController::index'], null, null, null, false, false, null]],
        '/admin/don/demandes' => [[['_route' => 'admin_demandes', '_controller' => 'App\\Controller\\Admin\\DemandeDonAdminController::index'], null, null, null, false, false, null]],
        '/admin/don' => [[['_route' => 'admin_don', '_controller' => 'App\\Controller\\Admin\\DonAdminController::index'], null, null, null, false, false, null]],
        '/admin/don/list' => [[['_route' => 'admin_don_list', '_controller' => 'App\\Controller\\Admin\\DonAdminController::list'], null, null, null, false, false, null]],
        '/admin/don/bulk-action' => [[['_route' => 'admin_don_bulk', '_controller' => 'App\\Controller\\Admin\\DonAdminController::bulkAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/don/donneurs' => [[['_route' => 'admin_donneurs', '_controller' => 'App\\Controller\\Admin\\DonneurAdminController::index'], null, null, null, false, false, null]],
        '/admin/faq' => [[['_route' => 'admin_faq', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::index'], null, null, null, false, false, null]],
        '/admin/faq/new' => [[['_route' => 'admin_faq_new', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/don/matching' => [[['_route' => 'admin_matching', '_controller' => 'App\\Controller\\Admin\\MatchingAdminController::index'], null, null, null, false, false, null]],
        '/admin/support' => [[['_route' => 'admin_support', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::index'], null, null, null, false, false, null]],
        '/admin/support/open' => [[['_route' => 'admin_support_open', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::openTickets'], null, null, null, false, false, null]],
        '/admin/tutoriels' => [[['_route' => 'admin_tutorials', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::index'], null, null, null, false, false, null]],
        '/admin/tutoriels/new' => [[['_route' => 'admin_tutorial_new', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/aide/urgences' => [[['_route' => 'admin_urgences', '_controller' => 'App\\Controller\\Admin\\UrgenceAdminController::index'], null, null, null, false, false, null]],
        '/aide/faq' => [[['_route' => 'aide_faq', '_controller' => 'App\\Controller\\Front\\AideController::faq'], null, null, null, false, false, null]],
        '/aide/support' => [[['_route' => 'aide_support', '_controller' => 'App\\Controller\\Front\\AideController::support'], null, null, null, false, false, null]],
        '/aide/support/new' => [[['_route' => 'aide_support_new', '_controller' => 'App\\Controller\\Front\\AideController::newTicket'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/aide/urgence-info' => [[['_route' => 'aide_urgence_info', '_controller' => 'App\\Controller\\Front\\AideController::urgence'], null, null, null, false, false, null]],
        '/aide/map' => [[['_route' => 'aide_map', '_controller' => 'App\\Controller\\Front\\AideMapController::index'], null, null, null, false, false, null]],
        '/aide/map/api' => [[['_route' => 'aide_map_api', '_controller' => 'App\\Controller\\Front\\AideMapController::api'], null, null, null, false, false, null]],
        '/aide/contact' => [[['_route' => 'contact_urgence_index', '_controller' => 'App\\Controller\\Front\\ContactUrgenceController::index'], null, null, null, true, false, null]],
        '/don/demande' => [[['_route' => 'demande_don', '_controller' => 'App\\Controller\\Front\\DemandeDonController::demande'], null, null, null, false, false, null]],
        '/don/declarer' => [[['_route' => 'don_new', '_controller' => 'App\\Controller\\Front\\DonController::new'], null, null, null, false, false, null]],
        '/don/historique' => [[['_route' => 'don_history', '_controller' => 'App\\Controller\\Front\\DonController::history'], null, null, null, false, false, null]],
        '/don/inscription' => [[['_route' => 'donneur_inscription', '_controller' => 'App\\Controller\\Front\\DonneurController::inscription'], null, null, null, false, false, null]],
        '/aide/tutoriels' => [[['_route' => 'aide_tutorials', '_controller' => 'App\\Controller\\Front\\TutorialController::index'], null, null, null, false, false, null]],
        '/aide/urgence' => [[['_route' => 'urgence_index', '_controller' => 'App\\Controller\\Front\\UrgenceController::index'], null, null, null, true, false, null]],
        '/aide/urgence/send' => [[['_route' => 'urgence_send', '_controller' => 'App\\Controller\\Front\\UrgenceController::send'], null, ['POST' => 0], null, false, false, null]],
        '/aide/urgence/test-email' => [[['_route' => 'urgence_test_email', '_controller' => 'App\\Controller\\Front\\UrgenceController::testEmail'], null, null, null, false, false, null]],
        '/voice/process' => [[['_route' => 'voice_process', '_controller' => 'App\\Controller\\Front\\VoiceAssistantController::process'], null, ['POST' => 0], null, false, false, null]],
        '/voice/tip' => [[['_route' => 'voice_tip', '_controller' => 'App\\Controller\\Front\\VoiceAssistantController::tip'], null, null, null, false, false, null]],
        '/voice/commands' => [[['_route' => 'voice_commands', '_controller' => 'App\\Controller\\Front\\VoiceAssistantController::commands'], null, null, null, false, false, null]],
        '/analyse/a/i' => [[['_route' => 'app_analyse_a_i_index', '_controller' => 'App\\Controller\\AnalyseAIController::index'], null, ['GET' => 0], null, false, false, null]],
        '/analyse/a/i/new' => [[['_route' => 'app_analyse_a_i_new', '_controller' => 'App\\Controller\\AnalyseAIController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'frontoffice_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/hopitaux/hopitaux' => [[['_route' => 'frontoffice_hopitaux', '_controller' => 'App\\Controller\\HopitalController::index'], null, null, null, false, false, null]],
        '/rendez-vous/rendez-vous' => [[['_route' => 'frontoffice_rendez_vous', '_controller' => 'App\\Controller\\RendezVousController::index'], null, null, null, false, false, null]],
        '/rendez-vous/rendez-vous/new' => [[['_route' => 'frontoffice_rendez_vous_new', '_controller' => 'App\\Controller\\RendezVousController::new'], null, null, null, false, false, null]],
        '/don' => [[['_route' => 'don', '_controller' => 'App\\Controller\\SupportController::don'], null, null, null, false, false, null]],
        '/aide' => [[['_route' => 'aide', '_controller' => 'App\\Controller\\SupportController::aide'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/rendez-vous' => [[['_route' => 'app_rendez_vous', '_controller' => 'App\\Controller\\RendezVousController::index'], null, null, null, false, false, null]],
        '/hopitaux' => [[['_route' => 'app_hopital', '_controller' => 'App\\Controller\\HopitalController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|aide/(?'
                            .'|c(?'
                                .'|arte\\-medicale/delete/([^/]++)(*:257)'
                                .'|ontacts/delete/([^/]++)(*:288)'
                            .')'
                            .'|urgences/(?'
                                .'|delete/([^/]++)(*:324)'
                                .'|toggle/([^/]++)(*:347)'
                            .')'
                        .')'
                        .'|don/(?'
                            .'|d(?'
                                .'|e(?'
                                    .'|mandes/(?'
                                        .'|delete/([^/]++)(*:397)'
                                        .'|approve/([^/]++)(*:421)'
                                    .')'
                                    .'|lete/([^/]++)(*:443)'
                                .')'
                                .'|onneurs/(?'
                                    .'|toggle/([^/]++)(*:478)'
                                    .'|delete/([^/]++)(*:501)'
                                .')'
                            .')'
                            .'|validate/([^/]++)(*:528)'
                            .'|reject/([^/]++)(*:551)'
                            .'|matching/(?'
                                .'|demande/([^/]++)(*:587)'
                                .'|notify(?'
                                    .'|/([^/]++)/([^/]++)(*:622)'
                                    .'|\\-all/([^/]++)(*:644)'
                                .')'
                            .')'
                        .')'
                        .'|faq/([^/]++)/(?'
                            .'|edit(*:675)'
                            .'|delete(*:689)'
                            .'|toggle(*:703)'
                        .')'
                        .'|support/([^/]++)(?'
                            .'|(*:731)'
                            .'|/(?'
                                .'|status(*:749)'
                                .'|assign(*:763)'
                                .'|delete(*:777)'
                            .')'
                        .')'
                        .'|tutoriels/([^/]++)/(?'
                            .'|edit(*:813)'
                            .'|delete(*:827)'
                            .'|toggle(*:841)'
                        .')'
                    .')'
                    .'|ide/(?'
                        .'|faq/([^/]++)/(?'
                            .'|view(*:878)'
                            .'|helpful(*:893)'
                        .')'
                        .'|support/([^/]++)(?'
                            .'|(*:921)'
                            .'|/feedback(*:938)'
                        .')'
                        .'|map/(?'
                            .'|lieu/([^/]++)/(?'
                                .'|review(?'
                                    .'|s(*:981)'
                                    .'|(*:989)'
                                .')'
                                .'|qr(*:1000)'
                            .')'
                            .'|review/([^/]++)/helpful(*:1033)'
                        .')'
                        .'|contact/(?'
                            .'|delete/([^/]++)(*:1069)'
                            .'|edit/([^/]++)(*:1091)'
                        .')'
                        .'|tutoriels/([^/]++)(?'
                            .'|(*:1122)'
                            .'|/like(*:1136)'
                        .')'
                        .'|urgence/delete/([^/]++)(*:1169)'
                    .')'
                    .'|nalyse/a/i/([^/]++)(?'
                        .'|(*:1201)'
                        .'|/edit(*:1215)'
                        .'|(*:1224)'
                    .')'
                .')'
                .'|/don/(?'
                    .'|de(?'
                        .'|mande/(?'
                            .'|([^/]++)(?'
                                .'|(*:1268)'
                                .'|/repondre(*:1286)'
                            .')'
                            .'|delete/([^/]++)(*:1311)'
                            .'|edit/([^/]++)(*:1333)'
                        .')'
                        .'|lete/([^/]++)(*:1356)'
                    .')'
                    .'|([^/]++)/(?'
                        .'|certificat(*:1388)'
                        .'|share(*:1402)'
                    .')'
                    .'|certificat/([^/]++)/verifier(*:1440)'
                    .'|donneur/([^/]++)(*:1465)'
                .')'
                .'|/hopitaux/([^/]++)(*:1493)'
                .'|/rendez\\-vous/(?'
                    .'|([^/]++)(?'
                        .'|(*:1530)'
                        .'|/(?'
                            .'|modifier(*:1551)'
                            .'|supprimer(*:1569)'
                        .')'
                    .')'
                    .'|nouveau(*:1587)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        257 => [[['_route' => 'admin_lieu_delete', '_controller' => 'App\\Controller\\Admin\\CarteMedicaleAdminController::delete'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'admin_contact_delete', '_controller' => 'App\\Controller\\Admin\\ContactUrgenceAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        324 => [[['_route' => 'admin_urgence_delete', '_controller' => 'App\\Controller\\Admin\\UrgenceAdminController::delete'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'admin_urgence_toggle', '_controller' => 'App\\Controller\\Admin\\UrgenceAdminController::toggle'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'admin_demande_delete', '_controller' => 'App\\Controller\\Admin\\DemandeDonAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        421 => [[['_route' => 'admin_demande_approve', '_controller' => 'App\\Controller\\Admin\\DemandeDonAdminController::approve'], ['id'], ['POST' => 0], null, false, true, null]],
        443 => [[['_route' => 'admin_don_delete', '_controller' => 'App\\Controller\\Admin\\DonAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        478 => [[['_route' => 'admin_donneur_toggle', '_controller' => 'App\\Controller\\Admin\\DonneurAdminController::toggle'], ['id'], ['POST' => 0], null, false, true, null]],
        501 => [[['_route' => 'admin_donneur_delete', '_controller' => 'App\\Controller\\Admin\\DonneurAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        528 => [[['_route' => 'admin_don_validate', '_controller' => 'App\\Controller\\Admin\\DonAdminController::validate'], ['id'], ['POST' => 0], null, false, true, null]],
        551 => [[['_route' => 'admin_don_reject', '_controller' => 'App\\Controller\\Admin\\DonAdminController::reject'], ['id'], ['POST' => 0], null, false, true, null]],
        587 => [[['_route' => 'admin_matching_demande', '_controller' => 'App\\Controller\\Admin\\MatchingAdminController::matchDemande'], ['id'], null, null, false, true, null]],
        622 => [[['_route' => 'admin_matching_notify', '_controller' => 'App\\Controller\\Admin\\MatchingAdminController::notifyDonor'], ['demandeId', 'donorId'], ['POST' => 0], null, false, true, null]],
        644 => [[['_route' => 'admin_matching_notify_all', '_controller' => 'App\\Controller\\Admin\\MatchingAdminController::notifyAllMatches'], ['demandeId'], ['POST' => 0], null, false, true, null]],
        675 => [[['_route' => 'admin_faq_edit', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        689 => [[['_route' => 'admin_faq_delete', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        703 => [[['_route' => 'admin_faq_toggle', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        731 => [[['_route' => 'admin_support_view', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::view'], ['id'], null, null, false, true, null]],
        749 => [[['_route' => 'admin_support_status', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::updateStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        763 => [[['_route' => 'admin_support_assign', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::assign'], ['id'], ['POST' => 0], null, false, false, null]],
        777 => [[['_route' => 'admin_support_delete', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        813 => [[['_route' => 'admin_tutorial_edit', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        827 => [[['_route' => 'admin_tutorial_delete', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        841 => [[['_route' => 'admin_tutorial_toggle', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        878 => [[['_route' => 'aide_faq_view', '_controller' => 'App\\Controller\\Front\\AideController::viewFaq'], ['id'], null, null, false, false, null]],
        893 => [[['_route' => 'aide_faq_helpful', '_controller' => 'App\\Controller\\Front\\AideController::markHelpful'], ['id'], ['POST' => 0], null, false, false, null]],
        921 => [[['_route' => 'aide_support_view', '_controller' => 'App\\Controller\\Front\\AideController::viewTicket'], ['id'], null, null, false, true, null]],
        938 => [[['_route' => 'aide_support_feedback', '_controller' => 'App\\Controller\\Front\\AideController::submitFeedback'], ['id'], ['POST' => 0], null, false, false, null]],
        981 => [[['_route' => 'aide_map_reviews', '_controller' => 'App\\Controller\\Front\\AideMapController::getReviews'], ['id'], null, null, false, false, null]],
        989 => [[['_route' => 'aide_map_review_add', '_controller' => 'App\\Controller\\Front\\AideMapController::addReview'], ['id'], ['POST' => 0], null, false, false, null]],
        1000 => [[['_route' => 'aide_map_qr', '_controller' => 'App\\Controller\\Front\\AideMapController::getQrCode'], ['id'], null, null, false, false, null]],
        1033 => [[['_route' => 'aide_map_review_helpful', '_controller' => 'App\\Controller\\Front\\AideMapController::markReviewHelpful'], ['id'], ['POST' => 0], null, false, false, null]],
        1069 => [[['_route' => 'contact_urgence_delete', '_controller' => 'App\\Controller\\Front\\ContactUrgenceController::delete'], ['id'], null, null, false, true, null]],
        1091 => [[['_route' => 'contact_urgence_edit', '_controller' => 'App\\Controller\\Front\\ContactUrgenceController::edit'], ['id'], null, null, false, true, null]],
        1122 => [[['_route' => 'aide_tutorial_view', '_controller' => 'App\\Controller\\Front\\TutorialController::view'], ['id'], null, null, false, true, null]],
        1136 => [[['_route' => 'aide_tutorial_like', '_controller' => 'App\\Controller\\Front\\TutorialController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        1169 => [[['_route' => 'urgence_delete', '_controller' => 'App\\Controller\\Front\\UrgenceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1201 => [[['_route' => 'app_analyse_a_i_show', '_controller' => 'App\\Controller\\AnalyseAIController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1215 => [[['_route' => 'app_analyse_a_i_edit', '_controller' => 'App\\Controller\\AnalyseAIController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1224 => [[['_route' => 'app_analyse_a_i_delete', '_controller' => 'App\\Controller\\AnalyseAIController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1268 => [[['_route' => 'demande_don_view', '_controller' => 'App\\Controller\\Front\\DemandeDonController::view'], ['id'], null, null, false, true, null]],
        1286 => [[['_route' => 'demande_don_respond', '_controller' => 'App\\Controller\\Front\\DemandeDonController::respond'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1311 => [[['_route' => 'demande_delete', '_controller' => 'App\\Controller\\Front\\DemandeDonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1333 => [[['_route' => 'demande_edit', '_controller' => 'App\\Controller\\Front\\DemandeDonController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1356 => [[['_route' => 'don_delete', '_controller' => 'App\\Controller\\Front\\DonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1388 => [[['_route' => 'don_certificate', '_controller' => 'App\\Controller\\Front\\DonController::downloadCertificate'], ['id'], null, null, false, false, null]],
        1402 => [[['_route' => 'don_share', '_controller' => 'App\\Controller\\Front\\DonController::share'], ['id'], null, null, false, false, null]],
        1440 => [[['_route' => 'don_certificate_verify', '_controller' => 'App\\Controller\\Front\\DonController::verifyCertificate'], ['id'], null, null, false, false, null]],
        1465 => [[['_route' => 'donneur_public', '_controller' => 'App\\Controller\\Front\\DonneurController::publicProfile'], ['id'], null, null, false, true, null]],
        1493 => [[['_route' => 'app_hopital_show', '_controller' => 'App\\Controller\\HopitalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1530 => [[['_route' => 'app_rendez_vous_show', '_controller' => 'App\\Controller\\RendezVousController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1551 => [[['_route' => 'app_rendez_vous_edit', '_controller' => 'App\\Controller\\RendezVousController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1569 => [[['_route' => 'app_rendez_vous_delete', '_controller' => 'App\\Controller\\RendezVousController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1587 => [
            [['_route' => 'app_rendez_vous_new', '_controller' => 'App\\Controller\\RendezVousController::new'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
