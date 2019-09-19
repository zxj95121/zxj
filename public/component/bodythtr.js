import React from 'react';

class Thtr extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			hasOperate: 0
		}
	}
	componentDidMount() {
		/*组件渲染完成时触发*/
		this.setState({
			hasOperate: 1
		});
	}
	render() {
		var headsArr = this.props.headers;
		var operates = this.props.operates;

		if(operates != {} && this.state.hasOperate == 0) {
			headsArr[headsArr.length] = '操作';
		}
		return <tr>
			{
				headsArr.map((name,index) => {
					return <th key={index}>{name}</th>
				})
			}
		</tr>
	}
}

export default Thtr;