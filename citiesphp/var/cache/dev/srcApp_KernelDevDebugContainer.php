<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerExOmgrS\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerExOmgrS/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerExOmgrS.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerExOmgrS\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerExOmgrS\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ExOmgrS',
    'container.build_id' => '4205c876',
    'container.build_time' => 1556260698,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerExOmgrS');
