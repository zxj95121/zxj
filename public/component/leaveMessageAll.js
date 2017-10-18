import React from 'react';
import ReactDOM from 'react-dom';
import Bodytable from './bodytable.js';

var headers = new Array('ID', '姓名', '时间', 'QQ', '电话');
var indexs = new Array('id', 'name', 'created_at', 'qq', 'tel');
var htitle = '所有留言';
var operates = {
		'select': '查看详情',
		'delete': '删除'
	};
var searchs = [
		{
			'type': 'text',
			'desc': '姓名',
			'name': 'name',
			'placeholder': '根据姓名搜索'
		},
		{
			'type': 'text',
			'desc': '电话',
			'name': 'tel',
			'placeholder': '根据电话搜索'
		},
		{
			'type': 'text',
			'desc': 'QQ',
			'name': 'qq',
			'placeholder': '根据QQ搜索'
		},
		// {
		// 	'type': 'select',
		// 	'url': '',
		// 	'desc': '数量',
		// 	'name': 'w.ells',
		// 	'option': {
		// 		'10': '10个',
		// 		'20': '20个',
		// 		'30': '30个'
		// 	}
		// }
	];


/*搜索条件带下一页的没有把搜索条件带进去*/
ReactDOM.render(
		<Bodytable searchs={searchs} token={token} param={param} htitle={htitle} result={result} headers={headers} indexs={indexs} operates={operates}/>,
		document.getElementById('bodytable')
	);