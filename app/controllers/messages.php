<?php

class Messages extends Controller {
    public function index() {
        $this->view('messages/index', []);
    }

    public function post($title, $author, $content) {
        if(isset($content)) {
            if(!isset($title)) {
                $title = 'Untitled Message';
            }
            if(!isset($author)) {
                $author = 'Anonymous';
            }
            if(strlen($content) > 5 && strlen($content) < 30) {
                Message::create([
                    'title' => $title,
                    'author' => $author,
                    'date' => date('Y-m-d H:i:s', time())
                ]);
                echo 'Message posted!';
            }
        }
    }
}