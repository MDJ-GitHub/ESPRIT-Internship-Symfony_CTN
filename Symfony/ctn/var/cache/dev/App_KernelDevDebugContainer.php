<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGwJIkaJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGwJIkaJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGwJIkaJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGwJIkaJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGwJIkaJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'GwJIkaJ',
    'container.build_id' => 'c166b05c',
    'container.build_time' => 1694043045,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGwJIkaJ');