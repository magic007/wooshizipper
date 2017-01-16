// JavaScript Document
$(function(){
    $("#scrollbar").jscroll({ 
        W:"4px",    //设置滚动条宽度
       // BgUrl:"url(/images/s_bg2.gif)",    //设置滚动条背景图片地址
        Bg:"#268d8b",    //设置滚动条背景图片position,颜色等
        Bar:{
            //Pos:"bottom",    //设置滚动条初始化位置在底部
            Bd:{    //设置滚动滚轴边框颜色：鼠标离开(默认)，经过
                Out:"#016261",
                Hover:"#016261"
            },
            Bg:{    //设置滚动条滚轴背景：鼠标离开(默认)，经过，点击
                Out:"#016261",
                Hover:"#002f2f",
                Focus:"#002f2f"
            }
        },
        Btn:{
            btn:false,    //是否显示上下按钮 false为不显示
            uBg:{    //设置上按钮背景：鼠标离开(默认)，经过，点击
                Out:"0 0",
                Hover:"-15px 0",
                Focus:"-30px 0"
            },
            dBg:{    //设置下按钮背景：鼠标离开(默认)，经过，点击
                Out:"0 -15px",
                Hover:"-15px -15px",
                Focus:"-30px -15px"
            }
        },
        Fn:function(){}    //滚动时候触发的方法
    });
});