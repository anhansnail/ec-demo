<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAdypra4\EccubeProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAdypra4/EccubeProdProjectContainer.php') {
    touch(__DIR__.'/ContainerAdypra4.legacy');

    return;
}

if (!\class_exists(EccubeProdProjectContainer::class, false)) {
    \class_alias(\ContainerAdypra4\EccubeProdProjectContainer::class, EccubeProdProjectContainer::class, false);
}

return new \ContainerAdypra4\EccubeProdProjectContainer([
    'container.build_hash' => 'Adypra4',
    'container.build_id' => '4a4e937f',
    'container.build_time' => 1599188447,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAdypra4');