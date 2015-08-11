<?php

use Behat\Transliterator\Transliterator;

class TransliterateController extends Controller
{
    public function index()
    {
        if (!empty($_POST['text'])) {
            $this->set('handledText', Transliterator::transliterate($_POST['text']));
        }

        $this->display('/site/page/transliterate');
    }
}