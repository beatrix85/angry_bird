<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZS8HWaM\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZS8HWaM/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZS8HWaM.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZS8HWaM\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZS8HWaM\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZS8HWaM',
    'container.build_id' => '333f3922',
    'container.build_time' => 1561039763,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZS8HWaM');
