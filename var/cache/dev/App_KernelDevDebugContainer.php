<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPbWxSbT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPbWxSbT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPbWxSbT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPbWxSbT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPbWxSbT\App_KernelDevDebugContainer([
    'container.build_hash' => 'PbWxSbT',
    'container.build_id' => '35da662c',
    'container.build_time' => 1634331165,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPbWxSbT');
