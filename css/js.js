function dan_san_pham__abc()
{
	var id=document.getElementById("dan_san_pham_abc");
	var div=id.getElementsByTagName("div");
	var ssp_td=3;
	var cao=0;
	var a=ssp_td-1;
	for(i=0;i<div.length;i++)
	{
		var cao_1=div[i].offsetHeight;
		//alert(cao_1);
		if(cao_1>cao){cao=cao_1;}
		if(i==a)
		{
			a=a+ssp_td;
			for(j=i-ssp_td+1;j<=i;j++)
			{
				div[j].style.height=cao+"px";
			}
			cao=0;
		}
	}
}
function table_css(id)
{
	//alert("vao day");
	//alert(id);
	var lay_id=document.getElementById(id);
	lay_id.className="table__abc";
	//alert(lay_id);
	var cac_tr=lay_id.getElementsByTagName("tr");
	for(j=0;j<cac_tr.length;j++)
	{
		cac_tr[j].onmouseover=function()
		{
			this.id="table__abc___tr_td_hover";
			var cac_td=this.getElementsByTagName("td");
			for(k=0;k<cac_td.length;k++)
			{
				//cac_td[k].style.background="black";
				cac_td[k].id="table__abc___tr_td_hover";
			}
		}
		cac_tr[j].onmouseout=function()
		{
			this.id="table__abc___tr_td";
			var cac_td=this.getElementsByTagName("td");
			for(k=0;k<cac_td.length;k++)
			{
				cac_td[k].id="table__abc___tr_td";
			}
		}
	}
}
function table_css_1(id)
{
	//alert("vao day");
	//alert(id);
	var lay_id=document.getElementById(id);
	lay_id.className="table__abc";
	//alert(lay_id);
	var cac_tr=lay_id.getElementsByTagName("tr");
	//alert(tr_dau[0]);
	var cac_td_dau=cac_tr[0].getElementsByTagName("td");
	//alert(cac_td_dau);
	for(i=0;i<cac_td_dau.length;i++)
	{
		//alert(cac_td_dau[i]);
		cac_td_dau[i].className="table__abc___tr_td__dau";
		//cac_td_dau[i].style.color="red";
	}

}
function table_css_2(id)
{
	var lay_id=document.getElementById(id);
	lay_id.className="table__abc";
	var cac_tr=lay_id.getElementsByTagName("tr");
	var cac_td_dau=cac_tr[0].getElementsByTagName("td");
	for(i=0;i<cac_td_dau.length;i++)
	{
		cac_td_dau[i].className="table__abc___tr_td__dau";
	}
	for(j=1;j<cac_tr.length;j++)
	{
		var cac_td=cac_tr[j].getElementsByTagName("td");
		cac_tr[j].onmouseover=function()
		{
			this.id="table__abc___tr_td_hover";
			var cac_td=this.getElementsByTagName("td");
			for(k=0;k<cac_td.length;k++)
			{
				//cac_td[k].style.background="black";
				cac_td[k].id="table__abc___tr_td_hover";
			}
		}
		cac_tr[j].onmouseout=function()
		{
			this.id="table__abc___tr_td";
			var cac_td=this.getElementsByTagName("td");
			for(k=0;k<cac_td.length;k++)
			{
				cac_td[k].id="table__abc___tr_td";
			}
		}
	}
}
function ajax_innerHTML(duong_dan,id)
{
	//alert("chao");
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById(id).innerHTML=xmlhttp.responseText;
		//doscript_ajax_innerHTML___1_1__dkl(xmlhttp.responseText);
		//eval(alert("chao"););
		}
	  }
	xmlhttp.open("GET",duong_dan);
	xmlhttp.send(null);
}
