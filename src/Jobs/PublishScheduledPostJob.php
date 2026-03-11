<?php

namespace BinshopsBlog\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class PublishScheduledPostJob implements ShouldQueue, ShouldBeUniqueUntilProcessing
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $postId;

    /**
     * Tiempo de bloqueo del job único
     */
    public $uniqueFor = 86400; // 24 horas

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

    public function handle()
    {
        // Verifica que el post exista en la DB directamente
        $post = DB::table('binshops_blog_posts')->where('id', $this->postId)->first();

        if (!$post) {
            \Log::warning("Post {$this->postId} not found in DB!");
            return;
        }

        if ($post->scheduled_at === null) {
            \Log::info("Post {$this->postId} has no scheduled date, skipping.");
            return;
        }

        // Actualiza directamente la DB sin usar Eloquent
        DB::table('binshops_blog_posts')->where('id', $this->postId)->update([
            'is_published' => true,
            'scheduled_at' => null,
        ]);

        \Log::info("Post {$this->postId} published successfully via DB.");
    }
}