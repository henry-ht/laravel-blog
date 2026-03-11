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

    public $postId;

    public function __construct($postId)
    {
        $this->postId = $postId;
    }

    /**
     * Hace único el job por post
     */
    public function uniqueId(): string
    {
        return 'publish_post_'.$this->postId;
    }

    /**
     * Tiempo de bloqueo del job único
     */
    public $uniqueFor = 86400; // 24 horas

    public function handle()
    {
        
        $post = BinshopsBlogPost::find($this->postId);

        if (!$post) {
            return;
        }

        if ($post->scheduled_at == null) {
            return;
        }

        $post->is_published = true;
        $post->scheduled_at = null;
        $post->save();
    }
}