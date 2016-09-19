<?php
/**
 * Menu page utils.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpSyntaxHighlight\Classes\Utils;

use WebSharks\WpSharks\WpSyntaxHighlight\Classes;
use WebSharks\WpSharks\WpSyntaxHighlight\Interfaces;
use WebSharks\WpSharks\WpSyntaxHighlight\Traits;
#
use WebSharks\WpSharks\WpSyntaxHighlight\Classes\AppFacades as a;
use WebSharks\WpSharks\WpSyntaxHighlight\Classes\SCoreFacades as s;
use WebSharks\WpSharks\WpSyntaxHighlight\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * Menu page utils.
 *
 * @since 160829.41802 Initial release.
 */
class MenuPage extends SCoreClasses\SCore\Base\Core
{
    /**
     * On `admin_menu` hook.
     *
     * @since 160829.41802 Initial release.
     */
    public function onAdminMenu()
    {
        s::addMenuPageItem([
            'parent_page'   => 'options-general.php',
            'menu_title'    => __('Syntax Highlt.', 'wp-syntax-highlight'),
            'template_file' => 'admin/menu-pages/options/default.php',

            'meta_links' => ['restore' => true],
            'tabs'       => [
                'default' => sprintf(__('%1$s', 'wp-syntax-highlight'), esc_html($this->App->Config->©brand['©name'])),
            ],
        ]);
    }
}
