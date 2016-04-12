<?php  defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-12 10:31:05
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-04-12 10:48:17
 */

class WeChat extends WxApi{
    public $token = "";
    //put your code here
    public function __construct($token = "") {
        parent::__construct();
        $this->token = $token;
    }


    public function wcCheckSignature(){
        try{
            if (empty($this->token)) {
                throw new Exception('TOKEN is not defined!');
            }


            $signature = $_GET["signature"];
            $timestamp = $_GET["timestamp"];
            $nonce = $_GET["nonce"];


            $token = $this->token;
            $tmpArr = array($token, $timestamp, $nonce);
            // use SORT_STRING rule
            sort($tmpArr, SORT_STRING);
            $tmpStr = implode( $tmpArr );
            $tmpStr = sha1( $tmpStr );


            if( $tmpStr == $signature ){
                    return true;
            }else{
                    return false;
            }
        }
        catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }


    public function wcValid(){
        $echoStr = isset($_GET["echostr"]) && !empty($_GET["echostr"]) ? addslashes($_GET["echostr"]) : NULL;
        if(is_null($echoStr)){
            $this->wcMsg();
        }
        else{
            //valid signature , option
            if($this->wcCheckSignature()){
                echo $echoStr;
                exit;
            }
            else{
                exit();
            }
        }
    }


    public function wcMsg(){
        //get post data, May be due to the different environments
        $postStr = isset($GLOBALS["HTTP_RAW_POST_DATA"]) && !empty($GLOBALS["HTTP_RAW_POST_DATA"]) ? $GLOBALS["HTTP_RAW_POST_DATA"] : "";
        if(!empty($postStr)){
            libxml_disable_entity_loader(true);
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $this->zcLog(TRUE,$postObj);


            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $MsgType = $postObj->MsgType;


            if($MsgType == 'event'){//执行事件相应
                $Event = $postObj->Event;
                switch ($Event) {
                    case 'subscribe'://关注
                        break;
                    case 'unsubscribe'://取消关注
                        break;
                    case 'SCAN'://扫描
                        break;
                    case 'LOCATION'://地址
                        break;
                    case 'CLICK'://点击时间
                        break;
                    case 'VIEW'://跳转
                        break;
                    case 'card_pass_check'://卡券审核通过
                        break;
                    case 'card_not_pass_check'://卡券审核失败
                        break;
                    case 'user_get_card'://用户领取卡券
                        break;
                    case 'user_del_card'://用户删除卡券
                        break;
                    case 'user_view_card'://用户浏览会员卡
                        break;
                    case 'user_consume_card'://用户核销卡券
                        break;
                    case 'kf_create_session'://创建会话
                        break;
                    case 'kf_close_session'://关闭会话
                        break;
                    case 'kf_switch_session'://转接会话
                        break;
                    default:
                        break;
                }
            }
            else{
                switch ($MsgType) {
                    case 'text'://文本格式
                        break;
                    case 'image'://图片格式
                        break;
                    case 'voice'://声音
                        break;
                    case 'video'://视频
                        break;
                    case 'shortvideo'://小视频
                        break;
                    case 'location'://上传地理位置
                        break;
                    case 'link'://链接相应
                        break;
                    default:
                        break;
                }
            }


            ////////////////////////////////////////////////////////////////////
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            <Content><![CDATA[%s]]></Content>
                            <FuncFlag>0</FuncFlag>
                        </xml>";
            if(!empty( $keyword )){
                $msgType = "text";
                $contentStr = "Welcome to wechat world!";
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }
            else{
                echo "Input something...";
            }
            ////////////////////////////////////////////////////////////////////
        }
        else{
            echo "暂时没有任何信息！";
            exit;
        }
    }


    //日志LOG
    public function zcLog($errcode , $errmsg){
        $this->returnAy = array();
        $this->returnAy['errcode'] = $errcode;
        $this->returnAy['errmsg'] = $errmsg;
        $this->returnAy['errtime'] = date("Y-m-d H:i:s",time());
        $logfile = fopen("logfile_".date("Ymd",time()).".txt", "a+");
        $txt = json_encode($this->returnAy)."\n";
        fwrite($logfile, $txt);
        fclose($logfile);
        //return $this->returnAy;
    }


}