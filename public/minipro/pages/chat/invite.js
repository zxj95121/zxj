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
      text: 'dfa'
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
      
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {
  
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

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function (res) {
      if (res.from === 'button') {
          // 来自页面内转发按钮
          console.log(res.target)
      }
      return {
          title: '邀请你一起加入群聊',
          path: '/page/user?id=123',
          success: function (res) {
              // 转发成功
          },
          fail: function (res) {
              // 转发失败
          }
      }
  }
})