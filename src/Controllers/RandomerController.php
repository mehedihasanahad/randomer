<?php

namespace Ahad\Randomer\Controllers;


class RandomerController {
    public function __invoke() {
        return strtotime(now()).rand(10, 100);
    }
}
