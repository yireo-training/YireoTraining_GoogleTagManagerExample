<?php declare(strict_types=1);

namespace YireoTraining\GoogleTagManagerExample\DataLayer\Event;

use Yireo\GoogleTagManager2\Api\Data\EventInterface;

class ExampleEvent  implements EventInterface
{
    /**
     * @return string[]
     */
    public function get(): array
    {
        return [
            'meta' => [
                'cacheable' => true,
            ],
            'event' => 'example',
        ];
    }
}
