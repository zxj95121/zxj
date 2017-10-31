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
onLaunch: function() {
    
},
onLoad: function () {
    // this.setData({
    //   logs: (wx.getStorageSync('logs') || []).map(log => {
    //     return util.formatTime(new Date(log))
    //   })
    // })
    if (!wx.getStorageSync('openid')) {
        wx.login({
            success: function(res) {
                if (res.code) {
                    //发起网络请求
                    wx.request({
                        url: 'https://api.zhangxianjian.com/pro/login/getkey',
                        data: {
                            code: res.code
                        },
                        dataType: 'json',
                        success: function(data) {
                            wx.setStorageSync({
                                openid: data.data.openid
                            })
                        }
                    })
                } else {
                    console.log('获取用户登录态失败！' + res.errMsg)
                }
            }
        });
    } else {
        var openid = wx.getStorageSync('openid');

        if (app.globalData.userInfo) {
          this.setData({
            userInfo: app.globalData.userInfo,
            hasUserInfo: true
          })

          wx.request({
            url: 'https://api.zhangxianjian.com/pro/chat/checkMember',
            data: {
                openid: app.globalData.userInfo.openId
            },
            method: 'post',
            dataType: 'json',
            success: function(data, code) {
              console.log(data);
              if (data.data.result == '404') {
                  console.log(23);
                  wx.request({
                      url: 'https://api.zhangxianjian.com/pro/chat/newWechatUser',
                      data: {
                          openid: app.globalData.userInfo.openId,
                          nickName: app.globalData.userInfo.nickName,
                          gender: app.globalData.userInfo.gender,
                          avatarUrl: app.globalData.userInfo.avatarUrl
                      },
                      method: 'post',
                      dataType: 'json',
                      success: function(data, code) {
                          if (data.data.result == 0) {
                              wx.redirectTo({
                                  url: 'invite',
                              })
                          }
                      }
                  })
              }
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
                console.log(res.userInfo);
                wx.request({
                    url: 'https://api.zhangxianjian.com/pro/chat/checkMember',
                    data: {
                        openid: res.userInfo.openId
                    },
                    method: 'post',
                    dataType: 'json',
                    success: function (data, code) {
                        console.log(data);
                        if (data.data.result == '404') {
                            console.log(23);
                            wx.request({
                                url: 'https://api.zhangxianjian.com/pro/chat/newWechatUser',
                                data: {
                                    openid: res.userInfo.openId,
                                    nickName: res.userInfo.nickName,
                                    gender: res.userInfo.gender,
                                    avatarUrl: res.userInfo.avatarUrl
                                },
                                method: 'post',
                                dataType: 'json',
                                success: function (data, code) {
                                    if (data.data.result == 0) {
                                        wx.redirectTo({
                                            url: 'invite',
                                        })
                                    }
                                }
                            })
                        }
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
                        url: 'https://api.zhangxianjian.com/pro/chat/checkMember',
                        data: {
                            openid: res.userInfo.openId,
                        },
                        method: 'post',
                        dataType: 'json',
                        success: function (data, code) {
                            console.log(data);
                            if (data.data.result == '404') {
                                console.log(23);
                                wx.request({
                                    url: 'https://api.zhangxianjian.com/pro/chat/newWechatUser',
                                    data: {
                                        openid: res.userInfo.openId,
                                        nickName: res.userInfo.nickName,
                                        gender: res.userInfo.gender,
                                        avatarUrl: res.userInfo.avatarUrl
                                    },
                                    method: 'post',
                                    dataType: 'json',
                                    success: function (data, code) {
                                        if (data.data.result == 0) {
                                            wx.redirectTo({
                                                url: 'invite',
                                            })
                                        }
                                    }
                                })
                            }
                        }
                    })
                }
            })
        }
    }

},
getUserInfo: function (e) {
    // console.log(e)
    app.globalData.userInfo = e.detail.userInfo
    this.setData({
        userInfo: e.detail.userInfo,
        hasUserInfo: true
    })
}
})
