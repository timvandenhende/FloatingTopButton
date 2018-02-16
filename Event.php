<?php

namespace Plugin\FloatingTopButton;

class Event {

    public static function ipBeforeController() {




        ipAddCss('assets/basic.css');
        ipAddJs('assets/ftb.js');

    }

}