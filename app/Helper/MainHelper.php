<?php


if (!function_exists('active')) {
    function active($url)
    {
        if (request()->segment(0) == $url) {
            return 'current';
        } elseif (request()->segment(1) == $url) {
            return 'current';
        } else {
            return '';
        }

    }
}

if (!function_exists('active_apps')) {
    function active_apps($app)
    {
        $apps = auth()->user()->company->apps->pluck('status', 'model')->toArray();
        if (array_key_exists($app, $apps) && $apps[$app] == 'active') {
            return true;
        }
    }
}


if (!function_exists('apps')) {
    function apps()
    {
        return auth()->user()->company->apps->pluck('ar_model', 'model')->toArray();
    }
}
if (!function_exists('ar_apps')) {
    function ar_apps()
    {
        return auth()->user()->company->apps->pluck('ar_model')->toArray();
    }
}

if (!function_exists('getMaps')) {
    function getMaps()
    {
        return [
            'read' => 'قراءه',
            'create' => 'إضافه',
            'update' => 'تعديل',
            'delete' => 'حذف',
            'export' => 'إستيراد وتصدير البيانات'
        ];
    }
}


