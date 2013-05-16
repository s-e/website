<?php

class DocumentationController extends BaseController {


    public function showTopic($topic = null)
    {
        return View::make('docs');
    }

}
