## 关于
Laravel 开发的类似新浪微博的网站。

## 系统功能
- 用户的注册登录
- 用户个人信息的更改
- 使用管理员权限删除用户
- 发布微博
- 关注用户
- 查看关注用户的微博动态

## 开发环境
使用 Laravel 官方推荐的开发环境 Homestead。安装向导：[Laravel 开发环境部署](https://laravel-china.org/docs/laravel-development-environment/5.5)

## 安装 & 使用
1、修改 Homestead.yaml
```bash
> subl ~/Homestead/Homestead.yaml (subl 是　Sublime　Text 3　编辑器的命令行接口，您也可以使用 vim, vscode 等编辑文件)
# 增加站点：
sites:
    - map: sample.test
      to: your_path_to/sample/public
# 增加数据库：
databases:
    - sample
```
2、修改 hosts
```bash
subl /etc/hosts
# 增加一行：
192.168.10.10  sample.test
# (上面的 IP 是 Homestead.yaml　中绑定的 Homestead 虚拟机 IP)
```

3、启动 Homestead
```bash
> cd ~/Homestead && vagrant up
```

4、登录 Homestead
```bash
> vagrant ssh # 或者 ssh vagrant@192.168.10.10
```

5、克隆项目
```bash
$ git clone https://github.com/mingcw/sample.git && cd sample
```

6、安装依赖
```bash
$ composer install
```

7、配置环境变量
```bash
$ cp .env.example .env
$ subl .env
# app url（发送的用户邮件里会使用这个域名）
APP_URL=http://sample.test
# 数据库名称
DB_DATABASE=sample
```

8、生成 app key
```bash
$ php artisan key:generate
```

9、数据库迁移并填充
```bash
$ php artisan migrate --seed
```

10、访问 http://sample.test
