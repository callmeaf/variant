<?php

namespace Callmeaf\Variant\App\Events\Api\V1;

use Callmeaf\Variant\App\Models\Variant;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VariantIndexed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @param Collection<Variant> $variants
     * Create a new event instance.
     */
    public function __construct(Collection $variants)
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
