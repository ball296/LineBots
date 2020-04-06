<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "s4N1kB+LlFN7g/w/V1PZuWkVAuROSbh9hxCBZ7Xe69YDFt0plPMJI19DdMiu1L6/FKrNt+CRMgBEwK2lhH6xzqkIGuqvEPGSlMtXl+uBF+q43U3AnK2VnPyVTBXEcQ+L7d/pWHVwxBoSD86Mc6QPSAdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "114e3fbb8af88b4c064f888b99e4ff13";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
