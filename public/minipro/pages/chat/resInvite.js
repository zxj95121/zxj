// pages/chat/invite.js
const app = getApp()

Page({

    /**
     * 页面的初始数据
     */
    data: {
        id: 0,
        group_id: 0,
        userInfo: {},
        hasUserInfo: false,
        canIUse: wx.canIUse('button.open-type.getUserInfo'),
        isRequest: 0
    },

    /**
     * 生命周期函数--监听页面加载
     */
    onLoad: function (options) {
        this.setData({
            id: options.id,
            group_id: options.group_id
        });

        var that = this;
        if (!wx.getStorageSync('openid')) {
            wx.login({
                success: function (res) {
                    if (res.code) {
                        //发起网络请求
                        wx.request({
                            url: 'https://api.zhangxianjian.com/pro/login/getkey',
                            data: {
                                code: res.code
                            },
                            dataType: 'json',
                            success: function (data) {
                                wx.setStorageSync('openid', data.data.openid);

                                if (that.data.isRequest == 0 && wx.getStorageSync('nickname')) {
                                    that.setData({
                                        isRequest: 1
                                    });
                                    that.exeRequest();
                                }
                                // this.exeRequest();
                            }
                        })
                    } else {
                        console.log('获取用户登录态失败！' + res.errMsg)
                    }
                }
            });

        }

        if (!wx.getStorageSync('nickname')) {
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

                    if (that.data.isRequest == 0 && wx.getStorageSync('openid')) {
                        that.setData({
                            isRequest: 1
                        });
                        that.exeRequest();
                    }
                    // that.exeRequest();
                }
            })
        }

        if (wx.getStorageSync('openid') && wx.getStorageSync('nickname')) {
            if (!that.data.isRequest) {
                that.exeRequest();
                that.setData({
                    isRequest: 1
                });
            }
            // this.exeRequest();
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

    exeRequest: function () {
        // 查看该用户是否已经加入了该群聊
        //把基本信息也带过去，如果不是系统用户，也创建系统用户
        var openid = wx.getStorageSync('openid');
        var nickname = wx.getStorageSync('nickname');
        var gender = wx.getStorageSync('gender');
        var avatarUrl = wx.getStorageSync('avatarUrl');
        var group_id = this.data.group_id;

        var that = this;

        wx.request({
            url: 'https://api.zhangxianjian.com/pro/chat/isInGroup',
            data: {
                openid: openid,
                nickName: nickname,
                gender: gender,
                avatarUrl: avatarUrl,
                id: this.data.id,
                group_id: group_id
            },
            method: 'post',
            dataType: 'json',
            success: function (data, code) {
                that.testResult(data.data);
            }
        })
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

    regetInfo: function () {
        var that = this;
        var openid = wx.getStorageSync('openid');

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

                wx.request({
                    url: 'https://api.zhangxianjian.com/pro/chat/regetInfo',
                    data: {
                        openid: openid,
                        nickname: res.userInfo.nickName,
                        gender: res.userInfo.gender,
                        avatarUrl: res.userInfo.avatarUrl,
                        id: this.data.id,
                        group_id: this.data.group_id
                    },
                    method: 'post',
                    dataType: 'json',
                    success: function (data, code) {
                        that.testResult(data.data);
                    }
                })
            }
        })

    },
    //对返回的数据进行处理
    testResult: function (data) {
        var openid = wx.getStorageSync('openid');
        var that = this;

        if (data.result == 0) {
            wx.showModal({
              title: '邀请函',
              content: data.pre+'邀请你加入群聊，是否接受？',
              success: function(res) {
                if (res.confirm) {
                    /*用户接受*/
                    wx.request({
                        url: 'https://api.zhangxianjian.com/pro/chat/joinGroup',
                        data: {
                            openid: openid,
                            id: that.data.id,
                            group_id: that.data.group_id
                        },
                        method: 'post',
                        dataType: 'json',
                        success: function (data, code) {
                            if (data.result == 0) {
                                /*接受成功*/
                                wx.showToast({
                                  title: '入群成功',
                                  icon: 'success',
                                  duration: 2000
                                })

                                setTimeout(function(){
                                    wx.reLaunch({
                                      url: 'main'
                                    });
                                }, 1800);
                            }
                        }
                    })
                } else if (res.cancel) {
                    wx.reLaunch({
                      url: 'main'
                    })
                }
              }
            })
        } else if (data.result == 1) {
            //都是系统成员了
            wx.showModal({
              title: '错误提示',
              showCancel: false,
              content: data.pre+'和'+data.now+'都已经是群聊成员了',
              success: function(res) {
                if (res.confirm) {
                    wx.reLaunch({
                      url: 'main'
                    })
                } else if (res.cancel) {
                    wx.reLaunch({
                      url: 'main'
                    })
                }
              }
            })
        } else if (data.result == 2) {
            //某个人已经是系统成员了
            wx.showModal({
              title: '错误提示',
              showCancel: false,
              content: data.data+'已经是群聊成员了',
              success: function(res) {
                if (res.confirm) {
                    wx.reLaunch({
                      url: 'main'
                    })
                } else if (res.cancel) {
                    wx.reLaunch({
                      url: 'main'
                    })
                }
              }
            })
        } else if (data.result == 3) {
            //存在性别不明
            wx.showModal({
              title: '错误提示',
              confirmText: '重新验证',
              content: data.data+'的微信尚未设置性别',
              success: function(res) {
                if (res.confirm) {
                    /*wx.reLaunch({
                      url: 'main'
                    })*/
                    that.regetInfo();
                } else if (res.cancel) {
                    wx.reLaunch({
                      url: 'main'
                    })
                }
              }
            })
        } else if (data.result == 4) {
            //性别都不明
            wx.showModal({
              title: '错误提示',
              confirmText: '重新验证',
              content: data.pre+'和'+data.now+'的微信均未设置性别。',
              success: function(res) {
                if (res.confirm) {
                    

                    /*重新请求用户信息*/


                } else if (res.cancel) {
                    wx.reLaunch({
                      url: 'main'
                    })
                }
              }
            })
        } else if (data.result == 5){
            wx.showModal({
              title: '错误提示',
              showCancel: false,
              content: '自己无法接受自己的邀请',
              success: function(res) {
                if (res.confirm) {
                    wx.reLaunch({
                      url: 'main'
                    })
                } else if (res.cancel) {
                    wx.reLaunch({
                      url: 'main'
                    })
                }
              }
            })
        }
    }

})