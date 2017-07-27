<?php

namespace markhuot\CraftQL\Fields;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class RichText {

  function getDefinition($field) {
    return [
      $field->handle => [
        'type' => Type::string(),
        'description' => $field->instructions,
        'args' => [
          ['name' => 'page', 'type' => Type::int()],
        ],
        'resolve' => function ($root, $args) use ($field) {
          if (!empty($args['page'])) {
            return $root->{$field->handle}->getPage($args['page']);
          }

          return (string)$root->{$field->handle};
        }
      ],
    ];
  }

  function getArg($field) {
    return [
      $field->handle => ['type' => Type::string()]
    ];
  }

}