<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����ʡ���տƼ����޹�˾</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<LINK rel=stylesheet type=text/css href="css/base.css">
</head>
<script language="javascript" src="js/AjaxRequest.js"></script>
<script language="javascript">
/******************������ķ���*******************************/
function onerror(){
	alert("���Ĳ�������");
}
/******************ʵ����Ajax����ķ���*******************************/
function getInfo(){
	var loader=new net.AjaxRequest("check.php?nocache="+new Date().getTime(),deal_getInfo,onerror,"GET");
}
/************************�ص�����**************************************/
function deal_getInfo(){
	document.getElementById("showInfo").innerHTML=this.req.responseText;
}
window.onload=function(){
	getInfo();	//����getInfo()������ȡ������Ϣ
	window.setInterval("getInfo()", 600000);	//ÿ��10���ӵ���һ��getInfo()����
}
</script>
<body>
<div class="cen">
  <div class="c01">
    <div class="cleft"><img src="img/i01.gif" width="136" height="115" /></div>
    <div class="cright">
      <div>
        <table width="400" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="#" height="105" align="right" valign="top"><img src="img/i02.gif" width="97" height="98" /></td>
            <td width="280" align="right" valign="top"><img src="img/i03.gif" width="269" height="86" /></td>
          </tr>
        </table>
      </div>
      <div><img src="img/i04.gif" width="249" height="16" /></div>
    </div>
  </div>
  
  <div>
    <script language="JavaScript" type="text/javascript">
function showadv(par,par2,par3)
{
document.getElementById("a0").style.display = "none";
document.getElementById("a0color").style.color = "";
document.getElementById("a0bg").style.backgroundImage="";	
document.getElementById("a1").style.display = "none";
document.getElementById("a1color").style.color = "";
document.getElementById("a1bg").style.backgroundImage="";
document.getElementById("a2").style.display = "none";
document.getElementById("a2color").style.color = "";
document.getElementById("a2bg").style.backgroundImage="";
document.getElementById("a3").style.display = "none";
document.getElementById("a3color").style.color = "";
document.getElementById("a3bg").style.backgroundImage="";
document.getElementById("a4").style.display = "none";
document.getElementById("a4color").style.color = "";
document.getElementById("a4bg").style.backgroundImage="";
document.getElementById("a5").style.display = "none";
document.getElementById("a5color").style.color = "";
document.getElementById("a5bg").style.backgroundImage="";
document.getElementById(par).style.display = "";	
document.getElementById(par2).style.color = "#ffffff";
document.getElementById(par3).style.backgroundImage = "url(img/i13.gif)";	
}
  </script>
    <table cellspacing="0" cellpadding="0" width="100%" border="0">
      <tr>
        <td><div class="i01w">
            <table cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td width="#" height="42" align="center" id="a0bg"><span id="a0color" onmouseover='showadv(&quot;a0&quot;,&quot;a0color&quot;,&quot;a0bg&quot;)'><a href="index.php"><font color="#FA4A05">��ҳ</font></a></span></td>
                <td width="1"><img src="img/i14.gif" width="1" height="25" /></td>
                <td id="a1bg" align="center" width="144"><span id="a1color" onmouseover='showadv(&quot;a1&quot;,&quot;a1color&quot;,&quot;a1bg&quot;)'><a href="gyld.html">��������</a></span></td>
                <td width="1"><img src="img/i14.gif" width="1" height="25" /></td>
                <td id="a2bg" align="center" width="144"><span id="a2color" onmouseover='showadv(&quot;a2&quot;,&quot;a2color&quot;,&quot;a2bg&quot;)'><a href="#">����ͼ��</a></span></td>
                <td width="1"><img src="img/i14.gif" width="1" height="25" /></td>
                <td id="a3bg" align="center" width="144"><span id="a3color" onmouseover='showadv(&quot;a3&quot;,&quot;a3color&quot;,&quot;a3bg&quot;)'><a href="#">���ձ�̴ʵ�</a></span></td>
                <td width="1"><img src="img/i14.gif" width="1" height="25" /></td>
                <td id="a4bg" align="center" width="144"><span id="a4color" onmouseover='showadv(&quot;a4&quot;,&quot;a4color&quot;,&quot;a4bg&quot;)'><a href="#">�������</a></span></td>
                <td width="1"><img src="img/i14.gif" width="1" height="25" /></td>
                <td id="a5bg" align="center" width="144"><span id="a5color" onmouseover='showadv(&quot;a5&quot;,&quot;a5color&quot;,&quot;a5bg&quot;)'><a href="gyld.html">��������</a></span></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr>
        <td><table width="100%" height="41" cellpadding="0" cellspacing="0" id="a0"��border="0">
            <tr>
              <td align="left" style="padding-left:12px">��ӭ��������ʡ���տƼ����޹�˾</td>
            </tr>
          </table>
            <table id="a1" style="DISPLAY: none" height="41" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td  style="padding-left:90px" align="left"><ul class="i02w">
                    <li>�����Ŷ�</li>
                  <li>������ʷ</li>
                  <li>���ռ��</li>
                </ul></td>
              </tr>
            </table>
          <table id="a2" style="DISPLAY: none" height="41" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td style="padding-left:270px" align="left"><ul class="i02w">
                    <li><a href="#">��Ʒͼ��</a></li>
                  <li><a href="#">����ͼ��</a></li>
                </ul></td>
              </tr>
          </table>
          <table id="a3" style="DISPLAY: none" height="41" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td style="padding-left:12px">��ӭ��������ʡ���տƼ����޹�˾</td>
              </tr>
          </table>
          <table id="a4" style="DISPLAY: none" height="41" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td style="padding-left:12px">��ӭ��������ʡ���տƼ����޹�˾</td>
              </tr>
          </table>
          <table id="a5" style="DISPLAY: none" height="41" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tr>
                <td style="padding-right:10px"><ul class="i03w">
                  <li>��ϵ����</li>
                  <li>��ƸӢ��</li>
                  <li>��վ��ͼ</li>
                  <li>��������</li>
                </ul></td>
              </tr>
          </table></td>
      </tr>
    </table>
  </div>
  <div class="i02">
<DIV class=banner>
  <DIV id=ImageCyclerImage> <A href="#"><IMG alt="IDP Videos" src="img/hero6.jpg"></A> </DIV>
  <DIV id=ImageCyclerOverlay class=grey>
    <DIV id=ImageCyclerOverlayBackground></DIV>
    <P class=title>����չ��</P>
    <P>������Ա����ϸ�ĵ�Ϊ���߽��ܲ�Ʒ<A href="#">Find out more &gt;</A></P>
  </DIV>
  <DIV id=ImageCyclerTabs>
  <div id=mg><A href="#"><img src="img/mg.png" width="95" height="43"></A></div>
  <div id=jnd><A href="#"><img src="img/jnd.png" width="95" height="43"></A></div>
  <div id=yg><A href="#"><img src="img/yg.png" width="95" height="43"></A></div>
  <div id=dg><A href="#"><img src="img/dg.png" width="95" height="43"></A></div>
  <div id=fg><A href="#"><img src="img/hg.png" width="142" height="43"></A></div>
    </DIV>
<div id="Layer1">
  <div id=hg><A href="#"><img src="img/fg.png" width="95" height="43" align="right"></A></div>
  <div id=rb><A href="#"><img src="img/rb.png" width="95" height="47" align="right"></A></div>
  <div id=xjp><A href="#"><img src="img/xjp.png" width="95" height="43" align="right"></A></div>
  <div id=odly><a href="#"><img src="img/odly.png" width="95" height="43" align="right" /></a></div>
  <div id=qt><a href="#"><img src="img/qt.png" width="95" height="43" align="right" /></a></div>
</div>
</DIV>
  </div>
<SCRIPT type=text/javascript src="js/jquery.js"></SCRIPT>
<SCRIPT type=text/javascript>(function($) {
					$.slider = function(opts, data) {
						this.currentSlide = 0;
                        this.opts = opts;
                        this.ddata = data;
                        this.timeout = null;
                        
                        var src = this; 
                        
                        var srcAuto = true;
                        
                        this.initialize = function() {
                            this.attachListeners();
                            this.changeSlide(0);
                        }
                        
                        this.attachListeners = function() {
                            $('#'+this.opts.tabsContainer+' a').each(function(i,n) {
                                var el = $(n);
                                el.css('outline', 'none');
                                // Remove change of tab on click, use as a link instead
                                el.hover(function() {
                                    clearTimeout(src.timeout);
                                    srcAuto = false;
                                    src.currentSlide = i;
                                    src.changeSlide();
                                },function(){
									srcAuto = true;
									src.currentSlide = i;
                                    src.changeSlide();
								});
                            });
                        }
                        
                        this.changeSlide = function() {
                            var slide = src.ddata[src.currentSlide];
                            $('#'+src.opts.tabsContainer+' a').removeClass('active').eq(src.currentSlide).addClass('active');
                            $('#'+src.opts.textContainer+' p:eq(0)').html(slide.title);
                            var moreLink = " <a href='" + slide.overlaylink + "'>Find out more &gt;</a>";

							//if(src.currentSlide == 3){
							//	moreLink = "";
							//}
							
                            $('#'+src.opts.textContainer+' p:eq(1)').html(slide.desc + moreLink);
                            $('#'+src.opts.imageContainer+' img').attr('src', slide.image).attr('alt', slide.title);
                            $('#'+src.opts.imageContainer+' a').attr('href', slide.overlaylink);
                            
							
                            if(srcAuto){
                                src.timeout = setTimeout(src.changeSlide, src.opts.duration*1000);
                            }
                            src.currentSlide = parseInt(src.currentSlide) + 1;
                            if (src.currentSlide >= 5) src.currentSlide = 0; // only 4 items on the homepage
//                            if (src.currentSlide >= src.ddata.length) src.currentSlide = 0;
                        }
                        
                        this.initialize();
                        return this;
                    };
                })(jQuery);
                
                $(function() {
					  $(".favorite").click(function(){
					  showFavorite()
					  return false;
					  })
				  $.slider({ imageContainer: 'ImageCyclerImage', textContainer: 'ImageCyclerOverlay', tabsContainer: 'ImageCyclerTabs', duration: 5 }, 
                            [
                                
                      { image: 'img/hero6.jpg', title: '����չ��', desc: '������Ա����ϸ�ĵ�Ϊ���߽��ܲ�Ʒ', overlaylink : '#'},
                                    
                      { image: 'img/hero10.jpg', title: '����չ��', desc: '���չ�˾�ܾ�������Ϊ���߽��ܲ�Ʒ', overlaylink : '#'},
                                    
                      { image: 'img/hero1.jpg', title: '����չ��', desc: '������Ա����ϸ�ĵ�Ϊ���߽��ܲ�Ʒ', overlaylink : '#'},
                                    
                      { image: 'img/hero5.jpg', title: '����չ��', desc: '������������ϸ�˽��Ʒ', overlaylink : '#'},
					  { image: 'img/hero7.jpg', title: '��̴ʵ�', desc: '���ȫ�ܴʵ�ȫ������', overlaylink : '#'}
                                    
                            ]
							);
                });
            </SCRIPT>
  <div class="i03">
    <div class="i03l">
      <div><img src="img/i05.gif" width="268" height="32" /></div>
      <div class="i04"><img src="img/pic1.jpg" width="268" height="109" /></div>
      <div class="i04"> <span class="t14">����̼���վ</span><br />
      ���ý��⡢����ѵ������չѵ���Ϳ��ֱ����վ
      <br />
        <span class="t14">����̾�����</span><br />
        ��̴���������ն���������ᡢ��̹��»�<br />
<span class="t14">�������</span><br /> 
չʾ������Ʒ
<br />
<span class="t14">��������̳</span><br /> 
�໥����ƽ̨</div>
      <div class="i04"><a href="gyld.html" class="line"><font color="#FA4303">�鿴����&gt;&gt;</font></a></div>
    </div>
    <div class="i03c">
      <div><img src="img/i06.gif" width="268" height="32" /></div>
      <div class="i04">
        <p><a href="#" class="t14a">��̴ʵ���˰漰��ҵ�潫������ͼ�鶩</a><a href="#" class="t14a">�������Ҽ���</a></p>
      </div>
      <div id="layout">
	<marquee direction="up" scrollamount="3" style="height:307px; ">
		<div id="showInfo"></div>
	</marquee>
	</div>
    </div>
    <div class="i03r">
      <div><img src="img/i07.gif" width="268" height="32" /></div>
      <div class="i04">����ʡ���տƼ����޹�˾<br />
        ��ַ������ʡ�����ж�ʢ���89�� ��̩�㳡C��<br />
        �绰��400-675-1066 0431-84978981 0431-84978982 <br />
        ���棺0431-84939777<br />
        ��ҵ���䣺mingrisoft@mingrisoft.com<br />
      </div>
      <div class="i04"><a href="gyld.html" class="line"><font color="#1F82B6">�鿴����&gt;&gt;</font></a></div>
      <div class="i04"><img src="img/i09.gif" width="268" height="31" /></div>
      <div class="i05">
        <table width="250" height="20" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="22"><a href=javascript:window.external.AddFavorite('http://www.mingrisoft.com','����ʡ���տƼ����޹�˾')><img src="img/b_01.gif" width="22" height="20" border="0" onmouseover="this.src='img/c_01.gif'" onmouseout="this.src='img/b_01.gif'"/></a></td>
            <td width="18"></td>
            <td width="20"><a href="#"><img src="img/b_03.gif" width="20" height="20" border="0" onmouseover="this.src='img/c_03.gif'" onmouseout="this.src='img/b_03.gif'" alt="MR��̴ʵ�"/></a></td>
            <td width="18"></td>
            <td width="20"><a href="#"><img src="img/b_05.gif" width="20" height="20" border="0" onmouseover="this.src='img/c_05.gif'" onmouseout="this.src='img/b_05.gif'" alt="MR����ͼ��"/></a></td>
            <td width="18"></td>
            <td width="20"><a href="#"><img src="img/b_07.gif" width="20" height="20" border="0" onmouseover="this.src='img/c_07.gif'" onmouseout="this.src='img/b_07.gif'" alt="MR�Ա�����"/></a></td>
            <td width="18"></td>
            <td width="20"><a href="#"><img src="img/b_09.gif" width="20" height="20" border="0" onmouseover="this.src='img/c_09.gif'" onmouseout="this.src='img/b_09.gif'" alt="MR������΢��"/></a></td>
            <td width="18"></td>
            <td width="20"><a href="#"><img src="img/b_11.gif" width="20" height="20" border="0" onmouseover="this.src='img/c_11.gif'" onmouseout="this.src='img/b_11.gif'" alt="MR������"/></a></td>
            <td width="#">&nbsp;</td>
            <td width="20"><a href="#"><img src="img/b_13.gif" width="20" height="20" border="0" onmouseover="this.src='img/c_13.gif'" onmouseout="this.src='img/b_13.gif'" alt="MR��Ѹ��΢��"/></a></td>
          </tr>
        </table>
      </div>
      <div class="i04">
        <table width="209" height="136" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="bottom" background="img/i08.gif"><table width="90%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="24" align="left" valign="top" class="bai">MRȫ������</td>
              </tr>
              <tr><form>
                <td height="35" align="left" valign="top">
                  <select name="select" style="width:190px;" onchange="javascript:window.open(this.options[this.selectedIndex].value)">
                    <option>ѡ�����</option>
                    <option value="">����</option>
                    <option value="">���ô�</option>
                    <option value="">Ӣ��</option>
                    <option value="">�¹�</option>
                    <option value="">����</option>
                    <option value="">�ձ�</option>
                    <option value="">�¼���</option>
                    <option value="">�Ĵ�����</option>
                    <option value="">������</option>
                    <option value="">�����</option>
                    <option value="">������</option>
                    <option value="">����</option>
                    <option value="">��������</option>
                    <option value="">����</option>
                    <option value="">������</option>
                    <option value="">���</option>
                  </select>                </td>
              </form>
              </tr>
            </table></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="i06"><a href="registration.html" target="_blank"><img src="img/bm.jpg" width="868" height="42" border="0" /></a></div>
  <div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr><form>
        <td height="44" align="right" background="img/i10.gif"><input name="textfield" type="text" style="border:solid 1px #CFCECE; width:150px; height:18px ; color:#A3A2A2" value="���Ļ�Ӣ��"/>
        <input type="image" name="Submit" value="�ύ" src="img/i11.gif" width="69" height="22" align="absmiddle"/> <a href="#" target="_blank"><img src="img/ia11.gif" width="69" height="22" border="0" align="absmiddle" /></a></td>
      </form>
      </tr>
    </table>
  </div>
  <div class="i04">
  <TABLE width="868" align=center>
<TR>
<TD><div id=demo style="BACKGROUND: #ffffff; OVERFLOW: hidden; WIDTH: 868px; HEIGHT: 264px">
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td id=demo1><table width=100% align=center cellpadding="0" cellspacing="0">
        <tr>
          <td width=160 height=132 align=middle valign="top" style="padding-right:10px"><div class="i07"><a href="http://www.mrbccd.com" target="_blank"><img src="img/biao.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="http://www.mrbccd.com" target="_blank">��̴ʵ�</a><br />
                <a href="http://www.mrbccd.com" target="_blank">MRBCCD</a></div></td>
          <td width=160 height=132 align=middle valign="top" style="padding-right:10px"><div class="i07"><a href="http://www.mrbccd.com" target="_blank"><img src="img/biao.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="http://www.mrbccd.com" target="_blank">��̴ʵ�</a><br />
                <a href="http://www.mrbccd.com" target="_blank">MRBCCD</a></div></td>
          <td width=160 height=132 align=middle valign="top" style="padding-right:10px"><div class="i07"><a href="http://www.mrbccd.com" target="_blank"><img src="img/biao.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="http://www.mrbccd.com" target="_blank">��̴ʵ�</a><br />
                <a href="http://www.mrbccd.com" target="_blank">MRBCCD</a></div></td>
          <td width=160 height=132 align=middle valign="top" style="padding-right:10px"><div class="i07"><a href="http://www.mrbccd.com" target="_blank"><img src="img/biao.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="http://www.mrbccd.com" target="_blank">��̴ʵ�</a><br />
                <a href="http://www.mrbccd.com" target="_blank">MRBCCD</a></div></td>
          <td width=160 height=132 align=middle valign="top" style="padding-right:10px"><div class="i07"><a href="#"><img src="img/biao2.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="#">��̴ʵ�</a><br />
                <a href="#">MRBCCD</a></div></td>
        </tr>
        <tr>
          <td height="132" align="middle" valign="top" style="padding-right:10px"><div class="i07"><a href="http://www.mrbccd.com" target="_blank"><img src="img/biao.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="http://www.mrbccd.com" target="_blank">��̴ʵ�</a><br />
                <a href="http://www.mrbccd.com" target="_blank">MRBCCD</a></div></td>
          <td height="132" align="middle" valign="top" style="padding-right:10px"><div class="i07"><a href="http://www.mrbccd.com" target="_blank"><img src="img/biao.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="http://www.mrbccd.com" target="_blank">��̴ʵ�</a><br />
                <a href="http://www.mrbccd.com" target="_blank">MRBCCD</a></div></td>
          <td height="132" align="middle" valign="top" style="padding-right:10px"><div class="i07"><a href="http://www.mrbccd.com" target="_blank"><img src="img/biao.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="http://www.mrbccd.com" target="_blank">��̴ʵ�</a><br />
                <a href="http://www.mrbccd.com" target="_blank">MRBCCD</a></div></td>
          <td height="132" align="middle" valign="top" style="padding-right:10px"><div class="i07"><a href="http://www.mrbccd.com" target="_blank"><img src="img/biao.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="http://www.mrbccd.com" target="_blank">��̴ʵ�</a><br />
                <a href="http://www.mrbccd.com" target="_blank">MRBCCD</a></div></td>
          <td height="132" align="middle" valign="top" style="padding-right:10px"><div class="i07"><a href="#"><img src="img/biao2.gif" width="160" height="70" border="0" /></a></div>
                <div class="i08"><a href="#">��̴ʵ�</a><br />
                <a href="#">MRBCCD</a></div></td>
        </tr>
      </table></td>
      <td id=demo2></td>
    </tr>
  </table>
</div>
<SCRIPT>
var speed=30
demo2.innerHTML=demo1.innerHTML
function Marquee(){
if(demo2.offsetWidth-demo.scrollLeft<=0)
demo.scrollLeft-=demo1.offsetWidth
else{
demo.scrollLeft++
}
}
var MyMar=setInterval(Marquee,speed)
demo.onmouseover=function() {clearInterval(MyMar)}
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
</SCRIPT></TD>
</TR>
</TABLE>
  </div>
    <div style="padding-top:15px">
    <iframe frameborder="0" height="95" id="top" name="top" scrolling="No" src="inc/lxbom.html" width="872"></iframe>
  </div>
</div>
  <SCRIPT type=text/javascript src="js/floatdiv.js"></SCRIPT>
</body>
</html>
