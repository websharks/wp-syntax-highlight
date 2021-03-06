<?php
/**
 * Styles/scripts.
 *
 * @author @jaswsinc
 * @copyright WP Sharks™
 */
declare (strict_types = 1);
namespace WebSharks\WpSharks\WpSyntaxHighlight\Traits\Facades;

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
 * Styles/scripts.
 *
 * @since 160829.41802 Initial release.
 */
trait StylesScripts
{
    /**
     * @since 160829.41802 Initial release.
     *
     * @param mixed ...$args Variadic args to underlying utility.
     *
     * @see Classes\Utils\StylesScripts::isApplicable()
     */
    public static function isApplicable(...$args)
    {
        return $GLOBALS[static::class]->Utils->StylesScripts->isApplicable(...$args);
    }
}
