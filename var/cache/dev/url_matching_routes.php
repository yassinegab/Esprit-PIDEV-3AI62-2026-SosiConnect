<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/ai' => [[['_route' => 'admin_ai_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminAIController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminDashboardController::adminIndex'], null, null, null, false, false, null]],
        '/admin/aide' => [[['_route' => 'admin_aide', '_controller' => 'App\\Controller\\Admin\\AideAdminController::index'], null, null, null, false, false, null]],
        '/admin/aide/carte-medicale' => [[['_route' => 'admin_carte_medicale', '_controller' => 'App\\Controller\\Admin\\CarteMedicaleAdminController::index'], null, null, null, false, false, null]],
        '/admin/aide/contacts' => [[['_route' => 'admin_contacts', '_controller' => 'App\\Controller\\Admin\\ContactUrgenceAdminController::index'], null, null, null, false, false, null]],
        '/admin/cycle' => [[['_route' => 'admin_cycle_index', '_controller' => 'App\\Controller\\Admin\\CycleAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/don/demandes' => [[['_route' => 'admin_demandes', '_controller' => 'App\\Controller\\Admin\\DemandeDonAdminController::index'], null, null, null, false, false, null]],
        '/admin/don' => [[['_route' => 'admin_don', '_controller' => 'App\\Controller\\Admin\\DonAdminController::index'], null, null, null, false, false, null]],
        '/admin/don/list' => [[['_route' => 'admin_don_list', '_controller' => 'App\\Controller\\Admin\\DonAdminController::list'], null, null, null, false, false, null]],
        '/admin/don/bulk-action' => [[['_route' => 'admin_don_bulk', '_controller' => 'App\\Controller\\Admin\\DonAdminController::bulkAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/don/donneurs' => [[['_route' => 'admin_donneurs', '_controller' => 'App\\Controller\\Admin\\DonneurAdminController::index'], null, null, null, false, false, null]],
        '/admin/faq' => [[['_route' => 'admin_faq', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::index'], null, null, null, false, false, null]],
        '/admin/faq/new' => [[['_route' => 'admin_faq_new', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/hopital' => [[['_route' => 'admin_hopital_index', '_controller' => 'App\\Controller\\Admin\\HopitalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/hopital/new' => [[['_route' => 'admin_hopital_new', '_controller' => 'App\\Controller\\Admin\\HopitalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/don/matching' => [[['_route' => 'admin_matching', '_controller' => 'App\\Controller\\Admin\\MatchingAdminController::index'], null, null, null, false, false, null]],
        '/admin/rendez-vous' => [[['_route' => 'admin_rendez_vous_index', '_controller' => 'App\\Controller\\Admin\\RendezVousController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/rendez-vous/new' => [[['_route' => 'admin_rendez_vous_new', '_controller' => 'App\\Controller\\Admin\\RendezVousController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/rendez-vous/statistiques' => [[['_route' => 'admin_rendez_vous_stats', '_controller' => 'App\\Controller\\Admin\\RendezVousController::statistiques'], null, ['GET' => 0], null, false, false, null]],
        '/admin/support' => [[['_route' => 'admin_support', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::index'], null, null, null, false, false, null]],
        '/admin/support/open' => [[['_route' => 'admin_support_open', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::openTickets'], null, null, null, false, false, null]],
        '/admin/tutoriels' => [[['_route' => 'admin_tutorials', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::index'], null, null, null, false, false, null]],
        '/admin/tutoriels/new' => [[['_route' => 'admin_tutorial_new', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/aide/urgences' => [[['_route' => 'admin_urgences', '_controller' => 'App\\Controller\\Admin\\UrgenceAdminController::index'], null, null, null, false, false, null]],
        '/admin/meal' => [[['_route' => 'app_meal_index', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\MealAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/meal/new' => [[['_route' => 'app_meal_new', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\MealAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/well-being-data' => [[['_route' => 'app_user_well_being_data_index', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\UserWellBeingDataAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/well-being-data/charts' => [[['_route' => 'app_user_well_being_data_charts', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\UserWellBeingDataAdminController::charts'], null, ['GET' => 0], null, false, false, null]],
        '/admin/well-being-data/pdf' => [[['_route' => 'app_user_well_being_data_pdf', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\UserWellBeingDataAdminController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/admin/well-being-data/new' => [[['_route' => 'app_user_well_being_data_new', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\UserWellBeingDataAdminController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/ai-assistant' => [[['_route' => 'ai_assistant_index', '_controller' => 'App\\Controller\\AiAssistantController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/stt' => [[['_route' => 'api_stt', '_controller' => 'App\\Controller\\AiAssistantController::transcribe'], null, ['POST' => 0], null, false, false, null]],
        '/api/chat' => [[['_route' => 'api_chat', '_controller' => 'App\\Controller\\AiAssistantController::chat'], null, ['POST' => 0], null, false, false, null]],
        '/api/tts' => [[['_route' => 'api_tts', '_controller' => 'App\\Controller\\AiAssistantController::textToSpeech'], null, ['POST' => 0], null, false, false, null]],
        '/cycle/analyse' => [[['_route' => 'cycle_analyse', '_controller' => 'App\\Controller\\CycleAnalysisController::analyse'], null, null, null, false, false, null]],
        '/cycle' => [[['_route' => 'cycle_index', '_controller' => 'App\\Controller\\CycleController::index'], null, null, null, false, false, null]],
        '/cycle/new' => [[['_route' => 'cycle_new', '_controller' => 'App\\Controller\\CycleController::new'], null, null, null, false, false, null]],
        '/cycle/search' => [[['_route' => 'cycle_search', '_controller' => 'App\\Controller\\CycleController::searchByYear'], null, null, null, false, false, null]],
        '/cycle/history' => [[['_route' => 'calendar_cycles_history', '_controller' => 'App\\Controller\\CycleController::history'], null, null, null, false, false, null]],
        '/cycle/stats' => [
            [['_route' => 'cycle_stats', '_controller' => 'App\\Controller\\CycleController::stats'], null, null, null, false, false, null],
            [['_route' => 'admin_stats_index', '_controller' => 'App\\Controller\\StatsController::index'], null, null, null, true, false, null],
        ],
        '/phases' => [[['_route' => 'cycle_phases', '_controller' => 'App\\Controller\\CyclePhasePageController::index'], null, null, null, false, false, null]],
        '/phases/events' => [[['_route' => 'cycle_phases_events', '_controller' => 'App\\Controller\\CyclePhasePageController::events'], null, null, null, false, false, null]],
        '/admin/dashboard/event' => [[['_route' => 'admin_events_index', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/admin/dashboard/add' => [[['_route' => 'admin_events_new', '_controller' => 'App\\Controller\\EventController::new'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'events_index', '_controller' => 'App\\Controller\\EventFrontController::index'], null, null, null, false, false, null]],
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
        '/' => [
            [['_route' => 'frontoffice_dashboard', '_controller' => 'App\\Controller\\Front_office\\DashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'app_dashboard', '_security' => 'is_granted("ROLE_USER")', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null],
        ],
        '/dossier-medical' => [[['_route' => 'dossier_medical_index', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dossier-medical/new' => [[['_route' => 'dossier_medical_new', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/chatbot' => [[['_route' => 'user_chatbot_index', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\ChatbotController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/chatbot/send' => [[['_route' => 'user_chatbot_send', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\ChatbotController::send'], null, ['POST' => 0], null, false, false, null]],
        '/user/chatbot/clear' => [[['_route' => 'user_chatbot_clear', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\ChatbotController::clear'], null, ['POST' => 0], null, false, false, null]],
        '/user/journal' => [[['_route' => 'user_journal_index', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\JournalController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/meal/new' => [[['_route' => 'user_meal_new', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\MealFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/wellbeing' => [[['_route' => 'user_wellbeing_index', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\UserWellBeingDataFrontController::index'], null, null, null, true, false, null]],
        '/wellbeing/statistics' => [[['_route' => 'user_wellbeing_statistics', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\UserWellBeingDataFrontController::statistics'], null, null, null, false, false, null]],
        '/wellbeing/new' => [[['_route' => 'user_wellbeing_new', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\UserWellBeingDataFrontController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Front_office\\Login\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Front_office\\Login\\SecurityController::logout'], null, null, null, false, false, null]],
        '/medecin/profile' => [[['_route' => 'medecin_profile', '_controller' => 'App\\Controller\\Front_office\\MedecinController::profile'], null, null, null, false, false, null]],
        '/medecin/dossiers' => [[['_route' => 'medecin_dossiers_liste', '_controller' => 'App\\Controller\\Front_office\\MedecinController::listeDossiers'], null, null, null, false, false, null]],
        '/dashboard/patient/update' => [[['_route' => 'patient_dossier_update', '_controller' => 'App\\Controller\\Front_office\\PatientController::update'], null, ['POST' => 0], null, false, false, null]],
        '/dashboard/patient/delete' => [[['_route' => 'patient_dossier_delete', '_controller' => 'App\\Controller\\Front_office\\PatientController::delete'], null, ['POST' => 0], null, false, false, null]],
        '/rendez-vous' => [[['_route' => 'app_rendez_vous_index', '_controller' => 'App\\Controller\\Front_office\\RendezVousController::index'], null, ['GET' => 0], null, false, false, null]],
        '/rendez-vous/new' => [[['_route' => 'app_rendez_vous_new', '_controller' => 'App\\Controller\\Front_office\\RendezVousController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/services' => [[['_route' => 'app_service_home', '_controller' => 'App\\Controller\\Front_office\\ServiceHomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\Front_office\\Signup\\RegistrationController::register'], null, null, null, false, false, null]],
        '/dashboard/medecin' => [[['_route' => 'medecin_dashboard', '_controller' => 'App\\Controller\\Front_office\\UserController::medecin'], null, null, null, false, false, null]],
        '/dashboard/patient' => [[['_route' => 'patient_dashboard', '_controller' => 'App\\Controller\\Front_office\\UserController::patient'], null, null, null, false, false, null]],
        '/analyse/a/i' => [[['_route' => 'app_analyse_a_i_index', '_controller' => 'App\\Controller\\AnalyseAIController::index'], null, ['GET' => 0], null, false, false, null]],
        '/analyse/a/i/new' => [[['_route' => 'app_analyse_a_i_new', '_controller' => 'App\\Controller\\AnalyseAIController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hopitaux/hopitaux' => [[['_route' => 'frontoffice_hopitaux', '_controller' => 'App\\Controller\\HopitalController::index'], null, null, null, false, false, null]],
        '/cycle/export-pdf' => [[['_route' => 'export_cycle_pdf', '_controller' => 'App\\Controller\\PdfController::exportCyclePdf'], null, null, null, false, false, null]],
        '/rendez-vous/rendez-vous' => [[['_route' => 'frontoffice_rendez_vous', '_controller' => 'App\\Controller\\RendezVousController::index'], null, null, null, false, false, null]],
        '/rendez-vous/rendez-vous/new' => [[['_route' => 'frontoffice_rendez_vous_new', '_controller' => 'App\\Controller\\RendezVousController::new'], null, null, null, false, false, null]],
        '/don' => [[['_route' => 'don', '_controller' => 'App\\Controller\\SupportController::don'], null, null, null, false, false, null]],
        '/aide' => [[['_route' => 'aide', '_controller' => 'App\\Controller\\SupportController::aide'], null, null, null, false, false, null]],
        '/symptome' => [[['_route' => 'symptome_index', '_controller' => 'App\\Controller\\SymptomeController::index'], null, null, null, false, false, null]],
        '/symptome/create' => [[['_route' => 'symptome_create', '_controller' => 'App\\Controller\\SymptomeController::create'], null, ['POST' => 0], null, false, false, null]],
        '/symptome/list' => [[['_route' => 'symptome_list', '_controller' => 'App\\Controller\\SymptomeController::list'], null, null, null, false, false, null]],
        '/ai/chat' => [[['_route' => 'ai_chat', '_controller' => 'App\\Controller\\SymptomeController::chat'], null, ['POST' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
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
                .'|/med(?'
                    .'|ia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:259)'
                        .'|([A-z0-9_-]*)/(.+)(*:285)'
                    .')'
                    .'|ecin/dossiers/(\\d+)(*:313)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|aide/(?'
                            .'|c(?'
                                .'|arte\\-medicale/delete/([^/]++)(*:377)'
                                .'|ontacts/delete/([^/]++)(*:408)'
                            .')'
                            .'|urgences/(?'
                                .'|delete/([^/]++)(*:444)'
                                .'|toggle/([^/]++)(*:467)'
                            .')'
                        .')'
                        .'|cycle/([^/]++)/show(*:496)'
                        .'|d(?'
                            .'|on/(?'
                                .'|d(?'
                                    .'|e(?'
                                        .'|mandes/(?'
                                            .'|delete/([^/]++)(*:547)'
                                            .'|approve/([^/]++)(*:571)'
                                        .')'
                                        .'|lete/([^/]++)(*:593)'
                                    .')'
                                    .'|onneurs/(?'
                                        .'|toggle/([^/]++)(*:628)'
                                        .'|delete/([^/]++)(*:651)'
                                    .')'
                                .')'
                                .'|validate/([^/]++)(*:678)'
                                .'|reject/([^/]++)(*:701)'
                                .'|matching/(?'
                                    .'|demande/([^/]++)(*:737)'
                                    .'|notify(?'
                                        .'|/([^/]++)/([^/]++)(*:772)'
                                        .'|\\-all/([^/]++)(*:794)'
                                    .')'
                                .')'
                            .')'
                            .'|ashboard/(?'
                                .'|edit/([^/]++)(*:830)'
                                .'|delete/([^/]++)(*:853)'
                            .')'
                        .')'
                        .'|faq/([^/]++)/(?'
                            .'|edit(*:883)'
                            .'|delete(*:897)'
                            .'|toggle(*:911)'
                        .')'
                        .'|hopital/([^/]++)(?'
                            .'|(*:939)'
                            .'|/edit(*:952)'
                            .'|(*:960)'
                        .')'
                        .'|rendez\\-vous/(?'
                            .'|(\\d+)(*:990)'
                            .'|(\\d+)/edit(*:1008)'
                            .'|(\\d+)(*:1022)'
                            .'|(\\d+)/confirmer(*:1046)'
                            .'|(\\d+)/annuler(*:1068)'
                        .')'
                        .'|support/([^/]++)(?'
                            .'|(*:1097)'
                            .'|/(?'
                                .'|status(*:1116)'
                                .'|assign(*:1131)'
                                .'|delete(*:1146)'
                            .')'
                        .')'
                        .'|tutoriels/([^/]++)/(?'
                            .'|edit(*:1183)'
                            .'|delete(*:1198)'
                            .'|toggle(*:1213)'
                        .')'
                        .'|meal/([^/]++)(?'
                            .'|(*:1239)'
                            .'|/edit(*:1253)'
                            .'|(*:1262)'
                        .')'
                        .'|well\\-being\\-data/([^/]++)(?'
                            .'|(*:1301)'
                            .'|/edit(*:1315)'
                            .'|(*:1324)'
                        .')'
                    .')'
                    .'|pi/conversation/([^/]++)(*:1359)'
                    .'|ide/(?'
                        .'|faq/([^/]++)/(?'
                            .'|view(*:1395)'
                            .'|helpful(*:1411)'
                        .')'
                        .'|support/([^/]++)(?'
                            .'|(*:1440)'
                            .'|/feedback(*:1458)'
                        .')'
                        .'|map/(?'
                            .'|lieu/([^/]++)/(?'
                                .'|review(?'
                                    .'|s(*:1502)'
                                    .'|(*:1511)'
                                .')'
                                .'|qr(*:1523)'
                            .')'
                            .'|review/([^/]++)/helpful(*:1556)'
                        .')'
                        .'|contact/(?'
                            .'|delete/([^/]++)(*:1592)'
                            .'|edit/([^/]++)(*:1614)'
                        .')'
                        .'|tutoriels/([^/]++)(?'
                            .'|(*:1645)'
                            .'|/like(*:1659)'
                        .')'
                        .'|urgence/delete/([^/]++)(*:1692)'
                    .')'
                    .'|nalyse/a/i/([^/]++)(?'
                        .'|(*:1724)'
                        .'|/edit(*:1738)'
                        .'|(*:1747)'
                    .')'
                .')'
                .'|/cycle/([^/]++)/(?'
                    .'|edit(*:1781)'
                    .'|delete(*:1796)'
                .')'
                .'|/events/([^/]++)/attend(*:1829)'
                .'|/do(?'
                    .'|n/(?'
                        .'|de(?'
                            .'|mande/(?'
                                .'|([^/]++)(?'
                                    .'|(*:1874)'
                                    .'|/repondre(*:1892)'
                                .')'
                                .'|delete/([^/]++)(*:1917)'
                                .'|edit/([^/]++)(*:1939)'
                            .')'
                            .'|lete/([^/]++)(*:1962)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|certificat(*:1994)'
                            .'|share(*:2008)'
                        .')'
                        .'|certificat/([^/]++)/verifier(*:2046)'
                        .'|donneur/([^/]++)(*:2071)'
                    .')'
                    .'|ssier\\-medical/([^/]++)(?'
                        .'|(*:2107)'
                        .'|/(?'
                            .'|e(?'
                                .'|dit(*:2127)'
                                .'|xport\\-pdf(*:2146)'
                            .')'
                            .'|analyse\\-(?'
                                .'|ia(*:2170)'
                                .'|hf(*:2181)'
                            .')'
                            .'|send\\-email(*:2202)'
                        .')'
                        .'|(*:2212)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|journal/([^/]++)/delete(*:2255)'
                    .'|meal/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:2288)'
                            .'|delete(*:2303)'
                        .')'
                        .'|(*:2313)'
                    .')'
                .')'
                .'|/wellbeing/([^/]++)(?'
                    .'|/edit(*:2351)'
                    .'|(*:2360)'
                .')'
                .'|/hopitaux/([^/]++)(*:2388)'
                .'|/rendez\\-vous/([^/]++)(?'
                    .'|(*:2422)'
                    .'|/(?'
                        .'|modifier(*:2443)'
                        .'|supprimer(*:2461)'
                    .')'
                .')'
                .'|/symptome/([^/]++)/edit(*:2495)'
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
        259 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => 'medecin_dossier_detail', '_controller' => 'App\\Controller\\Front_office\\MedecinController::consulterDossier'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'admin_lieu_delete', '_controller' => 'App\\Controller\\Admin\\CarteMedicaleAdminController::delete'], ['id'], null, null, false, true, null]],
        408 => [[['_route' => 'admin_contact_delete', '_controller' => 'App\\Controller\\Admin\\ContactUrgenceAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        444 => [[['_route' => 'admin_urgence_delete', '_controller' => 'App\\Controller\\Admin\\UrgenceAdminController::delete'], ['id'], null, null, false, true, null]],
        467 => [[['_route' => 'admin_urgence_toggle', '_controller' => 'App\\Controller\\Admin\\UrgenceAdminController::toggle'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'admin_cycle_show', '_controller' => 'App\\Controller\\Admin\\CycleAdminController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        547 => [[['_route' => 'admin_demande_delete', '_controller' => 'App\\Controller\\Admin\\DemandeDonAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        571 => [[['_route' => 'admin_demande_approve', '_controller' => 'App\\Controller\\Admin\\DemandeDonAdminController::approve'], ['id'], ['POST' => 0], null, false, true, null]],
        593 => [[['_route' => 'admin_don_delete', '_controller' => 'App\\Controller\\Admin\\DonAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        628 => [[['_route' => 'admin_donneur_toggle', '_controller' => 'App\\Controller\\Admin\\DonneurAdminController::toggle'], ['id'], ['POST' => 0], null, false, true, null]],
        651 => [[['_route' => 'admin_donneur_delete', '_controller' => 'App\\Controller\\Admin\\DonneurAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        678 => [[['_route' => 'admin_don_validate', '_controller' => 'App\\Controller\\Admin\\DonAdminController::validate'], ['id'], ['POST' => 0], null, false, true, null]],
        701 => [[['_route' => 'admin_don_reject', '_controller' => 'App\\Controller\\Admin\\DonAdminController::reject'], ['id'], ['POST' => 0], null, false, true, null]],
        737 => [[['_route' => 'admin_matching_demande', '_controller' => 'App\\Controller\\Admin\\MatchingAdminController::matchDemande'], ['id'], null, null, false, true, null]],
        772 => [[['_route' => 'admin_matching_notify', '_controller' => 'App\\Controller\\Admin\\MatchingAdminController::notifyDonor'], ['demandeId', 'donorId'], ['POST' => 0], null, false, true, null]],
        794 => [[['_route' => 'admin_matching_notify_all', '_controller' => 'App\\Controller\\Admin\\MatchingAdminController::notifyAllMatches'], ['demandeId'], ['POST' => 0], null, false, true, null]],
        830 => [[['_route' => 'admin_events_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], null, null, false, true, null]],
        853 => [[['_route' => 'admin_events_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], null, null, false, true, null]],
        883 => [[['_route' => 'admin_faq_edit', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        897 => [[['_route' => 'admin_faq_delete', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        911 => [[['_route' => 'admin_faq_toggle', '_controller' => 'App\\Controller\\Admin\\FAQAdminController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        939 => [[['_route' => 'admin_hopital_show', '_controller' => 'App\\Controller\\Admin\\HopitalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        952 => [[['_route' => 'admin_hopital_edit', '_controller' => 'App\\Controller\\Admin\\HopitalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        960 => [[['_route' => 'admin_hopital_delete', '_controller' => 'App\\Controller\\Admin\\HopitalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        990 => [[['_route' => 'admin_rendez_vous_show', '_controller' => 'App\\Controller\\Admin\\RendezVousController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1008 => [[['_route' => 'admin_rendez_vous_edit', '_controller' => 'App\\Controller\\Admin\\RendezVousController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1022 => [[['_route' => 'admin_rendez_vous_delete', '_controller' => 'App\\Controller\\Admin\\RendezVousController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1046 => [[['_route' => 'admin_rendez_vous_confirmer', '_controller' => 'App\\Controller\\Admin\\RendezVousController::confirmer'], ['id'], ['POST' => 0], null, false, false, null]],
        1068 => [[['_route' => 'admin_rendez_vous_annuler', '_controller' => 'App\\Controller\\Admin\\RendezVousController::annuler'], ['id'], ['POST' => 0], null, false, false, null]],
        1097 => [[['_route' => 'admin_support_view', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::view'], ['id'], null, null, false, true, null]],
        1116 => [[['_route' => 'admin_support_status', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::updateStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        1131 => [[['_route' => 'admin_support_assign', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::assign'], ['id'], ['POST' => 0], null, false, false, null]],
        1146 => [[['_route' => 'admin_support_delete', '_controller' => 'App\\Controller\\Admin\\SupportAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1183 => [[['_route' => 'admin_tutorial_edit', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1198 => [[['_route' => 'admin_tutorial_delete', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1213 => [[['_route' => 'admin_tutorial_toggle', '_controller' => 'App\\Controller\\Admin\\TutorialAdminController::toggle'], ['id'], ['POST' => 0], null, false, false, null]],
        1239 => [[['_route' => 'app_meal_show', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\MealAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1253 => [[['_route' => 'app_meal_edit', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\MealAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1262 => [[['_route' => 'app_meal_delete', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\MealAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1301 => [[['_route' => 'app_user_well_being_data_show', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\UserWellBeingDataAdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1315 => [[['_route' => 'app_user_well_being_data_edit', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\UserWellBeingDataAdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1324 => [[['_route' => 'app_user_well_being_data_delete', '_controller' => 'App\\Controller\\Admin\\gestionwellbeingbackoffice\\UserWellBeingDataAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1359 => [[['_route' => 'api_conversation', '_controller' => 'App\\Controller\\AiAssistantController::getConversation'], ['id'], ['GET' => 0], null, false, true, null]],
        1395 => [[['_route' => 'aide_faq_view', '_controller' => 'App\\Controller\\Front\\AideController::viewFaq'], ['id'], null, null, false, false, null]],
        1411 => [[['_route' => 'aide_faq_helpful', '_controller' => 'App\\Controller\\Front\\AideController::markHelpful'], ['id'], ['POST' => 0], null, false, false, null]],
        1440 => [[['_route' => 'aide_support_view', '_controller' => 'App\\Controller\\Front\\AideController::viewTicket'], ['id'], null, null, false, true, null]],
        1458 => [[['_route' => 'aide_support_feedback', '_controller' => 'App\\Controller\\Front\\AideController::submitFeedback'], ['id'], ['POST' => 0], null, false, false, null]],
        1502 => [[['_route' => 'aide_map_reviews', '_controller' => 'App\\Controller\\Front\\AideMapController::getReviews'], ['id'], null, null, false, false, null]],
        1511 => [[['_route' => 'aide_map_review_add', '_controller' => 'App\\Controller\\Front\\AideMapController::addReview'], ['id'], ['POST' => 0], null, false, false, null]],
        1523 => [[['_route' => 'aide_map_qr', '_controller' => 'App\\Controller\\Front\\AideMapController::getQrCode'], ['id'], null, null, false, false, null]],
        1556 => [[['_route' => 'aide_map_review_helpful', '_controller' => 'App\\Controller\\Front\\AideMapController::markReviewHelpful'], ['id'], ['POST' => 0], null, false, false, null]],
        1592 => [[['_route' => 'contact_urgence_delete', '_controller' => 'App\\Controller\\Front\\ContactUrgenceController::delete'], ['id'], null, null, false, true, null]],
        1614 => [[['_route' => 'contact_urgence_edit', '_controller' => 'App\\Controller\\Front\\ContactUrgenceController::edit'], ['id'], null, null, false, true, null]],
        1645 => [[['_route' => 'aide_tutorial_view', '_controller' => 'App\\Controller\\Front\\TutorialController::view'], ['id'], null, null, false, true, null]],
        1659 => [[['_route' => 'aide_tutorial_like', '_controller' => 'App\\Controller\\Front\\TutorialController::like'], ['id'], ['POST' => 0], null, false, false, null]],
        1692 => [[['_route' => 'urgence_delete', '_controller' => 'App\\Controller\\Front\\UrgenceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1724 => [[['_route' => 'app_analyse_a_i_show', '_controller' => 'App\\Controller\\AnalyseAIController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1738 => [[['_route' => 'app_analyse_a_i_edit', '_controller' => 'App\\Controller\\AnalyseAIController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1747 => [[['_route' => 'app_analyse_a_i_delete', '_controller' => 'App\\Controller\\AnalyseAIController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1781 => [[['_route' => 'cycle_edit', '_controller' => 'App\\Controller\\CycleController::edit'], ['id'], null, null, false, false, null]],
        1796 => [[['_route' => 'cycle_delete', '_controller' => 'App\\Controller\\CycleController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1829 => [[['_route' => 'event_attend', '_controller' => 'App\\Controller\\EventFrontController::attend'], ['id'], ['POST' => 0], null, false, false, null]],
        1874 => [[['_route' => 'demande_don_view', '_controller' => 'App\\Controller\\Front\\DemandeDonController::view'], ['id'], null, null, false, true, null]],
        1892 => [[['_route' => 'demande_don_respond', '_controller' => 'App\\Controller\\Front\\DemandeDonController::respond'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1917 => [[['_route' => 'demande_delete', '_controller' => 'App\\Controller\\Front\\DemandeDonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1939 => [[['_route' => 'demande_edit', '_controller' => 'App\\Controller\\Front\\DemandeDonController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        1962 => [[['_route' => 'don_delete', '_controller' => 'App\\Controller\\Front\\DonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1994 => [[['_route' => 'don_certificate', '_controller' => 'App\\Controller\\Front\\DonController::downloadCertificate'], ['id'], null, null, false, false, null]],
        2008 => [[['_route' => 'don_share', '_controller' => 'App\\Controller\\Front\\DonController::share'], ['id'], null, null, false, false, null]],
        2046 => [[['_route' => 'don_certificate_verify', '_controller' => 'App\\Controller\\Front\\DonController::verifyCertificate'], ['id'], null, null, false, false, null]],
        2071 => [[['_route' => 'donneur_public', '_controller' => 'App\\Controller\\Front\\DonneurController::publicProfile'], ['id'], null, null, false, true, null]],
        2107 => [[['_route' => 'dossier_medical_show', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2127 => [[['_route' => 'dossier_medical_edit', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2146 => [[['_route' => 'dossier_medical_export_pdf', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::exportPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        2170 => [[['_route' => 'dossier_medical_ai_analysis', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::analyzeWithAI'], ['id'], ['GET' => 0], null, false, false, null]],
        2181 => [[['_route' => 'dossier_medical_hf_analysis', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::analyzeWithHuggingFace'], ['id'], ['GET' => 0], null, false, false, null]],
        2202 => [[['_route' => 'dossier_medical_send_email', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::sendEmail'], ['id'], ['GET' => 0], null, false, false, null]],
        2212 => [[['_route' => 'dossier_medical_delete', '_controller' => 'App\\Controller\\Front_office\\DossierMedicalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2255 => [[['_route' => 'user_journal_delete', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\JournalController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2288 => [[['_route' => 'user_meal_edit', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\MealFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2303 => [[['_route' => 'user_meal_delete', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\MealFrontController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2313 => [[['_route' => 'user_meal_show', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\MealFrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2351 => [[['_route' => 'user_wellbeing_edit', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\UserWellBeingDataFrontController::edit'], ['id'], null, null, false, false, null]],
        2360 => [[['_route' => 'user_wellbeing_delete', '_controller' => 'App\\Controller\\Front_office\\GestionWellBeing\\UserWellBeingDataFrontController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2388 => [[['_route' => 'app_hopital_show', '_controller' => 'App\\Controller\\HopitalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2422 => [[['_route' => 'app_rendez_vous_show', '_controller' => 'App\\Controller\\RendezVousController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2443 => [[['_route' => 'app_rendez_vous_edit', '_controller' => 'App\\Controller\\RendezVousController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2461 => [[['_route' => 'app_rendez_vous_delete', '_controller' => 'App\\Controller\\RendezVousController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        2495 => [
            [['_route' => 'symptome_edit', '_controller' => 'App\\Controller\\SymptomeController::edit'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
