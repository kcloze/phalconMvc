#一个基于phalcon的mvc骨架

##特点

* 依赖phalcon扩展，性能强劲
* mvc+s，增加service层，不用在controller里面写逻辑代码，让controller保持清爽
* 受Yii框架的影响，生成的文件都放在runtime里面，保证该目录可写
* cli应用使用：cd app，php run；tasks目录下文件为cli action入口


## 安装
* phalcon扩展，安装步骤：https://github.com/phalcon/cphalcon
* git clone https://github.com/kcloze/phalconMvc.git
* 导入数据表 database.sql
* public为网站根目录，配置nginx或者apache


