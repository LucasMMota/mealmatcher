<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>{$title}</title>

    <!-- CSS  -->
    {section name=i loop=$css}
        <link href="{$css[i]}" rel="stylesheet" type="text/css"/>
    {/section}

</head>
