<?php
namespace Thewizardplusplus\Microblog;

use Lang;

class LangUtils
{
    public static function name($name)
    {
        return "thewizardplusplus.microblog::lang.$name";
    }

    public static function plugin($name)
    {
        return self::name("plugin.$name");
    }

    public static function widget($name)
    {
        return self::name("widget.$name");
    }

    public static function get($name, $arguments = [])
    {
        return Lang::get(self::widget($name), $arguments);
    }

    public static function escape($name)
    {
        return e(self::get($name));
    }

    public static function backend($name)
    {
        return "backend::lang.$name";
    }

    public static function dashboard($name)
    {
        return self::backend("dashboard.$name");
    }
}
