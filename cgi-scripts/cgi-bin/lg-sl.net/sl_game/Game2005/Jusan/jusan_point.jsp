








 




<!doctype html>
<html lang="ko">
<head>
 <title>LG사이언스랜드</title>
 <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no,target-densitydpi=medium-dpi"/>
 <meta http-equiv="X-UA-Compatible" content="IE=9; IE=10" />
<link rel="stylesheet" type="text/css" href="/css/common.css;jsessionid=08CF530F09EAB238184BE86571BE4F99" />
<link rel="stylesheet" type="text/css" href="/css/layout.css;jsessionid=08CF530F09EAB238184BE86571BE4F99" />

<link rel="stylesheet" type="text/css" href="/css/ui-lightness/jquery-ui-1.8.18.custom.css;jsessionid=08CF530F09EAB238184BE86571BE4F99"/>



<script type="text/javascript">var lgslHost = "http://lg-sl.net:80";</script>
<script type="text/javascript">var contextRoot = "";</script>
<script type="text/javascript">var contextUserId= "";</script>
<script type="text/javascript" src="/js/jquery-1.7.2.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery-ui-1.8.18.custom.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.ui.datepicker-ko.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.validate.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/additional-methods.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.livequery.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.zclip.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.blockUI.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.json-2.2.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.PrintArea.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.tmpl.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/json.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.placeholder.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.flip.min.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/jquery.cookie.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/common_ui.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script type="text/javascript" src="/js/common.js;jsessionid=08CF530F09EAB238184BE86571BE4F99"></script>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>

 
</head> 
<body> 
<script type="text/javascript">

$(document).ready(function() {

	var a = '';

	var d = new Date(a);
	var today = new Date();
	var c = (today - d)/(1000*60*60*24);


	var keywordText1 = '단백질';

	$('#searchText').focusin(function(){ if(keywordText1==$(this).val()) $(this).val(""); });

	$('#teacherMain').click(function(){
		var autTcode = $('#userPermission1').val();
		var memScode = '';
		if(memScode == 'TEA' || autTcode == 'ADM' || autTcode == 'SVC' || autTcode == 'CON' ){
			$('#teacherForm').submit();
		}else{
			alert("선생님들만을 위한 공간입니다.");
			return false;
		}
	});

	$("#autonomySearchForm").validate({
		rules : {
			searchText : {required :  function(){
				var replaceStr = /[~!@#$%<>^&*\()\-=+_\']/gi;
				var str = $('#searchText').val();
				str = str.replace(replaceStr, "");
				$('#searchText').val(str);
			}}
		},
		messages : {
			searchText : {
				required : "검색어를 입력해주세요!"
			}
		},
		onkeyup:false,
		onclick:false,
		onfocusout:false,
		showErrors: function(errorMap, errorList) {
			if( errorList !='' )
			{
				$(errorList[0].element).focus();
				alert( errorList[0].message);
			}
		},
		submitHandler : function(form) {
			form.submit();
		}
	}); 

	$("#autonomySearchButton").click(function() {
		//웹로그
		try{ _trk_clickTrace( 'EVT', '/통합검색' ); }catch(_e){ }
		$("#autonomySearchForm").trigger("submit");
	});

	
	var cache = {};//,lastXhr;
		$( "#searchText" ).autocomplete({
			minLength: 1,
			select: function( event, ui ) {
				$('#searchText').val(this.value);
				$('#autonomySearchForm').submit();
			},
			source: function( request, response ) {
				var term = request.term;
				if ( term in cache ) {
					response( cache[ term ] );
					return;
				}
				var url = contextRoot+'/ajax/autonomy/keywordauto/keywordAutoList.mvc';
				$.ajax({
					type: 'post',
					url: url,
					data: {'inputText':$( "#searchText" ).val()},
					beforeSend: function(xhrObj){
						 xhrObj.setRequestHeader("targetPage","ajax");
					}
				 })
				.success(function(data, status, xhr) {
					cache[ term ] = data;
					//alert(data);
					//if ( xhr === lastXhr ) {
						response( data );
					//}
				});
			}
		});
});

//검색어 자동완성
fnHeaderTextInput = function(){
	var text = $('#searchText').val();

	if(text=="") return;

	var url = contextRoot+'/ajax/autonomy/keywordauto/keywordAutoList.mvc';
	$.ajax({
		type: 'post',
		url: url,
		data: {'inputText':text},
		beforeSend: function(xhrObj){
			 xhrObj.setRequestHeader("targetPage","ajax");
		}
	 })
	.success(function(keywordAutoList) {
		var availableTag = keywordAutoList;
		$( "#searchText" ).autocomplete({
			source: availableTag
		});
	});
};


</script>


				
	    
<div class="error_pc">
	<div class="error_con">
		<p><img src="/images/etc/error_pc.jpg;jsessionid=08CF530F09EAB238184BE86571BE4F99" alt="죄송합니다 페이지를 찾을 수 없습니다" /></p>
		<div class="btn">
			<a href="/home.mvc;jsessionid=08CF530F09EAB238184BE86571BE4F99"><img src="/images/etc/etc_btn_gomain.gif;jsessionid=08CF530F09EAB238184BE86571BE4F99" alt="메인으로" /></a>
			<a href="javascript:history.back();"><img src="/images/etc/etc_btn_goprev.gif;jsessionid=08CF530F09EAB238184BE86571BE4F99" alt="이전 페이지로" /></a>
		</div>
	</div>
        
	<form id="autonomySearchForm" method="post" action="/product/autonomy/autonomyHomeSubmit.mvc;jsessionid=08CF530F09EAB238184BE86571BE4F99">
		<div class="topsearch_error">
			<p class="error_txt"><img src="/images/etc/error_txt.gif;jsessionid=08CF530F09EAB238184BE86571BE4F99" alt="LG사이언스랜드에서 찾으시는 정보가 있으시면 관련 단어로 빠르게 검색해 보세요!" /></p>
			<div class="search_con">				
				<select id="headerSearchMenu" name="searchMenu" title="" style="width:120px;" class="s_select">
				
					<option value="A00" >전체</option>
				
					<option value="A01" >정보찾기</option>
				
					<option value="A02" >척척박사연구소</option>
				
					<option value="A03" >창의탐험대</option>
				
					<option value="A04" >과학송</option>
				
					<option value="A05" >과학아!놀자</option>
				
					<option value="A06" >기타</option>
				
				</select>
				<input name="searchText" id="searchText" value="단백질" type="text"  class="t_text" />
				<a href="javascript:;" class="search_btn" id="autonomySearchButton"><img src="/images/common/search_btn.gif;jsessionid=08CF530F09EAB238184BE86571BE4F99" alt="" /></a>
			</div>
		</div><!-- End Tag : (class) topsearch -->
	</form>        
</div>

				



</body>
</html>



