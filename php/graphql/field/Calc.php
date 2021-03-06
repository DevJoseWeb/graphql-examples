<?php
/**
 * User: WindomZ
 * Date: 17-7-20
 */

namespace GraphQLExamples\Field;

use GraphQL\Type\Definition\Type;

class Calc
{
    public static function getSumField()
    {
        return [
            'name' => 'sum',
            'type' => Type::int(),
            'args' => [
                'x' => ['type' => Type::int()],
                'y' => ['type' => Type::int()],
            ],
            'resolve' => function ($root, $args) {
                return $args['x'] + $args['y'];
            },
        ];
    }
}

