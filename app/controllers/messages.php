<?php

class Messages extends Controller {
    public function index() {
        $this->view('messages/index', Message::orderBy('post_date')->get());
    }

    public function post($title, $author, $content) {
        if(isset($content)) {
            if(!isset($title)) {
                $title = 'Untitled Message';
            }
            if(!isset($author)) {
                $author = 'Anonymous';
            }
            if(strlen($content) > 5 && strlen($content) <= 50 &&
               strlen($title) <= 25 && strlen($author) <= 20) {
                Message::create([
                    'title' => $title,
                    'author' => $author,
                    'content' => $content,
                    'post_date' => date('Y-m-d H:i:s', time())
                ]);
                $this->view('messages/index', Message::orderBy('post_date')->get());
            }
        }
    }
}