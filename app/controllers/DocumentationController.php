<?php

class DocumentationController extends BaseController {


    public function showTopic($topic = 'introduction')
    {
        $documentation = new Documentation;
        $index = $documentation->get('documentation');
        $body = $documentation->get($topic);
        $title = 'Documentation';

        $data = compact('index', 'body', 'title');
        return View::make('docs', $data);
    }
}
