<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUPlCfwf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUPlCfwf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUPlCfwf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUPlCfwf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUPlCfwf\App_KernelDevDebugContainer([
    'container.build_hash' => 'UPlCfwf',
    'container.build_id' => '8a1d6b98',
    'container.build_time' => 1675163750,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUPlCfwf');
