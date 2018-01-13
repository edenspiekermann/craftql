<?php

namespace markhuot\CraftQL\Repositories;

use Craft;
use yii\base\Component;

class CategoryGroup extends Component {

    private $groups = [];

    function load() {
        foreach (Craft::$app->categories->allGroups as $group) {
            if (!isset($this->groups[$group->id])) {
              $this->groups[$group->id] = $group;
            }
        }
    }

    function get($id) {
      return $this->groups[$id];
    }

    function all() {
        return $this->groups;
    }

}
