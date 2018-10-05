function countdown_load99(){

	var the_event="IF";
	var on_event="O Invasão já começou!"; //Mensagem no dia do evento
	var event="Primeiro dia do mês"; //Nome do evento
	var yr = 2018;
	var mo=11;
	var da=17;
	var hr=14;
	var min=0;
	var sec=0;
	var month=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	var bottom_event="";var now_d=new Date();
	var now_year=now_d.getYear();
	if (now_year < 1000)now_year+=1900;
	var now_month=now_d.getMonth();
	var now_day=now_d.getDate();
	var now_hour=now_d.getHours();
	var now_min=now_d.getMinutes();
	var now_sec=now_d.getSeconds();
	var now_val=month[now_month]+" "+now_day+", "+now_year+" "+now_hour+":"+now_min+":"+now_sec;

	event_val=month[mo-1]+" "+da+", "+yr+" "+hr+":"+min+":"+sec;

	difference=Date.parse(event_val)-Date.parse(now_val);

	differenceday=Math.floor(difference/(60*60*1000*24)*1);
	
	differencehour=Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1);

	differencemin=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);

	differencesec=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);

		if(document.getElementById('contagem-regressiva')){
			if(differenceday <= 0 && differencehour <= 0 && differencemin <= 0 
				&& differencesec <=  1 && now_day == da){
					var contagem = document.getElementById('contagem');
					contagem.innerHTML =  on_event ;
				}
				else if (differenceday <= -1){
					var contagem = document.getElementById('contagem')
					contagem.innerHTML = "Foi Fantástico!";
				}
					else {

					var dias = document.getElementById('dias');
						dias.innerHTML = differenceday;

					var horas = document.getElementById('horas');
						horas.innerHTML = "| " + differencehour;

					var minutos = document.getElementById('minutos');
						minutos.innerHTML = "| " + differencemin;

					var segundos = document.getElementById('segundos');
						segundos.innerHTML = "| " + differencesec;	 	 
				}
}
	setTimeout("countdown_load99()",1000);}
	countdown_load99();
