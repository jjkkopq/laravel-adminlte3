# AdminLTE3 for laravel-admin

这是一个 `laravel-admin` 扩展，为 `laravel-admin` 应用 [AdminLTE3](https://github.com/ColorlibHQ/AdminLTE/tree/v3-dev) 主题。

## 依赖

laravel-admin >= 1.6.9

## 截图

![](https://s2.ax1x.com/2019/04/13/ALWdkF.png)
![](https://s2.ax1x.com/2019/04/13/ALW0fJ.png)
![](https://s2.ax1x.com/2019/04/13/ALWwY4.png)

## 安装

```bash
composer require wenxuanjun/laravel-adminlte3
php artisan vendor:publish --tag=adminlte
```

## 更新

```bash
composer update wenxuanjun/laravel-adminlte3
php artisan vendor:publish --tag=adminlte --force
```

## 配置

在`config/admin.php`文件的`extensions`，加上属于这个扩展的一些配置

```php
'extensions' => [
    'adminlte' => [
        'theme' => [
            /*
            |--------------------------------------------------------------------------
            |Navbar Theme
            |--------------------------------------------------------------------------
            |    "bg-primary", "bg-info", "bg-success", "bg-danger"
            |    "bg-warning", "bg-white", "bg-gray-light"
            */
            
            'navbar'    => 'bg-white',
            
            /*
            |--------------------------------------------------------------------------
            |Sidebar Theme
            |--------------------------------------------------------------------------
            |    "sidebar-dark-primary", "sidebar-dark-warning", "sidebar-dark-info", "sidebar-dark-danger", "sidebar-dark-success"
            |    "sidebar-light-primary", "sidebar-light-warning", "sidebar-light-info", "sidebar-light-danger", "sidebar-light-success"
            */
            
            'sidebar'   => 'sidebar-dark-primary',
            
            /*
            |--------------------------------------------------------------------------
            |LOGO Theme
            |--------------------------------------------------------------------------
            |    "bg-primary", "bg-info", "bg-success", "bg-danger"
            |    "bg-warning", "bg-white", "bg-gray-light"
            */
            
            'logo'      => ''
        ]
    ]
]
```

## 使用

**强制刷新**后查看效果

## 已知BUG

- editable 样式错乱
- modal 样式错乱

## 鸣谢

* [pigzzz123/adminlte3](https://github.com/pigzzz123/adminlte3)

* [almasaeed2010/AdminLTE](https://github.com/almasaeed2010/AdminLTE)

## License

Licensed under [The MIT License (MIT)](LICENSE).
