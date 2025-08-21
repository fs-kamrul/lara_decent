<?php

namespace Modules\Newsletter\Events;

use Modules\Newsletter\Http\Models\Newsletter;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UnsubscribeNewsletterEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }
}
