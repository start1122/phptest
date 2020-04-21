<?php
// 会话是具有逻辑关联的多个简单交互的集合
// 请求  响应
// 逻辑关联
// 登陆 下单 结算 结束
// 具有一定顺序的多个HTTP请求
// 每个HTTP请求都是单独处理的
// HTTP是无状态协议
// 每个请求都是单独处理的，协议无法识别当前用户
// 给HTTP协议添加程序可识别的状态
// 通过给请求分配令牌来识别用户
// 令牌就是门票，每个人都是唯一的



// 控制会话的开始与结束
// 识别并处理会话内的请求
// 更新会话的状态

// 使用cookie实现会话控制
// 将数据保存在客户端（浏览器）
// 用于存储用户关键信息
// 通过http请求/响应头传输

// 使用session实现会话控制
// 保存在服务端 用于存储用户相关信息 通过保存在客户端的session id 来定位session内容