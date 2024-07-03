<?php declare(strict_types=1);

namespace YireoTraining\GoogleTagManagerExample\DataLayer\Processor;

use Yireo\GoogleTagManager2\Api\Data\ProcessorInterface;

class Example implements ProcessorInterface
{
    public function process(array $data): array
    {
        $data['example'] = true;
        return $data;
    }
}
