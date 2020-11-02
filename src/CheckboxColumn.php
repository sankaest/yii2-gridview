<?php

namespace backend\themes\basic\widgets\gridview;

use Closure;
use yii\grid\CheckboxColumn as YiiCheckboxColumn;
use yii\helpers\Html;

/**
 * The CheckboxColumn displays a column of checkboxes in a grid view and extends the [[YiiCheckboxColumn]] with
 * various enhancements.
 *
 * To add a CheckboxColumn to the gridview, add it to the [[GridView::columns|columns]] configuration as follows:
 *
 * ```php
 * 'columns' => [
 *     // ...
 *     [
 *         'class' => CheckboxColumn::className(),
 *         // you may configure additional properties here
 *     ],
 * ]
 * ```
 *
 * @author Sanka
 * @since 3.0
 */
class CheckboxColumn extends YiiCheckboxColumn
{
    use ColumnTrait;
    /**
     * @var boolean highlight current row if checkbox is checked
     */
    public $rowHighlight = true;

    /**
     * @var string highlight CSS class to be applied for highlighting the row. Defaults to [[GridView::TYPE_DANGER]].
     */
    public $rowSelectedClass = GridView::BS_TABLE_DANGER;

    /**
     * @var string the model attribute to be used in rendering the checkbox input.
     */
    public $attribute;

    /**
     * @var string the css class that will be used to find the checkboxes.
     */
    public $cssClass = 'kv-row-checkbox';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->initColumnSettings([
            'hiddenFromExport' => true,
            'mergeHeader' => true,
            'hAlign' => GridView::ALIGN_CENTER,
            'vAlign' => GridView::ALIGN_MIDDLE,
            'width' => '50px'
        ]);

        $this->grid->checkSelectionExist = true;
        $this->grid->checkSelectedRowClass = $this->rowSelectedClass;

        Html::addCssClass($this->headerOptions, 'kv-all-select');

        $this->parseFormat();
        $this->parseVisibility();
        parent::init();
        $this->setPageRows();

    }

    /**
     * @inheritdoc
     */
    public function renderDataCell($model, $key, $index)
    {
        $options = $this->fetchContentOptions($model, $key, $index);
        if ($this->rowHighlight) {
            Html::addCssClass($options, 'kv-row-select');
        }
        $this->initPjax($this->_clientScript);
        if ($this->attribute !== null) {
            $this->name = Html::getInputName($model, "[{$index}]{$this->attribute}");
             if (!$this->checkboxOptions instanceof Closure) {
                $this->checkboxOptions['value'] = Html::getAttributeValue($model, $this->attribute);
             }
        }
        return Html::tag('td', $this->renderDataCellContent($model, $key, $index), $options);
    }
}
