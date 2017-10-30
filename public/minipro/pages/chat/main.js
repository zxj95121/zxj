//logs.js
// const util = require('../../utils/util.js')
const app = getApp()

Page({
  data: {
    logs: [],
    userInfo: {},
    hasUserInfo: false,
    canIUse: wx.canIUse('button.open-type.getUserInfo')
  },
  onLoad: function () {
    // this.setData({
    //   logs: (wx.getStorageSync('logs') || []).map(log => {
    //     return util.formatTime(new Date(log))
    //   })
    // })
    if (app.globalData.userInfo) {
      this.setData({
        userInfo: app.globalData.userInfo,
        hasUserInfo: true
      })

      wx.request({
        url: 'https://www.zhangxianjian.com/pro/chat/checkMember',
        data: app.globalData.userInfo.openid,
        method: 'post',
        dataType: 'json',
        success: function(data, code) {
          console.log(data);
        }
      })
    } else if (this.data.canIUse) {
      // 由于 getUserInfo 是网络请求，可能会在 Page.onLoad 之后才返回
      // 所以此处加入 callback 以防止这种情况
      app.userInfoReadyCallback = res => {
        this.setData({
          userInfo: res.userInfo,
          hasUserInfo: true
        })

        wx.request({
            url: 'http://www.zhangxianjian.com/pro/chat/checkMember',
            data: res.userInfo.openid,
            method: 'post',
            dataType: 'json',
            success: function (data, code) {
                console.log(data);
            }
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

          wx.request({
              url: 'http://www.zhangxianjian.com/pro/chat/checkMember',
              data: res.userInfo.openid,
              method: 'post',
              dataType: 'json',
              success: function (data, code) {
                  console.log(data);
              }
          })
        }
      })
    }

  }
})
