//index.js
//获取应用实例
const app = getApp()

var WxParse = require('../../wxParse/wxParse.js');


Page({
  data: {
    inputViewBottom: '10rpx',
    sendClass: 'sendDefault',
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
    canIUse: wx.canIUse('button.open-type.getUserInfo')
  },
  //事件处理函数
  bindViewTap: function() {
    // wx.navigateTo({
    //   url: '../logs/logs'
    // })
  },
  onLoad: function () {
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
        sendClass: 'sendDefault'
      });
    } else {
      this.setData({
        sendClass: 'sendDone'
      });
    }
  },
  onPullDownRefresh: function () {
    console.log('fads');
    // var cc = 'c' + parseInt(Math.random() * 1000) +'<template is="wxParse" data="{{wxParseData:article.nodes}}"/>';
    // WxParse.wxParse('article', 'html', cc, this);

    this.setData({
      chatMessage: [
        {
          type: 1,
          direction: 'left',
          avatar: 'https://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTJFyViadyZicZicLzh5EKcz4JyQoBfMwb0nPPf3xJibyWuuYwNW4qVIFCIda1Xk7XJyia0tTHIIcehzK6w/0',
          nickname: '分为奇偶发',
          'content': 'fkjbkklajf0报刊架'
        },
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
      ]
    })
  }
})
