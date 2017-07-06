<?php
namespace STONENYY;
class View
{
    private static $config = [];
    private static $data = [];
    private static $view;

    /**
     * 自定义config
     * @access public
     * @param mixed $name 配置项
     * @param mixed $value 配置值
     * @return void
    */
    public static function config($name=null, $value='')
    {
        // 数组赋值
        if (is_array($name))
        {
            self::$config = array_merge(self::$config, $name);
        // 单独赋值
        } elseif (is_string($name)) {
            self::$config[$name] = $value;
        }
    }

    /**
     * 模板变量赋值
     * @access public
     * @param mixed $name  变量名
     * @param mixed $value 变量值
     * @return void
     */
    public static function set($name=null, $value='')
    {
        // 数组赋值
        if (is_array($name))
        {
            self::$data = array_merge(self::$data, $name);
        // 单独赋值
        } elseif (is_string($name)) {
            self::$data[$name] = $value;
        }
    }
    
    /**
     * 显示模板
     * @access public
     * @return void
     */
    public static function show($path=null)
    {
        // 组合模板地址
        self::$view = self::$config['path'].$path.'.php';

        // 提取变量
        extract(self::$data);

        // 导入模板
        require self::$view;
    }
}
