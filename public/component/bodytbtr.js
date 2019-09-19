import React from 'react';

class Tbtr extends React.Component {
	render() {
		var resultArr = eval('('+this.props.result+')');
		var indexs = this.props.indexs;
		var operates = this.props.operates;
		// console.log(resultArr.data);
		var res = [];
		resultArr.data.forEach(function(name){
			var i = res.length;
			res[i] = new Array();
			for (var j in name) {
				res[i][j] = name[j];
			}
		})

		var trs = res.map((name,index) => {
					// name = window.JSON.stringify(resultArr.data[index]);
					var key = new Array();
					var value = new Array();
					for (var i in name) {
						key[key.length] = i;
						value[value.length] = name[i];
					}

					var tds = value.map((v,k) => {
								var flag = false;
								for (var j in indexs) {
									if (indexs[j] == key[k]) {
										flag = true;
										break;
									}
								}
								if (flag)
									return <td key={key[k]}>{v}</td>
							});

					var tdos = [];
					if(operates != {}) {
						var okey = [];
						var ovalue = [];
						for (var i in operates) {
							okey[okey.length] = i;
							ovalue[ovalue.length] = operates[i];
						}

						tdos = ovalue.map((v,k) => {
								return <button className="btn btn-info btn-sm" key={okey[k]} data-target={okey[k]} data-toggle="modal">{v}</button> 
							});
					}
					
					if (tdos)
						tdos = <td>{tdos}</td>;

					return <tr key={index} data-id={name['rec_id']}>
						{tds}
						{tdos}
					</tr>
				})
		return trs
	}
}

export default Tbtr;