<?php

namespace Archetype\Shared\Infrastructure\Helpers;

class ClassNameResolver {
    public static function getFullyQualifiedClassName(string $className): string
    {
        return get_called_class() . '\\' . $className;
    }
}