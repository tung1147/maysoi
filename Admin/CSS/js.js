/*function table_css(id)
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
*/
function chuyen_trang (a){
	var link="?thamso=quan_ly_san_pham&id="+a;
	window.location = link;
}

function menu_ngang_quan_tri()
{
	var lid_mnn=document.getElementById("menu_ngang");
	var li_mnn=lid_mnn.getElementsByTagName("li");
	for(i=0;i<li_mnn.length;i++)
	{
		li_mnn[i].onmouseover=function()
		{
			var ul=this.getElementsByTagName("ul");
			if(ul.length!=0)
			{
				ul[0].style.display="block";
				var li_a_pol=ul[0].getElementsByTagName("li");
				//alert(ul.length);
				for(r=0;r<li_a_pol.length;r++)
				{
					//alert(r);
					var ul_1=li_a_pol[r].getElementsByTagName("ul");
					if(ul_1.length!=0)
					{
						//alert("vao day");
						var li_a_pol_1=li_a_pol[r].getElementsByTagName("a")[0];
						var hhh=li_a_pol_1.innerHTML.replace("2,1.gif","5,1.gif");
						//alert(hhh);
						li_a_pol_1.innerHTML=hhh;
					}
				}
			}

		}
		li_mnn[i].onmouseout=function()
		{
			var ul=this.getElementsByTagName("ul");
			if(ul.length!=0)
			{

				ul[0].style.display="none";
			}
		}
		var ul_pol=li_mnn[i].getElementsByTagName("ul");
		if(ul_pol.length!=0) // co menu con
		{
			var li_a_pol_1=li_mnn[i].getElementsByTagName("a")[0];
			var li_a_pol_1__innerHTML=li_a_pol_1.innerHTML;
			//alert(li_a_pol_1__innerHTML);
			//var b_mnn_abc=getStyle_abc(li_mnn[i],"clear");
			var b_mnn_abc=li_mnn[i].style.clear;
			li_a_pol_1.innerHTML=li_a_pol_1__innerHTML + "<img src='../image/Giaodien/2,1.gif' border='0' class='img_mnn_tx'>";
		}

	}
}
function fix_mnn_qt_ie6()
{
	var ul_mnn_bcd=document.getElementById("menu_ngang");
	ul_mnn_bcd.onmouseover=function()
	{
		//alert("chao");
		var tag_select=document.getElementsByTagName("select");
		for(i=0;i<tag_select.length;i++)
		{
			tag_select[i].style.visibility="hidden";
		}
	}
	ul_mnn_bcd.onmouseout=function()
	{
		//alert("chao");
		var tag_select=document.getElementsByTagName("select");
		for(i=0;i<tag_select.length;i++)
		{
			tag_select[i].style.visibility="visible";
		}
	}
}