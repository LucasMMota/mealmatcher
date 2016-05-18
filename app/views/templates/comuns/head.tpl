<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>{$title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/files/images/logo.ico">

    {section name=i loop=$css}
        <link href="{$css[i]}" rel="stylesheet" type="text/css"/>
    {/section}

</head>