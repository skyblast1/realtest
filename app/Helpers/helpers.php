<?php

if (! function_exists('activeMainLink')) {
    function activeMainLink() {
        return request()->is('/') ? 'menu-link__active' : '';
    }
}

if (! function_exists('activeArticleLink')) {
    function activeArticleLink() {
        if (request()->is('articles') or request()->is('articles/*')) {
          return 'menu-link__active';
        } else {
            return '';
        }
    }
}


