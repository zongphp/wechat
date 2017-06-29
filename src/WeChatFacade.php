<?php namespace zongphp\wechat;


use zongphp\framework\build\Facade;

class WeChatFacade extends Facade {
	public static function getFacadeAccessor() {
		return 'WeChat';
	}
}