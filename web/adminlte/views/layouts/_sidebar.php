<section class="sidebar">
    <ul class="sidebar-menu">
        <?php
        $sidebar = Appmenu::model()->findAllByAttributes(array('MODUL' => $this->module->id, 'MENU_POS' => 'left', 'MENU_ID_PARENT' => $this->parent_id));
        foreach ($sidebar as $sd) :
            ?>
            <li class="treeview">
                <a href="<?php echo Yii::app()->createUrl($this->module->id . '/' . $sd->MENU_LINK); ?>" class="<?php echo $sd->CLASS; ?>">
                    <i class="fa fa-arrow-right"></i> <span><?php echo $sd->MENU_TEXT; ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
