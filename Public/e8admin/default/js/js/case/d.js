outPrint='\t<table id="showdlg_table" width="100%" border="0" cellspacing="0" cellpadding="0" style="table-layout:auto;';-1==EC_CS_BTHEME&&(outPrint+="height:145px;",outPrint=""!=EC_CS_BTHEME_CUS?outPrint+("background: url("+EC_CS_SERVER+EC_CS_BTHEME_CUS+"?rand="+(new Date).getTime()+");"):outPrint+("background: url("+EC_CS_SERVER+EC_THUME_FOLDER+"/fad/default/images/invite_bg.png) no-repeat 0 ;"));outPrint+='"><tr>';
outPrint+='\t\t\t<td colspan="2"  height="21"><a href="###" onclick="ec_cs_fnDialogCancle();return false;" id="ec_cs_dlgclose" class="shutbtn"></a><div class="title">'+(1==EC_CS_ENABLE_TITLE?""!=EC_CS_DIALOG_TITLE?EC_CS_DIALOG_TITLE:EC_CS_LANG_STR[EC_CS_LANG].dlgtitle:"&nbsp;")+"</div></td>";outPrint+="\t\t</tr>";outPrint+="\t\t<tr>";outPrint+='\t\t\t<td width="90" height="80">';outPrint+='\t\t\t\t<div class="tx_pic"';outPrint+='><img id="ec_cs_dlg_face" src="';
outPrint+=1==EC_CS_BOX_FACE?EC_CS_BOX_FACE_URL:EC_CS_SERVER+"images/invite_pic.jpg";outPrint+='" /></div>';outPrint+="\t\t\t</td>";outPrint+='\t\t\t<td class="inconbox">';outPrint+='\t\t\t\t<div class="intitle" id="ec_cs_dlg_inv" style="display:none"></div>';outPrint+='\t\t\t\t<p class="incontent" id="ec_cs_dlg_content">';outPrint+=1==EC_CS_ENABLE_CONTENT?""!=EC_CS_DIALOG_CONTENT?EC_CS_DIALOG_CONTENT:EC_CS_LANG_STR[EC_CS_LANG].dlgcontent:"";outPrint+="\t\t\t\t</p>";outPrint+="\t\t\t</td>";
outPrint+="\t\t</tr>";outPrint+="\t\t<tr>";outPrint+='\t\t\t<td colspan="2" class="toolbtn">';outPrint+='\t\t\t\t<a id="ec_cs_dlg_disagree" href="###" onclick="ec_cs_fnDialogCancle();return false;" class="cancelBtn"';outPrint+='style="color:#333;';if(-1!=EC_CS_BTHEME){EC_CS_BBTN_BG=EC_CS_BOXSTYLE;var box_btn_img=EC_CS_BBTN_BG+"/images/invite_btn.gif"}else box_btn_img=EC_THUME_FOLDER+"/custom/default/images/"+EC_CS_BBTN_IMAGE[EC_CS_BBTN_STYLE];
outPrint=-1!=EC_CS_BBTN_STYLE.indexOf("#")&&-1==EC_CS_BTHEME?outPrint+("background-color:"+EC_CS_BBTN_STYLE+';"'):outPrint+("background: url("+EC_CS_SERVER+box_btn_img+') no-repeat 0 0;"');outPrint+=">"+EC_CS_LANG_STR[EC_CS_LANG].cancel+"</a>";outPrint+='<a id="ec_cs_dlg_agree" href="###" onclick="ec_cs_fnDialogOK();return false;" class="acceptBtn" ';outPrint+='style="color:#333;';
outPrint=-1!=EC_CS_BBTN_STYLE.indexOf("#")&&-1==EC_CS_BTHEME?outPrint+("background-color:"+EC_CS_BBTN_STYLE+';"'):outPrint+("background: url("+EC_CS_SERVER+box_btn_img+') no-repeat 0 0;"');outPrint+=">"+EC_CS_LANG_STR[EC_CS_LANG].agree+"</a>";outPrint+='<a id="ec_cs_dlg_qq" href="###" onclick="ec_cs_fnDialogOK();return false;" class="acceptBtn" style="display:none;';outPrint+="color:#333;";
outPrint=-1!=EC_CS_BBTN_STYLE.indexOf("#")&&-1==EC_CS_BTHEME?outPrint+("background-color:"+EC_CS_BBTN_STYLE+";"):outPrint+("background: url("+EC_CS_SERVER+box_btn_img+") no-repeat 0 0;");outPrint+='">QQ</a>';outPrint+="\t\t\t</td>";outPrint+="\t\t</tr>";outPrint+="\t</table>";ec_loadCSS(EC_CS_SERVER+EC_CS_BOXSTYLE+"/layout_box.css");var l=(window.screen.width-315)/2,t=(window.screen.height-345)/2;1==EC_CS_DIALOG_POSITION&&(l=window.screen.width-315,t=window.screen.height-345);
ec_addDIV(EC_CS_DIALOG_ID,outPrint,t,1,l,"none");window.setTimeout(function(){0==EC_CS_CTRL&&(control(),gettrackinfo())},200);window.onbeforeunload=function(){"true"==!ec_getParameter("isTalk",document.cookie)&&ec_loadJS(EC_CS_SERVER+"visitor/visitorleft?id="+EC_CS_TRACKID+"&version="+EC_VERSION)};
