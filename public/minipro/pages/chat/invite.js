// pages/chat/invite.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
      nodes: [{
          name: 'ul',
          children:[
              {
                  name: 'li',
                  attrs: {
                      class: 'li_class'
                  },
                  children: [{
                      type: 'text',
                      text: '您不是该群成员'
                  }]
              }, {
                  name: 'li',
                  attrs: {
                      class: 'li_class'
                  },
                  children: [{
                      type: 'text',
                      text: '您无法单独入群'
                  }]
              }, {
                  name: 'li',
                  attrs: {
                      class: 'li_class'
                  },
                  children: [{
                      type: 'text',
                      text: '邀请一位异性，同意后自动一起入群'
                  }]
              }
          ]
      }],
      uls: [],
      id: 0,
      group_id: 0,
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
      this.setData({
        id: options.id,
        group_id: options.group_id
      });
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
    // wx.navigateTo({
    //   url: 'resInvite?id=1&group_id=1'
    // })
  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {
  
  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {
  
  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {
  
  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {
  
  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {
  
  },
  regetInfo: function () {
        var that = this;
        var openid = wx.getStorageSync('openid');

        wx.getUserInfo({
            success: res => {
                app.globalData.userInfo = res.userInfo
                that.setData({
                    userInfo: res.userInfo,
                    hasUserInfo: true
                })

                wx.setStorageSync('nickname', res.userInfo.nickName);
                wx.setStorageSync('gender', res.userInfo.gender);
                wx.setStorageSync('avatarUrl', res.userInfo.avatarUrl);

                wx.request({
                    url: 'https://api.zhangxianjian.com/pro/chat/regetInfo',
                    data: {
                        openid: openid,
                        nickname: res.userInfo.nickName,
                        gender: res.userInfo.gender,
                        avatarUrl: res.userInfo.avatarUrl,
                        id: that.data.id,
                        group_id: that.data.group_id
                    },
                    method: 'post',
                    dataType: 'json',
                    success: function (data, code) {
                        wx.showModal({
                          title: '提示',
                          showCancel: false,
                          content: '验证完成',
                          success: function(res) {
                            if (res.confirm) {
                                //不需要任何操作
                            } else if (res.cancel) {
                               //不做任何操作
                            }
                          }
                        })
                    }
                })
            }
        })

    },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function (res) {
      if (res.from === 'button') {
          // 来自页面内转发按钮
          console.log(res.target)
      }
      var that = this;
      //判断当前用户的性别是否已经设置
      var gender = wx.getStorageSync('gender');
      if (!gender) {
        wx.showModal({
          title: '错误提示',
          showCancel: false,
          content: '尚未设置微信性别，无法邀请他人入群。',
          confirmText: '重新验证',
          success: function(res) {
            if (res.confirm) {
                that.regetInfo();
            } else if (res.cancel) {
               //不做任何操作
            }
          }
        })
      }
      return {
          title: '邀请你一起加入群聊',
          path: '/pages/chat/resInvite?id='+this.data.id+'&group_id='+this.data.group_id,
          success: function (res) {
              // 转发成功
              wx.navigateBack({
                delta: 1
              })
          },
          fail: function (res) {
              // 转发失败
          }
      }
  }
})