<?php
class pages
{
    public $total=0;//    总条数
    public $number=0;//    每页条数
    public $current=0;//    当前显示
    public $totalpage=0;//    总页数
    public $url='';
    public $limit="";//    数据组合



    function __construct($total,$number)
    {
        $this->total=$total;
        $this->number=$number;
        $this->totalpage=ceil($total/$number);
        $this->current=isset($_REQUEST['page'])? $_REQUEST['page']:0;
        $this->url=isset($_REQUEST['page'])?substr($_SERVER['REQUEST_URI'],0,strrpos($_SERVER['REQUEST_URI'],'=')+1):$_SERVER['REQUEST_URI'].'&page=';
    }



    function output(){
        $str="";
//        $str.="一共<span>{$this->total}</span>条";
        $str.="<span>总页数:{$this->totalpage}</span>";
        $str.="<a href='{$this->url}0'><li>首页</li></a>";

        $prev=$this->current-1<0 ? 0:$this->current-1;
        $str.="<a href='{$this->url}{$prev}'><li>上一页</li></a>";

//中间页面显示部分：1，2，3，4

        $start=$this->current-2<0 ? 0: $this->current-2;
        $stop=$this->current+2>$this->totalpage-1 ? $this->totalpage-1 : $this->current+2;



        for($i=$start;$i<=$stop;$i++){
            $n=$i+1;
            if($i==$this->current){
                $str.="<span><li id='num1'>{$n}</li></span>";
            }

            else{
                    $str.="<a href='{$this->url}{$i}'><li>{$n}</li></a>";
                }


        }
//        下一页
        $next=$this->current+1>$this->totalpage-1 ? $this->totalpage-1:$this->current+1;
        $str.="<a href='{$this->url}{$next}'><li>下一页</li></a>";
//        尾页
        $end=$this->totalpage-1;
        $nowpage=$this->current+1;

        $str.="<a href='{$this->url}{$end}'><li>尾页</li></a>";
        $str.="<span>当前页{$nowpage}/{$this->totalpage}</span>";
//        数据组合

        $p=$this->current*$this->number;
        $this->limit="limit {$p},{$this->number}";

        return $str;
    }
}
