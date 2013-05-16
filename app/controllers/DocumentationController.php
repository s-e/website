<?php

class DocumentationController extends BaseController {


    public function showTopic($topic = 'introduction')
    {
        $documentation = new Documentation;
        $index = $documentation->get('documentation');
        $body = $documentation->get($topic);

        $data = compact('index', 'body');
        return View::make('docs', $data);
    }

    private function checkTopicExists($topic)
    {
        return file_exists(Config::get('site.docs')."/{$topic}.md");
    }

}
