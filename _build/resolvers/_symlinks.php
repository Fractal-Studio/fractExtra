<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/fractExtra/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/fractextra')) {
            $cache->deleteTree(
                $dev . 'assets/components/fractextra/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/fractextra/', $dev . 'assets/components/fractextra');
        }
        if (!is_link($dev . 'core/components/fractextra')) {
            $cache->deleteTree(
                $dev . 'core/components/fractextra/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/fractextra/', $dev . 'core/components/fractextra');
        }
    }
}

return true;