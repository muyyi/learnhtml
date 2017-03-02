一个九宫格的各种改造
simple:很简单，用Div，画出九个格子，心情好就随便给点颜色


配置Nginx

显示nginx在系统中的进程：
tasklist /fi "imagename eq nginx.exe"

强制退出：
taskkill /F /IM nginx.exe > nul


其他命令:
nginx -s stop 快速退出
nginx -s quit 优雅退出
nginx -s reload 更换配置，启动新的工作进程，优雅的关闭以往的工作进程
nginx -s reopen 重新打开日志文件
nginx -t  修改配置后，可以通过下面的命令测试是否有语法错误

实测，不要用火狐浏览器，会出现坑爹的修改配置无反应的bug。
而chrome浏览器反映正常。原因不明。