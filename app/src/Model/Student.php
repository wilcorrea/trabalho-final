<?php

namespace Fagoc\Model;

use Simples\Core\Model\ActiveRecord;

/**
 * Class Student
 * @package Fagoc\Model
 */
class Student extends ActiveRecord
{
    /**
     * @var string
     */
    protected $collection = 'students';

    /**
     * @var array
     */
    protected $fields = ['id', 'name', 'email'];

    /**
     * @var array
     */
    protected $pk = ['id'];
}