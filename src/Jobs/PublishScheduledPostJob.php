<?php

namespace BinshopsBlog\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use BinshopsBlog\Models\BinshopsBlogPost;

class PublishScheduledPostJob implements ShouldQueue, ShouldBeUniqueUntilProcessing
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public function __construct(private BinshopsBlogPost $post)
    {

    }

    /**
     * Hace único el job por post
     */
    public function uniqueId(): string
    {
        return 'publish_post_'.$this->post->id;
    }

    /**
     * Tiempo de bloqueo del job único
     */
    public $uniqueFor = 86400; // 24 horas

    public function handle()
    {

        if (!$this->post) {
            return;
        }

        if ($this->post->scheduled_at == null) {
            return;
        }

        if (isset($this->post->scheduled_at) && $this->post->scheduled_at->isFuture()) {
            return;
        }

        $this->post->is_published = true;
        $this->post->scheduled_at = null;
        $this->post->save();
    }
}