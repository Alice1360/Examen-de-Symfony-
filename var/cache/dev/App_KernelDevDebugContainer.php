<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIjOBZvk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIjOBZvk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIjOBZvk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIjOBZvk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIjOBZvk\App_KernelDevDebugContainer([
    'container.build_hash' => 'IjOBZvk',
    'container.build_id' => 'e3dac60e',
    'container.build_time' => 1615298832,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIjOBZvk');
