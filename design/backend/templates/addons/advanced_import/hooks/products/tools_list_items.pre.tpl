{if "MULTIVENDOR"|fn_allowed_for && $auth.user_type === "UserTypes::VENDOR"|enum}
    {$import_product_href = "import_presets.manage&object_type=products" scope=parent}
    {$has_permission_an_import = fn_check_permissions("import_presets", "update", "admin", "POST") scope=parent}
{/if}
