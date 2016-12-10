<?php

namespace Fagoc;

use Fagoc\Model\Contact;
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

    /**
     * @param $data
     * @return $this
     */
    public function form($data)
    {
        return $this->response()->html('pages/contact/form.php', $data);
    }


    /**
     * @param $data
     * @return $this
     */
    public function send($data)
    {
        $contact = new Contact();
        foreach (['name', 'email', 'subject', 'message'] as $item) {
            $contact->$item = $this->request()->input($item);
        }

        if ($contact->create()) {
            return $this->response()->html('pages/contact/form.php', $data);
        }

        $data['contact'] = $contact->getValues();

        return $this->response()->html('pages/contact/success.php', $data);
    }

}