import React from 'react';
import Thtr from './bodythtr.js';
import Tbtr from './bodytbtr.js';

class Bodytable extends React.Component {
	constructor(props) {
		super(props);
		var result = window.JSON.parse(this.props.result);
		result.path = result.path+'/ajax';
		if (result.next_page_url)
			result.next_page_url = result.next_page_url.replace('?', '/ajax?');
		if (result.prev_page_url)
			result.prev_page_url = result.prev_page_url.replace('?', '/ajax?');
		this.state = {
			result: window.JSON.stringify(result)
		}
		console.log(result);
	}

	_handleClick(e) {
		var result = window.JSON.parse(this.state.result);
		if (e.target.innerHTML == result.current_page) {
			/*如果点击的是当前页，就不发起请求*/
			return false;
		}
		var url = e.target.getAttribute('url');
		if (url == '#') /*没有下一页或者上一页*/
			return false;
		var reactThis = this;
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': this.props.token
			},
			type: 'post',
			url: url,
			dataType: 'json',
			success: function(data){
				var obj = window.JSON.parse(data);
				// obj.path = obj.path.substring(0, obj.path.lastIndexOf('/ajax'));
				reactThis.setState({
					result: window.JSON.stringify(obj)
				});
			} 
		})
	}

	_redirectClick(e) {
		var result = window.JSON.parse(this.state.result);
		var param = window.JSON.parse(this.props.param);/*查询字符串，便于搜索用*/

		var dom = e.target.parentNode.previousSibling.firstChild;

		if (result.current_page == dom.value.trim() || dom.value.trim() == '')
			return false;/*当前页，不发起请求*/

		var page_total = parseInt(result.total/result.per_page);
		if (result.total%result.per_page != 0) {
			page_total++;
		}
		var max = (result.current_page+5)>page_total ? page_total : result.current_page+5;

		if (dom.value.trim() > max)
			return false;
		/*拼接查询字符串*/
		var selstr = result.path+'?';
		for (var p in param) {
			selstr += p+'='+param[p]+'&'; 
		}
		selstr += 'page='+dom.value.trim();

		var reactThis = this;
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': this.props.token
			},
			type: 'post',
			url: selstr,
			dataType: 'json',
			success: function(data){
				var obj = window.JSON.parse(data);
				// obj.path = obj.path.substring(0, obj.path.lastIndexOf('/ajax'));
				reactThis.setState({
					result: window.JSON.stringify(obj)
				});
			} 
		})
	}

	_handleSearch() {
		var result = window.JSON.parse(this.state.result);
		var searchs = this.props.searchs;

		var seas = searchs.map((name,index) => {
			var dom = document.getElementsByName(name.name);
			switch (name.type) {
				case 'text':
					if (dom.length > 1) {
						throw('您的input元素的name属性存在冲突！请更换');
					}
					return name.name+'='+dom[0].value;
					break;
				case 'select':
					return name.name+'='+dom[0].options[dom[0].selectedIndex].value;
					break;
			}
		});
		var url = result.path+'?'+seas.join('&');
		// console.log(search_str);
		var reactThis = this;
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': this.props.token
			},
			type: 'post',
			url: url,
			dataType: 'json',
			success: function(data){
				var obj = window.JSON.parse(data);
				// obj.path = obj.path.substring(0, obj.path.lastIndexOf('/ajax'));
				reactThis.setState({
					result: window.JSON.stringify(obj)
				});
			} 
		})
	}

	render(){
		var result = window.JSON.parse(this.state.result);
		var param = window.JSON.parse(this.props.param);/*查询字符串，便于搜索用*/
		var total = result.total;
		var pagesize = result.per_page;
		var current_page = result.current_page;
		var start = result.from;
		var end = result.to;
		// var last_page = result.last_page;
		// var next_page = result.next_page;
		var last_page_url = result.prev_page_url ? result.prev_page_url:'#';
		var last_page_status = result.prev_page_url ? 'paginate_button previous':'paginate_button previous disabled';
		var next_page_url = result.next_page_url ? result.next_page_url:'#';
		var next_page_status = result.next_page_url ? 'paginate_button next':'paginate_button next disabled';
		var page_total = parseInt(total/pagesize);
		if (total%pagesize != 0) {
			page_total++;
		}

		/*拼接查询字符串*/
		var selstr = result.path+'?';
		for (var p in param) {
			selstr += p+'='+param[p]+'&'; 
		}
		selstr += 'page=';

		// 开始计算lis
		var liArr = [];
		var max = (current_page+4)>page_total ? page_total : current_page+4;
		for (var i = current_page-4;i <= max;i++) {
			if (i <= 0) {
				continue;
			}
			liArr[i] = selstr+i;
		}
		
		var lis = liArr.map((name,index) => {
			if (index == current_page)
				return <li key={index} className="paginate_button active" aria-controls="datatable" style={{cursor:'pointer'}} onClick={this._handleClick.bind(this)} ref={'li'+index}>
							<a href="javascript:void(0);" url={name}>{index}</a>
	                </li>;
	        else
	        	return <li key={index} className="paginate_button" aria-controls="datatable" style={{cursor:'pointer'}} onClick={this._handleClick.bind(this)} ref={'li'+index}>
							<a href="javascript:void(0);" url={name}>{index}</a>
	                </li>;
		});

		/*开始计算seacrhs*/
		var searchs = this.props.searchs;

		if (searchs.length == 0) {
			var search_display = {
				display: 'none'
			};
		} else {
			var search_display = {};
		}

		var seas = searchs.map((name,index) => {
			switch (name.type) {
				case 'text':
					var sea = <section className="col-md-3 col-sm-3 col-xs-3" key={index}><div className="row"><div className="col-md-4 col-sm-4 col-xs-4" style={{textAlign:'right'}}>
                			<label>{name.desc}:</label>
            			</div>
            			<div className="col-md-8 col-sm-8 col-xs-8">
            				<input type="search" name={name.name} className="form-control input-sm" placeholder={name.placeholder} aria-controls="datatable" />
            			</div></div></section>;
            		return sea;
					break;
				case 'select':
					if (!name.url) {
						var ok = [];
						var ov = [];
						for (var j in name.option) {
							ok[ok.length] = j;
							ov[ov.length] = name.option[j];
						}
						var ops = ov.map((q,p) => {
							return <option key={ok[p]} value={ok[p]}>{q}</option>;
						});
						var sea = <section className="col-md-3 col-sm-3 col-xs-3" key={index}><div className="row"><div className="col-md-4 col-sm-4 col-xs-4" style={{textAlign:'right'}}><label>{name.desc}:</label></div>
							<div className="col-md-8 col-sm-8 col-xs-8"><select name={name.name} aria-controls="datatable" className="form-control input-sm">{ops}</select>
							</div></div>
						</section>;
					}
					return sea;
					break;
			}
		});
		

		return	<div className="row">
                <div className="col-md-12">
                    <div className="panel panel-default">
                        <div className="panel-heading">
                            <h3 className="panel-title">{this.props.htitle}</h3>
                        </div>
                        <div className="panel-body">
                            <div className="row">
                            	<div className="col-md-12 col-sm-12 col-xs-12">
                            		<div className="row tableSearchDiv" style={{marginBottom:'10px'}}>
                            			{seas}
                            			<section className="col-md-3 col-sm-3 col-xs-3" style={search_display}><div className="row">
	                            			<div className="col-md-12 col-sm-12 col-xs-12" style={{textAlign:'center'}}>
	                            				<button className="btn btn-primary w-md" onClick={this._handleSearch.bind(this)}>查找</button>
	                            			</div></div>
                            			</section>
                            		</div>
                            	</div>
                                <div className="col-md-12 col-sm-12 col-xs-12">
                                    <div className="table-responsive">
                                        <table className="table table-striped table-bordered">
                                            <thead>
                                                <Thtr headers={this.props.headers} />
                                            </thead>
                                            <tbody>
                                                <Tbtr result={this.state.result} indexs={this.props.indexs} operates={this.props.operates}/>
                                            </tbody>
                                            
                                        </table>
                                        <div className="col-md-12">
                                        	<div className="row">	
	                                        	<div className="col-md-5">
	                                        		<div className="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing {start} to {end} of {total} entries,共{page_total}页
	                                        		</div>
	                                        	</div>
	                                    		<div className="col-md-7">
	                                    			<div className="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
	                                    				<ul className="pagination">
	                                    					<li className={last_page_status} aria-controls="datatable" id="datatable_previous" onClick={this._handleClick.bind(this)}><a url={last_page_url} href="javascript:void(0);">Previous</a>
	                                    					</li>
	                                    					{lis}
	                                    					<li className={next_page_status} aria-controls="datatable" id="datatable_next" onClick={this._handleClick.bind(this)}>
	                                    						<a url={next_page_url} href="javascript:void(0);">Next</a>
	                                    					</li>
	                                    					<li>
	                                    						<input type="number" min="1" max={max} aria-controls="datata" style={{width:'64.8px',height:'34px',marginLeft:'5px'}}/>
	                                    					</li>
	                                    					<li>
	                                    						<input type="button" className="btn btn-success" aria-controls="datata" style={{width:'54.8px',height:'34px','marginTop':'-2px'}} value="跳转" onClick={this._redirectClick.bind(this)}/>
	                                    					</li>
	                                    				</ul>
	                                    			</div>
	                                    		</div>
	                                    	</div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	}
}

export default Bodytable;
