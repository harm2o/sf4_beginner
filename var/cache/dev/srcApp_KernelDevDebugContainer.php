<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSBJTp59\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSBJTp59/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSBJTp59.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSBJTp59\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSBJTp59\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SBJTp59',
    'container.build_id' => '2cbe5972',
    'container.build_time' => 1578858120,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSBJTp59');
