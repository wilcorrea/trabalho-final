<?php

namespace Fagoc;

use Simples\Core\Flow\Controller;

/**
 * Class HeroController
 * @package Fagoc
 */
class HeroController extends Controller
{
    /**
     * @param $data
     * @return $this
     */
    public function menu($data)
    {
        return $this->response()->html('pages/menu.php', $data);
    }

    public function form($data)
    {
        return $this->response()->html('pages/contact-form.php', $data);
    }
}