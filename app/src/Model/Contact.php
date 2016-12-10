<?php

namespace Fagoc\Model;

use Simples\Core\Model\ActiveRecord;

/**
 * Class Student
 * @package Fagoc\Model
 */
class Contact extends ActiveRecord
{
    /**
     * @var string
     */
    protected $collection = 'contacts';

    /**
     * @var array
     */
    protected $fields = ['name', 'email', 'subject', 'message'];

    /**
     * @var array
     */
    protected $pk = ['id'];
}