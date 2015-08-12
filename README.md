# SweetAlert

### 第一步：安装
```composer 
composer require nidesky/sweet-alert
```

### 第二步：配置

```php
// 打开 config/app.php 
// 在providers中添加

Nidesky\SweetAlert\SweetAlertServiceProvider::class

// 在alias中添加
'Alert' => Nidesky\SweetAlert\Facades\SweetAlert::class;
```


### 第三步：使用

```blade
// 在控制器中调用 
\Alert::success($title, $msg)

// 在模板中调用

{!! Alert::css() !!}
{!! Alert::js() !!}

@include('sweetalert:sweetalert')

```