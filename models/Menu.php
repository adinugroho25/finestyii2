<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $image
 * @property string $text
 * @property string $desc
 * @property string $link
 * @property int $id_parent
 * @property int $active
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_parent', 'active'], 'integer'],
            [['image', 'text', 'desc', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'text' => 'Text',
            'desc' => 'Desc',
            'link' => 'Link',
            'id_parent' => 'Id Parent',
            'active' => 'Active',
        ];
    }
    
    public function getChilds()
    {
        return $this->hasMany(Menu::className(), ['id_parent' => 'id']);
    }
    
    /**
     * Check whether menu has child.
     * @return bool whether the menu has child
     */
    public function getHasChild()
    {
        $listChilds = self::find()->where(['id_parent' => $this->id])->all();
        if (!empty($listChilds))
            return true;
        else
            return false;
    }
    
    /**
     * Check whether menu has link.
     * @return bool whether the menu has link
     */
    public function getHasLink()
    {
        return (!empty($this->link));
    }
    
    /**
     * Organize menu for displaying.
     * @return array menu to display in the navigation bar
     */
    public function showMenu()
    {
        $menuItems = [];
        $menuItems = ['0' => ['label' => '<i class="fa fa-home"></i> HOME', 'url' => ['/site/index']]];
        $listMenus = self::find()->where(['id_parent' => '0'])->all();

        return array_merge($menuItems,$this->getItems($listMenus));
    }
    
    public function getItems($listMenus)
    {
        foreach ($listMenus as $key => $menu) {
            if ($menu->hasChild){
                if (in_array($menu->id, Yii::$app->user->identity->menuId)){
                    $last[$menu->id] = [
                        'label' => $menu->image.' '.$menu->text,
                        'options' => ['class' => 'hover-down'],
                        'items' => $this->getItems($menu->childs),
                        'linkOptions' => ['class' => false],
                        'dropdownClass' => false,
                    ];
                }
            } else {
                if (in_array($menu->id, Yii::$app->user->identity->menuId)){
                    $last[$menu->id] = [
                        'label' => $menu->image.' '.$menu->text, 
                        'url' => $menu->link, 
                        'options' => ['class' => false],
                        'linkOptions'=>['class' => false, 'style' => 'color:#000000;font-size:12px;'],
                    ];
                }
            }
        } 
        return $last;
    }
}
