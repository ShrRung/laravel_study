# laravel 学习
    想少踩坑，所以购买了Summer大神组织编写的[《Laravel 入门教程》](https://fsdhub.com/books/laravel-essential-training-5.1 "《Laravel 入门教程》")。还是很推荐的，这个教程很适合迅速练习
    之前没接触过laravel,所以就直接学了最新的 laravel5.4
## 前期准备
    1. 编辑器使用
        以前都使用phpstorm，现在也赶下潮流，使用一下有广大github用户支撑的Atom,相信会很好的。
        插件准备： simplified-chinese-menu、tree-view-git-branch package、atom-bootstrap3、autoprefixer、highlight-selected、linter-php、atom-autocomplete-php、php-cs-fixer、laravel、language-blade
        不过可能我装的插件还不到位吧，不大满意，虽然atom命令行直接启动很方便，还是放弃，继续phpstorm了
## laravel 5.4 学习使用细节
    ### 1. 像thinkphp的block标签，实现父子模板的套用

            block:
                ```html
                   <!DOCTYPE html>
                   <html>
                     <head>
                       <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
                     </head>
                     <body>
                       @yield('content')
                     </body>
                   </html>
                ```
                ```php
                   @extends('layouts.default')
                   @section('title', '帮助')
                   @section('content')
                     <h1>帮助页</h1>
                   @stop
                ```
            include:
                @include 是 Blade 提供的视图引用方法
    ### 2. laravel 前端流程。
            之前版本推荐使用 gulp，5.4 不推荐了。
            `书籍中《Laravel 前端工作流》对应 laravel 文档中的 《编辑资源 Mix》`
            yarn install -> npm install 会安装package.json下的安装包。
            gulp -> npm run dev 可以使用 Laravel Mix 来将 SASS 文件编译为纯 CSS。此命令处理 webpack.mix.js 文件中的指令。通常情况下，编译好的 CSS 代码会被放置在 public/css
            gulp watch -> npm run watch 会在你的终端里持续运行，监控资源文件是否有发生改变。这时候一旦资源文件发生变化，webpack 会自动重新编译
            npm run watch-poll 改变了你的文件的时候而 Webpack 并没有同步更新，使用这个命令
        3. route
            eg : Route::get('signup', 'UsersController@create')->name('signup');  name方法，可以给路由定义一个别名，给代码里用



