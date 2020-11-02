<?php

/**
 * @package   yii2-grid
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2020
 * @version   3.3.5
 */

namespace backend\themes\basic\widgets\gridview;

use Yii;

/**
 * Dummy demo class used for generating translation messages for the grid demo.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since  1.0
 */
class Demo
{
    /**
     * Demo messages
     */
    public function messages()
    {
        return [
            Yii::t('vkgrid', 'Add Book'),
            Yii::t('vkgrid', 'Book Listing'),
            Yii::t('vkgrid', 'Download Selected'),
            Yii::t('vkgrid', 'Library'),
            Yii::t('vkgrid', 'Reset Grid'),
            Yii::t('vkgrid', 'The page summary displays SUM for first 3 amount columns and AVG for the last.'),
            Yii::t('vkgrid', 'The table header sticks to the top in this demo as you scroll'),
            Yii::t('vkgrid', 'Resize table columns just like a spreadsheet by dragging the column edges.')
        ];
    }
}
