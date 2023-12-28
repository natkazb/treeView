<?php

use Nzbiranik\TreeView\Tree;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var array $items */
/** @var Tree $widget */
/** @var ?int $parentId */
?>

<?php foreach ($items as $item) : ?>
    <details draggable="true" class="Nzbiranik-tree_draggable-item" data-id="<?php echo $item[$widget->idField] ?>">
        <summary>
            <div>
                <?php if (!empty($widget->viewUrl)) : ?>
                    <?php echo Html::a($item[$widget->titleField], [$widget->viewUrl, 'id' => $item[$widget->idField]]); ?>
                <?php else : ?>
                    <?php echo $item[$widget->titleField]; ?>
                <?php endif; ?>
            </div>
            <div class="Nzbiranik-tree__button-move-down" data-id="<?php echo $item[$widget->idField] ?>">
                <a>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.01 10.72C2.94232 11.9307 3.31826 13.1246 4.06743 14.0781C4.81661 15.0316 5.88765 15.6793 7.08 15.9L6.29 15.11C6.19742 15.0174 6.12398 14.9075 6.07388 14.7865C6.02377 14.6656 5.99798 14.5359 5.99798 14.405C5.99798 14.1406 6.10303 13.887 6.29 13.7C6.47698 13.513 6.73058 13.408 6.995 13.408C7.25943 13.408 7.51303 13.513 7.7 13.7L10.29 16.29C10.68 16.68 10.68 17.31 10.29 17.7L7.71 20.3C7.61742 20.3926 7.50751 20.466 7.38655 20.5161C7.26558 20.5662 7.13593 20.592 7.005 20.592C6.87407 20.592 6.74442 20.5662 6.62346 20.5161C6.5025 20.466 6.39258 20.3926 6.3 20.3C6.20742 20.2074 6.13398 20.0975 6.08388 19.9765C6.03377 19.8556 6.00798 19.7259 6.00798 19.595C6.00798 19.4641 6.03377 19.3344 6.08388 19.2135C6.13398 19.0925 6.20742 18.9826 6.3 18.89L7.18 18.01V17.95C5.38984 17.7373 3.75091 16.8416 2.60508 15.4499C1.45925 14.0581 0.894992 12.2777 1.03 10.48C1.29 6.78 4.55 4 8.26 4H10C10.55 4 11 4.45 11 5C11 5.55 10.55 6 10 6H8.22C5.52 6 3.15 8.04 3.01 10.72ZM15 11H20C21.1 11 22 10.1 22 9V6C22 4.9 21.1 4 20 4H15C13.9 4 13 4.9 13 6V9C13 10.1 13.9 11 15 11ZM20 9H15V6H20V9ZM20 20H15C13.9 20 13 19.1 13 18V15C13 13.9 13.9 13 15 13H20C21.1 13 22 13.9 22 15V18C22 19.1 21.1 20 20 20Z"
                              fill="black" fill-opacity="0.5"/>
                    </svg>
                </a>
            </div>
            <div class="Nzbiranik-tree__button-move-up" data-id="<?php echo $item[$widget->idField] ?>">
                <a>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.01 13.28C2.94232 12.0693 3.31826 10.8754 4.06743 9.92191C4.81661 8.96841 5.88765 8.32068 7.08 8.1L6.29 8.87999C6.19742 8.97258 6.12398 9.08249 6.07388 9.20345C6.02377 9.32442 5.99798 9.45406 5.99798 9.58499C5.99798 9.84942 6.10303 10.103 6.29 10.29C6.47698 10.477 6.73058 10.582 6.995 10.582C7.25943 10.582 7.51303 10.477 7.7 10.29L10.29 7.69999C10.3827 7.60748 10.4563 7.49759 10.5064 7.37662C10.5566 7.25565 10.5824 7.12596 10.5824 6.99499C10.5824 6.86403 10.5566 6.73434 10.5064 6.61337C10.4563 6.4924 10.3827 6.38251 10.29 6.28999L7.71 3.69999C7.52303 3.51302 7.26943 3.40797 7.005 3.40797C6.74058 3.40797 6.48698 3.51302 6.3 3.69999C6.11303 3.88697 6.00798 4.14057 6.00798 4.40499C6.00798 4.66942 6.11303 4.92302 6.3 5.10999L7.18 5.98999V6.04999C5.38984 6.26271 3.75091 7.15835 2.60508 8.55012C1.45925 9.94188 0.894992 11.7223 1.03 13.52C1.29 17.22 4.55 20 8.26 20H10C10.55 20 11 19.55 11 19C11 18.45 10.55 18 10 18H8.22C5.52 18 3.15 15.96 3.01 13.28ZM13 15V18C13 19.1 13.9 20 15 20H20C21.1 20 22 19.1 22 18V15C22 13.9 21.1 13 20 13H15C13.9 13 13 13.9 13 15ZM20 18H15V15H20V18ZM20 3.99999H15C13.9 3.99999 13 4.89999 13 5.99999V8.99999C13 10.1 13.9 11 15 11H20C21.1 11 22 10.1 22 8.99999V5.99999C22 4.89999 21.1 3.99999 20 3.99999Z"
                              fill="black" fill-opacity="0.5"/>
                    </svg>
                </a>
            </div>
        </summary>
        <div class="Nzbiranik-tree__children">
            <?php echo $widget->render('_children', [
                'items' => $widget->getItems($item[$widget->idField]),
                'widget' => $widget,
                'parentId' => $item[$widget->idField],
            ]); ?>
        </div>
    </details>
<?php endforeach; ?>
<?php if (!empty($widget->addChildUrl)) : ?>
    <div class="Nzbiranik-tree__add-child">
        <a href="<?php echo Url::to([$widget->addChildUrl, 'parent' => $parentId]) ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 6C12.2652 6 12.5196 6.10536 12.7071 6.29289C12.8946 6.48043 13 6.73478 13 7V11H17C17.2652 11 17.5196 11.1054 17.7071 11.2929C17.8946 11.4804 18 11.7348 18 12C18 12.2652 17.8946 12.5196 17.7071 12.7071C17.5196 12.8946 17.2652 13 17 13H13V17C13 17.2652 12.8946 17.5196 12.7071 17.7071C12.5196 17.8946 12.2652 18 12 18C11.7348 18 11.4804 17.8946 11.2929 17.7071C11.1054 17.5196 11 17.2652 11 17V13H7C6.73478 13 6.48043 12.8946 6.29289 12.7071C6.10536 12.5196 6 12.2652 6 12C6 11.7348 6.10536 11.4804 6.29289 11.2929C6.48043 11.1054 6.73478 11 7 11H11V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z"
                      fill="black" fill-opacity="0.5"/>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M5 22C4.20435 22 3.44129 21.6839 2.87868 21.1213C2.31607 20.5587 2 19.7956 2 19V5C2 4.20435 2.31607 3.44129 2.87868 2.87868C3.44129 2.31607 4.20435 2 5 2H19C19.7956 2 20.5587 2.31607 21.1213 2.87868C21.6839 3.44129 22 4.20435 22 5V19C22 19.7956 21.6839 20.5587 21.1213 21.1213C20.5587 21.6839 19.7956 22 19 22H5ZM4 19C4 19.2652 4.10536 19.5196 4.29289 19.7071C4.48043 19.8946 4.73478 20 5 20H19C19.2652 20 19.5196 19.8946 19.7071 19.7071C19.8946 19.5196 20 19.2652 20 19V5C20 4.73478 19.8946 4.48043 19.7071 4.29289C19.5196 4.10536 19.2652 4 19 4H5C4.73478 4 4.48043 4.10536 4.29289 4.29289C4.10536 4.48043 4 4.73478 4 5V19Z"
                      fill="black" fill-opacity="0.5"/>
            </svg>
        </a>
    </div>
<?php endif; ?>