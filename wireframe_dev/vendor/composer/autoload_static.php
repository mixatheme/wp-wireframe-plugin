<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e005a614c615605ae3b968eb91c54c4
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'MixaTheme\\Wireframe\\Plugin\\' => 
            array (
                0 => __DIR__ . '/../../..' . '/wireframe_dev/wireframe',
            ),
        ),
    );

    public static $classMap = array (
        'MixaTheme\\Wireframe\\Plugin\\Core_Container' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-container.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Container_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-container-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Enqueue' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-enqueue.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Enqueue_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-enqueue-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Language' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-language.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Language_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-language-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Module_Abstract' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-module-abstract.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Plugin' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-plugin.php',
        'MixaTheme\\Wireframe\\Plugin\\Core_Plugin_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/core/core-plugin-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Admin' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/admin/module-admin.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Admin_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/admin/module-admin-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_CPT' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/cpt/module-cpt.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_CPT_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/cpt/module-cpt-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_DBTables' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/dbtables/module-dbtables.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_DBTables_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/dbtables/module-dbtables-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Notices' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/notices/module-notices.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Notices_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/notices/module-notices-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Options' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/options/module-options.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Options_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/options/module-options-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Settings' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/settings/module-settings.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Settings_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/settings/module-settings-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Shortcode' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/shortcode/module-shortcode.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Shortcode_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/shortcode/module-shortcode-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Taxonomy' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/taxonomy/module-taxonomy.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_Taxonomy_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/taxonomy/module-taxonomy-interface.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_UI' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/ui/module-ui.php',
        'MixaTheme\\Wireframe\\Plugin\\Module_UI_Interface' => __DIR__ . '/../../..' . '/wireframe_dev/wireframe/module/ui/module-ui-interface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8e005a614c615605ae3b968eb91c54c4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8e005a614c615605ae3b968eb91c54c4::$classMap;

        }, null, ClassLoader::class);
    }
}
