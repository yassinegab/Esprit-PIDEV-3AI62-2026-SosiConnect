<?php

namespace App\Service;

class EmotionAnalysisService
{
    private const POSITIVE_KEYWORDS = [
        'happy', 'joy', 'excited', 'wonderful', 'great', 'amazing', 'love', 'fantastic',
        'good', 'best', 'beautiful', 'grateful', 'thankful', 'blessed', 'peaceful',
        'relaxed', 'calm', 'content', 'satisfied', 'hopeful', 'optimistic', 'proud'
    ];

    private const NEGATIVE_KEYWORDS = [
        'sad', 'depressed', 'anxious', 'worried', 'stressed', 'frustrated', 'angry',
        'upset', 'disappointed', 'hurt', 'pain', 'tired', 'exhausted', 'overwhelmed',
        'hopeless', 'helpless', 'lost', 'confused', 'scared', 'afraid', 'lonely',
        'isolated', 'worthless', 'guilty', 'ashamed', 'embarrassed'
    ];

    private const STRESS_KEYWORDS = [
        'stressed', 'overwhelmed', 'anxious', 'tense', 'nervous', 'pressure',
        'deadline', 'busy', 'rush', 'panic', 'worry', 'burden', 'responsibility'
    ];

    private const MOOD_CATEGORIES = [
        'joy' => ['happy', 'joy', 'excited', 'wonderful', 'amazing', 'fantastic', 'love', 'great', 'best'],
        'calm' => ['peaceful', 'relaxed', 'calm', 'content', 'serene', 'tranquil'],
        'neutral' => ['okay', 'fine', 'alright', 'normal', 'okay'],
        'anxious' => ['anxious', 'worried', 'nervous', 'tense', 'uneasy', 'apprehensive'],
        'sad' => ['sad', 'depressed', 'down', 'blue', 'melancholy', 'grief', 'heartbroken'],
        'angry' => ['angry', 'mad', 'furious', 'frustrated', 'annoyed', 'irritated']
    ];

    public function analyze(string $text): array
    {
        $lowercaseText = strtolower($text);
        $words = preg_split('/\s+/', $lowercaseText);

        $positiveCount = 0;
        $negativeCount = 0;
        $stressCount = 0;
        $detectedKeywords = [];
        $detectedMoods = [];

        foreach ($words as $word) {
            $cleanWord = preg_replace('/[^a-z]/', '', $word);
            
            if (in_array($cleanWord, self::POSITIVE_KEYWORDS)) {
                $positiveCount++;
                $detectedKeywords[] = $cleanWord;
            }
            
            if (in_array($cleanWord, self::NEGATIVE_KEYWORDS)) {
                $negativeCount++;
                $detectedKeywords[] = $cleanWord;
            }
            
            if (in_array($cleanWord, self::STRESS_KEYWORDS)) {
                $stressCount++;
                if (!in_array($cleanWord, $detectedKeywords)) {
                    $detectedKeywords[] = $cleanWord;
                }
            }
        }

        foreach (self::MOOD_CATEGORIES as $mood => $keywords) {
            foreach ($keywords as $keyword) {
                if (str_contains($lowercaseText, $keyword)) {
                    $detectedMoods[] = $mood;
                    break;
                }
            }
        }

        $sentiment = $this->calculateSentiment($positiveCount, $negativeCount);
        $mood = $this->determineMood($detectedMoods, $sentiment);
        $stressScore = $this->calculateStressScore($stressCount, $negativeCount, $sentiment);

        return [
            'mood' => $mood,
            'stressScore' => $stressScore,
            'sentiment' => $sentiment,
            'keywords' => array_unique($detectedKeywords),
            'positiveCount' => $positiveCount,
            'negativeCount' => $negativeCount
        ];
    }

    private function calculateSentiment(int $positive, int $negative): float
    {
        $total = $positive + $negative;
        
        if ($total === 0) {
            return 0.0;
        }

        return ($positive - $negative) / $total;
    }

    private function determineMood(array $detectedMoods, float $sentiment): string
    {
        if (empty($detectedMoods)) {
            if ($sentiment > 0.3) return 'joy';
            if ($sentiment < -0.3) return 'sad';
            return 'neutral';
        }

        $moodCounts = array_count_values($detectedMoods);
        arsort($moodCounts);
        
        return array_key_first($moodCounts);
    }

    private function calculateStressScore(int $stressCount, int $negativeCount, float $sentiment): int
    {
        $baseScore = 20;

        $stressContribution = min($stressCount * 15, 40);
        $negativeContribution = min($negativeCount * 10, 30);
        
        $sentimentContribution = 0;
        if ($sentiment < 0) {
            $sentimentContribution = abs($sentiment) * 20;
        }

        $totalScore = $baseScore + $stressContribution + $negativeContribution + $sentimentContribution;
        
        return min(max((int) $totalScore, 0), 100);
    }
}
