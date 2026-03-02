<?php

namespace App\Service;

class VoiceAssistantService
{
    private const COMMANDS = [
        'don' => [
            'patterns' => ['don', 'donnation', 'donner', 'je veux faire un don', 'déclarer un don'],
            'route' => 'don_new',
            'response' => 'Je vous redirige vers la page de déclaration de don.',
        ],
        'historique' => [
            'patterns' => ['historique', 'mes dons', 'voir mes dons'],
            'route' => 'don_history',
            'response' => 'Voici votre historique de dons.',
        ],
        'inscription' => [
            'patterns' => ['inscription', "m'inscrire", 'devenir donneur', 'inscription donneur'],
            'route' => 'donneur_inscription',
            'response' => 'Je vous redirige vers le formulaire d\'inscription donneur.',
        ],
        'demande' => [
            'patterns' => ['demande', 'besoin', 'j\'ai besoin', 'faire une demande'],
            'route' => 'demande_don',
            'response' => 'Je vous redirige vers les demandes de don.',
        ],
        'aide' => [
            'patterns' => ['aide', 'help', "j'ai besoin d'aide", 'centre d\'aide'],
            'route' => 'aide',
            'response' => 'Voici le centre d\'aide.',
        ],
        'faq' => [
            'patterns' => ['faq', 'questions', 'question fréquente'],
            'route' => 'aide_faq',
            'response' => 'Voici les questions fréquemment posées.',
        ],
        'support' => [
            'patterns' => ['support', 'ticket', 'contacter', 'créer un ticket'],
            'route' => 'aide_support_new',
            'response' => 'Je vous redirige vers le formulaire de support.',
        ],
        'urgence' => [
            'patterns' => ['urgence', 'urgent', 'emergency', 'aide urgence', "c'est urgent", 'déclarer urgence'],
            'route' => 'urgence_index',
            'response' => 'URGENCE DÉCLARÉE ! Je notifie vos contacts d\'urgence et je vous redirige.',
            'auto_action' => 'declare_urgence',
        ],
        'carte' => [
            'patterns' => ['carte', 'map', 'localisation', 'hôpital', 'pharmacie', 'médecin'],
            'route' => 'aide_map',
            'response' => 'Voici la carte médicale.',
        ],
        'tutoriels' => [
            'patterns' => ['tutoriel', 'vidéo', 'guide', 'formation'],
            'route' => 'aide_tutorials',
            'response' => 'Voici les tutoriels vidéo.',
        ],
        'accueil' => [
            'patterns' => ['accueil', 'home', 'retour', 'menu principal'],
            'route' => 'don',
            'response' => 'Retour à l\'accueil.',
        ],
    ];

    private const HEALTH_TIPS = [
        'don' => [
            'N\'oubliez pas de bien vous hydrater avant un don de sang.',
            'Il est recommandé d\'attendre 3 mois entre deux dons de sang.',
            'Le don de sang peut sauver jusqu\'à 3 vies !',
            'Mangez un repas léger avant de donner votre sang.',
        ],
        'sante' => [
            'Buvez au moins 1,5 litre d\'eau par jour.',
            'Dormez 7 à 8 heures par nuit pour rester en bonne santé.',
            'Faites 30 minutes d\'exercice par jour.',
            'Évitez le stress et pratiquez la méditation.',
        ],
        'urgence' => [
            'En cas d\'urgence, appelez le 190 en Tunisie.',
            'Gardez les numéros d\'urgence accessibles.',
            'Apprenez les gestes qui sauvent.',
        ],
    ];

    public function processCommand(string $text): array
    {
        $text = strtolower(trim($text));

        foreach (self::COMMANDS as $command => $config) {
            foreach ($config['patterns'] as $pattern) {
                if (strpos($text, strtolower($pattern)) !== false) {
                    $result = [
                        'success' => true,
                        'command' => $command,
                        'route' => $config['route'],
                        'response' => $config['response'],
                    ];
                    
                    if (isset($config['auto_action'])) {
                        $result['auto_action'] = $config['auto_action'];
                    }
                    
                    return $result;
                }
            }
        }

        if (strpos($text, 'conseil') !== false || strpos($text, 'astuce') !== false || strpos($text, 'tip') !== false) {
            $tips = array_merge(self::HEALTH_TIPS['don'], self::HEALTH_TIPS['sante']);
            return [
                'success' => true,
                'command' => 'tip',
                'response' => $tips[array_rand($tips)],
            ];
        }

        if (strpos($text, 'bonjour') !== false || strpos($text, 'salut') !== false || strpos($text, 'hello') !== false) {
            $greetings = [
                'Bonjour ! Comment puis-je vous aider ?',
                'Salut ! Je suis là pour vous aider avec vos questions sur le don et la santé.',
                'Bonjour ! Dites-moi ce dont vous avez besoin.',
            ];
            return [
                'success' => true,
                'command' => 'greeting',
                'response' => $greetings[array_rand($greetings)],
            ];
        }

        if (strpos($text, 'merci') !== false) {
            return [
                'success' => true,
                'command' => 'thanks',
                'response' => 'Avec plaisir ! N\'hésitez pas si vous avez d\'autres questions.',
            ];
        }

        return [
            'success' => false,
            'command' => null,
            'response' => 'Désolé, je n\'ai pas compris. Essayez de dire "don", "aide", "urgence" ou "conseil santé".',
        ];
    }

    public function getAvailableCommands(): array
    {
        return array_keys(self::COMMANDS);
    }

    public function getHealthTip(string $category = 'sante'): string
    {
        $tips = self::HEALTH_TIPS[$category] ?? self::HEALTH_TIPS['sante'];
        return $tips[array_rand($tips)];
    }
}
