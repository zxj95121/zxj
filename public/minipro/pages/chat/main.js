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
                            wx.setStorageSync('openid', data.data.openid);

                            this.request();
                        }
                    })
                } else {
                    console.log('获取用户登录态失败！' + res.errMsg)
                }
            }
        });

    } else if (!wx.getStorageSync('nickname')) {
         if (this.data.canIUse) {
          // 由于 getUserInfo 是网络请求，可能会在 Page.onLoad 之后才返回
          // 所以此处加入 callback 以防止这种情况
            app.userInfoReadyCallback = res => {
                this.setData({
                  userInfo: res.userInfo,
                  hasUserInfo: true
                })
                console.log(res.userInfo);

                wx.setStorageSync('nickname', res.userInfo.nickName);
                wx.setStorageSync('gender', res.userInfo.gender);
                wx.setStorageSync('avatarUrl', res.userInfo.avatarUrl);

                this.request();
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

                    wx.setStorageSync('nickname', res.userInfo.nickName);
                    wx.setStorageSync('gender', res.userInfo.gender);
                    wx.setStorageSync('avatarUrl', res.userInfo.avatarUrl);

                    this.request();
                }
            })
        }
    } else {
        this.request();
    }

},
getUserInfo: function (e) {
    // console.log(e)
    app.globalData.userInfo = e.detail.userInfo
    this.setData({
        userInfo: e.detail.userInfo,
        hasUserInfo: true
    })
},
request: function() {
    var openid = wx.getStorageSync('openid');
    var nickname = wx.getStorageSync('nickname');
    var gender = wx.getStorageSync('gender');
    var avatarUrl = wx.getStorageSync('avatarUrl');

    wx.request({
        url: 'https://api.zhangxianjian.com/pro/chat/checkMember',
        data: {
            openid: openid
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
                      openid: openid,
                      nickName: nickname,
                      gender: gender,
                      avatarUrl: avatarUrl
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
}
})
