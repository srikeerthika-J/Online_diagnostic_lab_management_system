
//$("#btn_result").hide();
var result_Btn = document.getElementById("btn_result")
	result_Btn.style.display = "none";
var arr = ["option1Value","option2Value","option3Value","option4Value"];
var allQustions = [];
var qNum = 0;
var answers = ['0'];

function singleCheck(current){	
			for(var j in arr){
				if(current.id != ""+arr[j]+""){
					var options =document.getElementById(""+arr[j]+"").checked=false;
				}
			}
}


var submitBtn=document.getElementById("btn_submit");
submitBtn.onclick = function(){
	var answer='';
				for(var i in arr){
					var options =document.getElementById(""+arr[i]+"");
				  if(options.checked){
				   answer = options.value;
				   break;
				}
			}

			if(answer !=''){
				answers.push(answer);
			}else{
				answers.push("0");
			}
			if(qNum == 5){
				result_Btn.style.display = "";
				this.style.display = "none";
			}else{
				setQuestion(qNum)
				console.log(answers);
			}
}
 
 
 var correctAnswer=0;
 var resultBtn=document.getElementById("btn_result");
 resultBtn.onclick = function(){
	for(var n in allQustions) {
		var keys = Object.keys(allQustions);
		if(allQustions[n].answer == answers[n]){
			correctAnswer ++;
		}
	}
	console.log("Your correct Ans:"+correctAnswer);
	window.location.href = "result.php?res="+correctAnswer;
 }
 startTest();
 function startTest(){
	var url = window.location.search.substring(1);
	var url = window.location.search.substring(1);
	var data = url.split('&');
	var userName = data[0].split('=')[1];
	var newname=userName.replace(/%20/g, " ");
	var qsetval = data[1].split('=')[1];
	var macId = data[2].split('=')[1];
	getQuestions(userName,qsetval,macId);
}

 function getQuestions(userName,queSet,macid){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onload = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == '200'){
			result = JSON.parse(xmlhttp.responseText);
			setQuestions(result);
		}
	}
	xmlhttp.open("GET","includes/getQuestions.php?name="+userName+"&qset="+queSet+"&macId="+macid,true);
	xmlhttp.send();
	}	
	
function getResults(userName,queSet){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onload = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == '200'){
			results = JSON.parse(xmlhttp.responseText);
			setResults(results);
		}
	}
	xmlhttp.open("GET","includes/getResults.php",true);
	xmlhttp.send();
	}	


function setToTable(dataArray){
	 var res=JSON.stringify(dataArray);
var xmlhttp = new XMLHttpRequest();
	xmlhttp.onload = function(){
		if(xmlhttp.readyState == 4 && xmlhttp.status == '200'){
			result = xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","includes/myFrame.php",true);
	var parameters="array="+res;
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xmlhttp.send(parameters);
}
function setQuestions(questions){
	allQustions = questions;
	setQuestion(qNum);
}
function setQuestion(questionNum){
var keys = Object.keys(allQustions);
    var macCheck = allQustions['result'];
	if(macCheck){
    var allData = allQustions[keys[""+questionNum+""]];
	var quesNum = document.getElementById("qusNum");
		quesNum.innerHTML = questionNum+1;
	var question = document.getElementById("question");
		question.innerHTML = allData.question_name
	var option1 = document.getElementById("option1");
		option1.childNodes[1].data=allData.option1;
	var option2 = document.getElementById("option2");
		option2.childNodes[1].data=allData.option2;
	var option3 = document.getElementById("option3");
		option3.childNodes[1].data=allData.option3;
	var option4 = document.getElementById("option4");
		option4.childNodes[1].data=allData.option4;
	clearTick();
	qNum++;
	}else{
		window.location.href = "notValidUser.php";
	}
	
}

function clearTick(current){	
			for(var j in arr){
					var options =document.getElementById(""+arr[j]+"").checked=false;
				}
			
}
	
 


