<?php

/**
 * @package   yii2-grid
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2020
 * @version   3.3.5
 */

namespace backend\themes\basic\widgets\gridview;

/**
 * This module allows global level configurations for the enhanced Krajee [[GridView]]. One can configure the module
 * in their Yii configuration file as shown below:
 *
 * ```php
 * 'modules' => [
 *     'gridview' => [
 *          'class' => 'kartik\grid\Module',
 *          'downloadAction' => '/gridview/export/download' // your grid export download setting
 *     ]
 * ]
 * ```
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since  1.0
 */
class Module extends \backend\themes\basic\widgets\base\Module
{
    /**
     * The module name for Krajee gridview
     */
    const MODULE = "gridview";

    /**
     * @var string a random salt that will be used to generate a hash string for export configuration.
     */
    public $exportEncryptSalt = 'QWEDFBNLPIUYGVCXSWERTYIL;MNBVCDRT&UIK;';

    /**
     * @var string|array the action (url) used for downloading exported file
     */
    public $downloadAction;

    /**
     * @inheritdoc
     */
    protected $_msgCat = 'vkgrid';
}
