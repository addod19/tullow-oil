<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerC39VxZI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerC39VxZI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerC39VxZI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerC39VxZI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerC39VxZI\App_KernelDevDebugContainer([
    'container.build_hash' => 'C39VxZI',
    'container.build_id' => 'b9859237',
    'container.build_time' => 1655489511,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerC39VxZI');
