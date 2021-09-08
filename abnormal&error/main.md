# 再谈PHP错误与异常处理
## 一、异常与错误的概述
php中的异常：程序在运行中出现不符合预期的情况，属于逻辑和业务流程的错误，而不是编译或者语法上的错误。（例如mysql失败的回滚）
php中的错误：php脚本本身的错误，错误是不能被try-catch捕获的。（大部分都是语法错误，服务器环境问题，编译器无法编译等）
## 二、ERROR的级别

```
Fatal Error:致命错误（脚本终止运行）
        E_ERROR         // 致命的运行错误，错误无法恢复，暂停执行脚本
        E_CORE_ERROR    // PHP启动时初始化过程中的致命错误
        E_COMPILE_ERROR // 编译时致命性错，就像由Zend脚本引擎生成了一个E_ERROR
        E_USER_ERROR    // 自定义错误消息。像用PHP函数trigger_error（错误类型设置为：E_USER_ERROR）

Parse Error：编译时解析错误，语法错误（脚本终止运行）
        E_PARSE  //编译时的语法解析错误

Warning Error：警告错误（仅给出提示信息，脚本不终止运行）
        E_WARNING         // 运行时警告 (非致命错误)。
        E_CORE_WARNING    // PHP初始化启动过程中发生的警告 (非致命错误) 。
        E_COMPILE_WARNING // 编译警告
        E_USER_WARNING    // 用户产生的警告信息

Notice Error：通知错误（仅给出通知信息，脚本不终止运行）
        E_NOTICE      // 运行时通知。表示脚本遇到可能会表现为错误的情况.
        E_USER_NOTICE // 用户产生的通知信息。
```

## 三、PHP异常处理中的黑科技
1：set_error_handler() :捕捉异常
2：register_shutdown_function():捕捉错误
3：set_exception_handler(): 置用户自定义的异常处理函数，接手异常
## 四、巧妙的捕获错误和异常

## 五、自定义异常处理和异常嵌套

## 六、PHP7中的异常处理