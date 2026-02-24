<?php

namespace App\Service;

use Symfony\Contracts\Cache\CacheInterface;

class RateLimiterService
{
    private CacheInterface $cache;
    private int $maxRequests;
    private int $timeWindow;

    public function __construct(
        CacheInterface $cache,
        int $maxRequests = 10,
        int $timeWindow = 60
    ) {
        $this->cache = $cache;
        $this->maxRequests = $maxRequests;
        $this->timeWindow = $timeWindow;
    }

    public function isAllowed(string $identifier): bool
    {
        $key = 'rate_limit_' . $identifier;
        
        try {
            $currentCount = $this->cache->get($key, function () use ($key) {
                return ['count' => 0, 'resetAt' => time() + $this->timeWindow];
            });

            $now = time();
            
            if ($now >= $currentCount['resetAt']) {
                $currentCount = ['count' => 0, 'resetAt' => $now + $this->timeWindow];
            }

            if ($currentCount['count'] >= $this->maxRequests) {
                return false;
            }

            $currentCount['count']++;
            $this->cache->delete($key);
            $this->cache->get($key, fn() => $currentCount);

            return true;
        } catch (\Exception $e) {
            return true;
        }
    }

    public function getRemainingRequests(string $identifier): int
    {
        $key = 'rate_limit_' . $identifier;
        
        try {
            $currentCount = $this->cache->get($key, function () {
                return ['count' => 0, 'resetAt' => time() + $this->timeWindow];
            });

            return max(0, $this->maxRequests - $currentCount['count']);
        } catch (\Exception $e) {
            return $this->maxRequests;
        }
    }

    public function getResetTime(string $identifier): int
    {
        $key = 'rate_limit_' . $identifier;
        
        try {
            $currentCount = $this->cache->get($key, function () {
                return ['count' => 0, 'resetAt' => time() + $this->timeWindow];
            });

            return max(0, $currentCount['resetAt'] - time());
        } catch (\Exception $e) {
            return 0;
        }
    }
}
