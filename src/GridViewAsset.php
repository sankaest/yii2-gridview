<?php

/**
 * @package   yii2-grid
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2020
 * @version   3.3.5
 */

namespace sankaest\gridview;

use common\components\vector\BaseAssetBundle;

/**
 * Asset bundle for the styling of the [[GridView]] widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class GridViewAsset extends BaseAssetBundle
{

    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/kv-grid' . self::MIN_PREFIX . '.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        \yii\grid\GridViewAsset::class,
    ];

}
