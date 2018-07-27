// Vue.config.unsafeDelimiters = ['{', '}'];
var app = new Vue({
  	el: '#page',
  	data: {
    	// message: 'Hello Vue!',
    	http: 'https://admin.zxjxj.com',
    	poems: [],
  	},
  	created: function() {
  		// console.log(this.message);
  		this.getPoems();//获取最新的三个诗集并初始化
  		// var that = this;
  	},
  	methods: {
  		getPoems: function(e) {
  			var that = this;
  			$.ajax({
  				url: this.http + '/api/poem/managePoem',
  				type: 'post',
  				dataType: 'json',
  				data: {},
  				success: function(data) {
  					if (data.code == 0) {
  						that.poems = data.data; 
  					}
  					// console.log(that.poems);
  				}
  			})
  		}
  	}
})


// console.log(app)