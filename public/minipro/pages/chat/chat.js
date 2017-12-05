//index.js
//获取应用实例
const app = getApp()

var WxParse = require('../../wxParse/wxParse.js');


Page({
  data: {
    inputViewBottom: '10rpx',
    sendClass: 'sendDefault',//提交按钮
    sendContent: '',//用户输入的内容
    zhen: true,
    jia: false,
    chatMessage: [
      {
        type: 1,
        direction: 'left',
        avatar: 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJFyViadyZicZicLzh5EKcz4JyQoBfMwb0nPPf3xJibyWuuYwNW4qVIFCIda1Xk7XJyia0tTHIIcehzK6w/0',
        nickname: '张贤健',
        content: '带连接安抚疯狂点击'
      },
      {
        type: 1,
        direction: 'right',
        avatar: 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJFyViadyZicZicLzh5EKcz4JyQoBfMwb0nPPf3xJibyWuuYwNW4qVIFCIda1Xk7XJyia0tTHIIcehzK6w/0',
        nickname: '张贤健',
        content: 'fdasfsvdf发的萨芬无法v大飞哥说打分'
      },
      {
        type: 0,
        time: '3天前'
      }
    ],
    userInfo: {},
    hasUserInfo: false,
    canIUse: wx.canIUse('button.open-type.getUserInfo'),

    //用户id和组id
    uid: 0,
    group_id: 0
  },
  //事件处理函数
  bindViewTap: function() {
    // wx.navigateTo({
    //   url: '../logs/logs'
    // })
  },
  onLoad: function (options) {
    this.setData({
        uid: options.uid,
        group_id: options.group_id
    });

    var that_data = this.data;
    var that = this;


    // console.log(app.globalData);
    if (app.globalData.userInfo) {
      this.setData({
        userInfo: app.globalData.userInfo,
        hasUserInfo: true
      })
    } else if (this.data.canIUse){
      // 由于 getUserInfo 是网络请求，可能会在 Page.onLoad 之后才返回
      // 所以此处加入 callback 以防止这种情况
      app.userInfoReadyCallback = res => {
        this.setData({
          userInfo: res.userInfo,
          hasUserInfo: true
        })
      }
    } else {
      // 在没有 open-type=getUserInfo 版本的兼容处理
      wx.getUserInfo({
        success: res => {
          app.globalData.userInfo = res.userInfo
          this.setData({
            userInfo: res.userInfo,
            hasUserInfo: true
          })
        }
      })
    }

    // 判断用户是否是群成员，如果不是跳走



    //建立连接
    wx.connectSocket({
        url: "wss://api.zhangxianjian.com/wss",
        complete: function(data) {
            console.log('fads');
        }
    })

    //连接成功
    wx.onSocketOpen(function() {
        var json = JSON.stringify({
            type: 0,
            uid: that_data.uid
        });
        //发送初始化数据
        wx.sendSocketMessage({
            data: json,
        });
    })

    wx.onSocketMessage(function(res) {
        console.log('收到服务器内容：' + res.data)
    })



    /*获取最新10条聊天数据*/
    wx.request({
        url: 'https://api.zhangxianjian.com/pro/chat/getChats_init',
        data: {
            group_id: that_data.group_id 
        },
        method: 'post',
        dataType: 'json',
        success: function (data, code) {
            var result = data.data.result;
            console.log(result);
            for (var i in result) {
                result[i].avatar = result[i].headimgurl;
                if (result[i].uid == that_data.uid) {
                    result[i].direction = 'right';
                } else {
                    result[i].direction = 'left';
                }
            }
            that.setData({
                chatMessage: result
            })
            console.log(result);
        }
    });

  },
    getUserInfo: function(e) {
        // console.log(e)
        app.globalData.userInfo = e.detail.userInfo
        this.setData({
            userInfo: e.detail.userInfo,
            hasUserInfo: true
        })
    },

  // input聚焦
  inputFocus: function(e) {
    this.setData({
      inputViewBottom: '10rpx'
    });
  },
  //input失去焦点
  inputBlur: function(e) {
    this.setData({
      inputViewBottom: '10rpx'
    });
  },
  // input输入时
  inputInput: function(e) {
    var val = e.detail.value;
    if (val == '') {
      this.setData({
        sendClass: 'sendDefault',
        sendContent: val.trim()
      });
    } else {
      this.setData({
        sendClass: 'sendDone',
        sendContent: val.trim()
      });
    }
  },
  onPullDownRefresh: function () {
    console.log('fads');
    // var cc = 'c' + parseInt(Math.random() * 1000) +'<template is="wxParse" data="{{wxParseData:article.nodes}}"/>';
    // WxParse.wxParse('article', 'html', cc, this);

    // this.setData({
    //   chatMessage: [
    //     {
    //       type: 1,
    //       direction: 'left',
    //       avatar: 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJFyViadyZicZicLzh5EKcz4JyQoBfMwb0nPPf3xJibyWuuYwNW4qVIFCIda1Xk7XJyia0tTHIIcehzK6w/0',
    //       nickname: '分为奇偶发',
    //       'content': 'fkjbkklajf0报刊架'
    //     },
    //     {
    //       type: 1,
    //       direction: 'left',
    //       avatar: 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJFyViadyZicZicLzh5EKcz4JyQoBfMwb0nPPf3xJibyWuuYwNW4qVIFCIda1Xk7XJyia0tTHIIcehzK6w/0',
    //       nickname: '张贤健',
    //       content: '带连接安抚疯狂点击'
    //     },
    //     {
    //       type: 1,
    //       direction: 'right',
    //       avatar: 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJFyViadyZicZicLzh5EKcz4JyQoBfMwb0nPPf3xJibyWuuYwNW4qVIFCIda1Xk7XJyia0tTHIIcehzK6w/0',
    //       nickname: '张贤健',
    //       content: 'fdasfsvdf发的萨芬无法v大飞哥说打分'
    //     },
    //     {
    //       type: 0,
    //       time: '3天前'
    //     }
    //   ]
    // })
  },

    sendMessageFunc: function(e){
        var data = this.data;
        var sendContent = data.sendContent;
        var sendClass = data.sendClass;
        if (sendClass == 'sendDone') {
            var dataArr = new Object();
            dataArr.uid = data.uid;
            dataArr.group_id = data.group_id;
            dataArr.content = sendContent;
            dataArr.type = 1;//表示发送的是文本内容
            wx.sendSocketMessage({
                data: JSON.stringify(dataArr)
            });
            //重置input内容
            this.setData({
                sendContent: ''
            });
        }
    }
})
