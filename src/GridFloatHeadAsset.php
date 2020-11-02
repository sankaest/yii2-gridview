<?php

/**
 * @package   yii2-grid
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2020
 * @version   3.3.5
 */

namespace backend\themes\basic\widgets\gridview;

use common\components\vector\BaseAssetBundle;
use yii\web\JqueryAsset;

/**
 * Asset bundle for floating header functionality of [[GridView]] widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class GridFloatHeadAsset extends BaseAssetBundle
{


    public $sourcePath = __DIR__ . '/assets';


    public $js = [
        'js/jquery.floatThead' . self::MIN_PREFIX . '.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        JqueryAsset::class,
        GridViewAsset::class,
    ];

}
