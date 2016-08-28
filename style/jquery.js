

$(document).ready(function(){
	
	var h = window.innerHeight; /*i use it on resize font part*/
	var w = window.innerWidth;
	/*x = document.getElementById("log");
	x.innerHTML=" Heigth: " + h;*/

	$(window).resize(function() {

		/*

		//REFERENSI begin
		var mysheet=document.styleSheets[0]
		var myrules=mysheet.cssRules? mysheet.cssRules: mysheet.rules
		mysheet.crossdelete=mysheet.deleteRule? mysheet.deleteRule : mysheet.removeRule
		for (i=0; i<myrules.length; i++){
		if(myrules[i].selectorText.toLowerCase().indexOf("#test")!=-1){
		mysheet.crossdelete(i)
		i-- //decrement i by 1, since deleting a rule collapses the array by 1
		}
		}
		
		var mysheet=document.styleSheets[0]
		var firstrule=mysheet.cssRules? mysheet.cssRules[1]: mysheet.rules[1]
		if (firstrule.style.color=="white")
		firstrule.style.color="red"
		//REFERENSI END
		*/
		/*resize font begin*/
		var mysheet=document.styleSheets[0]
		var myrules=mysheet.cssRules? mysheet.cssRules: mysheet.rules
		mysheet.crossdelete=mysheet.deleteRule? mysheet.deleteRule : mysheet.removeRule
		for (i=0; i<myrules.length; i++){
			if (myrules[i].style.fontSize){  /*untuk font*/
				myrules[i].style.fontSize=((window.innerHeight/h)*(myrules[i].style.fontSize.substr(0,(myrules[i].style.fontSize.length-2))))+"px";
			}
			if(myrules[i].style.width.substr((myrules[i].style.width.length-2))=="px"){
				myrules[i].style.width=((window.innerWidth/w)*(myrules[i].style.width.substr(0,(myrules[i].style.width.length-2))))+"px";	
			}
			if(myrules[i].style.height.substr((myrules[i].style.height.length-2))=="px"){
				myrules[i].style.height=((window.innerHeight/h)*(myrules[i].style.height.substr(0,(myrules[i].style.height.length-2))))+"px";
			}

		}
			//alert(myrules[1].style.width);
			//alert(myrules[1].style.height);
			/*
		for (i=0; i<2; i++){
			myrules[i].style.width=((window.innerWidth/w)*(myrules[i].style.width.substr(0,(myrules[i].style.width.length-2))))+"px";
			myrules[i].style.height=((window.innerHeight/h)*(myrules[i].style.height.substr(0,(myrules[i].style.height.length-2))))+"px";
		}*/
		h = window.innerHeight;
		w = window.innerWidth;
		/*Resize font end */
	});
	
	$("button").hover(function(){
		$(this).css("color","#000");
	},function(){
		$(this).css("color","#fff");
	})


	/*menu Start*/
	$("#menu ul:first > li .pop").hide();
	$("#menu a:link").css("color","#000");
	$(".pop a:link").css("color","#fff");
	$("#menu ul:first > li").hover(function(){
		$(this).css("background-color","#fe8101");
		$(this).css("color","#fff");
		$(this).children(".pop").css("display","inline-block");
	    $(this).children().children('a').css("color","#fff");

		$(this).children(".pop").children("li").hover(function(){
			$(this).children().css("color","#000");
			
		},function(){
			$(this).children().css("color","#fff");
		});

		

	},function(){	
	$(this).children(".pop").hide();
	$(this).children().children('a').css("color","#000");
		$(this).css("background-color","#fff");
		$(this).css("color","#000");
		$(this).children(".pop").children('a').css("background-color","#fff");
		$(this).children(".pop").children('a').css("color","#000");	

	});
	/*
		$('.parent').focusin(function(){log('div focusin');})
   		$('.parent').focusout(function(){log('div focusout');})
	 	$('.parent') .focus(function(){log('div focus');})
	 	$('.parent').blur(function(){log('div blur');});
		$('input').focusin(function(){log('input focusin');})
	    $('input').focusout(function(){log('input focusout');})
	    $('input').focus(function(){log('input focus');})
	    $('input').blur(function(){log('input blur');});

		function log(str){
		  $('.log').append($('<div/>').text(str));
		}*/


			// if(document.location.pathname.match(/[^\/]+$/)[0]=="fasilitas.php")

		/*
			$("#menu ul:first > li").click(function(){
				$(this).href=$(this).children('p')[0].innerHTML+".php";
			})

		*/

	/*menu end*/
	$("#isiTab div").hide(); // Initially hide all content
	$("#tabs li:first").attr("id","current"); // Activate first tab
	$("#isiTab div:first").fadeIn(); // Show first tab content
	$('#tabs a').click(function(e) {
		e.preventDefault();
		if ($(this).closest("li").attr("id") == "current"){ //detection for current tab
			return       
		}
		else{             
			$("#isiTab div").hide(); //Hide all content
			$("#tabs li").attr("id",""); //Reset id's
			$(this).parent().attr("id","current"); // Activate this
			$('#' + $(this).attr('name')).fadeIn(); // Show content for current tab
			//document.getElementById("data").innerHTML="";
			//document.getElementById("selectedPlaceToForm").innerHTML=document.getElementById("current").getElementsByTagName("a")[0].innerHTML;
		}
	}); 




	$(".cursor").hover(function(){
		$(this).css("background-color","#000");
	},function(){
		$(this).css("background-color","#fe8101");
	})
	
	var tamp,node=0;
	/*	$("#pnhKiri").click(function(){
			tamp=document.getElementById("current");
			check = tamp.previousSibling;
			$("#isiTab div").hide(); //Hide all content
			$("#current").attr("id",""); //Reset id's
			var i = 0;
			while( check != null ) {
			//alert(i);
			check = check.previousSibling;
			  i++;	
			}
			//alert(i);
			if(i==0)
			tamp=tamp.parentNode.lastChild;
			else
			tamp=tamp.previousSibling;
			tamp.setAttribute("id","current");// Activate this
			$('#' + $("#current").children().attr('name')).fadeIn(); // Show content for current tab
			node--;			
		})
	*/
	$("#pnhKiri").click(function(){
		tamp=document.getElementById("current");
		$("#isiTab div").hide(); //Hide all content
		$("#current").attr("id",""); //Reset id's
		//alert(i);
		if(tamp.previousSibling==null)
		tamp=tamp.parentNode.lastChild;
		else
		tamp=tamp.previousSibling;
		tamp.setAttribute("id","current");// Activate this
		$('#' + $("#current").children().attr('name')).fadeIn(); // Show content for current tab


		while(tamp.previousSibling!=null){
		node++;
		tamp=tamp.previousSibling;
		}

		if(node%3==2){
			for(var i=0;i<document.getElementById("tabs").childNodes.length;i++){
				document.getElementById("tabs").childNodes[i].style.cssText="display:none;";
			}

			for(var i=node-2;i<=node;i++){
				document.getElementById("tabs").childNodes[i].style.cssText="display: inline-block ;";
			}
		}		
			node=0;
	})

	$("#pnhKanan").click(function(){
		tamp=document.getElementById("current");
		$("#isiTab div").hide(); //Hide all content
		$("#current").attr("id",""); //Reset id's
		//alert(i);
		if(tamp.nextSibling==null)
		tamp=tamp.parentNode.firstChild;
		else
		tamp=tamp.nextSibling;
		tamp.setAttribute("id","current");// Activate this
		$('#' + $("#current").children().attr('name')).fadeIn(); // Show content for current tab


		while(tamp.previousSibling!=null){
		node++;
		tamp=tamp.previousSibling;
		}

		if(node%3==0){
			for(var i=0;i<document.getElementById("tabs").childNodes.length;i++){
				document.getElementById("tabs").childNodes[i].style.cssText="display:none;";
			}

			for(var i=node;i<node+3;i++){
				document.getElementById("tabs").childNodes[i].style.cssText="display: inline-block ;";
			}
		}		
			node=0;
	})


		tamp=document.getElementById("current");
		while(tamp.previousSibling!=null){
			node++;
			tamp=tamp.previousSibling;
		}
		for(var i=0;i<document.getElementById("tabs").childNodes.length;i++){
			document.getElementById("tabs").childNodes[i].style.cssText="display:none;";
		}

		for(var i=node;i<node+3;i++){
			document.getElementById("tabs").childNodes[i].style.cssText="display: ;";
		}
		node=0;





	function Calendar(id, year, month) { 
	  	var elem = document.getElementById(id);
	  	var dNow = new Date();
	  	var d = new Date();
	  	d.setMonth(month);
	  	d.setYear(year+1900);
	  	d.setDate(1);
	  	// alert(d);
	  	//  alert(d);
	  	//alert(d.getDay());
	  	var tbody = []


	 	// (2) fill first row 
	 	//  0  1  2  3  4  5  6
	 	// 29 30 31| 1  2  3  4  

	  	var conter=0;
	  	if(d.getDay()==0)
	  	d.setDate(d.getDate()-7)
	  	else   d.setDate(d.getDate()-d.getDay())
	  	while(d.getMonth() != month) {
		  	tbody.push('<div class="prevCalendar" style="background-color:#fff;color:#gray;">'+d.getDate()+'</div>');

	    	if (d.getDay() % 7 == 6) {   // (4)
	      	tbody.push('<br/>')
	    	}
	    
	    	d.setDate(d.getDate()+1)  
	    	conter++;
	  	}
	  	// main body (3)
	  	while(d.getMonth() == month) {
		
	    if(d.getDate()==dNow.getDate()&&d.getMonth()==dNow.getMonth()&&d.getYear()==dNow.getYear())
	    	tbody.push('<div id="selectedDate" class="currentCalendar" style="background-color:gray;;color:#000;">'+d.getDate()+'</div>')
	    else
	    	tbody.push('<div class="currentCalendar" style="background-color:#fff;color:#000;">'+d.getDate()+'</div>')
	


	    if (d.getDay() % 7 == 6) {   // (4)
	      tbody.push('<br/>');
	    }
	    
	    d.setDate(d.getDate()+1);
	    conter++;
	  }


		//var dateNext=(d.getDay()*-1)+7;
	  	while(conter<42){
	  		tbody.push('<div class="nextCalendar" style="background-color:#fff;color:#gray;">'+d.getDate()+'</div>');

	    	if (d.getDay() % 7 == 6) {   // (4)
	      	tbody.push('<br/>')
	    	}
	    
	    	d.setDate(d.getDate()+1) 
	    	conter++; 
	  	}

	  	// (5) tbody tail

	  	elem.innerHTML = tbody.join('\n')
		$("#tbody div").hover(function(){
			$(this).click(function(){
				$("#selectedDate").css("background-color","#fff");
				$("#selectedDate").attr("id",""); //Reset id's
				$(this).css("background-color","gray");
				$(this).attr("id","selectedDate"); 
				document.getElementById("tanggal").innerHTML=document.getElementById("selectedDate").innerHTML+" "+document.getElementById("month").innerHTML+" "+document.getElementById("year").innerHTML;
				var file, n;

				file = window.location.search;
				n = file.lastIndexOf('=');
				if (n >= 0) {
				    file = file.substring(n + 1);
				}

				showJadwal(document.getElementById("year").innerHTML+"-"+document.getElementById("currentMonth").getAttribute("name")+"-"+document.getElementById("selectedDate").innerHTML,document.getElementById("current").childNodes[0].innerHTML,file)
			})

			tampBackWarna= $(this).css("background-color");
			tampFontWarna= $(this).css("color");
			$(this).css("background-color","#fe8101");
			$(this).css("color","#fff");

		

		},function(){
			$(this).css("background-color",tampBackWarna);
			$(this).css("color",tampFontWarna);
		})
	}

	var date=new Date();
	Calendar("tbody",date.getYear(),date.getMonth());


	$("#month li").css("display","none");

	//alert(date.getMonth())
	//$("#"+ (date.getMonth()+1).toString()).css("display","inline-block");
	document.getElementById("month").childNodes[(date.getMonth())*2+1].style.display="inline-block";
	document.getElementById("month").childNodes[(date.getMonth())*2+1].setAttribute("id","currentMonth");
	document.getElementById("year").innerHTML=date.getYear()+1900;
	document.getElementById("tanggal").innerHTML=document.getElementById("selectedDate").innerHTML+" "+document.getElementById("month").innerHTML+" "+document.getElementById("year").innerHTML;

	$(".dateCursor").hover(function(){
		$(this).css("background-color","#000");
	},function(){
		$(this).css("background-color","#fff");
	})
	
	var conter=0;
	var tamps;
	$("#pnhKiriDate").click(function(e){
		date.setMonth(date.getMonth()-1);
		$("#currentMonth").css("display","none");
		$("#currentMonth").attr("id",""); //Reset id's
		document.getElementById("month").childNodes[(date.getMonth())*2+1].style.display="inline-block";
		document.getElementById("month").childNodes[(date.getMonth())*2+1].setAttribute("id","currentMonth");
		document.getElementById("year").innerHTML=date.getYear()+1900;
		//alert(date);

		Calendar("tbody",date.getYear(),date.getMonth());	
	})

	$("#pnhKananDate").click(function(e){
		date.setMonth(date.getMonth()+1);
		$("#currentMonth").css("display","none");
		$("#currentMonth").attr("id",""); //Reset id's
		document.getElementById("month").childNodes[(date.getMonth())*2+1].style.display="inline-block";
		document.getElementById("month").childNodes[(date.getMonth())*2+1].setAttribute("id","currentMonth");
		document.getElementById("year").innerHTML=date.getYear()+1900;
		//alert(date);

		Calendar("tbody",date.getYear(),date.getMonth());
	})

	var tampBackWarna,tampFontWarna;



	function showJadwal(str1,str2,str3)
	{
	var xmlhttp;
	if (str1.length==0&&str2.length==0)
	  { 
	  document.getElementById("jadwalIsi").innerHTML="";
	  return;
	  }
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
	    document.getElementById("jadwalIsi").innerHTML=xmlhttp.responseText;
	   // alert(document.getElementById("jadwalIsi").innerHTML);
	    }
	  }
	xmlhttp.open("GET","jadwalIsi.php?tanggal="+str1+"&fasilitas="+str2+"&jenis="+str3,true);
	xmlhttp.send();
	}

	$("#pinjamButton").click(function(){
		$("#mid").hide();
		$("#formPinjam").show()

		showFormPinjam(current.childNodes[0].innerHTML,selectedDate.innerHTML,document.getElementById("currentMonth").getAttribute("name"),year.innerHTML,document.getElementById("pinjamButton").getAttribute("name"));
	})

	function showFormPinjam(str1,str2,str3,str4,str5)
	{
		//alert(str1+str2+str3+str4);
	var xmlhttp;
	if (str1.length==0&&str2.length==0)
	  { 
	  document.getElementById("formPinjam").innerHTML="";
	  return;
	  }
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
	    document.getElementById("formPinjam").innerHTML=xmlhttp.responseText;

	    }
	  }
	xmlhttp.open("GET","formFasilitas.php?tempat="+str1+"&tanggal="+str2+"&bulan="+str3+"&tahun="+str4+"&tipe="+str5,true);
	xmlhttp.send();
	//return true;
	}



});