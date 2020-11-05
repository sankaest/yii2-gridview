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
 * Asset bundle for perfect scrollbar functionality for the [[GridView]] widget.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class GridPerfectScrollbarAsset extends BaseAssetBundle
{

    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/perfect-scrollbar' . self::MIN_PREFIX . '.css',
    ];

    public $js = [
        'js/perfect-scrollbar' . self::MIN_PREFIX . '.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        GridViewAsset::class,
    ];

}
