<?php

use dflydev\markdown\MarkdownExtraParser;

class Documentation {

    /**
     * Get a topic from the documentation store.
     *
     * @param  string $topic
     * @return string
     */
    public function get($topic = 'documentation')
    {
        return $this->getFromCache($topic);
    }

    /**
     * Try to retrieve a topic from the cache.
     *
     * @param  string $topic
     * @return string
     */
    public function getFromCache($topic)
    {
        $me = $this;
        return Cache::remember($topic, 30, function () use ($me, $topic)
        {
            if (! $me->checkFileExists($topic)) App::abort(404);
            $source = $me->loadFileContents($topic);
            $markdown = new MarkdownExtraParser();
            return $markdown->transformMarkdown($source);
        });
    }

    /**
     * Check to see if the topic exists on disk.
     *
     * @param  string $topic
     * @return bool
     */
    public function checkFileExists($topic)
    {
        return File::exists($this->getDocsPath()."/{$topic}.md");
    }

    /**
     * Attempt to load the contents of a topic.
     *
     * @param  string $topic
     * @return string
     */
    public function loadFileContents($topic)
    {
        return File::get($this->getDocsPath()."/{$topic}.md");
    }

    /**
     * Get the path to the docs files on disk.
     *
     * @return string
     */
    public function getDocsPath()
    {
        return Config::get('site.docs', __DIR__.'/../../docs');
    }

}
